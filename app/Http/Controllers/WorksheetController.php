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

        $data=request()->except('_token');
        worksheet::insert($data);
        return redirect('worksheets');
    }

    public function destroy($id){

        $valor = Worksheet::where('id',$id);
        $valor -> increment('deleted');
        return redirect('worksheets');
    }

    public function update(Request $request, $id){

        $data=request()->except(['_token','_method']);
        Worksheet::where('id','=', $id)->update($data);
        //$worksheet= Worksheets::findOrFail($id);
        return redirect('worksheets');
    }
}
