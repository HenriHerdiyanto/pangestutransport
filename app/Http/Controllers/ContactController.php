<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan semua data kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    // Menampilkan form untuk membuat kontak baru
    public function create()
    {
        return view('create');
    }

    // Menyimpan kontak baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'wa' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')
            ->with('success', 'Kontak baru berhasil ditambahkan.');
    }

    // Menampilkan detail kontak
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // Menampilkan form untuk mengedit kontak
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Memperbarui kontak di database
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'wa' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route('contact')
            ->with('success', 'Kontak berhasil diperbarui.');
    }


    // Menghapus kontak dari database
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact')
            ->with('success', 'Kontak berhasil dihapus.');
    }
}
