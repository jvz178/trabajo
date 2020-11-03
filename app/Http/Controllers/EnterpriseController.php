<?php

namespace App\Http\Controllers;

use App\enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    
    public function index(){

        $data['enterprises']=enterprise::paginate(5);
        return view('enterprises.index',$data);
    }

    public function create(){

        return view('enterprises.create');
    }

    public function edit($id){

        $enterprise= Enterprise::findOrFail($id);
        //return response()->json($enterprise);
        return view('enterprises.edit', compact('enterprise'));
    }

    public function store(Request $request){

        $enterpriseData=request()->except('_token');
        enterprise::insert($enterpriseData);
        return response()->json($enterpriseData);
    }

    public function destroy($id){

        Enterprise::destroy($id);
        return redirect('enterprises');
    }
}
