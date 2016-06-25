@extends('admin.master')

@section('content')
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Company
                <strong>Recipe</strong>
            </h2>
            <hr>
            <a href="/admin/add-menu" class="btn btn-default">Add A Menu</a>
        </div>
        @foreach($menus as $menu)
            <div class="col-lg-3 text-center">
                <img class="img-responsive img-border img-full" src="{{ asset('/assets/img/menu/'.$menu->picture) }}" alt="">
                <h2>{{ $menu->name }}
                    <br>
                </h2>
                <a href="/admin/edit-menu/{{ $menu->id }}" class="btn btn-info btn-md">Edit</a>
                <a href="/admin/delete-menu/{{ $menu->id }}" class="btn btn-danger btn-md" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?">Delete</a>
                <hr>
            </div>
        @endforeach
        {{--<div class="col-lg-12 text-center">--}}
        {{--<ul class="pager">--}}
        {{--<li class="previous"><a href="#">&larr; Older</a>--}}
        {{--</li>--}}
        {{--<li class="next"><a href="#">Newer &rarr;</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>
@stop

@section('js')
    <script src="{{ asset('/assets/js/delete.js') }}"></script>
@stop
