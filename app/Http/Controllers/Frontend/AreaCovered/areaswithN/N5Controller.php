<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class N5Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.N_areas.Notting Hill Cabs');
    }
}