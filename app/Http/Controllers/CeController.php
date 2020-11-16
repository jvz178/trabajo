<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ce;

class CeController extends Controller
{
    public function index(){
        $Data['cce']=ce::paginate(5);
        return view('cce.index',$Data);
    }

    public function create(){
        return view('cce.create');
    }

    public function edit($id){
        $cce=cce::findOrFail($id);
        return view('cce.edit',compact('cce'));
    }

    public function store(Request $request){
        $data=[
            'name'=>'required|string|max:100',
            'grade'=>'required|string|max:100',
            'year'=>'required|integer|max:2020',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except('_token'); 

        cce::insert($cceData);

        return redirect('cce')->with('Message','cce added');
    }

    public function update(Request $request, $id){

        $data=[
            'name'=>'required|string|max:100',
            'grade'=>'required|string|max:100',
            'year'=>'required|integer|max:2020',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except(['_token','_method']); 

        cce::where('id','=',$id)->update($cceData);

        // $cce=cce::findOrFail($id);

        // return redirect('cce');

        return redirect('cce')->with('Message','cce modified');
    }

    public function destroy($id){

        cce::destroy($id);

        return redirect('cce')->with('Message','cce deleted');
    }
}
