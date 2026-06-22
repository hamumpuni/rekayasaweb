<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Layanan;

class HomeController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        $berita = Berita::orderBy('tanggal', 'desc')->take(3)->get();

        return view('pages.home', compact('layanan', 'berita'));
    }

    public function berita()
    {
        $semua_berita = Berita::orderBy('tanggal', 'desc')->get();
        return view('pages.berita', compact('semua_berita'));
    }

public function showBerita(string $id)
{
    $berita = \App\Models\Berita::findOrFail($id);
        return view('pages.projects-detail', compact('berita'));
}
    }
