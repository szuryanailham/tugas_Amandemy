@extends('main')
@section('container')
<div class="container h-auto mt-5">
  {{-- tabel --}}
  <div class="d-flex justify-content-between">
    <h1>List data product</h1>
    
    <div>
      {{-- <a class="btn btn-success" href="/detailuser/{{ $user_id }}">show profile</a> --}}
      <a class="btn btn-primary" href="/edit-product/create">New Product</a>
      <a class="btn btn-primary" href="/">Show Profile</a>
    </div>
  </div>
  
  <div class="mt-5">
    <div class="row">
      <div class="col">
       <div class="row">
        <div class="col-4">
          <form action="">
            <div class="input-group mb-3">
              <input name="number" type="number" class="form-control">
              <button class="btn btn-success" type="submit" id="button-addon2">search</button>
            </div>
          </form>
        </div>
       </div>
      </div>
      <div class="col-4">
        <form action="">
          <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" placeholder="search...." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
          </div>
        </form>
      </div>
    </div>
 
    <table class="table mt-3">
      <thead>
        <tr class="table-dark">
          <th scope="col">No
            <button class="bg-transparent">
              <i id="no-arrow" class="bi bi-arrow-down-short text-white"></i>
            </button>
          
           
        </th>
        <th scope="col">
          Nama
          <button class="bg-transparent" onclick="sortColumn('nama')">
              <i class="bi bi-arrow-down-short text-white" data-column="nama"></i>
          </button>
      </th>
      
      <th scope="col">
          Berat
          <button class="bg-transparent" onclick="sortColumn('berat')">
              <i class="bi bi-arrow-down-short text-white" data-column="berat"></i>
          </button>
      </th>
      
      <th scope="col">
          Harga
          <button class="bg-transparent" onclick="sortColumn('harga')">
              <i class="bi bi-arrow-down-short text-white" data-column="harga"></i>
          </button>
      </th>
      
          <th scope="col">Stok</th>
          <th scope="col">Kondisi</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Gambar</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->berat }}</td>
          <td>{{ $item->harga }}</td>
          <td>{{ $item->stok }}</td>
          <td>{{ $item->kondisi }}</td>
          <td>{{ $item->deskripsi }}</td>
          <td>
            <img style="width: 150px;" src="{{ asset('storage/' . $item->image) }}" alt="Image">
          </td>
          <td>
            <div class="d-inline-block">
              <form method="POST" class="d-inline" action="/edit-product/{{ $item->id }}">
                @method('delete')
                @csrf
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" data-toggle="tooltip" title="Delete">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
              <a class="btn btn-warning ml-2" href="/edit-product/{{ $item->id }}/edit" style="color: white;">
                <i class="bi bi-pencil-square"></i>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $products->links() }}
  </div>
  {{-- akhir tabel --}}
</div>
@endsection
