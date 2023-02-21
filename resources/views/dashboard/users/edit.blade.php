@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit User</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="col-lg-8">
    <form method="post" action="/dashboard/users/{{ $user->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name', $user->name) }}">
            @error('name')                          
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Userame" required value="{{ old('username', $user->username) }}">
            @error('username')                          
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email', $user->email) }}">
            @error('email')                          
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control rounded-buttom @error('password')is-invalid @enderror" id="password" placeholder="Password" required >
            @error('password')                          
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="is_admin">User / Admin</label>
            <input type="text" name="is_admin" class="form-control rounded-top @error('is_admin')is-invalid @enderror" id="is_admin" placeholder="0 / 1" required value="{{ old('is_admin', $user->is_admin) }}">
            @error('is_admin')                          
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Edit User</button>
    </form>
</div>

@endsection