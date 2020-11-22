<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ce;
use DB;

class CeController extends Controller
{
    public function index(){

        $id=auth()->user()->id;

        if($id==51){
            $data2['cce']=ce::where('deleted',0)->paginate(30);
            return view('cce.index',$data2);
        }else{
        
        $id=auth()->user()->cycle_id;

        $data= DB::select('SELECT cs.id, cs.word, cs.description FROM ces cs, ras r, modules m, cycles c WHERE cs.ra_id = r.id AND m.id = r.module_id AND m.cycle_id = c.id AND c.id= ? ORDER BY r.id', [$id]);

        return view('cce.index',['cce'=>$data]);
        }
    }

    public function create(){
        return view('cce.create');
    }

    public function edit($id){
        $cce=ce::findOrFail($id);
        return view('cce.edit',compact('cce'));
    }

    public function store(Request $request){
        $data=[
            'word'=>'required|string|max:100',
            'description'=>'required|string|max:200',
            'ra_id'=>'required|integer',
            'task_id'=>'required|integer',
            'mark'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except('_token'); 

        ce::insert($cceData);

        return redirect('cce')->with('Message','Cce added');
    }

    public function update(Request $request, $id){

        $data=[
            'word'=>'required|string|max:100',
            'description'=>'required|string|max:200',
            'ra_id'=>'required|integer',
            'task_id'=>'required|integer',
            'mark'=>'required|integer'
        ];

        $Message=["required"=>':attribute is required'];

        $this->validate($request,$data,$Message);

        $cceData=request()->except(['_token','_method']); 

        ce::where('id','=',$id)->update($cceData);

        // $cce=cce::findOrFail($id);

        // return redirect('cce');

        return redirect('cce')->with('Message','Cce modified');
    }

    public function destroy($id){

        $valor = ce::where('id',$id);
        $valor -> increment('deleted');

        return redirect('cce')->with('Message','Cce deleted');
    }
}
