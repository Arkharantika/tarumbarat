<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index(Request $request)
    {
        
    }

    public function graphPositif()
    {
        return ['number' => 1, 'healthy' => 2, 'day' => 3];
    }
}
