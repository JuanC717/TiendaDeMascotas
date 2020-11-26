<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //
    public function info() 
    { 
        return view('info');
    }

    public function caninos() 
    { 
        return view('caninos');
    }

    public function felinos() 
    { 
        return view('felinos');
    }

    public function pqr() 
    { 
        return view('pqr');
    }
}
