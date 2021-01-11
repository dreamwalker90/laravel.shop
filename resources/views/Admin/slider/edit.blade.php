@extends('layouts.app')
@section('content')
    <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="custom-control-label col-sm-2" for="title">title</label>
            <input class="form-control" type="text" placeholder="title" name="title" value="{{$slider->title}}">
        </div>
        <div class="form-group">
            <label class="custom-control-label col-sm-2" for="url">url</label>
            <input class="form-control" type="text" placeholder="url" name="url" value="{{$slider->url}}">
        </div>
        <div class="form-group">
            <label class="custom-control-label col-sm-2" for="brand">image</label>
            <input class="form-control-file" type="file" name="image">
        </div>
        <div class="form-group">
            <img src="{{asset('storage/images/'.$slider->image)}}" alt="{{$slider->image}}" height="100">
        </div>
        <button type="submit" class="btn btn-primary">save</button>
        <button type="reset" class="btn btn-danger">cancel</button>
    </form>
    <style>
        label {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
@endsection

