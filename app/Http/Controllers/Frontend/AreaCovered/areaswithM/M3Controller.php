<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class M3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.M_areas.Manor Park Cabs');
    }
}