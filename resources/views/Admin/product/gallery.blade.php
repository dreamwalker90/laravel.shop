@extends('layouts.app')
@section('content')
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    افزودن گالری به {{$product->name}}
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="brand" name="brand"
                               value="{{old('brand')}}">
                    </div>

                    <div class="form-group">
                        <textarea placeholder="description" name="body" class="form-control"
                                  value="{{old('body')}}"></textarea>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="price" name="price"
                               value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="discount" name="discount"
                               value="{{old('discount')}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control-file" type="file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">save</button>
                    <button type="reset" class="btn btn-danger">cancel</button>
                </form>


<style>
    label{
        font-size:20px;
        font-weight: bold;
    }
</style>
@endsection

