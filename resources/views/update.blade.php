<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
      <div class="row">
        <div class="col-6 m-auto my-5 border border-success p-3">
          <h2 class="text-center fw-bold mb-4">Tambah data produk</h2>
          <form method="POST" action="/listProduct/EditProduct/{{ $product->id }}" enctype="multipart/form-data">
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>