<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomarceController extends Controller
{
    public function index()
    {
        return view('forntEnd.home.home');
    }
}
