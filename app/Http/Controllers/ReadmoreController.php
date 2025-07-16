<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadmoreController extends Controller
{
    public function read()
    {
        return view('readmore');
    }
}
