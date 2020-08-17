@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

/* body{
    direction: rtl;
} */
</style>
<body>
  
<div class="container" id="add_new_task" style="text-align-last: right;">
<div class="title m-b-md">
                    النشر عن المفقوده
                </div>
                <hr>
    <div class="panel-body">
    <div class="row">
        
            <form action="{{route('recordFound.store')}}" method="POST">
            {{ csrf_field() }}
            @include('_msg')
            <div class="form-group">
                    <label for="space">الفئه</label>
                        <select name="categorys_id" id="categorys" class="form-control">
                        <option value="" selected="selected">الفئه</option> 
                        @foreach($categorys as $category)
                        <option value="{{ $category->id }}" >{{$category->name_category}}</option>
                        @endforeach                       
                        </select>
                </div>



                <div class="form-group">
                    <label for="title">اسم التنويه</label>
                    <input type="text" name="title" class="form-control"
                    value="{{app('request')->get('title')}}">
                </div>


                <div class="form-group">
                    <label for="description">وصف</label>
                    <input type="text" name="description" class="form-control"
                    value="{{app('request')->get('description')}}">
                </div>

                <div class="form-group">
                    <label for="Place">المكان</label>
                    <select name="places_id" id="places" class="form-control">
                        <option value="" selected="selected">    المكان    </option>
                        @foreach($places as $place)
                        <option value="{{ $place->id }}" >{{$place->name_place}}</option>
                        @endforeach   
                        </select>
                </div>


   
        <hr>
        <div class="title m-b-md">
                   معلومات عن الناشر
                </div>
                <hr>

                <div class="form-group">
                    <label for="name">اسمك</label>
                    <input type="text" name="name" class="form-control"
                    value="{{app('request')->get('name')}}">
                </div>

                <div class="form-group">
                    <label for="gmail">البريد الالكتروني</label>
                    <input type="text" name="gmail" class="form-control"
                    value="{{app('request')->get('gmail')}}">
                </div>

                <div class="form-group">
                    <label for="numberphone">رقم الهاتف</label>
                    <input type="text" name="numberphone" class="form-control"
                    value="{{app('request')->get('numberphone')}}">
                </div>
        
                <div class="form-group">
                    <button href="submit" class="btn btn-success">اعتماد</button>
                </div>
               

            </form>
         <div>
    </div>
    </div>
    </div>


</body>
</html> 

@endsection
