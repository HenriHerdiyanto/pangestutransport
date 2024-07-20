<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view("wisata", compact("wisata"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("wisata_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'destinasi1' => 'nullable|string|max:255',
            'destinasi2' => 'nullable|string|max:255',
            'destinasi3' => 'nullable|string|max:255',
            'destinasi4' => 'nullable|string|max:255',
            'destinasi5' => 'nullable|string|max:255',
            'mobil1' => 'nullable|string|max:255',
            'mobil2' => 'nullable|string|max:255',
            'mobil3' => 'nullable|string|max:255',
            'mobil4' => 'nullable|string|max:255',
            'harga1' => 'nullable|numeric',
            'harga2' => 'nullable|numeric',
            'harga3' => 'nullable|numeric',
            'harga4' => 'nullable|numeric',
            'kapasitas1' => 'nullable|string|max:255',
            'kapasitas2' => 'nullable|string|max:255',
            'kapasitas3' => 'nullable|string|max:255',
            'kapasitas4' => 'nullable|string|max:255',
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
        $wisata = new Wisata();
        $wisata->nama_paket = $validatedData['nama_paket'];
        $wisata->destinasi1 = $validatedData['destinasi1'];
        $wisata->destinasi2 = $validatedData['destinasi2'];
        $wisata->destinasi3 = $validatedData['destinasi3'];
        $wisata->destinasi4 = $validatedData['destinasi4'];
        $wisata->destinasi5 = $validatedData['destinasi5'];
        $wisata->mobil1 = $validatedData['mobil1'];
        $wisata->mobil2 = $validatedData['mobil2'];
        $wisata->mobil3 = $validatedData['mobil3'];
        $wisata->mobil4 = $validatedData['mobil4'];
        $wisata->harga1 = $validatedData['harga1'];
        $wisata->harga2 = $validatedData['harga2'];
        $wisata->harga3 = $validatedData['harga3'];
        $wisata->harga4 = $validatedData['harga4'];
        $wisata->kapasitas1 = $validatedData['kapasitas1'];
        $wisata->kapasitas2 = $validatedData['kapasitas2'];
        $wisata->kapasitas3 = $validatedData['kapasitas3'];
        $wisata->kapasitas4 = $validatedData['kapasitas4'];
        $wisata->gambar = $nama_file;
        $wisata->save();

        return redirect()->route('wisata')->with('success', 'Data mobil berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'destinasi1' => 'nullable|string|max:255',
            'destinasi2' => 'nullable|string|max:255',
            'destinasi3' => 'nullable|string|max:255',
            'destinasi4' => 'nullable|string|max:255',
            'destinasi5' => 'nullable|string|max:255',
            'mobil1' => 'nullable|string|max:255',
            'mobil2' => 'nullable|string|max:255',
            'mobil3' => 'nullable|string|max:255',
            'mobil4' => 'nullable|string|max:255',
            'harga1' => 'nullable|numeric',
            'harga2' => 'nullable|numeric',
            'harga3' => 'nullable|numeric',
            'harga4' => 'nullable|numeric',
            'kapasitas1' => 'nullable|string|max:255',
            'kapasitas2' => 'nullable|string|max:255',
            'kapasitas3' => 'nullable|string|max:255',
            'kapasitas4' => 'nullable|string|max:255',
        ]);

        $wisata = Wisata::findOrFail($id);

        // Update data mobil
        $wisata->nama_paket = $validatedData['nama_paket'];
        $wisata->destinasi1 = $validatedData['destinasi1'];
        $wisata->destinasi2 = $validatedData['destinasi2'];
        $wisata->destinasi3 = $validatedData['destinasi3'];
        $wisata->destinasi4 = $validatedData['destinasi4'];
        $wisata->destinasi5 = $validatedData['destinasi5'];
        $wisata->mobil1 = $validatedData['mobil1'];
        $wisata->mobil2 = $validatedData['mobil2'];
        $wisata->mobil3 = $validatedData['mobil3'];
        $wisata->mobil4 = $validatedData['mobil4'];
        $wisata->harga1 = $validatedData['harga1'];
        $wisata->harga2 = $validatedData['harga2'];
        $wisata->harga3 = $validatedData['harga3'];
        $wisata->harga4 = $validatedData['harga4'];
        $wisata->kapasitas1 = $validatedData['kapasitas1'];
        $wisata->kapasitas2 = $validatedData['kapasitas2'];
        $wisata->kapasitas3 = $validatedData['kapasitas3'];
        $wisata->kapasitas4 = $validatedData['kapasitas4'];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($wisata->gambar && file_exists(public_path('images/' . $wisata->gambar))) {
                unlink(public_path('images/' . $wisata->gambar));
            }
            $image = $request->file('gambar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $wisata->gambar = $name;
        }

        $wisata->save();

        return redirect()->route('wisata')->with('success', 'Data wisata berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($wisata->gambar && file_exists(public_path('images/' . $wisata->gambar))) {
            unlink(public_path('images/' . $wisata->gambar));
        }

        $wisata->delete();

        return redirect()->route('wisata')->with('success', 'Data mobil berhasil dihapus.');
    }
}
