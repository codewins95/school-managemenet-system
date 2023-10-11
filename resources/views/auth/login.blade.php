@extends('layouts.layout')
@section('title', 'Login')
@section('content')
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ static_asset('assets/img/logo2.png')}}" alt="logo">
                </div>
                <form action="{{route('login.post')}}" class="login-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="email" placeholder="Enter usrename" class="form-control" >
                        <i class="far fa-envelope"></i>
                        {{-- @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                        <i class="fas fa-lock"></i>
                        {{-- @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror --}}
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember-me" required >
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="{{route('forget.password')}}" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
                <div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div> --}}
        </div>
    </div>
@endsection
