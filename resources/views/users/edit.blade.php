@extends('layouts.admin')

@section('title')
    <title>Edit User</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Edit User</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                 
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="form-group">
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                @if (Auth::user()->is_admin == 1)
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control" value="{{ $user->password }}" required>
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                </div>
                                @else
                                @endif
                                <div class="form-group">
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email atau Username</label>
                                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" required>
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                </div>
                                <div class="form-group">
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection