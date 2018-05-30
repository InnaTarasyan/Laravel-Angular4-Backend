<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {

        if ($id == null) {
            return Student::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Student::find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $student = new Student();

        $student->name = $request->name;
        $date = date_create($request->admission_date);
        $format = date_format($date, "Y-m-d");
        $student->admission_date = $format;
        $student->email = $request->email;
        $student->faculty = $request->faculty;
        $student->major = $request->major;
        $student->country = $request->country;

        $student->save();

        return response()->json(['student' => $student], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $date = date_create($request->admission_date);
        $format = date_format($date,"Y-m-d");
        $student->admission_date = $format;
        $student->email = $request->email;
        $student->faculty = $request->faculty;
        $student->major = $request->major;
        $student->country = $request->country;
        $student->save();

        return response()->json(['student' => $student], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Request $request) {
        $student = Student::find($request->id);
        $student->delete();
        return response()->json(['messaqge' => 'Student Deleted']);
    }

}
