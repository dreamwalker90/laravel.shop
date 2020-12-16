@extends('layouts.app')
@section('content')


    <table class="table text-center table-bordered table-hover table-striped">
        <tr class="thead-dark">
            <th>ردیف</th>
            <th>نام محصول</th>
            <th>برند محصول</th>
            <th>تصویر محصول</th>
            <th>قیمت</th>
            <th>ویرایش</th>
            <th>حدف</th>
        </tr>
        @foreach($products as$key=>$product)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->brand}}</td>
                <td><img src="{{$product->image}}" alt="image" width="70"></td>
                <td>{{number_format($product->price)}} ریال</td>
                <td>
{{--                @can('editing_Products',$product)--}}
                    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">ویرایش</a>
{{--                @endcan--}}
                </td>
                <form method="post" action="{{route('products.destroy',$product->id)}}">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" class="btn btn-danger">حذف</button></td>
                </form>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{$products->links('layouts.paginate')}}
    </div>
@endsection

