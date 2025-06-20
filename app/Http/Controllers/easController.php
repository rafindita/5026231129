<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eas; // Import the model

class easController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eas = eas::latest()->paginate(10); // Adding pagination

        return view('eas.index', compact('eas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'nip' => 'required|alpha_num|size:5|unique:eas,nip', // CHAR/5, unique 
            'nama' => 'required|string|max:50', // VARCHAR/50 
            'pangkat' => 'required|string|max:5', // CHAR/5 
            'gaji' => 'required|integer', // INTEGER 
        ]);

        // Create a new record
        eas::create($request->all());

        // Redirect to index page after successful creation
        return redirect()->route('eas.index')
                         ->with('success', 'Data Karyawan berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eas $eas)
    {
        // Delete the record
        $eas->delete();

        return redirect()->route('eas.index')
                         ->with('success', 'Data Karyawan berhasil dihapus.');
    }

    // The prompt only explicitly asks for Add (Beli) and Delete (Batal).
    // If Edit/Update is also implied, you'd add these methods:

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(eas $eas)
    {
        return view('eas.edit', compact('eas'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, eas $eas)
    {
        $request->validate([
            'nip' => 'required|alpha_num|size:5|unique:eas,nip', // CHAR/5, unique 
            'nama' => 'required|string|max:50', // VARCHAR/50 
            'pangkat' => 'required|string|max:5', // CHAR/5 
            'gaji' => 'required|integer', // INTEGER 
        ]);

        $eas->update($request->all());

        return redirect()->route('eas.index')
                         ->with('success', 'Data Karyawan berhasil diperbarui.');
    }
}