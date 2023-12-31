<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest();

        if(request('search')) {
            $products->where('nama_product', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.product.index', [
            'products' => Product::all(),
            'products' => $products->get()

        ]);


    }

    public function cetak()
    {
        return view('dashboard.product.cetak', [
            'products' => Product::all()
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
        // dd($request->all());

        $validatedData = $request->validate([
            'nama_product' => 'required|max:255',
            'harga' => 'required|max:255',
            'slug' => 'required',
            'stok' => 'required|max:255',
            'kategori_id' => 'required' ,
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', 
        ]);
        
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('product-gambar');
        }

        Product::create($validatedData);

        return redirect('/dashboard/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules =[
            'nama_product' => 'required|max:255',
            'harga' => 'required|max:255',
            'slug' => 'required',
            'stok' => 'required|max:255',
            'kategori_id' => 'required' ,
            'deskripsi' => 'required|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
             }
            $validatedData['gambar'] = $request->file('gambar')->store('product-gambar');
        };

        Product::where('id', $product->id)->update($validatedData);

        return redirect('/dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboard/product');
    }


}
