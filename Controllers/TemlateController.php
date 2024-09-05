<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemlateController extends Controller
{
    public function indexx()
    {
        return view('frontend.index');
    }
}
