<?php

namespace App\Http\Controllers\Frontend\AreaCovered\areaswithE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class E15Controller extends Controller
{
    public function index ()
    {
        return view ('frontend.AreasCovered.E_areas.Elephant & Castle Cabs');
    }
}