@extends('layouts.app')
@section('content')
     <div style="font-size: large">Creating New Slider</div>
    <br>
                <form action="{{route('slider.index')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        category title
                            <input class="form-control" type="text" placeholder="Tilte" name="title" value="{{old('title')}}">
                        </div>
                    <div class="form-group">
                        farsi title
                        <input class="form-control" type="text" placeholder="farsi_Tilte" name="title_fa" value="{{old('title_fa')}}">
                    </div>

                        <div class="form-group">
                           <lable> سرگروه</lable>
                            <select name="chid" class="form-control">
                                @foreach($cats as $val)
                                    <option name="{{$val['id']}}" > {{$val['title']}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                    <button type="reset" class="btn btn-danger">cancel</button>
                </form>


<style>
    label{
        font-size:20px;
        font-weight: bold;
    }
</style>
@endsection

