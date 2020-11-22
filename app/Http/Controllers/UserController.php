<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    
public function index(){
    
    $campos['users']=user::where('deleted',0)->paginate(5);
    return view('users.index', $campos);
}

public function create(Request $request){


    return view('users.create');
}

public function store(Request $request){
    
     $campos=[
         'name'=>'required|string|max:20',
         'firstname'=>'required|string|max:50',
         'phone'=>'required|string|max:20',
         'password'=>'required|string|max:50',
         'email'=>'required|string|max:50',
         'email_verified_at'=>'required|string|max:10',
         'type'=>'required|string|max:5',
     ];

    $Message=['required'=>':attribute is required'];
    $this->validate($request,$campos,$Message);
     


     $datosUsers=request()->except('_token');

     $datos=[
        'name'=>$datosUsers['name'],
        'firstname'=>$datosUsers['firstname'],
        'phone'=>$datosUsers['phone'],
        'email'=>$datosUsers['email'],
        'email_verified_at'=>$datosUsers['email_verified_at'],
        'password'=> bcrypt($datosUsers['password']),
        'type'=>$datosUsers['type'],
     ];

     user::insert($datos);
      
     return redirect('users')->with('Message', 'User created');
}

public function edit($id){

    $users=User::findOrFail($id);
    return view('users.edit', compact('users'));
    //
}
public function update(Request $request, $id){

    $campos=[
        'name'=>'required|string|max:50',
        'firstname'=>'required|string|max:50',
        'phone'=>'required|string|max:20',
        'password'=>'required|string|min:6',
        'email'=>'required|string',
        'email_verified_at'=>'required|string',
        'type'=>'required|string|max:5',
    ];
    

   $Message=['required'=>':attribute is required'];
   $this->validate($request,$campos,$Message);

   $datosUsers=request()->except(['_token', '_method']);

   $datos=[
    'name'=>$datosUsers['name'],
    'firstname'=>$datosUsers['firstname'],
    'phone'=>$datosUsers['phone'],
    'email'=>$datosUsers['email'],
    'email_verified_at'=>$datosUsers['email_verified_at'],
    'password'=> bcrypt($datosUsers['password']),
    'type'=>$datosUsers['type'],
    ];
    
    $datosUsers=request()->except(['_token', '_method']);
    User::where('id', '=', $id)->update($datosUsers);
     return redirect ('users')->with('Mensaje', 'User modified');

}
public function destroy($id){
    
    $valor = user::where('id',$id);
    $valor -> increment('deleted');
    return redirect('users')->with('Mensaje', 'User deleted');
}



}