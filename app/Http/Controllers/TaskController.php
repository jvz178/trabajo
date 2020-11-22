<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use DB;

class TaskController extends Controller
{
    public function index(){
        
        $id=auth()->user()->id;

        if($id==51){
            $data2['tasks']=task::where('deleted',0)->paginate(30);
            return view('tasks.index',$data2);
        }else{

        $id=auth()->user()->cycle_id;

        $data= DB::select('SELECT t.id, t.number, t.description FROM tasks t, ces cs, ras r, modules m, cycles c WHERE t.id = cs.task_id AND cs.ra_id = r.id AND m.id = r.module_id AND m.cycle_id = c.id AND c.id= ? ORDER BY r.id', [$id]);

        return view('tasks.index',['tasks'=>$data]);
        }
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

        $campos=[
            'number'=>'required|integer|max:20',
            'description'=>'required|string|max:1000',
        ];
   
        $Mensaje=["required"=>'The :attribute ir required'];
        $this->validate($request,$campos,$Mensaje);
        
        $datosTasks=request()->except(['_token', '_method']);
        Task::where('id', '=', $id)->update($datosTasks);
         return redirect ('tasks')->with('Mensaje', 'Task modify');
    
    }
    public function destroy($id){
        
        $valor = task::where('id',$id);
        $valor -> increment('deleted');
        return redirect('tasks')->with('Mensaje', 'Task delete');
    }
    }