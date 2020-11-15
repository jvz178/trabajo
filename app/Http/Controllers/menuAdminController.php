<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menuAdmin;

class menuAdminController extends Controller
{
    public function index()
    {
        return view('menuAdmin');
    }
}