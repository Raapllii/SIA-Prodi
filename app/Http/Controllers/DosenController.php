<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:dosens',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto-dosen', 'public');
        }

        Dosen::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'foto' => $foto,
        ]);

        return redirect('/dosen')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:dosens,nip,' . $dosen->id,
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto-dosen', 'public');
            $dosen->foto = $foto;
        }

        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->jabatan = $request->jabatan;
        $dosen->save();

        return redirect('/dosen')->with('success', 'Data dosen berhasil diupdate!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen')->with('success', 'Data dosen berhasil dihapus!');
    }
}
