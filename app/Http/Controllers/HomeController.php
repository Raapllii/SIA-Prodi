<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        return view('Frontand.home');
    }
    function about()
    {
        return view('Frontand.about');
    }
    function dosen()
    {
        return view('Frontand.dosen');
    }
    function berita()
    {
        return view('Frontand.berita');
    }
    function contact()
    {
        return view('Frontand.contact');
    }
}
