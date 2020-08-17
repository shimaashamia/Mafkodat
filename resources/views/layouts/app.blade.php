<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
body , html{
    /* dir="rtl" */
    direction: rtl;
    /* background-image: url('https://ak.picdn.net/shutterstock/videos/1033963304/thumb/1.jpg');  */ */
 /* /* opacity: 0.5; */
 /* background-size: cover;  */
/* background-repeat: no-repeat; */
               /* font-family: 'Nunito', sans-serif; */
               background-color:white;       
               font-family: 'Tajawal';
           

        
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

/* .bg-white {
    background-color: #F6F6F6 !important;
} */

.w3-container{
  background-color: #f6f6f6;;
  margin: 50px;
    margin-left: 250px;
    margin-right: 250px;
  }
 
.form-group{
  display: flex;
  margin: 30px;
  /* height: 50px; */

}
label{
  width: 130px;
  margin-top: 15px;
}

nav{
  font-family: "Tajawal";
  height: 100px;
    font-size: 18px;
}
.tab {
  overflow: hidden;
  /* border: 1px solid #ccc; */
  background-color: #f1f1f1;
  width: 1110px;
  /* margin-right: 210px; */
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  /* float: left; */
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #c0bcff;;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

body{
  /* background: #f2f2f2; */
  font-family: 'Tajawal', sans-serif;
  /* font-family: Tajawal; */
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}




/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
}

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
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;
  height: 112px;
    background: white;
    padding: 10px;
    /* border: 0.5px solid black; */
  border-radius: 5px;
}

.button {
    /* display: block; */
    background: #4E9CAF;
    padding: 2px;
    text-align: center;
    border-radius: 10px;
    /* padding: 8px 16px; */
    color: white;
    
    /* font-weight: bold; */
    /* border-style: solid; */
  border-bottom-width: thin;
}

table, th {
  /* border: 1px solid black;
  border-collapse: collapse; */
  background: #f7f5f5;
color:#afaaaa;
}
a{
  color:#afaaaa;

}


footer{
  background: linear-gradient(to top, #7F7BBF, #4A3FF8);

  /* background: #654ea3;  fallback for old browsers */
/* background: -webkit-linear-gradient(to top, #eaafc8, #654ea3);  Chrome 10-25, Safari 5.1-6 */
/* background: linear-gradient(to top, #eaafc8, #654ea3); W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 
  color: white;
}
img{
  border: 1px solid black;
  border-collapse: collapse;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;

}
td{
   border-color: #ececec;
  color:#828282
}


 </style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <a href="/"><img src="../images/التقاط-removebg (1).png" alt="description here" style="width: 130px;color:#6C63FF; margin-top:5px;"/></a>
                    <!-- {{ config('امانه', 'امانه') }} -->
                    <!-- امانه -->
                    <!-- app.name -->
                    <!-- Laravel -->

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right:50%;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partlost') }}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">  من نحن  </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('انشئ') }}</a>
                                </li> -->
                            @endif
                            <!-- <li class="nav-item">
                            <div class="dropdown">
                            <i class="fa fa-plus-circle dropbtn" aria-hidden="true" onclick="myFunction()" style="
    padding-top: 10px;color: #8A2BE2;
"></i> -->
                            <!-- <i class="fa fa-plus-circle" aria-hidden="true"></i> -->

  <!-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> -->
  <!-- <div id="myDropdown" class="dropdown-content">
    <a href="/recordLost" class="button" style="color:white; background-color:#8A2BE2; font-family: Tajawal; font-size: 14px;">  اضف مفقودة</a>
    <a href="/recordFound" class="button" style="color:white; background-color:#8A2BE2;font-family: Tajawal; font-size: 14px;">اضف معثور عليه</a>
  </div> -->
</div>
</li>
           
                        @else
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partlost') }}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">  من نحن  </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                    <!-- <span class="caret"></span> -->
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="{{ route('profile') }}">  الملف الشخصي  </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                        
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

        <main class="py-4" style="background-color:white;font-family: Tajawal; width:100%">
            @yield('content')
        </main>
    </div>

    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>
