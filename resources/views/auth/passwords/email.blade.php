@extends('layouts.frontend.master')

@section('pagetitle')
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Forgot Password</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@section('content')
<div class="container" style="padding:60px 0 80px">
    <div class="row justify-content-center">

            <div class="col-md-6 col-xs-12">
                    <div class="tb-login-form res">
                        <h5 class="tb-title">Reset Password</h5>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                             @csrf
                            <p class="checkout-coupon top log a-an">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </p>
                            <p class="login-submit5 ress">
                                <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                            </p>
                        </form>
                        
                    </div>
                </div>

    </div>
</div>
@endsection
