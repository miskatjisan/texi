<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class W36Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.W_areas.West Silvertown Cabs');
    }
}