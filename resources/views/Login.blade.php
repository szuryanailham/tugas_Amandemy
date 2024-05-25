@extends('main')
@section('container')

<div class="row d-flex justify-content-center">
    <div class="col-lg-6">
      
      {{-- NOTIFIKASI LOGIN SUCCESS --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    {{-- END NOTIFIKASI LOGIN SUCCESS --}}

    {{-- NOTIFIKASI LOGIN GAGAL --}}
@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
  {{-- END NOTIFIKASI GAGAL SUCCESS --}}

  <div class="mb-3 text-center">
            {{-- <h3>{{ $title }}</h3> --}}
        </div>
        <form method="POST" action="/login" class="border border-s p-3 rounded">
          @csrf
          <div class="mb-3">
            <label for="email-login" class="form-label">Email address</label>
            <input value="{{ old('email') }}" name="email" autofocus type="email" class="form-control @error('email') is-invalid @enderror" id="email-login" aria-describedby="emailHelp"/>
            @error('email')
            <div id="email-login" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password_login" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password_login">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <div class="d-flex flex-column align-items-center">
            <button type="submit" class="btn btn-success btn-block mb-2 w-50">Sign in</button>
            <a href="/login/google" class="btn btn-danger btn-block mb-2 w-50">
              <img src="https://img.icons8.com/color/16/000000/google-logo.png" class="me-2" alt="Google logo"> Login with Google
            </a>
          </div>
          </div>
          <div class="text-center mt-3">
            <p>Not a member? <a href="/signUp">Register</a></p>
          </div>
        </form>
</div>


@endsection