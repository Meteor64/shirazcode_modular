@extends('User::Front.auth.master')

@section('content')
    <form action="{{ route('register') }}" class="form" method="post">
        @csrf
        <a class="account-logo" href="{{ route('home') }}">
            <img src="img/shirazcode-logo.png" alt="">
        </a>
        <div class="form-content form-account">

            <input type="text" class="txt @error('name') is-invalid @enderror" placeholder="نام و نام خانوادگی *"
                   name="name" :value="old('name')" required autofocus>
            @if($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif


            <input type="email" class="txt txt-l @error('email') is-invalid @enderror" placeholder="ایمیل *"
                   name="email" :value="old('email')" required>
            @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif

            <input type="text" class="txt txt-l @error('mobile') is-invalid @enderror"
                   placeholder="شماره موبایل(بدون صفر اول)"
                   name="mobile" :value="old('mobile')">
            @if($errors->has('mobile'))
                <div class="error">{{ $errors->first('mobile') }}</div>
            @endif

            <input type="password" class="txt txt-l @error('password') is-invalid @enderror" placeholder="رمز عبور *"
                   name="password"
                   required autocomplete="new-password">
            @if($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif

            <input type="password" class="txt txt-l @error('password_confirmation') is-invalid @enderror"
                   placeholder="تکرار رمز عبور *"
                   name="password_confirmation" required>
            @if($errors->has('password_confirmation'))
                <div class="error">{{ $errors->first('password_confirmation') }}</div>
            @endif

            <span class="rules">رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
            <br>
            <button class="btn continue-btn">ثبت نام و ادامه</button>

        </div>
        <div class="form-footer">
            <a href="{{ route('login') }}">صفحه ورود</a>
        </div>
    </form>
@endsection