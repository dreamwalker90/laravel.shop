@extends('layouts.app')
@section('content')
    <div style="font-size: large">Creating new filter</div>
    <br>
    <form action="{{route('filter.store')}}" method="post">
        @csrf
        <div class="col-sm-12">
            <lable> دسته بندی</lable>
            <select name="cat_id" class="form-control">
                @foreach($cats as $val)
                    <option name="{{$val['id']}}"> {{$val['title']}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-12">
            <lable> دسته بندی</lable>
            <select name="cat_id" class="form-control">
                @foreach($filters as $val)
                    <option name="{{$val['id']}}"> {{$val['name']}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group" style="margin-top:10px " >
          <label class="col-sm-2" style="display: flex;justify-content: flex-end">
               <span class="btn btn-danger" onclick="addFilter()">افزودن فیلتر</span>
            </label>
            <div class="col-sm-10" id="filters_holder">

            </div>
        </div>
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
@section('script')
    <script>
        function addFilter() {
            let count=document.getElementsByClassName('filter_div').length;
            let txt =
                '<div style="height: 30px;margin: 5px 0;" class="filter_div">' +
                '<input name="name['+count+']" type="text" style="margin-left: 3px" class="form-group" placeholder="نام فیلتر">' +
                '<input name="en_name['+count+']" type="text" style="margin-left: 3px" class="form-group" placeholder="نام انگلیسی فیلتر">' +
                '<select name="type['+count+']" id="">' +
                '<option  value="1">radio button</option>' +
                '<option  value="2">color selector</option>' +
                '</select>' +
                '</div>'
            ;
            $("#filters_holder").append(txt);
        }

    </script>

@endsection

