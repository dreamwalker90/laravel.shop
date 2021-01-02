@extends('layouts.app')
@section('content')


    <table class="table text-center table-bordered table-hover table-striped">
        <tr class="thead-dark">
            <th>ردیف</th>
            <th>نام دسته بندی</th>
            <th>نام فارسی دسته بندی</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        @foreach($category as$key=>$val)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$val->title}}</td>
                <td>{{$val->title_fa}}</td>
                <td>
{{--                @can('editing_Products',$product)--}}
                    <a class="btn btn-primary" href="{{route('category.edit',$val->id)}}">Edit</a>
{{--                @endcan--}}
                </td>
                <form method="post" action="{{route('category.destroy',$val->id)}}">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{$category->links('layouts.paginate')}}
    </div>
@endsection

