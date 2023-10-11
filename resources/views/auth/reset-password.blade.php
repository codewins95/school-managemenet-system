@extends('layouts.layout')
@section('title', 'Login')
@section('content')
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ static_asset('assets/img/logo2.png')}}" alt="logo">
                </div>
                <form action="{{route('login.reset.post',$user->remember_token)}}" class="login-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" placeholder="Enter password" class="form-control" >
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Enter password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="login-btn">Change Password</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
