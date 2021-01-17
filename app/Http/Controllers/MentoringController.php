<?php

namespace App\Http\Controllers;

use App\Models\Mentoring;
use App\Models\Student;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mentorings = Mentoring::selectRaw("
        //         students.name,
        //         students.date_birth,
        //         students.school_year,
        //         cities.name AS city_name,
        //         states.name AS state_name,
        //         mentorings.description,
        //         mentorings.format
        //     ")
        //     ->join("students", "students.id", "=", "mentorings.mentor_id")
        //     ->join("cities", "cities.id", "=", "students.city_id")
        //     ->join("states", "states.id", "=", "cities.state_id")
        //     ->where("students.city_id", $city_id)
        //     ->whereOr("mentorings.format", 'ONLINE')
        //     ->get();
        $mentorings = Mentoring::all();

        foreach($mentorings as $mentoring){
            $student = Student::where('id', $mentoring->mentor_id)->first();
            $city = City::where('id', $student->city_id)->first();
            $mentoring['city_name'] = $city->name;
            $mentoring['state_name'] = State::where('id', $city->state_id)->first()->name;
            $mentoring['school_year'] = $student->school_year;
        }

        return view('students.mentoring', compact('mentorings'));
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
        DB::beginTransaction();
        $mentoring = new Mentoring();
        $mentoring->mentor_id = $request->mentor_id ?? auth()->user()->id;
        $mentoring->description = $request->description;
        $mentoring->format = $request->format;
        $mentoring->save();
        DB::commit();
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
