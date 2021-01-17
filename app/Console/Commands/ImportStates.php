<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class ImportStates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-states:ibge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa os estados da api do IBGE';

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
     * @return mixed
     */
    public function handle() {
        $this->info("Importando estados...");
        DB::transaction(function () {
            $states = $this->getJsonStates();
            foreach ($states as $state){
                State::firstOrCreate(
                    ['id'=>$state['id']],
                    ['name'=>$state['nome']]
                );
            }
        });
        $this->info("Estados importados com sucesso!");
    }

    protected static function getJsonStates() {
        $url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";
        $response = @file_get_contents($url);
        return json_decode($response, true);
    }
}
