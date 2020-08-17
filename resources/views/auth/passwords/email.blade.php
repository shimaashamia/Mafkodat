@extends('layouts.app')

@section('content')
<div class="container" style="text-align-last: right; padding-top: 50px; height:900px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"  style="width:80%; height:130%; margin-right: 80px;">
                <div class="card-header" style="padding-top: 20px; font-size: 25px;">{{ __('إستعادة كلمة المرور') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row"  style="display: contents;">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="padding-right:inherit;font-size: larger;">{{ __(' البريد الالكتروني') }}</label>

                            <div class="col-md-6">
                                <input style="width:170%; margin-right: -15px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:110px; margin-right:65%;color:white; background-color:#6C63FF;font-family: Tajawal; width:180px; border-radius: 20px; padding-top: 10px; font-size: 16px; padding-right:20px ">
                                    {{ __('إرسال البريد الالكتروني') }}
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
