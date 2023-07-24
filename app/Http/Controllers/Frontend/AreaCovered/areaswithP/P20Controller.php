<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class P20Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.P_areas.Prince Regent Cabs');
    }
}