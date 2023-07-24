<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Q2Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.Q_areas.Queens Park Cabs');
    }
}