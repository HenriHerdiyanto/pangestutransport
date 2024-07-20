<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Mobil;
use App\Models\Promo;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        $promos = Promo::all();
        // dd($promos);
        return view('home', compact('promos'));
    }

    public function Promostore(Request $request)
    {
        $validateData = $request->validate([
            'nama_promo' => 'required|string|max:255',
            'persen' => 'required|string|max:255',
            'batas_promo' => 'required|date',
        ]);

        $promo = new Promo();
        $promo->nama_promo = $validateData['nama_promo'];
        $promo->persen = $validateData['persen'];
        $promo->batas_promo = $validateData['batas_promo'];
        $promo->save();

        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
    }

    public function Promoupdate(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_promo' => 'string|max:255',
            'persen' => 'string|max:255',
            'batas_promo' => 'date',
        ]);

        $promo = Promo::find($id);
        $promo->nama_promo = $validateData['nama_promo'];
        $promo->persen = $validateData['persen'];
        $promo->batas_promo = $validateData['batas_promo'];
        $promo->save();
        return redirect()->route('home')->with('success', 'data berhasil diupdate');
    }

    public function Promodestroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('home')->with('success', 'Data promo berhasil dihapus.');
    }

    public function profile()
    {
        $user = auth()->user();
        $users = User::where('id', '!=', $user->id)->get();
        return view('profile', compact('user', 'users'));
    }

    public function edit()
    {
        $user = auth()->user();

        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validasi request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }


    public function home()
    {
        $promo = Promo::all();
        $contact = Contact::orderBy('id', 'asc')->first();
        $banner = Banner::orderBy('id', 'asc')->first();
        $wisata = Wisata::orderBy('created_at', 'desc')->get();
        $mobil = Mobil::orderBy('created_at', 'desc')->get();

        return view('index', compact('mobil', 'wisata', 'contact', 'banner', 'promo'));
    }
}
