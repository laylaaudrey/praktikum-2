<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
   public function formdata() {
        return view('formdata');
    }

    public function output(Request $request) {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $kategori = $request->input('kategori');

        return view('output', compact('judul', 'deskripsi', 'kategori'));
    }

}
