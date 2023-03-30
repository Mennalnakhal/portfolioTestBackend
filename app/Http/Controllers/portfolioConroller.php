<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioConroller extends Controller
{
   public function index()
   {
    return view('port.index');
   }

public function about()
{
   return view('port.about');
}

public function contact()
{
   return view('port.contact');
}

public function portfolio()
{
   return view('port.portfolio');
}

public function contactForm(Request $request)
{
    dd($request->all());
}
}
