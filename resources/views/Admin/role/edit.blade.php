@extends('layouts.app')
@section('content')
                <form action="{{route('role.update',$role->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label class="custom-control-label col-sm-2" for="name">نام نقش</label>
                            <input class="form-control" type="text" placeholder="نام نقش" name="name" value="{{$role->name}}">
                        </div>

                    <div class="form-group">
                        <label class="custom-control-label col-sm-2" for="title">عنوان نقش</label>
                        <input class="form-control" type="text" placeholder="عنوان نقش" name="title" value="{{$role->title}}">
                    </div>
                    <div>
                        <select name="permission_id[]" multiple class="form-control">
                            @foreach($permissions as $permission)
                                <option value="{{$permission->id}}">
                                    {{$permission->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">save</button>
                    <button type="reset" class="btn btn-primary">cancel</button>
                </form>
<style>
    label{
        font-size:20px;
        font-weight: bold;
    }
</style>
@endsection

