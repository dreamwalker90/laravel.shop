@extends('layouts.app')
@section('content')
     <div style="font-size: large">Creating New Category</div>
    <br>
                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        category title
                            <input class="form-control" type="text" placeholder="Tilte" name="title" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            category persian title
                            <input class="form-control" type="text" placeholder="farsi_title" name="title_fa"
                                   value="{{old('title_fa')}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>
                </form>


<style>
    label{
        font-size:20px;
        font-weight: bold;
    }
</style>
@endsection

