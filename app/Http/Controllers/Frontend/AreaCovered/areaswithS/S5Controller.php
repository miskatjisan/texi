<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class S5Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.S_areas.Shepherds Bush Cabs');
    }
}