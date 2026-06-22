<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class BeritaController extends Controller
{
    // 1. READ: Menampilkan daftar berita
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->get();
        return view('admin.berita.index', compact('berita'));
    }

    // 2. CREATE (View): Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // 3. CREATE (Proses): Menyimpan data berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|max:255',
            'kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $data['penulis'] = Auth::user()->name;
        $data['tanggal'] = date('Y-m-d');

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // 4. DELETE: Menghapus berita dan gambarnya
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (File::exists(public_path('images/' . $berita->gambar))) {
            File::delete(public_path('images/' . $berita->gambar));
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    // 5. EXPORT PDF: Mengunduh laporan berita
    public function exportPdf()
    {
        $berita = Berita::all();
        $pdf = Pdf::loadView('admin.berita.pdf', compact('berita'));
        return $pdf->download('laporan-berita-' . date('Y-m-d') . '.pdf');
    }
    // Menampilkan form edit
public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('admin.berita.edit', compact('berita'));
}

// Proses update data ke database
public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama
        if (File::exists(public_path('images/' . $berita->gambar))) {
            File::delete(public_path('images/' . $berita->gambar));
        }
        // Upload gambar baru
        $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images'), $namaFile);
        $data['gambar'] = $namaFile;
    }

    $berita->update($data);
    return redirect()->route('berita.index')->with('success', 'Berita berhasil diupdate!');
}
}