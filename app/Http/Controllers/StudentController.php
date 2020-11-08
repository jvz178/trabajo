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
    
     $campos=[
         'name'=>'required|string|max:20',
         'firstname'=>'required|string|max:50'
     ];
     $Mensaje=["required"=>'El :attribute es requerido'];
     $this->validate($request,$campos,$Mensaje);
    

     $datosStudent=request()->except('_token');
      student::insert($datosStudent);
      //return response()->json($enterpriseData);
     return redirect('student')->with('Mensaje', 'Alumno añadido');
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
    //  $student=Student::findOrFail($id);
    //  return view('student.edit', compact('student'));
     return redirect ('student')->with('Mensaje', 'Alumno modificado');

}
public function destroy($id){
    
    Student::destroy($id);
    return redirect('student')->with('Mensaje', 'Alumno eliminado');
}
}