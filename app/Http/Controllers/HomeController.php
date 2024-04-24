<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public  function home(){
    $coffees = [
        [
            "nama" => "Kopi Arabika",
            "harga" => 25000,
            "gambar" => "/img/produk1.jpg"
        ],
        [
            "nama" => "Kopi Robusta",
            "harga" => 20000,
            "gambar" => "/img/produk2.jpg"
        ],
        [
            "nama" => "Kopi Flores",
            "harga" => 30000,
            "gambar" => "/img/produk3.jpg"
        ]
        ];
        return view('welcome',[
            'DataCoffe' => $coffees
        ]);
   }
}
