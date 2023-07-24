<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V1Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.V_areas.Victoria Cabs');
    }
}