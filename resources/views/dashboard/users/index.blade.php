@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Management for {{ auth()->user()->name }}</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

{{-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

<div class="table-responsive col-lg-8">
  <a href="/dashboard/users/create" class="btn btn-primary mp-3">Create new user</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admin</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->is_admin }}</td>
        <td>
          {{-- <a href="/dashboard/users/{{ $user }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
          <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          
          <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
            @method("DELETE")
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>

@endsection