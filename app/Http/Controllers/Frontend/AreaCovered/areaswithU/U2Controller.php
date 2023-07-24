<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class U2Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.U_areas.Upper Warlingham Cabs');
    }
}