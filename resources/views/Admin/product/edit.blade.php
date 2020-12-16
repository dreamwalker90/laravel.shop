@extends('layouts.app')
@section('content')
                <form action="{{route('products.update',$product->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label class="custom-control-label col-sm-2" for="name">name</label>
                            <input class="form-control" type="text" placeholder="name" name="name" value="{{$product->name}}">
                        </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="brand">brand</label>
                        <input class="form-control" type="text" placeholder="brand" name="brand"value="{{$product->brand}}">
                    </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="body">description</label>
                        <textarea placeholder="description" name="body" class="form-control">{!!  $product->body!!}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="price">price</label>
                        <input class="form-control"  type="number" placeholder="price" name="price" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="discount">discount</label>
                        <input class="form-control" type="number" placeholder="discount" name="discount" value="{{$product->discount}}">
                    </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="image">image</label>
                        <input class="form-control-file" type="file" name="image">
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

