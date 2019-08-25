<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
  public function preguntasfrecuentes(){
    return view('preguntasfrecuentes');
  }
}
