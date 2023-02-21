@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            
            <form action="/login" method="post">
              @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
            </form>
            <small class="d-block text-center mt-3
            ">Not Registered ? <a href="/register">Register Now !</a></small>
          </main>
          <div class="mb-3">
            <footer>
            <div class="text-center mb-3">
                <p class="mb-3 text-center">
                    <small>
                      <a href="https://github.com/irvanfalasifa" class="text-decoration-none text-dark">© Copyright 2022 VANNN</a>
                    </small>
                </p>
            </div>
            </footer>
          </div>
    </div>
</div>
@endsection