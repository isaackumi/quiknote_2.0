<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function about()
    {
      return view('dashboard');
    }
    public function dashboard()
    {
      return view('dashboard');
    }

    public function contact()
    {
      return view('dashboard');
    }

    public function terms()
    {
      return view('dashboard');
    }

    public function pricing()
    {
      return view('ad-list-view');
    }

    public function blog()
    {
      return view('dashboard');
    }

    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function cart()
    {
      return view('cart');
    }

    public function membership()
    {
      return view('membership');
    }

    public function package()
    {
      return view('package');
    }
}
