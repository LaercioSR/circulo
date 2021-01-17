<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
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
        $grade = new grade();
        $grade->student_id = $request->student_id ?? auth()->user()->id;
        $grade->year = $request->year;
        $grade->school_year = $request->school_year;
        $grade->grade_portuguese = $request->grade_portuguese;
        $grade->attendance_portuguese = $request->attendance_portuguese;
        $grade->grade_math = $request->grade_math;
        $grade->attendance_math = $request->attendance_math;
        $grade->grade_history = $request->grade_history;
        $grade->attendance_history = $request->attendance_history;
        $grade->grade_geography = $request->grade_geography;
        $grade->attendance_geography = $request->attendance_geography;
        $grade->grade_chemistry = $request->grade_chemistry;
        $grade->attendance_chemistry = $request->attendance_chemistry;
        $grade->grade_physics = $request->grade_physics;
        $grade->attendance_physics = $request->attendance_physics;
        $grade->grade_biology = $request->grade_biology;
        $grade->attendance_biology = $request->attendance_biology;
        $grade->grade_philosophy = $request->grade_philosophy;
        $grade->attendance_philosophy = $request->attendance_philosophy;
        $grade->grade_sociology = $request->grade_sociology;
        $grade->attendance_sociology = $request->attendance_sociology;
        $grade->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
