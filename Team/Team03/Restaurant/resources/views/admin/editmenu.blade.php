@extends('admin.master')

@section('content')
    <div class="box">
        <form method="post" action="/admin/edit-menu" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="id" value="{{ $menu->id }}">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $menu->name }}"/>
            </div>
            <div class="form-group">
                <input type="text" name="type" placeholder="Type" class="form-control" value="{{ $menu->type }}"/>
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="Price" class="form-control"value="{{ $menu->price }}"/>
            </div>
            <div class="form-group">
                <input type="text" name="duration" placeholder="Duration" class="form-control" value="{{ $menu->duration }}"/>
            </div>
            <div class="form-group">
                <input type="file" name="upload">
            </div>
            <input type="submit" value="Update" class="btn btn-default">
        </form>
    </div>
@stop
