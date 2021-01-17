<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('', compact('students'));
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

    public function profile(){
        return view('students.profile');
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
        $student = new Student;
        $student->name = $student->name;
        $student->date_birth = $request->date_birth;
        $student->registration_number = $request->registration_number;
        $student->school_year = $request->school_year;
        //$table->enum('school_year', ['1_ANO', '2_ANOR', '3_ANO', '4_ANO', 'CONCLUIU']);
        $student->user_id = Auth::id();
        $student->city_id = $request->city_id;
        $student->school_id = $request->school_id;
        DB::commit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('students.info');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        //$student = Student::where('id', Auth::id());
        $student = Student::where('id', $id);
        $student->name = $student->name;
        $student->date_birth = $request->date_birth;
        $student->registration_number = $request->registration_number;
        $student->school_year = $request->school_year;
        //$table->enum('school_year', ['1_ANO', '2_ANOR', '3_ANO', '4_ANO', 'CONCLUIU']);
        $student->user_id = Auth::id();
        $student->city_id = $request->city_id;
        $student->school_id = $request->school_id;
        DB::commit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
