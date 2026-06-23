<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{    
    // 1. INDEX: Menampilkan halaman utama + data layanan
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    // 2. REVISI CREATE: Dialihkan langsung ke index karena form berada di halaman index
    public function create()
    {
        return redirect()->route('admin.layanan.index');
    }

    // 3. REVISI STORE: Simpan data layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|max:255',
            'deskripsi'    => 'required',
            'gambar'       => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/layanan'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        Layanan::create($data);

        // Perbaikan route redirect ke 'admin.layanan.index'
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    // 4. EDIT: Form edit (jika Anda masih menggunakan file edit tersendiri)
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    // 5. REVISI UPDATE: Update data layanan
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if (File::exists(public_path('images/layanan/' . $layanan->gambar))) {
                File::delete(public_path('images/layanan/' . $layanan->gambar));
            }
            // Upload gambar baru
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/layanan'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $layanan->update($data);

        // Perbaikan route redirect ke 'admin.layanan.index'
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diupdate!');
    }

    // 6. REVISI DESTROY: Hapus data layanan
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);

        if (File::exists(public_path('images/layanan/' . $layanan->gambar))) {
            File::delete(public_path('images/layanan/' . $layanan->gambar));
        }

        $layanan->delete();

        // Perbaikan route redirect ke 'admin.layanan.index'
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus!');
    }
}