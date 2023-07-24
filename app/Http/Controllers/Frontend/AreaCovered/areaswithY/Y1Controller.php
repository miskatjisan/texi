<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithY;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Y1Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.Y_areas.Yeading Taxis');
    }
}