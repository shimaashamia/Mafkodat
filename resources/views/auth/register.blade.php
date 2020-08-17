@extends('layouts.app')

@section('content')
<style>
input{
    width: 215%;

}
</style>

<div class="container" style="text-align-last: right; padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width:80%; height:100%; margin-right: 80px;">
                <div class="card-header" style="padding-top: 20px; font-size: 25px;">{{ __('إنشاء حساب') }}</div>
                 <!-- Register -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row" style="display: contents;">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger;">{{ __('الاسم') }}</label>
                            <!-- Name -->

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger; padding-top: 30px;">{{ __('البريد الالكتروني') }}</label>
                            <!-- E-Mail Address -->

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="id_number" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger; padding-top: 30px;">{{ __('رقم الجامعي') }}</label>
                            <!-- E-Mail Address -->

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" required autocomplete="id_number">

                                @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger; padding-top: 30px;">{{ __('كلمه السر') }}</label>
                            <!-- Password -->

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger; padding-top: 30px;">{{ __('تأكيد كلمه السر') }}</label>
                            <!-- Confirm Password -->
                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:110px; margin-right:80%;color:white; background-color:#6C63FF;font-family: Tajawal; width:130px; border-radius: 20px; padding-top: 10px; font-size: 16px; padding-right:20px ">
                                    {{ __('إنشاء حساب') }}
                                    <!-- Register -->
                                </button>
                            </div>
                        </div>
                    </form>
                    <p style="margin-right:160px;"> لديك حساب بالفعل ؟ <a href="/login">  تسجيل الدخول </a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
