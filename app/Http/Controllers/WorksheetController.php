<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\worksheet;

class WorksheetController extends Controller
{
    public function index(){

        $data['worksheets']=worksheet::paginate(5);
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

        $worksheetData=request()->except('_token');
        worksheet::insert($worksheetData);
        return redirect('worksheets');
    }

    public function destroy($id){

        worksheet::destroy($id);
        return redirect('worksheets');
    }

    public function update(Request $request, $id){

        $worksheetData=request()->except(['_token','_method']);
        Worksheet::where('id','=', $id)->update($worksheetData);
        //$worksheet= Worksheets::findOrFail($id);
        return redirect('worksheets');
    }
}
