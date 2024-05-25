@extends('main')
@section('container')
<h1 class="text-center">All product</h1>
<div class="container d-flex flex-wrap flex-grow-1 p-5 m-auto">
  @foreach ($product as $item)
  <div class="card m-2" style="width: 18rem;">
    @if ($item->image)
    <img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$item->image) }}"  alt="{{ $item->title }}">
  @else
    <img class="img-fluid" style="height: 200px" src="https://source.unsplash.com/random"  alt="{{ $item->nama }}">
  @endif
      <div class="card-body">
          <div class="d-flex justify-content-between mb-2">
              <h5 class="card-title">{{ $item['nama'] }}</h5>
              <button type="button" class="btn btn-success text-decoration-none">
                <a href="/detail/{{ $item->id }}" class="text-white">Detail</a>
            </button>
            
          </div>
          <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-success">{{ $item['stok'] }}</button>
              <button type="button" class="btn btn-success">{{ $item['harga'] }}</button>
          </div>
        <p class="card-text p-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/checkout/{{ $item['id'] }}" class="btn btn-primary">checkout</a>
        
      </div>
    </div>
  @endforeach
</div>

@endsection