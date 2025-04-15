<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\File;

class sliderControl extends Controller
{
    public function list()
    {
        // Ambil semua file dari database
        $item = File::all();

        return view('backend.apply-job', compact('item'));
    }
    public function delete($id)
    {
        $file = File::findOrFail($id);

        // Hapus file dari storage
        Storage::disk('public')->delete($file->path);

        // Hapus file dari database
        $file->delete();

        return response()->json(['success' => true]);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
            $fileModel = new File();
            $fileModel->name = $file->getClientOriginalName();
            $fileModel->path = $filePath;
            $fileModel->size = $file->getSize();
            $fileModel->save();

            return response()->json(['success' => true, 'file' => $fileModel]);
        }

        return response()->json(['success' => false], 400);
    }
}
