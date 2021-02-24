<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}