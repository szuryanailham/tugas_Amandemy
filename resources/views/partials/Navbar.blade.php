<nav class="navbar navbar-dark navbar-expand-lg bg-success p-2">
    <a class="navbar-brand" href="#">RumiFast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kurikulum</a>
            </li> --}}
        </ul>
        <ul class="navbar-nav ms-auto">
            {{-- JIKA SUDAH LOGIN HILANGKAN TOMBOL LOGIN --}}
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    walcome
                </a>
                {{-- DROP DOWN --}}
                <ul class="dropdown-menu ">
                    <li class="p-2"><a style="font-size:13px" class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-fill"></i> Dashboard</a></li>
                    <form action="/logout" method="POST">
                      <li class="p-2"><a class="dropdown-item" style="font-size:13px;color:red" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </form>
                </ul>
                {{-- AKHIR DROP DOWN --}}
            </li>
            @else
            <li class="nav-item">
                <a href="/login" class="nav-link active">
                    <i class="bi bi-box-arrow-in-right"></i>Login
                </a>
            </li>
            @endauth
        </ul>
    </div>
  </nav>