@extends('layouts.app')
@section('content')


    <table class="table text-center table-bordered table-hover table-striped">
        <tr class="thead-dark">
            <th>ردیف</th>
            <th>نام کاربر</th>
            <th>ویرایش</th>
            <th>حذف</th>

        </tr>
        @foreach($users as$key=>$user)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('user.edit',$user->id)}}">ویرایش</a>
                </td>
                <td>
                    <form method="post" action="{{route('user.destroy',$user->id)}}">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{$users->links('layouts.paginate')}}
    </div>
@endsection

