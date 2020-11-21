<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assistance;
use App\user;

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

        $campos=[
            'student_id'=>'required|integer',
            'date'=>'required|date',
            'assistance'=>'required|string|max:20',
        ];
   
        $Message=['required'=>':attribute is required'];
        $this->validate($request,$campos,$Message);

        $assistanceData=request()->except('_token');
        assistance::insert($assistanceData);
        return redirect('assistances')->with('Message', 'Assistance created');;
    }

    public function destroy($id){

        $valor = assistance::where('id',$id);
        $valor -> increment('deleted');
        return redirect('assistances')->with('Message', 'Assistance deleted');
    }

    public function update(Request $request, $id){

        $campos=[
            'student_id'=>'required|integer',
            'date'=>'required|date',
            'assistance'=>'required|string',
        ];
   
        $Message=['required'=>':attribute is required'];
        $this->validate($request,$campos,$Message);

        $assistanceData=request()->except(['_token','_method']);
        assistance::where('id','=', $id)->update($assistanceData);
        //$assitance= assistance::findOrFail($id);
        return redirect('assistances')->with('Message', 'Assistance modified');
    }

    public function goBackMenu($type){
        $user= user::findOrFail($type);
        dd($type);
    }
}
