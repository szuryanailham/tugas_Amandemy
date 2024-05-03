<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class editProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'gambar_produk' => "Gambar Produk",
            'nama_produk' => 'Nama Produk',
            'berat_produk' => 'Berat Produk',
            'harga_produk' => 'Harga Produk',
            'stok' => 'Stok',
            'kondisi_barang' => 'Kondisi Barang',
            'deskripsi' => 'Deskripsi',
        ];
        
        foreach ($rules as $inputName => $label) {
            if ($request->$inputName === null) {
                return redirect()->back()->withInput()->withErrors(['error' => "$label tidak boleh kosong."]);
            }
        }
        
        // Tambahkan data produk yang baru dimasukkan ke dalam array $data
        $newProduct = [
            'gambar' => $request->gambar_produk,
            'nama' => $request->nama_produk,
            'berat' => $request->berat_produk,
            'harga' => $request->harga_produk,
            'stok' => $request->stok,
            'kondisi' => $request->kondisi_barang,
            'deskripsi' => $request->deskripsi,
        ];
        // memasukan kedalam database:
        Product::insert($newProduct);
        
        return redirect()->route('listProduct');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Product::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'Data not found');
        }

        return view('update',[
            'product' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|string',
            'nama' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);
        Product::where('id', $id)->update($validatedData);
        return redirect('listProduct')->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Product::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'Data not found');
        }
    
        $item->delete();
    
        return redirect()->back()->with('success', 'Data successfully deleted');
    }
}
