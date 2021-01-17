@extends('layouts.app')
@section('content')

    <div class="table-container">
        <table class="table text-center table-bordered table-hover table-striped">
            <tr class="thead-dark">
                <th>ردیف</th>
                <th>نام محصول</th>
                <th>برند محصول</th>
                <th>تصویر محصول</th>
                <th>قیمت</th>
                <th>گالری تصاویر</th>
                <th>جزئیات محصول</th>
                <th>ویرایش</th>
                <th>حدف</th>
            </tr>
            @foreach($products as$key=>$product)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand}}</td>
                    <td><img height="30" width="30" src="{{url($product->image)}}" alt="image" ></td>
                    <td>{{number_format($product->price)}} ریال</td>
                    <td>
                        <a class="btn btn-info" href="products/gallery?id={{$product->id}}">گالری تصاویر</a>
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('products.show',$product->id)}}">جزئیات محصول</a>
                    </td>
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
    </div>
    <div class="text-center">
        {{$products->links('layouts.paginate')}}
    </div>
@endsection

