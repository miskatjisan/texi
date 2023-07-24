<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class H51Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.H_areas.Heathrow Terminal 3 Cabs');
    }
}