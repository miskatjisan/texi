<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class I1Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.I_areas.Ickenham Cabs');
    }
}