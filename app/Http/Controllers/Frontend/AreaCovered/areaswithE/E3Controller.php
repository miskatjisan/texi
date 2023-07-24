<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class E3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.E_areas.Enfield Taxis');
    }
}