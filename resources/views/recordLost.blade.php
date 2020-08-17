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

</style>
<body>
<div>
<form action="{{route('recordLost.store')}}" method="POST">
<div class="w3-container" style="text-align-last: right; ">
                <div class="title m-b-md" style="font-size:23px;color:#6C63FF; font-weight: bold; padding-top:30px; margin-right: 20px;">
                نشر تنويهات عن مفقود او معثور عليه
                                </div>
                <hr style="margin: 20px;">
   
     
            {{ csrf_field() }}
            @include('_msg')
                <div class="form-group">
                    <label for="space" >الفئه</label>
                        <select name="categorys_id" id="categorys" class="form-control" style="height: 50px;">
                        <option value="" selected="selected">الفئه</option> 
                        @foreach($categorys as $category)
                        <option value="{{ $category->id }}" >{{$category->name_category}}</option>
                        @endforeach                       
                        </select>
                </div>

                <div class="form-group">
                <label for="title">  التنويه عن </label>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="disclaimer"  value="مفقودة"> مفقودة</label>
                </div>

                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="disclaimer" value="معثور عليه"> معثور عليه </label>
                </div>
                </div>

               
                <div class="form-group">
                    <label for="title">اسم التنويه</label>
                    <input type="text" name="title" class="form-control" style="height: 50px;" placeholder=" هو العنوان الذي سوف يظهر به في قائمة التنويهات   لذا استخدم كلمات معبره، مثال : الحقيبة، جوال "
                    value="{{app('request')->get('title')}}">
                </div>

                <div class="form-group">
                    <label for="description">وصف</label>
                    <textarea rows="6" cols="50" type="text" name="description" class="form-control" placeholder="  لونها ، نوعها ...."
                    value="{{app('request')->get('description')}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="Place">المكان</label>
                    <select name="places_id" id="places" class="form-control" style="height: 50px;">
                        <option value="" selected="selected">    المكان    </option>
                        @foreach($places as $place)
                        <option value="{{ $place->id }}" >{{$place->name_place}}</option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="Place">التاريخ</label>
                <input style="height: 50px;" type="date" name="date" id="date" class="form-control" style="width: 100%; display: inline;" onchange="invoicedue(event);" value="{{app('request')->get('date')}}">
                </div>
<div>


<div class="w3-container" style="text-align-last: right;">
                <div class="title m-b-md" style="font-size:23px;color:#6C63FF; font-weight: bold; padding-top:30px; margin-right: -190px;">
                <i class='far fa-user' style="font-size: 20px;"></i>
                معلومات ناشر التنويه
                </div>
                <hr style="width: 180%; margin-right: -230px;">
                <div class="form-group" style="margin-left:-220px; margin-right:-220px;">
                    <label for="name">اسمك</label>
                    <input type="text" name="name" class="form-control"  style="height: 50px;"
                    value="{{app('request')->get('name')}}">
                </div>

                <div class="form-group" style="margin-left:-220px; margin-right:-220px;">
                    <label for="gmail">البريد الالكتروني</label>
                    <input type="text" name="gmail" class="form-control" style="height: 50px;"
                    value="{{app('request')->get('gmail')}}">
                </div>

                <div class="form-group" style="margin-left:-220px; margin-right:-220px;">
                    <label for="numberphone">رقم الهاتف</label>
                    <input type="number" name="numberphone" class="form-control" style="height: 50px;"
                    value="{{app('request')->get('numberphone')}}">
                </div>
        
                <div class="form-group">
                    <button href="submit" class="btn btn-success" style="color:white; background-color:#6C63FF;font-family: Tajawal;font-size: 16px; margin-right: 590px;padding-left: 30px;padding-right: 30px; margin-bottom: inherit;padding-top: 10px; ">نشر</button>
                </div>
               
                </div>
        </form>
    
        </div>
    

</body>

</html> 

@endsection
