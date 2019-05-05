@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 mx-auto">
                <form class="card" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title text-center">Login to your Account</div>
                        <div class="form-group">
                            <label class="form-label">Username </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block form-button">Sign in</button>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input type="hidden" name="remember"
                                           checked>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted mt-3">
                            Don't have account yet? <a href="/register">Sign up </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
