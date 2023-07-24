<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class M13Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.M_areas.Mill Hill Taxis');
    }
}