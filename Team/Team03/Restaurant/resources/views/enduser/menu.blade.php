@extends('master')

@section('title', 'Menu')

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Company
                    <strong>Menu</strong>
                </h2>
                <hr>
            </div>
            <form action="/seat" method="post">
                {!! csrf_field() !!}
                <span>Choose your seat number</span>
                <select name="seat">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <input type="submit" value="Submit"/>
            </form>
            @if($seat != 0)
                <div>
                <a href="/view-order/{{ $seat }}" class="btn btn-default btn-lg">View Order</a>
                </div>
                <div>
                    Your seat is {{ $seat }}
                </div>
            @endif
            @foreach($menus as $menu)
            <div class="col-lg-3 text-center">
                <img class="img-responsive img-border img-full" src="{{ asset('assets/img/menu/'.$menu->picture) }}" alt="">
                <h3>{{ $menu->name }}
                    <br>
                    <small>{{ $menu->price }} IDR</small>
                </h3>
                @if($seat != 0)
                <a href="/order/{{ $seat."/".$menu->id }}" class="btn btn-default btn-lg">Buy</a>
                @endif
                <hr>
            </div>
            @endforeach
			<!--
            <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
@endsection