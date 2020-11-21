<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\worksheet;

class WorksheetController extends Controller
{
    public function index(){

        $data['worksheets']=worksheet::where('deleted',0)->paginate(5);
        return view('worksheets.index',$data);
    }

    public function create(){

        return view('worksheets.create');
    }

    public function edit($id){

        $worksheet= Worksheet::findOrFail($id);
        return view('worksheets.edit', compact('worksheet'));
    }

    public function store(Request $request){

        $campos=[
            'date' => 'required|date',
            'description' => 'required|string',
            'student_id' => 'required|integer',
        ];

        $Message=["required"=>'The :attribute is required'];
        $this->validate($request,$campos,$Message);

        $data=request()->except('_token');
        worksheet::insert($data);
        return redirect('worksheets')->with('Message', 'Worksheet created');
    }

    public function destroy($id){

        $valor = Worksheet::where('id',$id);
        $valor -> increment('deleted');
        return redirect('worksheets');
    }

    public function update(Request $request, $id){

        $campos=[
            'date' => 'required|date',
            'description' => 'required|string',
            'student_id' => 'required|integer',
        ];

        $Message=["required"=>'The :attribute is required'];
        $this->validate($request,$campos,$Message);

        $data=request()->except(['_token','_method']);
        Worksheet::where('id','=', $id)->update($data);
        //$worksheet= Worksheets::findOrFail($id);
        return redirect('worksheets')->with('Message', 'Worksheet modified');
    }
}
