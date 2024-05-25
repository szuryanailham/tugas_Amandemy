@extends('main')
@section('container')
    <div class="row">
        <div class="col-8 mx-auto border border-3 rounded h-auto p-3">
            <h2 class="text-center">Invoice Barang</h2>
            <div class="mt-5">
                {{-- NOMOR INVOICE --}}
                <p>Nomor Invoice : <span>{{$no_invoice}}</span></p>
                <p>Admin Fee     : <span>{{$adminFee}}</span></p>
                <p>Kode Unik     : {{ $kode_unik }}</p>
                <p>total         : {{ $total_harga }}</p>
                <p>Metode Pmebayaran :{{$metode_pembayaran}}</p>
                <p>Tanggal kadal luarasa:{{ $kadal_luarsa }}</p>
                {{-- penjelasaan --}}
                    <div class="row mt-5">
                        <div class="col">
                            {{-- image --}}
                            @if ($productDetail->image)
                            <img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$productDetail->image) }}"  alt="{{ $productDetail->title }}">
                          @else
                            <img class="img-fluid" style="height: 200px" src="https://source.unsplash.com/random"  alt="{{ $productDetail->nama }}">
                          @endif
                        </div>
                        <div class="col">
                            <h5>{{$productDetail->nama }}</h5>
                            <h5>{{$productDetail->kondisi}}</h5>
                            <h5>{{$productDetail->harga}} </h5>
                        </div>
                    </div>
          
                {{-- DATA USER --}}
                <div class="mt-3">
  {{-- usernmae --}}
                {{-- email --}}
                <p>Nama pemesan : <span>{{$data_user->name}}</span></p>
                {{-- nomor telepon --}}
                <p>email pemesan : <span>{{$data_user->email}}</span></p>

                <p>nomor pemesan : <span>0987655555</span></p>
                {{-- alamat --}}
                <p>alamat pemesan : <span>{{$data_user->alamat}}</span></p>
                </div>
              
            </div>
        </div>
    </div>
@endsection