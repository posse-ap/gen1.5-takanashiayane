<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{
    //
    function index(){
        return(view('quizy'));
    }
}

