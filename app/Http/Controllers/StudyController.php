<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\study;

class StudyController extends Controller
{
    public function index(){
        $Data['studys']=study::where('deleted',0)->paginate(5);
        return view('studys.index',$Data);
    }
}
