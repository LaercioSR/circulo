<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class ImportCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-cities:ibge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa as cidades da api do IBGE';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Importando cidades...");
        DB::transaction(function () {
            foreach (State::all() as $state) {
                $this->info("Importando cidades de: ".$state['name']."...");
                $cities = $this->getJsonCities($state['id'], $state['name']);
                foreach ($cities as $city){
                    City::firstOrCreate(
                        ['name'=>$city['nome'], 'state_id'=>$state['id']]
                    );
                }
                $this->info("Sucesso!");
            }
        });
        $this->info("Cidades importadas com sucesso!");
    }

    protected static function getJsonCities($state_id, $state_name) {
        $url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$state_id}/municipios";
        $response = @file_get_contents($url);
        return json_decode($response, true);
    }
}
