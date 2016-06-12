<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Dota Resto - GG Team</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.elements.css') }}" rel="stylesheet">
    <li
</head>
<body>
<div class="brand">Dota Resto</div>
{{--<div class="address-bar">Bina Nusantara | Kemanggisan, Jakarta Barat | 123.456.7890</div>--}}
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Dota Resto</a>
        </div>
        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li>--}}
                    {{--<a href="index.html">Home</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="about.html">About</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="menu.html">Menu</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="contact.html">Contact</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="login.html">Login</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
</nav>
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="/login" method="post" class="login-form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn btn-success">Sign in!</button>
                            {{--<button type="submit" class="btn btn-danger">Sign up!</button>--}}
                        </form>
                    </div>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-sm-6 col-sm-offset-3 social-login">--}}
                    {{--<h3>or login with:</h3>--}}
                    {{--<div class="social-login-buttons">--}}
                        {{--<a class="btn btn-link-1 btn-link-1-facebook" href="#">--}}
                            {{--<i class="fa fa-facebook"></i> Facebook--}}
                        {{--</a>--}}
                        {{--<a class="btn btn-link-1 btn-link-1-twitter" href="#">--}}
                            {{--<i class="fa fa-twitter"></i> Twitter--}}
                        {{--</a>--}}
                        {{--<a class="btn btn-link-1 btn-link-1-google-plus" href="#">--}}
                            {{--<i class="fa fa-google-plus"></i> Google Plus--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>