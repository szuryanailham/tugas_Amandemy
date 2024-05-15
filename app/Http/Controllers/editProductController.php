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
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'image'=>'required|image|file|max:2000',
            'nama' => 'required|max:255',
            'berat' => 'required|numeric|min:0',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|numeric|min:0',
            'kondisi' => 'required|in:baru,bekas',
            'deskripsi' => 'required|max:2000',
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $validatedData['id_user'] = rand(1, 2);
      
        // memasukan kedalam database:
        Product::insert($validatedData);
        
        return view('product', [
            'product' => Product::all()
        ]);
        
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
            'image'=>'required|image|file|max:2000',
            'nama' => 'required|string',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Product::where('id', $id)->update($validatedData);
        return redirect('/home')->with('success', 'Category has been updated');
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
    
        return redirect('/home')->with('success', 'item  has been deleted');
    }
}
