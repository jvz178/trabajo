<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menuTutorEn;

class menuTutorEnController extends Controller
{
    public function index()
    {
        return view('menuTutorEn');
    }
}