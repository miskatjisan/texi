<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class O3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.O_areas.Oakleigh Park Taxis');
    }
}