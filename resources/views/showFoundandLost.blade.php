@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

</style>
<body>
    <nav style="text-align-last:right; margin-right: 250px; margin-top: -50px; padding-top: 100px;">
      <a href="/">الرئيسيه</a> /
      <a href="#!">متفرقات</a> 
    </nav>
    <form action="/search" method="get" style="margin-right:750px; text-align-last:right;max-width:300px">
                <div class="input-group" style="margin-right: 900px;">
                <input type="search" placeholder="عن ماذا تبحث ؟" name="search" class="form-control"><span class="input-group-prepend">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search">بحث</i></button>
                </div>
              </form>
<br>
<br>
<div class="tab" style="text-align-last: right;margin-right: 245px;">
  <button class="tablinks" onclick="openCity(event, 'all')" id="defaultOpen">   الكل </button>
  <button class="tablinks" onclick="openCity(event, 'losts')">مفقود</button>
  <button class="tablinks" onclick="openCity(event, 'founds')">  معثور عليه </button>
</div>

<div id="losts" class="tabcontent" style="text-align-last: right;">
  <div class="container">
      <table style="background-color: white;" class=table table-hover table-bordered> 
         <tbody>
          <!-- <form action="/search" method="get" style="margin:auto;max-width:300px">
            <div class="input-group">
            <input type="search" placeholder="عن ماذا تبحث ؟" name="search" class="form-control"><span class="input-group-prepend">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search">search</i></button>
            </div>
          </form> -->
          @foreach($losts  as $lost) 
          @if ( $lost->disclaimer == 'مفقودة')
            <tr>            
              <td>
                 <a href="{{route('detalis',$lost->id)}}" style="font-size:20px;color:#6C63FF; font-weight: bold;">{{ $lost->title ??''}} </a> 
                 <br>
                 <p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->date}} - </p> 
                 <i class="fa fa-map-marker" aria-hidden="true"></i><p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->Place->name_place}}</p> 
              </td>
              <td style="text-align-last: center;width: 300px; padding-top: 35px;">{{ $lost->disclaimer }}</td>
              <td style="text-align-last: left;width: 300px;"><br><i class='far fa-heart' style="font-size:24px"></i> </td>
            </tr>
            @endif  
          @endforeach
         
         </tbody>
      </table>
  </div>
</div>





<div id="founds" class="tabcontent" style="text-align-last: right;"> 
    <div class="container">
      <table  style="background-color: white;" class=table table-hover table-bordered>
         <tbody>
          <!-- <form action="/search" method="get" style="margin:auto;max-width:300px">
            <div class="input-group">
            <input type="search" placeholder="عن ماذا تبحث ؟" name="search" class="form-control"><span class="input-group-prepend">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search">search</i></button>
            </div>
          </form> -->
          @foreach($losts  as $lost) 
          @if ( $lost->disclaimer == 'معثور عليه')
            <tr>
              <td>
                 <a href="{{route('detalis',$lost->id)}}" style="font-size:20px;color:#6C63FF; font-weight: bold;"> {{ $lost->title }} </a> 
                 <br>
                 <p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->date}} - </p> 
                 <i class="fa fa-map-marker" aria-hidden="true"></i><p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->Place->name_place}}</p> 
              </td>
              <td style="text-align-last: center;width: 300px; padding-top: 35px;">{{ $lost->disclaimer }}</td>
              <td style="text-align-last: left;width: 300px;"><br><i class='far fa-heart' style="font-size:24px"></i> </td>
            </tr>
            @endif  
          @endforeach
         </tbody>
      </table>
    </div> 
</div>




<div id="all" class="tabcontent" style="text-align-last: right;"> 
    <div class="container">     
        <table style="background-color: white;" class=table table-hover table-bordered >
            <tbody>
              <!-- <form action="/search" method="get" style="margin:auto;max-width:300px">
                <div class="input-group">
                <input type="search" placeholder="عن ماذا تبحث ؟" name="search" class="form-control"><span class="input-group-prepend">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search">search</i></button>
                </div>
              </form> -->
                @foreach($losts  as $lost) 
                <tr>
                    <td>
                        <a href="{{route('detalis',$lost->id)}}" style="font-size:20px;color:#6C63FF; font-weight: bold;">{{ $lost->title ??''}} </a> 
                        <br>
                        <p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->date}} - </p> 
                        <i class="fa fa-map-marker" aria-hidden="true"></i><p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->Place->name_place}}</p> 

                    </td>
                    <td style="text-align-last: center;width: 300px; padding-top: 35px;">{{ $lost->disclaimer }}</td>
                    <td style="text-align-last: left;width: 300px;"><br><i class='far fa-heart' style="font-size:24px"></i> </td>
               </tr>
                @endforeach
              </tbody>
          </table>
    </div> 
</div>


<!-- Footer -->
<footer class="page-footer font-small indigo" style="text-align-last:right;">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
        <!-- <a href="/"><img src="../images/التقاط-removebg.png" alt="description here" style="width:250px;"/></a>  -->
          <!-- <a href="/"> امانه</a> -->
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="/partlost">الرئيسية</a>
        </h6>
         <a href="/showFoundandLost/2">متفرقات</a>
        <br>
        <a href="/showFoundandLostElectronec/1">الكترونيات </a>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="/call">اتصل بنا </a>
        </h6>
        <p>
          <i class="fas fa-envelope" style="display:inline-block;"></i> ifound510@gmail.com</p>
        <p>
          <i class="fas fa-phone" style="display:inline-block;"></i> + 790 599 999 99</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="/login">تسجيل الدخول</a>
        </h6>
        <a href="/register"> اشتراك جديد</a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">إضافة</a>
        </h6>
        <br>
        <a href="/recordLost" class="button" style="color:#6C63FF; background-color:white; font-family: Tajawal; font-size: 14px; padding: 15px; border-radius: 20px; ">  إضافة مفقود او معثور عليه </a>

        <!-- <a href="/recordLost">أضف مفقودا</a>
        <br>
        <a href="/recordFound">أضف معثور عليه </a> -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

   
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <!-- <div class="mb-5 flex-center"> -->

          <!-- Facebook -->
          <!-- <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a> -->
          <!-- Twitter -->
          <!-- <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a> -->
          <!-- Google +-->
          <!-- <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a> -->
          <!--Linkedin -->
          <!-- <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a> -->
          <!--Instagram-->
          <!-- <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a> -->
          <!--Pinterest-->
          <!-- <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div> -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="padding-right: 660px;">  جميع الحقوق محفوظه 2020 ©
    <!-- <a href="https://mdbootstrap.com/"> MDBootstrap.com</a> -->
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>
</body>
</html> 

@endsection
