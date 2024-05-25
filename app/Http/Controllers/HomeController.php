<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function produk(Request $request){
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
            return redirect()->back()->withInput()->Errors(['error' => "$label tidak boleh kosong."]);
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
    
    return redirect()->route('listProduk');
}

public function show(){
    $produk = Product::all();
    return view('Dashboard.Products',[
        'product'=> $produk,
    ]);
}

public function detailUser($id_user){

    // Mengambil satu objek User berdasarkan ID
    $user = User::find($id_user);
    $toko = $user->toko;
    return view('detailUser',[
        'user'=>$user,
        'toko'=>$toko,
    ]);

}


public function Allproduct(){
    return view('Dashboard.home');
  
}

public function checkout($id_barang){
    $invoiceCode = 'INV-' . Carbon::now()->format('YmdHis');
    $adminFee = 5;
    $detailProduct = Product::findOrFail($id_barang);
    $kodeUnik = session('kode_unik', 0);
    $invoiceCode .= '-' . $kodeUnik;
    $total = intval($detailProduct->harga) + $adminFee + $kodeUnik;
    $kodeUnik++;
    session(['kode_unik' => $kodeUnik]);

    return view('Dashboard.checkout')->with([
        'no_invoice' => $invoiceCode,
        'adminFee' => $adminFee,
        'productDetail' => $detailProduct,
        'total_harga' => $total,
        'metode_pembayaran' => "BNI SYARIAH",
        'kadal_luarsa' =>Carbon::now()->addHours(3),
        'data_user' => Auth::user(),
        'kode_unik' => $kodeUnik // Menambahkan kode unik ke dalam array
    ]);
}

public function detail($id_product){
    $detailProduct = Product::findOrFail($id_product);
    return view('Dashboard.Detail',[
        'productDetail' => $detailProduct
    ]);
  
}


}
