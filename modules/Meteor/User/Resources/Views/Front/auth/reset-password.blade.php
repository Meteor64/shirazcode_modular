@extends('User::Front.auth.master')

@section('page-title','تغییر رمز عبور')

@section('content')

    <form action="{{ route('password.store') }}" class="form" method="post">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <a class="account-logo" href="{{ route('home') }}">
            <img src="/img/shirazcode-logo.png" alt="">
        </a>

        <div class="form-content form-account">
            <input id="email" type="text" class="txt-l txt" placeholder="ایمیل"
                   name="email" value="{{ old('email', $request->email) }}" required autofocus >
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>

            <input id="password" type="password" class="txt-l txt" placeholder="رمز عبور جدید"
                   name="password" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>

            <input id="password_confirmation" type="password" class="txt-l txt" placeholder="تایید رمز عبور جدید"
                   name="password_confirmation" required>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>

            <br>
            <button type="submit" class="btn btn-recoverpass">بروزرسانی رمز عبور</button>

        </div>
    </form>
@endsection