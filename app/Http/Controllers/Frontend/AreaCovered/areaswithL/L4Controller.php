<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class L4Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.L_areas.Leytonstone Cabs');
    }
}