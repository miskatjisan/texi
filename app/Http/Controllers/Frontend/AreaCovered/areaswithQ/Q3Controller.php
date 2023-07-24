<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Q3Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.Q_areas.Queens Road Peckham Cabs');
    }
}