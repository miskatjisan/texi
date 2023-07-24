<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class W7Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.W_areas.Welwyn Garden City Cabs');
    }
}