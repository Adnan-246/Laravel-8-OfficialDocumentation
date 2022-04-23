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
    
    //_Store About
    public function storeAbout(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|max:80|email',
            'password' => 'required|min:4|max:8',
        ]);
        dd($request->all());
    }
}
