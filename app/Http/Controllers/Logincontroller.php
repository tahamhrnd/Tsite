<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function Logint()
    {
        return view('login.login');
    }
    public function index()
    {
        return view('welcome');
    }
}
