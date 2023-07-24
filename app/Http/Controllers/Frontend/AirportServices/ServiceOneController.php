<?php

namespace App\Http\Controllers\Frontend\AirportServices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceOneController extends Controller
{
    public function index()
    {
        return view ('frontend.AirportServices.ServiceOne');
    }
}