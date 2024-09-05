<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
public function index()
{
    $name = 'حفصة صالح الغتنيني';
    $phone ='779429551';
    $email = 'hfas@gmail.com';
    $nationality = 'yemeni-hadramout';
    
return view('frontend.information',compact('name','phone','email','nationality'));
}
}
