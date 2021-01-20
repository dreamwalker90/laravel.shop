@extends('layouts.app')
@section('content')
                <form action="{{route('category.update',$category->id)}}" method="post" >
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label class="custom-control-label col-sm-2" for="name">name</label>
                            <input class="form-control" type="text" placeholder="title" name="title" value="{{$category->title}}">
                        </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="brand">brand</label>
                        <input class="form-control" type="text" placeholder="brand" name="brand"value="{{$category->title_fa}}">
                    </div>

                    <button type="submit" class="btn btn-primary">save</button>
                </form>
<style>
    label{
        font-size:20px;
        font-weight: bold;
    }
</style>
@endsection

