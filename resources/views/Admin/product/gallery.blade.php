@extends('layouts.app')
@section('content')


    <div class="form-group">
            <form method="post" action="{{url('Admin/products/upload?id='.$product->id)}}" class="dropzone dz-clickable" >
                @csrf
                <div class="dz-default dz-message">
                    <button class="dz-button" type="button">Drop files here to upload</button>
                </div>
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
