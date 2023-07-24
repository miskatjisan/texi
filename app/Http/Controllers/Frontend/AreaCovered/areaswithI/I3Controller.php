<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class I3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.I_areas.Islington Taxis');
    }
}