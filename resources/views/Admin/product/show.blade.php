@extends('layouts.app')
@section('content')

    <div>
       نام محصول: <p>{{$product->name}}</p>
        <br>
        نام اضافه کننده محصول: <p>{{$product->user->name}}</p>
        <br>
        برند محصول <p>{{$product->brand}}</p>
        <br>
       توضیحات محصول <p>{{$product->body}}</p>
        <br>
        <img src="{{$product->image}}" alt="image" width="200" height="200">

    </div>



@endsection
