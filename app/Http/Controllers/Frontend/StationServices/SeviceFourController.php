<?php

namespace App\Http\Controllers\Frontend\StationServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeviceFourController extends Controller
{
    public function index ()
    {
        return view ('frontend.stationServices.serviceFour');
    }
}