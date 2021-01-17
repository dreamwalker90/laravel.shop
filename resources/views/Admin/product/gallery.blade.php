@extends('layouts.app')
@section('content')


    <div class="form-group">
        <form method="post" action="{{url('Admin/products/upload')}}" class="dropzone dz-clickable" enctype="multipart/form-data">
            @csrf
            <div class="dz-default dz-message">
                <input type="file" name="file" multiple >
            </div>
            <button type="submit" class="btn btn-primary">save</button>
            <button type="reset" class="btn btn-danger">cancel</button>
        </form>
    </div>




    <style>
        label {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
@endsection

@section('script')
    <script src="/js/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection
