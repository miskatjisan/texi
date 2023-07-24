<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class R5Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.R_areas.Ruislip Cabs');
    }
}