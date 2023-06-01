@extends('layouts.app_login')

@section('title', $title)

@section('content')

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Login</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="inputEmail" type="email" placeholder="name@example.com" name="email" required />
                        <label for="inputEmail">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            class="form-control @error('password')
                            is-invalid
                        @enderror"
                            name="password" id="inputPassword" type="password" placeholder="Password" />
                        <label for="inputPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-2 mb-0">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
            </div>
        </div>
    </div>
@endsection
