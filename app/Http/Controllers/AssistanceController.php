<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assistance;

class AssistanceController extends Controller
{
    public function index(){

        $data['assistances']=assistance::paginate(5);
        return view('assistances.index',$data);
    }

    public function create(){

        return view('assistances.create');
    }

    public function edit($id){

        $assistance= Assistance::findOrFail($id);
        return view('assistances.edit', compact('assistance'));
    }

    public function store(Request $request){

        $assistanceData=request()->except('_token');
        assistance::insert($assistanceData);
        return redirect('assistances');
    }

    public function destroy($id){

        assistance::destroy($id);
        return redirect('assistances');
    }

    public function update(Request $request, $id){

        $assistanceData=request()->except(['_token','_method']);
        assistance::where('id','=', $id)->update($assistanceData);
        //$assitance= assistance::findOrFail($id);
        return redirect('assistances');
    }
}
