<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class W37Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.W_areas.West Wickham Cabs');
    }
}