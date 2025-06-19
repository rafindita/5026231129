<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja; // Import the model

class KeranjangBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all records from KeranjangBelanja table
        // No search functionality requested for this specific problem, but can be added similar to PegawaiController.
        $keranjangBelanjas = KeranjangBelanja::latest()->paginate(10); // Adding pagination

        return view('keranjangbelanja.index', compact('keranjangBelanjas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keranjangbelanja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'KodeBarang' => 'required|integer|unique:keranjang_belanjas,KodeBarang', // Ensure unique KodeBarang
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0',
        ]);

        // Create a new record
        KeranjangBelanja::create($request->all()); // 

        // Redirect to index page after successful creation 
        return redirect()->route('keranjangbelanja.index')
                         ->with('success', 'Item berhasil ditambahkan ke keranjang belanja.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeranjangBelanja $keranjangBelanja)
    {
        // Delete the record 
        $keranjangBelanja->delete();

        return redirect()->route('keranjangbelanja.index')
                         ->with('success', 'Item berhasil dibatalkan/dihapus dari keranjang.');
    }

    // Note: The prompt doesn't explicitly ask for 'show' or 'edit/update' methods,
    // but the 'Beli' and 'Batal' buttons imply creating and deleting.
    // If 'Beli' means adding a new item, and 'Batal' means deleting.
    // If 'Beli' implies adding existing items, the logic might be different (e.g., updating 'Jumlah').
    // I'll stick to the interpretation of 'Beli' as 'Create' and 'Batal' as 'Delete' for now based on the prompt.

    // If "Beli" also implies editing (e.g., change quantity), you would need to add edit/update methods.
    // For "Beli" acting as 'Add New', the create and store methods are sufficient.
}