<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Q4Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.Q_areas.Queenstown Road Cabs');
    }
}