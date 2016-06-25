@extends('admin.master')

@section('content')
    <div class="box">
        <form method="post" action="/admin/add-menu" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="text" name="type" placeholder="Type" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="Price" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="text" name="duration" placeholder="Duration" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="file" name="upload">
            </div>
            <input type="submit" value="Add" class="btn btn-default">
        </form>
    </div>
@stop
