<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menuAlumno;

class menuAlumnoController extends Controller
{
    public function index()
    {
        return view('menuAlumno');
    }
}