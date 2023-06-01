@extends('layouts.app_login')

@section('title', $title)

@section('content')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Create Account</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3 ">
                        <input
                            class="form-control @error('name')
                            is-invalid
                        @enderror"
                            name="name" id="inputName" type="text" placeholder="Please insert your name" />
                        <label for="inputName">Full Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="inputEmail" type="email" placeholder="Please insert your email" name="email" required />
                        <label for="inputEmail">Email address</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            class="form-control @error('password')
                            is-invalid
                        @enderror"
                            id="inputPassword" type="password" placeholder="****************" name="password" />
                        <label for="inputPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
            </div>
        </div>
    </div>
@endsection
