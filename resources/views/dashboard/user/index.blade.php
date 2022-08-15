@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>

    
    @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="table-responsive col-lg-6">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Active</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->is_admin }}</td>
              <td>
                {{-- <form action="/dashboard/users/{{ $user->id }}/edit" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}">
                    <span data-feather="edit"></span>
                  </button>                  
                </form> --}}
                <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning" type="submit" data-bs-target="#exampleModal{{ $user->id }}" data-bs-toggle="modal"><span data-feather="edit"></span></a>
                <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            {{-- modal --}}
              <div class="modal fade" id="exampleModal{{ $user->id }}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="/dashboard/users/{{ $user->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control @error('name')
                              is-invalid
                          @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" autofocus readonly>
                          @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control @error('username')
                              is-invalid
                          @enderror" id="username" name="username" value="{{ old('username', $user->username) }}" readonly>
                          @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="text" class="form-control @error('email')
                              is-invalid
                          @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" readonly>
                          @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        @if ($user->is_admin !== 1)
                        <div class="mb-3">
                          <label for="is_admin" class="form-label">Active</label>
                          <select class="form-select" name="is_admin">
                            <option selected>Open this select menu</option>
                            <option value="1">1</option>
                          </select>
                        </div>
                        @endif
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection