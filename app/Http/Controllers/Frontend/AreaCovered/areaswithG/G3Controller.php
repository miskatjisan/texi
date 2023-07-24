<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithG;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class G3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.G_areas.Golders Green Cabs');
    }
}