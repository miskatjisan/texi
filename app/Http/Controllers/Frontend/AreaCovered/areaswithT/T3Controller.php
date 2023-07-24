<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class T3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.T_areas.Thamesmead Cabs');
    }
}