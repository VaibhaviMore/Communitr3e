<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    <title>Login</title>
</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
    <section id="content">
        <div class="content-wrap nopadding">
            <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('images/auth/login_bg.jpg') center center no-repeat; background-size: cover;"></div>
                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container-fluid vertical-middle divcenter clearfix">
                        <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                            <div class="card-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="nobottommargin" action="{{ route('login') }}" method="post">
                                    @csrf
                                    <h3>Login to your Account</h3>
                                    <div class="col_full">
                                        <label for="login-form-email">Email Address:</label>
                                        <input type="email" id="login-form-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col_full">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                    <div class="col_full">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type="submit">Login</button>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="fright">Forgot Password?</a>            
                                            @endif
                                        
                                    </div>
                                    <div class="col_full">
                                    <label class="form-check-label">
                                     Don't have an account? Register <a href="{{ route('register') }}">HERE</a>
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