<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithG;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class G1Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.G_areas.Gipsy Hill Taxis');
    }
}