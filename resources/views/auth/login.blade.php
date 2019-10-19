@extends('layouts.frontend.master')

@section('pagetitle')
        <!-- pages-title-start -->
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Login</h2>
                            <p><a href="#">Home</a> | Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection
@section('content')
        <!-- login content section start -->
		<div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-md-offset-3">
                            <div class="tb-login-form ">
                                <h5 class="tb-title">Login</h5>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <p class="checkout-coupon top log a-an">
                                        <label for="email">{{ __('E-Mail Address') }} <em>*</em></label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </p>
                                    <p class="checkout-coupon top-down log a-an">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </p>
                                    <div class="forgot-password1">
                                        <label class="inline2">{{ __('Remember Me') }} <em>*</em>
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>
                                    <p class="login-submit5">
                                            <button type="submit" class="btn btn-primary kbtn">
                                                    {{ __('Login') }}
                                                </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login  content section end -->
@endsection
