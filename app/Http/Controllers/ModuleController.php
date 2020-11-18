<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\module;

class ModuleController extends Controller
{
    public function index(){
    
        $datos['modules']=module::paginate(5);
        return view('modules.index', $datos);
    }
    
    public function create(){
        return view('modules.create');
    }
    
    public function store(Request $request){
        
         $campos=[
             'name'=>'required|string|max:20',
             'cycle_id'=>'required|integer',
         ];


          $Mensaje=["required"=>'The :attribute ir required'];
         $this->validate($request,$campos,$Mensaje);
    
         $Mensaje=["required"=>'The :attribute is required'];
         $this->validate($request,$campos,$Mensaje);
        
    
         $datosModules=request()->except('_token');
          module::insert($datosModules);
         return redirect('modules')->with('Mensaje', 'Module created');
    }
    
    public function edit($id){
    
        $modules=module::findOrFail($id);
        return view('modules.edit', compact('modules'));
        //
    }
    public function update(Request $request, $id){
        
        $datosModules=request()->except(['_token', '_method']);
        module::where('id', '=', $id)->update($datosModules);
       
         return redirect ('modules')->with('Mensaje', 'Module modify');
    
    }
    public function destroy($id){
        
        module::destroy($id);
        return redirect('modules')->with('Mensaje', 'Module deleted');
    }
    }