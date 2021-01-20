@extends('layouts.app')
@section('content')
<section class="panel">
    <header class="panel-header">
        افزودن گالری به{{$product->name}}
    </header>
</section>

    <div class="form-group">
        <form method="post" action="{{url('Admin/products/upload?id='.$product->id)}}" class="dropzone dz-clickable" enctype="multipart/form-data">
            @csrf
            <div class="dz-default dz-message">
                <input style="display: none" type="file" name="file" multiple >
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
