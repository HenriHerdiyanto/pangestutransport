<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::orderBy('created_at', 'desc')->first(); // Mengambil satu data terbaru
        return view('banner', compact('banner'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload dan simpan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images';
            $file->move(public_path($tujuan_upload), $nama_file);
        } else {
            $nama_file = null;
        }

        // Simpan data ke database
        $banner = new Banner();
        $banner->judul = $validatedData['judul'];
        $banner->gambar = $nama_file;
        $banner->save();

        return redirect()->route('banner')->with('success', 'Data banner berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner = Banner::findOrFail($id);

        // Update judul
        $banner->judul = $validatedData['judul'];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($banner->gambar && file_exists(public_path('images/' . $banner->gambar))) {
                unlink(public_path('images/' . $banner->gambar));
            }
            // Upload gambar baru
            $file = $request->file('gambar');
            $nama_file = time() . '.' . $file->getClientOriginalExtension();
            $tujuan_upload = public_path('images'); // Gunakan public_path
            $file->move($tujuan_upload, $nama_file); // Pindahkan file ke folder
            $banner->gambar = $nama_file; // Simpan nama file
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $banner->gambar = $request->input('gambar_lama');
        }

        $banner->save();

        return redirect()->route('banner')->with('success', 'Data banner berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($banner->gambar && file_exists(public_path('images/' . $banner->gambar))) {
            unlink(public_path('images/' . $banner->gambar));
        }

        $banner->delete();

        return redirect()->route('banner')->with('success', 'Data banner berhasil dihapus.');
    }
}
