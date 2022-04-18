<?php

use Illuminate\Support\Facades\Route;


Route::get('/amar', function () {
    // dd(app());
    //return "This is the created new route";
    return view('amar');
});
