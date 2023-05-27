@extends('User::Front.auth.master')

@section('page-title','تایید ایمیل')

@section('content')

    <form action="{{ route('verification.send') }}" class="form" method="post">
        <a class="account-logo" href="/">
            <img src="/img/shirazcode-logo.png" alt="">
        </a>

        <div class="card-header">
            <p class="activation-code-title">
                از ثبت نام شما سپاسگزاریم! قبل از شروع کار ، باید آدرس ایمیل خود را تأیید کنید،لطفا ایمیل خود را چک
                کنید.
                <br>
                اگر ایمیل را دریافت نکرده اید ،با کلیک بر روی دکمه زیر لینک تایید برای شما ارسال خواهد شد.
                <small><b>
                        لطفا قبل از درخواست دوباره ایمیل،پوشه spam ایمیل خود را نیز چک کنید.
                    </b>
                </small>
            </p>

        </div>
        @if (session('status') == 'verification-link-sent')
            <div>
                <p class="success text-center">
                    یک لینک تأیید جدید به آدرس ایمیل شما که در هنگام ثبت نام استفاده کرده اید ارسال شده است.
                </p>
            </div>
        @endif
        <div class="form-content form-content1">
            @csrf
            <div>
                <button class="btn btn-recoverpass">ارسال دوباره لینک تایید</button>
            </div>
        </div>
        <div class="form-footer">
            <a href="/">بازگشت به صفحه اصلی</a>
        </div>
    </form>
@endsection