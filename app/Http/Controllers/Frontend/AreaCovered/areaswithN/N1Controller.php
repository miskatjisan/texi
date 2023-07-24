<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class N1Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.N_areas.Northolt Cabs');
    }
}