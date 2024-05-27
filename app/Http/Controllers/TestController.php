<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function LogIn() {
        return view('auth.login');
    }

    public function Dasboard() {
        return view('Dashboard');
    }

    public function Data_Place() {
        return view('places.index');
    }
}
