<?php

namespace App\Http\Controllers;

use App\Models\Mentoring;
use Illuminate\Http\Request;

class MentoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($city_id)
    {
        $mentorings = Mentoring::selectRaw("
                students.name,
                students.date_birth,
                students.school_year,
                cities.name AS city_name,
                states.name AS state_name,
                mentorings.description,
                mentorings.format
            ")
            ->join("students", "students.id", "=", "mentorings.mentor_id")
            ->join("cities", "cities.id", "=", "students.city_id")
            ->join("states", "states.id", "=", "cities.state_id")
            ->where("students.city_id", $city_id)
            ->whereOr("mentorings.format", 'ONLINE')
            ->get();

        return $mentorings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function show(Mentoring $mentoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentoring $mentoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentoring $mentoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mentoring  $mentoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentoring $mentoring)
    {
        //
    }
}
