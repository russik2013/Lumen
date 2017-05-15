<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        dd($request); 
    }

    //
}