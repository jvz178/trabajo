<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    
    public function index(){

        return view('enterprises.index');
    }

    public function create(){

        return view('enterprises.create');
    }

    public function edit(){

        return view('enterprises.edit');
    }

    public function store(Request $request){

        $enterpriseData=request()->all();

        return response()->json($enterpriseData);
    }
}
