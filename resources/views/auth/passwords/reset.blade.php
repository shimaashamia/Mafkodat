@extends('layouts.app')

@section('content')
<div class="container" style="text-align-last: right; padding-top: 50px; height:900px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width:80%; height:130%; margin-right: 80px;">
                <div class="card-header" style="padding-top: 20px; font-size: 25px;">{{ __('إعادة تعيين كلمة مرور جديدة') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row" style="display: contents;">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger;">{{ __(' البريد الالكتروني ') }}</label>

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit; padding-top: 30px;font-size: larger;">{{ __('كلمة المرور الجديدة') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit; padding-top: 30px;font-size: larger; padding-left: 0px; ">{{ __(' تأكيد كلمة المرور الجديدة') }}</label>

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:110px; margin-right:80%;color:white; background-color:#6C63FF;font-family: Tajawal; width:130px; border-radius: 20px; padding-top: 10px; font-size: 16px; padding-right:20px ">
                                    {{ __(' إعادة تعيين') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
