@extends('layouts.app')
@section('content')
    <form action="{{route('permission.update')}}" method="post" class="form-bordered form-group">
        @csrf
        @method('PATCH')
        <input type="text" class="form-control" placeholder="permission" name="name" value="{{$permission->name}}">
        <br>
        <input type="text" class="form-control" placeholder="permission title" name="title" value="{{$permission->title}}">
        <br>
        <button type="submit"class="btn btn-primary">Create</button>
        <button type="reset"class="btn btn-danger">Cancel</button>

    </form>
@endsection
