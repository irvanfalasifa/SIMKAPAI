@extends('layout.main')

@section('container')
    <h3 class="mb-3 text-center">{{ $title }}</h3>

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
            <h3 class="card-title"><a href="mailto:direktorat.pai@gmail.com" class="text-decoration-none text-dark">Contact Us</a></h3>
            <p>
              <small class="text-muted">
                E-mail :<a href="mailto:direktorat.pai@gmail.com" class="text-decoration-none"> direktorat.pai@gmail.com</a>
              </small>
            </p>
            <p>
              <small class="text-muted mt-1 mb-1">
                Address :<a href="https://goo.gl/maps/4nShmshJGYkwS37QA" class="text-decoration-none"> Jalan Lapangan Banteng Barat No. 3-4, Jakarta 10710</a>
              </small>
            </p>
            <p>
              <small class="text-muted mt-1 mb-1">
                Visit : 
                <a href="https://kemenag.go.id/" class="text-decoration-none mt-1 mb-1">kemenag.go.id</a>
              </small>
            </p>
            <p class="card-text"></p>
            <a href="/" class="text-decoration-none btn btn-primary">Back to Home</a>
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
