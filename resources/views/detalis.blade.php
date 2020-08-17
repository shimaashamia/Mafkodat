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
<a href="#!">تفاصيل</a> 
</nav>



<div class="w3-container" style="text-align-last:right; height: 200px; margin-top: 35px;"> 
<div class="title" style="display: flex;">
  <h2 style="font-size:25px;color:#6C63FF; font-weight: bold; padding-top:20px;"> {{ $lost->title ??''}} </h2>
  <h4 style="font-size:15px; font-weight: bold; padding-top:30px; padding-right: 20px;"> {{ $lost->disclaimer ??''}} </h4>
  <td><i class='far fa-heart' style="width: 300px; padding-top:30px; padding-right: 870px; font-size:24px"></i> </td>
  </div>

  <hr style="border-color: #ccccc5;">
  <p style="text-align-last: right;font-size:17px;display: inline-block; margin-right: 5px;"> {{ $lost->date ??''}} - </p> 
  <i class="fa fa-map-marker" aria-hidden="true"></i><p style="font-size:17px;display: inline-block; margin-right: 5px; text-align-last: center;">  {{$lost->Place->name_place ??''}} -</p> 
  <p style="text-align-last: left; font-size:17px;display: inline-block; margin-right: 5px;"> {{$lost->Category->name_category ??''}}</p> 


</div>


<article class="w3-container" style="text-align-last:right; height: 250px;"> 
<h2 style="font-size:23px;color:#6C63FF; font-weight: bold; padding-top: 30px;"> الاتصال بناشر التنويه</h2>
  <hr style="border-color: #ccccc5;">
  <i class='far fa-user' style="font-size: 20px;"> {{ $lost->name ??''}}</i>
  <br>
  <i class="fa fa-phone" aria-hidden="true" style="unicode-bidi: bidi-override; font-size: larger; padding-top: 20px;"> {{ $lost->numberphone ??''}} </i>
  <br>
  <i class="fa fa-envelope-o" style="font-size: larger; padding-top: 20px;"> أرسل رسالة  </i>

 
</article>

<section class="w3-container" style="text-align-last:right; height: 200px;"> 
<h2 style="font-size:23px;color:#6C63FF; font-weight: bold; padding-top: 30px;">  مشاركه عبر شبكات التواصل الاجتماعي </h2>
  <hr style="border-color: #ccccc5;">
  <i class="fa fa-facebook-square" style="font-size:40px; margin-left:220px; margin-right: 220px;"></i>
  <i class="fa fa-whatsapp" style="font-size:40px; margin-left:220px;"></i>
  <i class="fa fa-twitter" aria-hidden="true" style="font-size:40px;"></i>
</section>


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


</body>
</html> 

@endsection
