@extends('layouts.header')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<!--@section("style")-->

<!--<link href="{{asset('new/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">-->
<!--@toastr_css-->
<!--@endsection-->
<link href="{{asset('new/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
@section("content")
<style>
    p.dayText.secText {
    left: 17px !important;
}
p.dayText.minText {
    left: 20px !important;
}
#header .nav .active a {
    color: #BC985F;
    border-radius: 5px;
    margin-top: -9px !important;
}
</style>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{-- <a href="" class="logo"><img src="{{asset('new/assets/img/admin.jpeg')}}" height="42" alt="logo"></a> --}}
                {{-- <h3 class="commonHeading"><span style="color: aliceblue"> Back Sign in to Continue</span></h3> --}}
                <p class="signupText"><span style="color: #1b1a2f">Don't Have an Account?</span></p>
            </div>
            <div class="col-lg-12 text-cente">
                <div class="white-bg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="opacity-img">
                            <div class="img-dive">
                                <p class="loginnnn"><b>Login</b></p>
                               <b> <p class="signuuuuu">Don't Have an Account? <a href="{{('register')}}">Sign Up!</a></p></b>
                              {{-- <img src="{{asset('assets/img/p-4.jpg')}}"  alt class="img-responsive"> --}}
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                {{-- <h1>{{ trans('panel.site_title') }}</h1> --}}
                
                                {{-- <p class="text-muted">{{ trans('global.login') }}</p> --}}
                                @if(session('message'))
                                    <div class="alert alert-info" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                
                                <form method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <input class="inputCommon" type="email" placeholder="Email Address"> --}}
                                        <input id="email" name="email" type="email" class="inputCommon{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="Email" value="{{ old('email', null) }}">
                
                                        @if ($errors->has('email'))
                                        <span class="helper-text" data-error="wrong" data-success="right">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        {{-- <input class="inputCommon" type="password" placeholder="Password"> --}}
                                        <input id="password" name="password" type="password" class="inputCommon{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Enter Password">
                
                                        @if ($errors->has('password'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    
                                    </div><!-- /.form-group -->
                                    {{-- <div class="remeberBox">
                                        <div class="form-group">
                                            <input type="radio" value="Login">
                                            <label class="textRemeber">Remember Me</label>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                           <a><label class="textRemeber">Forget Password ?</label></a>
                                        </div><!-- /.form-group -->
                                    </div> --}}
                                    <div class="input-group mb-4">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="padding-left:30px !important" />
                                            <label class="form-check-label" for="remember" style="vertical-align: center;">
                                                <span style="color: rgb(12, 12, 12)"> {{ trans('Remember_me') }}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary btn-inversed btn-block">
                                    </div><!-- /.form-group -->
                                    <div class="row">
                                        {{-- <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-4">
                                                {{ trans('global.login') }}
                                            </button>
                                        </div> --}}
                                        <div class="col-6 text-right">
                                            {{-- @if(Route::has('password.request')) --}}
                                                <a class="btn btn-link px-0" href="{{ ('forgot') }}"style="color:rgb(249, 249, 252);">
                                                    <span style="color: rgb(12, 12, 12)"> {{trans('Forgot_Password') }}</span>
                                                </a><br>
                                            {{-- @endif --}}
                                            {{-- <a class="btn btn-link px-0" href="{{ route('register') }}"style="color:rgb(249, 249, 252);">
                                                <span style="color: rgb(12, 12, 12)"> {{ trans('Register') }}</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                    
                                </form>
                                {{-- <div class="row">
                                    <div class="col-lg-12">
                                        <div class="utf-social-login-separator-item"><span>or</span></div>
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<script src="{{asset('new/assets/js/app.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  @toastr_render
@endsection
<!--@section("scripts")-->
<!--<script src="{{asset('new/assets/js/app.js')}}"></script>-->
<!--  <script src="{{asset('toastr/toastr.min.js')}}"></script>-->
<!--@toastr_render-->
<!--@toastr_js-->
<!--@endsection-->
