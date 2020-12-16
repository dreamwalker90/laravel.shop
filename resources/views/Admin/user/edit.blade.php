@extends('layouts.app')
@section('content')
    <form action="{{route('user.update',$user->id)}}" method="post" >
        @csrf
        @method("PATCH")
        <div class="form-group">
            <input class="form-control" type="text" placeholder="name" name="name" value="{{$user->name}}">
            <input class="form-control" type="email" placeholder="email" name="email" value="{{$user->email}}">
        </div>

        <div class="form-group">
            <select name="roles_id[]" id="">
                @foreach($roles as $role)
                <option value="{{$role->id}}">
                    {{$role->title}}
                </option>
                @endforeach
            </select>
        </div>


        <div class="btn btn-group">
            <button type="reset" class="btn btn-danger">cancel</button>
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </form>


    <style>
        label{
            font-size:20px;
            font-weight: bold;
        }
    </style>
@endsection

