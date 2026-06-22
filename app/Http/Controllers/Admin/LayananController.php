<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{    public function index()
{
    $layanan = Layanan::all();
    return view('admin.layanan.index', compact('layanan'));
}

    // 2. CREATE (View): Form tambah layanan
    public function create()
    {
        return view('admin.layanan.create');
    }

    // 3. CREATE (Proses): Simpan layanan baru
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

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    // 4. EDIT (View): Form edit
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    // 5. UPDATE (Proses): Update data
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if (File::exists(public_path('images/layanan/' . $layanan->gambar))) {
                File::delete(public_path('images/layanan/' . $layanan->gambar));
            }
            // Upload baru
            $namaFile = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/layanan'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $layanan->update($data);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diupdate!');
    }

    // 6. DELETE: Hapus data
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);

        if (File::exists(public_path('images/layanan/' . $layanan->gambar))) {
            File::delete(public_path('images/layanan/' . $layanan->gambar));
        }

        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus!');
    }
}