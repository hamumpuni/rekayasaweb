<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilController extends Controller
{
    // Menampilkan Form Profil
    public function index()
    {
        // Ambil data profil pertama (ID 1). Jika di database masih kosong, kembalikan object kosong
        $profil = Profil::first(); 
        return view('admin.profil.index', compact('profil'));
    }

    // Menyimpan / Memperbarui data profil
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'tentang'         => 'required',
            'logo'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->except('_token');
        $profil = Profil::first();

        if ($request->hasFile('logo')) {
            // Hapus foto lama
            if ($profil && $profil->logo && File::exists(public_path('images/logo/' . $profil->logo))) {
                File::delete(public_path('images/logo/' . $profil->logo));
            }
            $namaFile = time() . '_' . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('images/logo'), $namaFile);
            $data['logo'] = $namaFile;
        }

        // Fitur canggih Laravel: Kalau ID 1 sudah ada -> di-update. Kalau di database masih kosong -> create baru.
        Profil::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->route('profil.index')->with('success', 'Profil Perusahaan berhasil diperbarui!');
    }
}