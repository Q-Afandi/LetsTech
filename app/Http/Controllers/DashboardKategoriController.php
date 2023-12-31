<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kategori.index', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', 
        ]);
        
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('kategori-gambar');
        }

        Kategori::create($validatedData);

        return redirect('/dashboard/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('dashboard.kategori.edit', [
            'kategori' => $kategori
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {

        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required',
            'gambar' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
             }
            $validatedData['gambar'] = $request->file('gambar')->store('kategori-gambar');
        };
         
        
        Kategori::where('id', $kategori->id)->update($validatedData);

        return redirect('/dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/dashboard/kategori');
    }
}
