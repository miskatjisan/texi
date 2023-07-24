<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P2Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.P_areas.Peckham Cabs');
    }
}