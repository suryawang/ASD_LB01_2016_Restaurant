@extends('master')

@section('title', 'Contact')

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>Dota Resto</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Kemanggisan,+West+Jakarta+City,+Special+Capital+Region+of+Jakarta,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>123.456.7890</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:cs@dotaresto.com">cs@dotaresto.com</a></strong>
                </p>
                <p>Address:
                    <strong>Bina Nusantara
                        <br>Kemanggisan, Jakarta Barat</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>form</strong>
                </h2>
                <hr>
                <p>We love to hear your opinion!</p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection