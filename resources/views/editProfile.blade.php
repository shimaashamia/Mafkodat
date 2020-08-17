@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
<body>

<nav style="text-align-last:right; margin-right: 250px; margin-top: -50px; padding-top: 100px;">
<a href="/">الرئيسيه</a> /
<a href="#!">الملف الشخصي</a> 
</nav>



<div class="w3-container" style="text-align-last:right; height: 500px; margin-top: 35px;"> 
<img src="../images/تنزيل.png" alt="description here" style="width:150px; float: right; margin: 20px;height: 190px; "/> 
<div class="title" style="display: inline-block; padding-top: 60px;"> 
<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" >
<input type="text" class="form-control" name="email" ng-model="{{ Auth::user()->email }}">
<input type="text" class="form-control" name="id_number" ng-model="{{ Auth::user()->id_number }}">

  <h2 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;">{{ Auth::user()->name }} </h2>
  <h4 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;">{{ Auth::user()->email }}</h4>
  <h4 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;">{{ Auth::user()->id_number }}</h4>  
</div>

  <hr style="border-color: #ccccc5;">
  <div  style="margin: 20px;">
  <td><i class='far fa-heart' style="padding-top:47px; font-size: xx-large;margin-right:5px; margin:10px;"></i> المفضلة</td>
  <br>
  <td><i class="fa fa-file-text-o" style="font-size: xx-large; margin-right:5px; margin:10px;"></i><a href="/post"> منشوراتي </td>
  <br>
  <td>
  <i class="fa fa-sign-out" style="font-size: xx-large; margin-right:5px;margin:10px;"></i>
<a class="dropdown-item" href="{{ route('logout') }}" style="    display: contents;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __(' تسجيل خروج') }}
                                    </a>
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: contents;">
                                        @csrf
                                    </form>
  <!-- <td><i class="fa fa-sign-out" style="font-size: xx-large; margin-right:5px;margin:10px;"></i><a href="{{ route('logout') }}"> تسجيل خروج </a></td> -->
  </td>
<button class="button button2" style="float: left;margin: 40px;">  <i class="fas fa-pen"></i>  تعديل الملف الشخصي</button>
</div>
</body>
</html> 

@endsection
