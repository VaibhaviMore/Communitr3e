<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    <title>Register</title>
</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
    <section id="content">
        <div class="content-wrap nopadding">
            <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('images/auth/register_bg.jpg') center center no-repeat; background-size: cover;"></div>
                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container-fluid vertical-middle divcenter clearfix">
                        <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                            <div class="card-body" style="padding: 40px;">
                                <form id="register-form" name="register-form" class="nobottommargin" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h3>New Signup? Register for an Account</h3>
                                    <div class="col_full">
                                        <label for="register-form-name">First Name:</label>
                                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" autofocus>
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-name">Last Name:</label>
                                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" autofocus>
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                    <div class="col_full">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="email" id="register-form-email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"/>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif   
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-password">Choose Password:</label>
                                        <input type="password" id="register-form-password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"/>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-repassword">Re-enter Password:</label>
                                        <input type="password" id="register-form-repassword" name="password_confirmation"  class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"/>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" type="submit" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                    </div>
                                   

                                    <div class="col_full">
                                    <label class="form-check-label">
                                    Already have an account? Login <a href="{{ route('login') }}">HERE</a>
                                    </label>
                                    </div>

                                    <div class="col-full center">

                                    <a href="{{ url('/home') }}" class="button button-rounded button-reveal button-small button-border"><i class="icon-home"></i><span>Go Back To Home</span></a>
                                   
                                        </div>

                                </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.partials.footer-scripts')
</body>
</html>