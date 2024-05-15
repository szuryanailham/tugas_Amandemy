@extends('main')
@section('container')
<div class="container h-auto mt-5">
  {{-- tabel --}}
  <div class="d-flex justify-content-between">
    <h1>List data product</h1>
   <div>
   <a class="btn btn-success" href="/detailuser/{{ $user_id }}">show profile</a>
   <a class="btn btn-primary" href="/tambah">new product</a>
   <a class="btn btn-primary" href="/">show profile</a>
   </div>
  </div>
  
  <div>

      <table class="table mt-3 ">
          <thead>
            
              <tr class="table-dark">
                  <th scope="col ">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Berat</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Kondisi</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Action </th>
                </tr>
          </thead>
          <tbody>
            @foreach ($product as $item)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item["nama"] }}</td>
              <td>{{ $item["harga"] }}</td>
              <td>{{ $item["stok"] }}</td>
              <td>{{ $item["berat"] }}</td>
              <td>{{ $item["kondisi"] }}</td>
              <td>{{ $item["deskripsi"] }}</td>
               <td>
                   <img  style="width: 150px;" src="{{ asset('storage/'.$item->image) }}" alt="Image"></td>
               <td>
                <div>
                  <form method="POST" class="d-inline" action="EditProduct/{{$item['id'] }}">
                      @method('delete')
                      @csrf
                      <button type="submit" onclick="return confirm('are you sure ?')"  data-toggle="tooltip" title="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                  <a style="color: white" class="btn btn-warning ml-2" href="EditProduct/{{ $item['id'] }}/edit"><i class="bi bi-pencil-square"></i></a>
                </div>
               </td>
            </tr>
            @endforeach
           
          </tbody>
      </table>
  </div>
  {{-- akhir tabel --}}
  </div>
@endsection