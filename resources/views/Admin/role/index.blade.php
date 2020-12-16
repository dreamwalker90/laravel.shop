@extends('layouts.app')
@section('content')


    <table class="table text-center table-bordered table-hover table-striped">
        <tr class="thead-dark">
            <th>ردیف</th>
            <th>نام سطح دسترسی</th>
            <th>عنوان سطح دسترسی</th>
            <th>ویرایش</th>
            <th>حدف</th>
        </tr>
        @foreach($roles as$key=>$role)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->title}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('role.edit',$role->id)}}">ویرایش</a>
                </td>
                <form method="post" action="{{route('role.destroy',$role->id)}}">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" class="btn btn-danger">حذف</button></td>
                </form>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{$roles->links('layouts.paginate')}}
    </div>
@endsection

