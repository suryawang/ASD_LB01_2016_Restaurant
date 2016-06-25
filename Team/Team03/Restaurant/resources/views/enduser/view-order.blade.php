@extends('master')

@section('title', 'Menu')

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Your order</h2>
                <hr>
            </div>
			@if(isset($orders))
            @foreach($orders as $key => $order)
                <div class="col-lg-12 text-center">
					<div class="col-lg-4">
						<img class="img-responsive img-border" src="{{ asset('assets/img/menu/'.$order['food']['picture']) }}" alt="">
					</div>
					<div class="col-lg-8">
						<h3>{{ $order["food"]["name"] }}
							<br>
							<small>{{ $order["food"]["price"] }} IDR</small>
						</h3>
						<div>{{ $order["qty"] }} pcs</div>
					</div>
                </div>
            @endforeach
            <a href="/submit-order/{{ $seat }}" class="btn btn-default" style="margin-top:15px;">Submit Order</a>
			@else
				<p>No order in this table.</p>
			@endif
        </div>
    </div>
@endsection