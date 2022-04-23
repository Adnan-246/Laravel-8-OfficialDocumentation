<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

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
        //database a data insert korte hbe
        //query kore data insert korte hbe
        //store the record on log file

        //  Log::channel('aboutstore')->info('The Form submittedby'.Auth::id()); //1
        //oR
         Log::channel('aboutstore')->info('The Form submitted by'.' ' .rand(1,20));
         return redirect()->back(); 

        //dd($request->all());
    }
}
