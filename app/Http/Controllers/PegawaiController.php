<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) // Tambahkan Request $request
    {
        $search = $request->input('search'); // Tangkap nilai dari input 'search'

        // Mulai query Eloquent
        $query = Pegawai::query();

        // Jika ada input pencarian, terapkan filter
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('jabatan', 'like', '%' . $search . '%')
                  ->orWhere('alamat', 'like', '%' . $search . '%');
            // Kamu bisa menambahkan kolom lain yang ingin dicari
            // ->orWhere('umur', 'like', '%' . $search . '%'); // Umur mungkin kurang cocok dicari dengan 'like'
        }

        // Terapkan urutan dan pagination
        $pegawais = $query->latest()->paginate(10);

        // Mengirim data ke view
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'umur' => 'required|integer|min:18',
            'alamat' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'umur' => 'required|integer|min:18',
            'alamat' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai berhasil dihapus.');
    }
}