<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class F12Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.F_areas.Farringdon Cabs');
    }
}