@extends('main')
@section('container')
<div class="row">
    <h1 class="text-center">Detail product</h1>
    <div class="col col-8 mx-auto mt-5">
        <div class="row">
            <div class="col">
                {{-- gambar --}}
                 {{-- image --}}
                 @if ($productDetail->image)
                 <img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/' . $productDetail->image) }}" alt="{{ $productDetail->title }}">

               @else
                 <img class="img-fluid" style="height: 200px" src="https://source.unsplash.com/random"  alt="{{ $productDetail->nama }}">
               @endif
                {{-- end gambar --}}
            </div>
            <div class="col">
                {{-- deskripsi --}}
                    <p>nama product :<span>{{  $productDetail->nama }}</span> </p>
                    <p>Harga :<span>{{  $productDetail->harga }}</span> </p>
                    <p>Stock :<span>{{  $productDetail->stok }}</span> </p>
                    <p>berat :<span>{{  $productDetail->berat }}</span> </p>
                    <p>kondisi:<span>{{  $productDetail->kondisi }}</span> </p>
                    <p>Deskripsi :<span>{{  $productDetail->deskripsi }}</span></p>
                {{-- end ogf deskripsi --}}
                <div>
                    <a href="/checkout/{{ $productDetail->id }}" class="btn btn-primary">checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection