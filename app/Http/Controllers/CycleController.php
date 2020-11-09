<?php

namespace App\Http\Controllers;

use App\cycle;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    public function index(){
        $Data['cycles']=Cycle::paginate(5);
        return view('cycles.index',$Data);
    }

    public function create(){
        return view('cycles.create');
    }

    public function store(Request $request){

        $CycleData=request()->except('_token'); 
        
        Cycle::insert($CycleData);

        return response()->json($CycleData);
    }

    public function show(Cycle $cycles){
    }

    public function edit($id){

        $cycle=Cycle::findOrFail($id);

        return view('cycles.edit',compact('cycle'));
    }

    public function update(Request $request, $id){

        $CycleData=request()->except(['_token','_method']); 

        Cycle::where('id','=',$id)->update($CycleData);

        $cycle=Cycle::findOrFail($id);

        return redirect('cycles');
    }

    public function destroy($id){

        Cycle::destroy($id);

        return redirect('cycles');
    }
}
