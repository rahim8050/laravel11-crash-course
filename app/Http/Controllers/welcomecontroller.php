<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
   public function welcome(){
    return view('welcome');
   }
}
