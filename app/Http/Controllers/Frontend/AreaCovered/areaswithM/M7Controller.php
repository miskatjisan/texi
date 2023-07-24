<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class M7Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.M_areas.Monks Park Cabs');
    }
}