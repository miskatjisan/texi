<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithV;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V2Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.V_areas.Vauxhall Cabs');
    }
}