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

    public function edit($id){
        $cycle=Cycle::findOrFail($id);
        return view('cycles.edit',compact('cycle'));
    }

    public function store(Request $request){
        $data=[
            'name'=>'required|string|max:100',
            'grade'=>'required|string|max:100',
            'year'=>'required|integer|max:2020',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $CycleData=request()->except('_token'); 

        Cycle::insert($CycleData);

        return redirect('cycles')->with('Message','Cycle added');
    }

    public function update(Request $request, $id){

        $data=[
            'name'=>'required|string|max:100',
            'grade'=>'required|string|max:100',
            'year'=>'required|integer|max:2020',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $CycleData=request()->except(['_token','_method']); 

        Cycle::where('id','=',$id)->update($CycleData);

        // $cycle=Cycle::findOrFail($id);

        // return redirect('cycles');

        return redirect('cycles')->with('Message','Cycle modified');
    }

    public function destroy($id){

        Cycle::destroy($id);

        return redirect('cycles')->with('Message','Cycle deleted');
    }
}