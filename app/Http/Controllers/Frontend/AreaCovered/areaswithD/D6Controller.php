<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class D6Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.D_areas.Denham Taxis');
    }
}