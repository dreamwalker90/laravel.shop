@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover table-bordered">
    <tr>
        <th class="thead-info">ردیف</th>
        <th class="thead-info">نام دسترسی</th>
        <th class="thead-info">عنوان دسترسی</th>
        <th class="thead-info">ویرایش دسترسی</th>
        <th class="thead-info">حذف دسترسی</th>
    </tr>
    @foreach($permissions as $key=>$permission)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$permission->name}}</td>
        <td>{{$permission->title}}</td>
        <td><a href="{{route('permission.edit',$permission->id)}}" class="btn btn-primary">ویرایش</a></td>

            <form action="{{route('permission.destroy',$permission->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td> <button type="submit"class="btn btn-danger">حدف</button></td>
            </form>

    </tr>
    @endforeach
</table>


@endsection
