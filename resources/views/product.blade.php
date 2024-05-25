@extends('main')
@section('container')
<h1 class="text-center mt-3">List Produk</h1>
<div class="container mt-5 d-flex justify-content-evenly">
  <a class="btn btn-primary" href="/listProduct/1">admin</a>
  @can('admin')
  <a class="btn btn-success" href="/member">All User</a>
  @endcan
  <a class="btn btn-success" href="/listProduct/2">Marchendast</a>

</div>
<section class="container d-flex flex-wrap flex-grow-1 p-5 m-auto">
    {{-- card 1 --}}
    @foreach ($product as $item)
    @dd($item);
    <div class="card m-2" style="width: 18rem;">
      @if ($item->image)
      <img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$item->image) }}"  alt="{{ $item->title }}">
  @else
      <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $item->nama }}"  alt="{{ $news->nama }}">
  @endif
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h5 class="card-title">{{ $item['nama'] }}</h5>
                <button type="button" class="btn btn-success">{{ $item['kondisi'] }}</button>
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-success">{{ $item['stok'] }}</button>
                <button type="button" class="btn btn-success">{{ $item['harga'] }}</button>
            </div>
          <p class="card-text p-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
   
</section>
@endsection
