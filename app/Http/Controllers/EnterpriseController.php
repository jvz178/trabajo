<?php

namespace App\Http\Controllers;

use App\enterprise;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    
    public function index(){
        $data['enterprises']=Enterprise::paginate(5);
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
        $data=[
            'name'=>'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $enterpriseData=request()->except('_token');

        Enterprise::insert($enterpriseData);

        return redirect('enterprises')->with('Message','Enterprise added');
    }

    public function destroy($id){
        Enterprise::destroy($id);
        return redirect('enterprises')->with('Message','Enterprise deleted');
    }

    public function update(Request $request, $id){
        $enterpriseData=request()->except(['_token','_method']);
        Enterprise::where('id','=', $id)->update($enterpriseData);
        //$enterprise= Enterprise::findOrFail($id);

        $data=[
            'name'=>'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $enterpriseData=request()->except(['_token','_method']); 

        Enterprise::where('id','=',$id)->update($enterpriseData);
        return redirect('enterprises')->with('Message','Enterprise modified');
    }
}
