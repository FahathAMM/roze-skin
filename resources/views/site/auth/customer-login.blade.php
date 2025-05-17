@extends('layout.app-site')
@section('title', 'Login')
@section('content')
    <x-site.component.page-title title="Login" :breadcrumbs="[['label' => 'Home', 'url' => route('product.index')], ['label' => 'Login']]" />

    <section class="flat-spacing">
        <div class="container">
            <div class="login-wrap">
                <div class="left">
                    <div class="heading">
                        <h4>Login</h4>
                    </div>
                    <form action="{{ route('customer.login') }}" method="POST" class="form-login form-has-password">
                        @csrf

                        {{-- <form action="{{ url('customer/register-store') }}" id="customer-register-form" method="POST"
                        class="form-login form-has-password" autocomplete="off">
                        @csrf --}}

                        <div class="wrap">
                            <fieldset class="">
                                <input class="" type="number" placeholder="mobile*" name="mobile" tabindex="2"
                                    value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="position-relative password-item">
                                <input class="input-password" type="password" placeholder="Password*" name="password"
                                    tabindex="2" value="" aria-required="true" required="">
                                <span class="toggle-password unshow">
                                    <i class="icon-eye-hide-line"></i>
                                </span>
                                @error('mobile')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </fieldset>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="tf-cart-checkbox">
                                    <div class="tf-checkbox-wrapp">
                                        <input checked="" class="" type="checkbox" id="login-form_agree"
                                            name="agree_checkbox">
                                        <div>
                                            <i class="icon-check"></i>
                                        </div>
                                    </div>
                                    <label for="login-form_agree">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forget-password.html" class="font-2 text-button forget-password link">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <div class="button-submit">
                            <button class="tf-btn btn-fill" type="submit">
                                <span class="text text-button">Login</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="right">
                    <h4 class="mb_8">New Customer</h4>
                    <p class="text-secondary">
                        Be part of our growing family of new customers! Join us today and unlock a
                        world of exclusive benefits, offers, and personalized experiences.
                    </p>
                    <a href="{{ route('customer.register') }}" class="tf-btn btn-fill">
                        <span class="text text-button">Register</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
