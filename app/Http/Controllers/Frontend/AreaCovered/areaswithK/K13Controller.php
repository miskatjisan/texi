<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class K13Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.K_areas.Kempton Park Cabs');
    }
}