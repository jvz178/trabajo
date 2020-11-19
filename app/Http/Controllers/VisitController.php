<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit;

class VisitController extends Controller
{
    public function index(){
        $Data['visits']=visit::where('deleted',0)->paginate(5);
        return view('visits.index',$Data);
    }
}
