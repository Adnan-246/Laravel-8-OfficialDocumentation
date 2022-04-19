<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "This is invoke method controller";
    }
}
