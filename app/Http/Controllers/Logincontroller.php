<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function Login()
    {
        return view('login.login');
    }
    public function index()
    {
        return view('welcome');
    }
}
