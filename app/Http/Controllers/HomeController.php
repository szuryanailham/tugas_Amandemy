<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function produk(Request $request)
{
    $rules = [
        'nama_produk' => 'Nama Produk',
        'berat_produk' => 'Berat Produk',
        'harga_produk' => 'Harga Produk',
        'stok' => 'Stok',
        'kondisi_barang' => 'Kondisi Barang',
        'deskripsi' => 'Deskripsi',
    ];

    $data = [
        [
            'nama_produk' => 'Produk A',
            'berat_produk' => '1 kg',
            'harga_produk' => '$100',
            'stok' => 10,
            'kondisi_barang' => 'Baru',
            'deskripsi' => 'Ini adalah deskripsi Produk A.',
        ],
        [
            'nama_produk' => 'Produk B',
            'berat_produk' => '2 kg',
            'harga_produk' => '$150',
            'stok' => 15,
            'kondisi_barang' => 'Second',
            'deskripsi' => 'Ini adalah deskripsi Produk B.',
        ],
        [
            'nama_produk' => 'Produk C',
            'berat_produk' => '500 g',
            'harga_produk' => '$50',
            'stok' => 5,
            'kondisi_barang' => 'Baru',
            'deskripsi' => 'Ini adalah deskripsi Produk C.',
        ],
    ];
    
    foreach ($rules as $inputName => $label) {
        if ($request->$inputName === null) {
            return redirect()->back()->withInput()->withErrors(['error' => "$label tidak boleh kosong."]);
        }
    }
    
    // Tambahkan data produk yang baru dimasukkan ke dalam array $data
    $newProduct = [
        'nama_produk' => $request->nama_produk,
        'berat_produk' => $request->berat_produk,
        'harga_produk' => $request->harga_produk,
        'stok' => $request->stok,
        'kondisi_barang' => $request->kondisi_barang,
        'deskripsi' => $request->deskripsi,
    ];

    // Tambahkan data produk baru ke dalam array $data
    $data[] = $newProduct;
    
    return view('produk', [
        'produk' => $data
    ]);
}

}
