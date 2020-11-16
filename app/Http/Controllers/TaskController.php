<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class TaskController extends Controller
{
    public function index(){
    
        $datos['tasks']=task::paginate(5);
        return view('tasks.index', $datos);
    }
    
    public function create(){
        return view('tasks.create');
    }
    
    public function store(Request $request){
        
         $campos=[
             'number'=>'required|integer|max:20',
             'description'=>'required|string|max:1000',
             
             
         ];
    
         $Mensaje=["required"=>'The :attribute ir required'];
         $this->validate($request,$campos,$Mensaje);
        
    
         $datosTasks=request()->except('_token');
          task::insert($datosTasks);
          //return response()->json($enterpriseData);
         return redirect('tasks')->with('Mensaje', 'Task created');
    }
    
    public function show(tasks $tasks){
        //
    }
    public function edit($id){
    
        $tasks=Task::findOrFail($id);
        return view('tasks.edit', compact('tasks'));
        //
    }
    public function update(Request $request, $id){
        
        $datosTasks=request()->except(['_token', '_method']);
        Task::where('id', '=', $id)->update($datosTasks);
         return redirect ('tasks')->with('Mensaje', 'Task modify');
    
    }
    public function destroy($id){
        
        Task::destroy($id);
        return redirect('tasks')->with('Mensaje', 'Task delete');
    }
    }