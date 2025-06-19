<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan; // Import the model

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::latest()->paginate(10); // Adding pagination

        return view('karyawan.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'kodepegawai' => 'required|alpha_num|size:5|unique:karyawans,kodepegawai', // CHAR/5, unique 
            'namalengkap' => 'required|string|max:50', // VARCHAR/50 
            'divisi' => 'required|alpha_num|size:5', // CHAR/5 
            'departemen' => 'required|integer', // INTEGER 
        ]);

        // Create a new record
        Karyawan::create($request->all());

        // Redirect to index page after successful creation
        return redirect()->route('karyawan.index')
                         ->with('success', 'Data Karyawan berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        // Delete the record
        $karyawan->delete();

        return redirect()->route('karyawan.index')
                         ->with('success', 'Data Karyawan berhasil dihapus.');
    }

    // The prompt only explicitly asks for Add (Beli) and Delete (Batal).
    // If Edit/Update is also implied, you'd add these methods:

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|alpha_num|size:5',
            'departemen' => 'required|integer',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')
                         ->with('success', 'Data Karyawan berhasil diperbarui.');
    }
}