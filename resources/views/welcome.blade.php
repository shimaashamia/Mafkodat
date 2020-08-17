
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* html, body {
                direction: rtl; */


 /* background-image: url('https://ak.picdn.net/shutterstock/videos/1033963304/thumb/1.jpg');   */
 /* background-image: url('../images/2.jpg'); */
 
 /* background-size: cover;  */
/* background-repeat: no-repeat;  */
/* font-family:'Tajawal'; */
/* height: 50%;
font-family: 'Numans', sans-serif;
direction: rtl; */


                /* background-color: #fff; */
                /* color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200; */
                /* height: 100vh; */
                /* margin: 0; */
            /* } */

            /* .navbar {
    font-family: "Tajawal";
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;

            } */
/* 
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            } */

            /* .m-b-md {
                margin-bottom: 30px;
            }

.dropbtn {
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}



.dropdown {
  position: relative;
  display: inline-block;
} */
/* 
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  height: 45px;

} */

/* .dropdown a:hover {background-color: #ddd;}

.show {
  display: block;
   height: 112px;
    background: white;
    padding: 10px;
    /* border: 0.5px solid black; */
  /* border-radius: 5px;
    } */ 

/*Resize the wrap to see the search bar change!*/

/* .wrap{
  width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 2px solid black;

}
.search {
  width: 100%;
  position: relative;
  display: flex;

} */
/* .searchTerm {
  width: 100%;
  padding-right: 40px;

}
.searchTerm:focus{
  color: #00B4CC;
}
.btn {
  height: 40px;
}
#input_img {
    position:absolute;
    bottom:8px;
    right:5px;
    width:24px;
    height:24px;
} */
/* #loc_img {
    position:absolute;
    bottom:8px;
    right:355px;
    width:24px;
    height:24px;


}
h1,h4{
  text-align: center;
  /* font-family: Tajawal; */

}
/* .button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;  */
    /* display: block; */
    /* background: #4E9CAF; */
    /* color: #8A2BE2; */
    /* padding: 2px;
    text-align: center;
    border-radius: 10px; */
    /* padding: 8px 16px; */
    /* color: white; */
    /* font-weight: bold; */
    /* border-style: solid;
  border-bottom-width: thin; */

    
}
/* 
.w3-container{
  background-color: #f6f6f6;;
  margin: 50px;
    margin-left: 250px;
    margin-right: 250px;
  } */


        </style>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    </head>
    <body>
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('امانه', 'امانه') }} -->
                    <!-- امانه -->
                    <!-- app.name -->
                    <!-- Laravel -->

                <!-- </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right: 60%;"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partlost') }}">الرئيسيه</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{ route('call') }}">  اتصل بنا </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                            
                            @if (Route::has('register')) -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('انشئ') }}</a>
                                </li> -->
                            <!-- @endif -->
                            <!-- <li class="nav-item">
                            <div class="dropdown">
                            <i class="fa fa-plus-circle dropbtn" aria-hidden="true" onclick="myFunction()" style="padding-top:16px;color: #8A2BE2;"></i> -->
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->

  <!-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> -->
  <!-- <div id="myDropdown" class="dropdown-content">
    <a href="/recordLost" class="button" style="color:white; background-color:#8A2BE2;font-family: Tajawal;">اضف مفقوده</a>
    <a href="/recordFound" class="button" style="color:white; background-color:#8A2BE2;font-family: Tajawal;">اضف معثور عليه</a>
  </div> -->
<!-- </div> -->
<!-- </li> -->
                 <!-- <div class="links">
                    <a href="/recordLost" type="button" class="btn-lg" >اضف مفقوده</a>
                    <a href="/recordFound" type="button" class="btn-lg">اضف معثور عليه</a>
            </div>  -->
                        <!-- @else
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partlost') }}">الرئيسيه</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{ route('call') }}">  اتصل بنا </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}  -->
                                    <!-- <span class="caret"></span> -->
                                <!-- </a> -->
                               
                              
                        

                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="position: initial;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="font-family: Tajawal;">
            @yield('content')
        </main>
    </div> -->


    <!-- <nav style="text-align-last:right; margin-right: 250px; margin-top: -50px; padding-top: 100px;">
<a href="/">الرئيسيه</a> /
<a href="#!">الملف الشخصي</a> 
</nav>



<div class="w3-container" style="text-align-last:right; height: 500px; margin-top: 35px;"> 
<img src="../images/تنزيل.png" alt="description here" style="width:150px; float: right; margin: 20px;height: 190px; "/> 
<div class="title" style="display: inline-block; padding-top: 60px;"> 
  <h2 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;"> {{ $lost->title ??''}}  بسنت الاغا </h2>
  <h4 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;"> {{ $lost->disclaimer ??''}} besant@gmail.com</h4>
  <h4 style="font-size:15px; font-weight: bold; padding-top:20px; padding-right: 20px;"> {{ $lost->numberphone ??''}} 321213131</h4>  
</div>

  <hr style="border-color: #ccccc5;">
  <div  style="margin: 20px;">
  <td><i class='far fa-heart' style="padding-top:47px; font-size:24px"></i> المفضلة</td>
  <p style="font-size:15px margin-right: 5px;"> منشوراتي </p> 
  <p style="font-size:15px; margin-right: 5px;">تسجيل خروج</p> 
</div>
<button class="button button2" style="float: left;margin: 40px;">تعديل الملف الشخصي</button>
</div>
 -->

    


    <!-- <div class="container">
      <h1 style=" padding-top:55px;font-family: Tajawal;">البحث عن المفقودات</h1>
      <h4 style=" padding-top:45px;font-family: Tajawal;"> قال تعالى "إِنَّ اللَّهَ يَأْمُرُكُمْ أَن تُؤَدُّواْ الأَمَانَاتِ إِلَى أَهْلِهَا وَإِذَا حَكَمْتُم بَيْنَ النَّاسِ أَن تَحْكُمُواْ بِالْعَدْلِ" </h4>
      <form class="navbar-form" role="search">
        <div class="wrap">
          <div class="search"> -->
            <!-- <i class="fa fa-question-circle icon" aria-hidden="true"></i> -->
            <!-- <input class="searchTerm" placeholder="عن ماذا تبحـث ؟" name="srch-term" id="input" type="text">
            <img src="https://img.icons8.com/metro/26/000000/help.png" id="input_img"/>
            <select name="srch-term" id="input" class="searchTerm" placeholder="اين   ؟">
                        <option value="" selected="selected"> المكان </option>
                        <option value="saab">مبنى المدينه المنوره </option>
                        <option value="saab">مبنى القدس </option>
                        <option value="saab"> الساحه </option>
                        <option value="saab"> اخرى </option>
                        </select> -->
            <!-- <input class="searchTerm" placeholder="اين   ؟" name="srch-term" id="input" type="text">
            <img src="../images/gps.png" id="loc_img"/> -->

            <!-- <div class="input-group-btn"> -->
            <!-- <button class="btn btn-primary" type="submit" style="background-color:#8A2BE2;"><i class="glyphicon glyphicon-search"></i><strong>إبحث</strong></button> -->
            <!-- </div>  -->
          <!-- </div> 
        </div>
      </form>

    </div> -->


        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
// function myFunction() {
//   document.getElementById("myDropdown").classList.toggle("show");
// }

// Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
// </script>
    </body>
</html>
@endsection
