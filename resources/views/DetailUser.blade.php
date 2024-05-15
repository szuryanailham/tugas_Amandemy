@extends('main')
@section('container')

<div class="container mt-5">
  <div class="row">
      <div class="col-6 border border-3 border-black p-2">
          {{-- user --}}
          <p>Nama : {{ $user->name }}</p>
          <p>email:  {{ $user->email }}</p>
          <p>tanggal lahir  :  {{ $user->tanggal_lahir }}</p>
          <p>gender :  {{ $user->gender }}</p>
          <p>umur :  {{ $user->umur}}</p>
      </div>
      <div class="col-6 border border-3 border-black p-2">
          {{-- user --}}
          <p>Nama toko : {{ $toko->nama }}</p>
          <p>alamat:  {{ $toko->alamat }}</p>
          <p>telpon :  {{ $toko->telpon }}</p>
          <p>produk terbaik :  {{ $toko->product_terbaik }}</p>
          <p>deskripsi:  {{ $toko->deskripsi}}</p>
      </div>
  </div>

</div>

@endsection