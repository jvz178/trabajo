<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ra;

class RaController extends Controller
{
    public function index(){
        $Data['rra']=ra::where('deleted',0)->paginate(5);
        return view('rra.index',$Data);
    }

    public function create(){
        return view('rra.create');
    }

    public function edit($id){
        $rra=ra::findOrFail($id);
        return view('rra.edit',compact('rra'));
    }

    public function store(Request $request){
        $data=[
            'number'=>'required|integer',
            'description'=>'required|string|max:200',
            'module_id'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $rraData=request()->except('_token'); 

        ra::insert($rraData);

        return redirect('rra')->with('Message','ra added');
    }

    public function update(Request $request, $id){

        $data=[
            'number'=>'required|integer',
            'description'=>'required|string|max:200',
            'module_id'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $rraData=request()->except(['_token','_method']); 

        ra::where('id','=',$id)->update($rraData);

        // $rra=rra::findOrFail($id);

        // return redirect('rra');

        return redirect('rra')->with('Message','ra modified');
    }

    public function destroy($id){

        $valor = ra::where('id',$id);
        $valor -> increment('deleted');

        return redirect('rra')->with('Message','rra deleted');
    }
}
