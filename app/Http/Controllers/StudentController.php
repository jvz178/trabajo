<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    
public function index(){
    return view('student.index');
}

public function create(){
    return view('student.create');
}

public function store(Request $request){
    
    // $datosStudent=request()->all();

     $datosStudent=request()->except('_token');
      student::insert($datosStudent);
     return response()->json($datosStudent);
}

public function show(Student $student){
    //
}
public function edit(Student $student){
    //
}
public function update(Request $request, Student $student){
    //

}public function setroy(Student $student){
    //
}
}