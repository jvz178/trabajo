<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assistance;

class AssistanceController extends Controller
{
    public function index(){

        $data['assistances']=assistance::where('deleted',0)->paginate(5);
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

        $data=[
            'student_id'=>'required|integer|max:100',
            'date'=>'required|date',
            'assistance'=>'required|string|max:100',
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $assistanceData=request()->except('_token');
        assistance::insert($assistanceData);
        return redirect('assistances')->with('Message','Assistance added');
    }

    public function destroy($id){

        $valor = assistance::where('id',$id);
        $valor -> increment('deleted');
        return redirect('assistances');
    }

    public function update(Request $request, $id){

        $assistanceData=request()->except(['_token','_method']);
        assistance::where('id','=', $id)->update($assistanceData);
        //$assitance= assistance::findOrFail($id);
        return redirect('assistances');
    }
}
