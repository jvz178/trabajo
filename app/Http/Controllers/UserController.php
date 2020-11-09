<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
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
}