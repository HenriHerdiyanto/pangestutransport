<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view("mobil", compact("mobil"));
    }

    public function create()
    {
        return view("mobil_create");
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'nullable|numeric',
            'jenis_kendaraan' => 'nullable|string|max:255',
            'banyak_kursi' => 'nullable|integer',
            'jenis_mobil' => 'required|string|in:autometic,manual',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lp1' => 'nullable|string|max:255',
            'lp2' => 'nullable|string|max:255',
            'lp3' => 'nullable|string|max:255',
            'ms1' => 'nullable|string|max:255',
            'ms2' => 'nullable|string|max:255',
            'ms3' => 'nullable|string|max:255',
            'msb1' => 'nullable|string|max:255',
            'msb2' => 'nullable|string|max:255',
            'msb3' => 'nullable|string|max:255',
        ]);

        // Upload dan simpan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'images';
            $file->move(public_path($tujuan_upload), $nama_file); // Gunakan public_path untuk menentukan direktori tujuan penyimpanan
        } else {
            $nama_file = null; // Jika tidak ada gambar yang di-upload, nama_file bernilai null
        }

        // dd($validatedData);
        // Simpan data ke database
        $mobil = new Mobil();
        $mobil->nama_mobil = $validatedData['nama_mobil'];
        $mobil->harga = $validatedData['harga'];
        $mobil->jenis_kendaraan = $validatedData['jenis_kendaraan'];
        $mobil->banyak_kursi = $validatedData['banyak_kursi'];
        $mobil->jenis_mobil = $validatedData['jenis_mobil'];
        $mobil->lp1 = $validatedData['lp1'];
        $mobil->lp2 = $validatedData['lp2'];
        $mobil->lp3 = $validatedData['lp3'];
        $mobil->ms1 = $validatedData['ms1'];
        $mobil->ms2 = $validatedData['ms2'];
        $mobil->ms3 = $validatedData['ms3'];
        $mobil->msb1 = $validatedData['msb1'];
        $mobil->msb2 = $validatedData['msb2'];
        $mobil->msb3 = $validatedData['msb3'];
        $mobil->gambar = $nama_file;
        $mobil->save();

        return redirect()->route('mobil')->with('success', 'Data mobil berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'nullable|string|max:255',
            'jenis_kendaraan' => 'nullable|string|max:255',
            'banyak_kursi' => 'nullable|integer',
            'jenis_mobil' => 'required|string|in:autometic,manual',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lp1' => 'nullable|string|max:255',
            'lp2' => 'nullable|string|max:255',
            'lp3' => 'nullable|string|max:255',
            'ms1' => 'nullable|string|max:255',
            'ms2' => 'nullable|string|max:255',
            'ms3' => 'nullable|string|max:255',
            'msb1' => 'nullable|string|max:255',
            'msb2' => 'nullable|string|max:255',
            'msb3' => 'nullable|string|max:255',
        ]);

        $mobil = Mobil::findOrFail($id);

        // Update data mobil
        $mobil->nama_mobil = $validatedData['nama_mobil'];
        $mobil->harga = $validatedData['harga'];
        $mobil->jenis_kendaraan = $validatedData['jenis_kendaraan'];
        $mobil->banyak_kursi = $validatedData['banyak_kursi'];
        $mobil->jenis_mobil = $validatedData['jenis_mobil'];
        $mobil->lp1 = $validatedData['lp1'];
        $mobil->lp2 = $validatedData['lp2'];
        $mobil->lp3 = $validatedData['lp3'];
        $mobil->ms1 = $validatedData['ms1'];
        $mobil->ms2 = $validatedData['ms2'];
        $mobil->ms3 = $validatedData['ms3'];
        $mobil->msb1 = $validatedData['msb1'];
        $mobil->msb2 = $validatedData['msb2'];
        $mobil->msb3 = $validatedData['msb3'];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($mobil->gambar && file_exists(public_path('images/' . $mobil->gambar))) {
                unlink(public_path('images/' . $mobil->gambar));
            }
            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $mobil->gambar = $name;
        } else {
            $mobil->gambar = $request->input('gambar_lama');
        }

        $mobil->save();

        return redirect()->route('mobil')->with('success', 'Data mobil berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($mobil->gambar && file_exists(public_path('images/' . $mobil->gambar))) {
            unlink(public_path('images/' . $mobil->gambar));
        }

        $mobil->delete();

        return redirect()->route('mobil')->with('success', 'Data mobil berhasil dihapus.');
    }
}
