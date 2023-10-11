@extends('layouts.layout')
@section('title', 'Login')
@section('content')
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ static_asset('assets/img/logo2.png')}}" alt="logo">
                </div>
                <form action="{{route('forget.post')}}" class="login-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="email" placeholder="Enter usrename" class="form-control" required>
                        <i class="far fa-envelope"></i>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="login-btn">Forget</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
