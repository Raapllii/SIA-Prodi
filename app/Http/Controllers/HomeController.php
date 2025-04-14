<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File; // Pastikan Anda sudah mengimpor model File

class HomeController extends Controller
{
    public function home()
    {
        $images = File::all();
        return view('Frontand.home', compact('images'));
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
