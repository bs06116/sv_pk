@extends('layouts.header')
<link href="{{asset('new/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
@section("content")
<div class="login register-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{-- <a href="" class="logo"><img src="{{asset('new/assets/img/admin.jpeg')}}" height="42" alt="logo"></a> --}}
                {{-- <h3 class="commonHeading"><span style="color: aliceblue"> Back Sign in to Continue</span></h3> --}}
                <p class="signupText"><span style="color:  #1b1a2f">Have already an Account? </span></p>
            </div>
            <div class="col-lg-12 text-cente">
                <div class="white-bgs">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="opacity-img">
                            <div class="img-dive">
                                <p class="loginnnn"><b>SignUp</b></p>
                                <b><p class="signuuuuu">Have already an Account?  <a href="{{route('login')}}">Login here!</a></p></b>
                              {{-- <img src="{{asset('assets/img/p-4.jpg')}}"  alt class="img-responsive"> --}}
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                <!--<ul class="nav nav-pills nav-justified mb-4" role="tablist">-->
                                <!--    <li class="nav-item mr-3">-->
                                <!--        <a class="nav-link" href="{{route('register')}}"><button class="btn btn-primary">Buyer</button></a>-->
                                <!--    </li>-->
                                <!--    <li class="nav-item">-->
                                <!--        <a class="nav-link active" href="{{route('customer')}}"><button class="btn btn-primary">Seller</button></a>-->
                                <!--    </li>-->
                                <!--</ul>-->
                
                                <form method="post" action="{{ route('register') }}"enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                   <div style="display: flex;margin-top: 20px;">
                                     <div class="form-group left">
                                        {{-- <input class="inputCommon"name="name" type="text" placeholder="User Name"> --}}
                                        <input type="text" name="name" class="inputCommon{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('Name') }}" value="{{ old('name', null) }}">
                                        <input class="form-control" type="hidden" value="seller" name="type" required="" placeholder="username">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        {{-- <input class="inputCommon"name="email" type="email" placeholder="Email Address"> --}}
                                        <input type="email" name="email" class="inputCommon{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Email') }}" value="{{ old('email', null) }}">
                                        <input name="pakage" type="hidden" value="1" id="example-date-input">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback"style="font-size: 11px;color: red;}">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    </div><!-- /.form-group -->
                                    <div style="display: flex;">
                                    <div class="form-group right">
                                        {{-- <input class="inputCommon"name="password" type="password" placeholder="Password"> --}}
                                        <input type="password" name="password" class="inputCommon{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Password') }}">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback"style="font-size: 11px;color: red;}">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        {{-- <input class="inputCommon"name="password" type="password" placeholder="Confirm Password"> --}}
                                        <input type="password" name="confirm_password" class="inputCommon" required placeholder="{{ trans('Password_confirmation') }}">
                
                                    </div><!-- /.form-group -->
                                    </div>
                                    <div class="form-group displayFlex">
                                        <input type="radio" value="Login">
                                        <label class="textRemeber">I Accept All The Terms And Conditions</label>
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="btn btn-primary btn-inversed btn-block">
                                    </div><!-- /.form-group -->
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
  <script src="{{asset('new/toastr/toastr.min.js')}}"></script>
  @toastr_render
@endsection