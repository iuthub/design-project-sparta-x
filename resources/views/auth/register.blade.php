@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 mx-auto">
                <form class="card" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title text-center">Create New Account</div>
                        <div class="form-group">
                            <label class="form-label">Name </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email address </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password </label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password Confirm</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block form-button">Create new account
                            </button>
                        </div>
                        <div class="text-center text-muted mt-4">
                            Already have account? <a href="/login">Sign in </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
