@extends('User::Front.auth.master')
@section('page-title','صفحه ورود')

@section('content')

    <form action="{{ route('login') }}" class="form" method="post">
        @csrf
        <a class="account-logo" href="{{ route('home') }}">
            <img src="/img/shirazcode-logo.png" alt="">
        </a>

        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="form-content form-account">
            <input id="username" type="text" class="txt-l txt" placeholder="ایمیل یا شماره موبایل"
                   name="username" value="{{ old('username') }}" required autofocus>

            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            <x-input-error :messages="$errors->get('mobile')" class="mt-2"/>

            <input id="password" type="password" class="txt-l txt" placeholder="رمز عبور"
                   name="password"
                   required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>

            <br>
            <button class="btn btn--login">ورود</button>
            <label class="ui-checkbox">
                مرا بخاطر داشته باش
                <input type="checkbox" checked="checked" id="remember_me" name="remember">
                <span class="checkmark"></span>
            </label>
            <div class="recover-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">بازیابی رمز عبور</a>
                @endif
            </div>
        </div>
        <div class="form-footer">
            <a href="{{ route('register') }}">صفحه ثبت نام</a>
        </div>
    </form>
@endsection