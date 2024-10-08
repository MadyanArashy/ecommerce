<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse{
        // Request : objek yang mengandung semua data
        // yang dikirimkan oleh pengguna melalui form atau URL
    
        // $request : untuk mengakses data yang dikirimkan oleh pengguna
    
        // RedirectResponse : digunakan untuk mengarahkan kembali ke 
        // halaman lain setelah data baru berhasil disimpan
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'title' => 'required|min:10|',
            'description'=>  '',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);
    
        // Upload image
        $image = $request->file('image')->store('products', 'public');
    
        // Create product
        Product::create([
            'image' => $image,
            'title' => $request->title,
            'desc' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
    
        return redirect()->route('home');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
