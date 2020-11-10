<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\user;
=======
use App\users;
use Illuminate\Http\Request;
>>>>>>> 0fb5282f6a96878d5e46fb3ccfad53724ce8e04d

class UserController extends Controller
{
    
<<<<<<< HEAD
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
         'email'=>'unique|string|max:50',
         'email_verified_at'=>'required|string|max:50',
         'password'=>'required|string|max:10',
         'type'=>'required|string|max:50',
     ];

     $Mensaje=["required"=>'El :attribute es requerido'];
     $this->validate($request,$campos,$Mensaje);
    

     $datosUsers=request()->except('_token');
      user::insert($datosUsers);
      //return response()->json($enterpriseData);
     return redirect('users')->with('Mensaje', 'Alumno añadido');
}

public function show(users $users){
    //
}
public function edit($id){

    $users=User::findOrFail($id);
    return view('users.edit', compact('user'));
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
=======
    public function index(){

        $data['users']=enterprise::paginate(5);
        return view('enterprises.index',$data);
    }

    public function create(){

        return view('enterprises.create');
    }

    public function edit($id){

        $enterprise= Enterprise::findOrFail($id);
        return view('enterprises.edit', compact('enterprise'));
    }

    public function store(Request $request){

        $enterpriseData=request()->except('_token');
        enterprise::insert($enterpriseData);
        return redirect('enterprises');
    }

    public function destroy($id){

        Enterprise::destroy($id);
        return redirect('enterprises');
    }

    public function update(Request $request, $id){

        $enterpriseData=request()->except(['_token','_method']);
        Enterprise::where('id','=', $id)->update($enterpriseData);
        //$enterprise= Enterprise::findOrFail($id);
        return redirect('enterprises');
    }
>>>>>>> 0fb5282f6a96878d5e46fb3ccfad53724ce8e04d
}