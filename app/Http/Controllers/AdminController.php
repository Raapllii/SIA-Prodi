<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File; // Pastikan Anda sudah mengimpor model File

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $username = $request->session()->get('username');
        if ($request->is('dashboard')) {
            return view('backend.dashboard', compact('username'));
        } elseif ($request->is('list')) {
            return view('backend.apply-job', compact('username')); // Pastikan Anda memiliki view 'backend.list'
        } elseif ($request->is('listdosen')) {
            return view('backend.dosen', compact('username'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
