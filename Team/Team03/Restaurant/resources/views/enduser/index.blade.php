@extends('master')

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="{{ asset('assets/img/slide-1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="{{ asset('assets/img/slide-2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="{{ asset('assets/img/slide-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">Dota Resto</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>GG Team Ever</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Est
                    <strong>2016</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="{{ asset('assets/img/intro-pic.jpg') }}" alt="">
                <hr class="visible-xs">
                <p style="text-align: justify">Dota Resto was founded in 2016. Located on Bina Nusantara, Jakarta. The concept was simply to create a cozy environment that was well suited to have great conversations, served quality freshly cooked meals and offered great draft beer and spirit selections. After more then two decades of fine-tuning, product development, and loads of hard work, we have what you see today.</p>
				<p style="text-align: justify">Today, we still offer a stimulating atmosphere with lots of conversation pieces on the walls and serve excellent quality, fresh cooked meals. We are defined as a main stream casual dining restaurant with an integrated sports bar area that caters to the community and local businesses. We provide friendly, attentive service in a relaxed environment by staff and owners that truly enjoy their job.</p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
@endsection