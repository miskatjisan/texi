<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class O5Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.O_areas.Old Street Cabs');
    }
}