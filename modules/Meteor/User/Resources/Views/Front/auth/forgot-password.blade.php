@extends('User::Front.auth.master')

@section('page-title','فراموشی رمز عبور')
@section('content')
    <form action="{{ route('password.email') }}" class="form" method="post">

        @csrf
        <a class="account-logo" href="{{ route('home') }}">
            <img src="/img/shirazcode-logo.png" alt="">
        </a>
        <x-auth-session-status class="mb-4" :status="session('status')"/>
        <div class="form-content form-account ">
            <input type="text" name="email" class="txt-l txt" placeholder="ایمیل" value="{{ old('email') }}" required
                   autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            <br>
            <button type="submit" class="btn btn-recoverpass">بازیابی</button>
        </div>
        <div class="form-footer">
            <a href="{{ route('login') }}">صفحه ورود</a>
        </div>
    </form>
@endsection