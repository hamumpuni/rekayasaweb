<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    // 1. Tampilkan Halaman Galeri
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    // 2. Form Tambah Foto
    public function create()
    {
        return view('admin.galeri.create');
    }

    // 3. Proses Simpan Foto
    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/galeri'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil ditambahkan ke Galeri!');
    }

    // 4. Form Edit Judul/Foto
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    // 5. Proses Update
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if (File::exists(public_path('images/galeri/' . $galeri->gambar))) {
                File::delete(public_path('images/galeri/' . $galeri->gambar));
            }
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/galeri'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $galeri->update($data);

        return redirect()->route('galeri.index')->with('success', 'Data Galeri berhasil diperbarui!');
    }

    // 6. Proses Hapus Foto
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if (File::exists(public_path('images/galeri/' . $galeri->gambar))) {
            File::delete(public_path('images/galeri/' . $galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus!');
    }
}