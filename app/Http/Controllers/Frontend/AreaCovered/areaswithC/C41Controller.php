<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C41Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.C_areas.Cambridge Heath Cabs');
    }
}