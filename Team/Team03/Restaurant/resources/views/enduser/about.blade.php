@extends('master')

@section('title')
    About
@endsection

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">About
                    <strong>Dota Resto</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="{{ asset('assets/img/slide-2.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
				<p style="text-align: justify">Dota Resto was founded in 2016. Located on Bina Nusantara, Jakarta. The concept was simply to create a cozy environment that was well suited to have great conversations, served quality freshly cooked meals and offered great draft beer and spirit selections. After more then two decades of fine-tuning, product development, and loads of hard work, we have what you see today.</p>
				<p style="text-align: justify">Today, we still offer a stimulating atmosphere with lots of conversation pieces on the walls and serve excellent quality, fresh cooked meals. We are defined as a main stream casual dining restaurant with an integrated sports bar area that caters to the community and local businesses. We provide friendly, attentive service in a relaxed environment by staff and owners that truly enjoy their job.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Our
                    <strong>Team</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Kevin Nathanael
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Tommy Lee
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Djordi Yoel
                </h3>
            </div>
			<div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Yenny Agustina
                </h3>
            </div>
			<div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Gloria Christiana
                </h3>
            </div>
			<div class="col-sm-4 text-center">
                <img class="img-responsive" src="" alt="">
                <h3>Mia Authri
                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection