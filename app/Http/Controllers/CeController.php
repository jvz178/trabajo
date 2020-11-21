<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ce;

class CeController extends Controller
{
    public function index(){
        $Data['cce']=ce::where('deleted',0)->paginate(5);
        return view('cce.index',$Data);
    }

    public function create(){
        return view('cce.create');
    }

    public function edit($id){
        $cce=ce::findOrFail($id);
        return view('cce.edit',compact('cce'));
    }

    public function store(Request $request){
        $data=[
            'word'=>'required|string|max:100',
            'description'=>'required|string|max:200',
            'ra_id'=>'required|integer',
            'task_id'=>'required|integer',
            'mark'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except('_token'); 

        ce::insert($cceData);

        return redirect('cce')->with('Message','Cce added');
    }

    public function update(Request $request, $id){

        $data=[
            'word'=>'required|string|max:100',
            'description'=>'required|string|max:200',
            'ra_id'=>'required|integer',
            'task_id'=>'required|integer',
            'mark'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except(['_token','_method']); 

        ce::where('id','=',$id)->update($cceData);

        // $cce=cce::findOrFail($id);

        // return redirect('cce');

        return redirect('cce')->with('Message','Cce modified');
    }

    public function destroy($id){

        $valor = ce::where('id',$id);
        $valor -> increment('deleted');

        return redirect('cce')->with('Message','Cce deleted');
    }
}
