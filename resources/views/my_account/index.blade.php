@extends('layouts.app')
@section('title', 'حساب من')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-24">
        <div class="container">
            <div class="page-title-content">
                <h2>My account</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">My account</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start User Area -->
    <section class="user-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="user-form-content register-area mr-15">
                        <form class="user-form">
                            <h3>Create an account</h3>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="log-rem">
                                            <input id="remember-2" type="checkbox">
                                            <label>Show password</label>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="default-btn register mb-0" type="submit">
                                        Register now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="user-form-content login-area ml-15">
                        <form class="user-form">
                            <h3>Log in to your account</h3>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="log-rem">
                                            <input id="remember-2" type="checkbox">
                                            <label>Keep me logged in</label>
                                        </span>

                                        <span class="forgot-login">
                                            <a href="index.htm#">Forgot your password?</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="default-btn mb-0" type="submit">
                                        Log in
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User Area -->
@endsection
