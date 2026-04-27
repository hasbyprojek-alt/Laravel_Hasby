<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function profil()
    {
        return view('profil');
    }
}