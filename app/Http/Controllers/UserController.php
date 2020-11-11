<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    
public function index(){
    
    $datos['users']=user::paginate(5);
    return view('users.index', $datos);
}

public function create(){
    return view('users.create');
}

public function store(Request $request){
    
     $campos=[
         'name'=>'required|string|max:20',
         'firstname'=>'required|string|max:50',
         'phone'=>'required|string|max:20',
         'email'=>'required|string|max:50',
         'email_verified_at'=>'required|string|max:50',
         'password'=>'required|string|max:10',
         'type'=>'required|string|max:50',
     ];

     $Mensaje=["required"=>'El :attribute es requerido'];
     $this->validate($request,$campos,$Mensaje);
    

     $datosUsers=request()->except('_token');
      user::insert($datosUsers);
      //return response()->json($enterpriseData);
     return redirect('users')->with('Mensaje', 'Usuario creado');
}

public function show(users $users){
    //
}
public function edit($id){

    $users=User::findOrFail($id);
    return view('users.edit', compact('users'));
    //
}
public function update(Request $request, $id){
    
    $datosUsers=request()->except(['_token', '_method']);
    User::where('id', '=', $id)->update($datosUsers);
    //  $student=Student::findOrFail($id);
    //  return view('student.edit', compact('student'));
     return redirect ('users')->with('Mensaje', 'Usuario modificado');

}
public function destroy($id){
    
    User::destroy($id);
    return redirect('users')->with('Mensaje', 'Usuario eliminado');
}
}