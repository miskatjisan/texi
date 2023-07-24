<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class H5Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.H_areas.Hampton Taxis');
    }
}