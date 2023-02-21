@extends('layout.main')

@section('container')

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn" style="background-color: aquamarine" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    <div class="card mb-3">
          <div style="max-height: 600px; overflow:hidden;">
            <img src="{{ asset('image/1.jpg') }}" class="card-img-top" alt="">
          </div>    
                      
          <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/" class="text-decoration-none text-dark">SIMKAPAI</a></h3>
            <p>
              <small class="text-muted">
                  SIMKAPAI (Sistem Informasi Manajemen Kegiatan PAI) merupakan wadah dalam tahap kolektif dokumentasi pada kegiatan Direktorat Pendidikan Agama Islam<a href="" class="text-decoration-none"></a>
              </small>
            </p>
            <p class="card-text"></p>
            <a href="/posts/" class="text-decoration-none btn btn-primary">Started</a>
          </div>
    </div>
    
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

@endsection
