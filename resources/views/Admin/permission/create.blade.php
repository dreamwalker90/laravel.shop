@extends('layouts.app')
@section('content')
    <form action="{{route('permission.store')}}" method="post" class="form-bordered form-group">
        @csrf
        <input type="text" class="form-control" placeholder="permission" name="name">
        <br>
        <input type="text" class="form-control" placeholder="permission title" name="title">
        <br>
        <button type="submit"class="btn btn-primary">Create</button>
        <button type="reset"class="btn btn-danger">Cancel</button>

    </form>
@endsection
