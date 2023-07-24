<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class E11Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.E_areas.Earls Court Taxis');
    }
}