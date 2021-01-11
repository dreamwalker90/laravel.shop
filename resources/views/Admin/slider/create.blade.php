@extends('layouts.app')
@section('content')
     <div style="font-size: large">Creating New Slider</div>
    <br>
                <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                            <input class="form-control" type="text" placeholder="Tilte" name="title" value="{{old('title')}}">
                        </div>
                    <div class="form-group">

                        <input class="form-control" type="text" placeholder="url" name="url" value="{{old('url')}}">
                    </div>
                    <div class="form-group">

                        <input type="file" class="form-control-file"  name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">save</button>
                    <button type="reset" class="btn btn-danger">cancel</button>
                </form>
@endsection

