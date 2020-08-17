@extends('layouts.app')

@section('content')
<div class="container" style="text-align-last: right; padding-top: 50px; height:900px;">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card" style="width:80%; height:130%; margin-right: 80px;">
                <div class="card-header" style="padding-top: 20px; font-size: 25px;">{{ __('تسجيل دخول ') }}</div>
                <!-- Login -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="display: contents;">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger;">{{ __('البريد الالكتروني ') }}</label> 
                            <!-- E-Mail Address -->

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="display: contents;">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit; padding-top: 30px;font-size: larger;">{{ __('كلمه السر') }}</label>
                            <!-- Password -->
                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row" style="display: contents;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" style=padding="30px" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" >
                                        {{ __('تذكر') }} -->
                                        <!-- Remember Me -->
                                    <!-- </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0" style="display: inline-block; margin-top: 20px; width: 300px;">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="display: contents;">
                                        {{ __('  نسيت كلمه المرور') }}
                                        <!-- Forgot Your Password -->
                                    </a>
                                @endif
<br>
                                <button type="submit" class="btn btn-primary large" style="margin-top:110px; margin-right:115%;color:white; background-color:#6C63FF;font-family: Tajawal; width:130px; border-radius: 20px; padding-top: 10px; font-size: 16px; padding-right:20px ">
                                    {{ __(' تسجيل دخول ') }}
                                    <!-- Login -->
                                </button>
                                <!-- <a href="/register" style=" margin-right:120%;"> انشاء حساب </a> -->

                            </div>
                        </div>
                    </form>
                   <a href="/register" style="margin-right: 220px;"> انشاء حساب</a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
