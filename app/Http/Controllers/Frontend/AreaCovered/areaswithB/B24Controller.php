<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class B24Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.B_areas.Brondesbury Park Cabs');
    }
}