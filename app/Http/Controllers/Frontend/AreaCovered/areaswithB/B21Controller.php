<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class B21Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.B_areas.Belsize Park Cabs');
    }
}