<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function country()
    {
       return view('country');
    }

    // _Student Store
    public function studentStore(Request $request)
    {
        dd($request->all());
    }
}
