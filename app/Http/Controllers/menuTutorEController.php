<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menuTutorE;

class menuTutorEController extends Controller
{
    public function index()
    {
        return view('menuTutorE');
    }
}