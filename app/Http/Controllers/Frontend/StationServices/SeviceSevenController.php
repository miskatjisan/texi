<?php

namespace App\Http\Controllers\Frontend\StationServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeviceSevenController extends Controller
{
    public function index ()
    {
        return view ('frontend.stationServices.serviceSeven');
    }
}