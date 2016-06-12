<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Menulist - Dota Resto - GG Team</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="brand">Dota Resto</div>
<div class="address-bar">Bina Nusantara | Kemanggisan, Jakarta Barat | 123.456.7890</div>
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
            <a class="navbar-brand" href="index.html">Dota Resto</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/admin/foodlist">Menu List</a>
                </li>
                <li>
                    <a href="recipe.html">Recipe</a>
                </li>
                <li>
                    <a href="testimony.html">Testimony</a>
                </li>
                <li>
                    <a href="/admin/view-order">View Orders</a>
                </li>
                <li>
                    <a href="viewingredient.html">View Ingredients</a>

                <li>
                    <a href="/logout">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        @yield('content')
    </div>

</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; GG Team 2016</p>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@yield('js')
</body>
