<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class F4Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.F_areas.Fleet Street Cabs');
    }
}