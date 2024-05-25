@extends('main')
@section('container')
<div class="row">
    <div class="col-8 mx-auto">
        
        <form method="POST" action="/edit-product/{{ $product->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- gambar --}}
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Gambar Produk</label>
                <input value="{{ old('image') }}" type="file" name="image" class="form-control @error('image') is-invalid @enderror"  id="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- nama produk --}}
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Produk</label>
                <input value="{{ old('nama', $product->nama) }}" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- berat --}}
            <div class="mb-3">
                <label for="berat" class="form-label fw-bold">Berat</label>
                <input value="{{ old('berat', $product->berat) }}" name="berat" type="number" class="form-control @error('berat') is-invalid @enderror" id="berat_produk">
                @error('berat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- harga --}}
            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga</label>
                <input value="{{ old('harga', $product->harga) }}" name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" id="harga">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- stok --}}
            <div class="mb-3">
                <label for="stok" class="form-label fw-bold">Stok</label>
                <input value="{{ old('stok', $product->stok) }}" name="stok" type="number" class="form-control @error('stok') is-invalid @enderror" id="stok">
                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <select name="kondisi" class="form-select">
                <option value="baru" {{ old('kondisi', $product->kondisi) == 'baru' ? 'selected' : '' }}>Baru</option>
                <option value="second" {{ old('kondisi', $product->kondisi) == 'second' ? 'selected' : '' }}>Second</option>
            </select>
            @error('kondisi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            {{-- submit --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection