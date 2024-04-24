<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-light" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">Unikcuy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Gallery</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    {{-- END NAVBAR --}}

    {{-- HERO SECTION --}}
    <section class="container mt-3">
        <div class="row">
            <div class="col-6  p-5">
                <div class="mt-5">
                    <div class="lh-2">
                        <P>Enjoy Your Taste</P>
                        <h1 class="fw-bold fs-1">UnikCuy Coffe</h1>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eum iure reiciendis, inventore doloremque blanditiis dolores nesciunt incidunt saepe labore odit similique doloribus ipsam minima exercitationem veniam pariatur nostrum debitis?</p>
                </div>
                </div>
              
            <div class="col-6  p-5">
                <img style="height:400px;width:500px" src="/img/caffe.jpg" alt="image">
            </div>
        </div>
    </section>
    {{-- END HERO SECTION --}}

    {{-- MENU SECTION --}}
    <h3 class="text-center">Menu Utama</h3>

    <section class="container p-3 d-flex flex-wrap gap-3 justify-content-center">
        @foreach ($DataCoffe as $item)
        <div class="card" style="width: 18rem;">
            <img style="height:150px" src="{{ $item['gambar'] }}" class="card-img-top" alt="produk">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $item['nama'] }}</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsa facere neque velit quod nulla?!</p>
                <p class="card-text">Harga: Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
            </div>
        </div>
        @endforeach
        
    </section>
    {{-- END MENU SECTION --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>