<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    
public function index(){
    
    $datos['student']=Student::paginate(5);
    return view('student.index', $datos);
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
public function edit($id){

    $student=Student::findOrFail($id);
    return view('student.edit', compact('student'));
    //
}
public function update(Request $request, $id){
    
    $datosStudent=request()->except(['_token', '_method']);
    Student::where('id', '=', $id)->update($datosStudent);
    $student=Student::findOrFail($id);
    return view('student.edit', compact('student'));
}
public function destroy($id){
    Student::destroy($id);
    return redirect('student');
}
}