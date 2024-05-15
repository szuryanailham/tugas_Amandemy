@extends('main')
@section('container')
    <h1>list member</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Member 1 --}}
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->umur}}</td>
                        <td>{{ $item->tanggal_lahir}}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
{{--nama, gender, umur, tanggal lahir, dan alamat  --}}
@endsection