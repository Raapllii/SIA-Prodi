<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File; // Pastikan Anda memiliki model File

class FileController extends Controller
{
  public function upload(Request $request)
  {
    $request->validate([
      'file' => 'required|file|max:2048', // Validasi file
    ]);

    if ($request->hasFile('file')) {
      $file = $request->file('file');
      $filePath = $file->store('uploads', 'public'); // Simpan file di folder 'storage/app/public/uploads'

      // Simpan informasi file ke database
      $fileModel = new File();
      $fileModel->name = $file->getClientOriginalName();
      $fileModel->path = $filePath;
      $fileModel->size = $file->getSize();
      $fileModel->save();

      return response()->json(['success' => 'File uploaded successfully.']);
    }

    return response()->json(['error' => 'File upload failed.'], 400);
  }
}
