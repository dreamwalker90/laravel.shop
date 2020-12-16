@extends('layouts.app')
@section('content')
    <form action="{{route('role.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" placeholder="نام نقش" name="name" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <input class="form-control" type="text" placeholder="عنوان نقش " name="title"
                   value="{{old('title')}}">
        </div>
            <div>
                <select name="permission_id[]" multiple class="form-control" >
                    @foreach($permissions as $permission)
                    <option value="{{$permission->id}}">
                        {{$permission->title}}
                    </option>
                    @endforeach
                </select>
            </div>
        <br>
        <button type="submit" class="btn btn-primary">save</button>
        <button type="reset" class="btn btn-danger">cancel</button>
    </form>

    <style>
        label {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
@endsection

