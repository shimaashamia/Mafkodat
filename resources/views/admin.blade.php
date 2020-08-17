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




<body>


<div class="container" style="text-align-last: center;">
            <!-- <div class="panel-heading">
                <h5 class="panel-title"> تصفح المفقودات عن طريق الفئه</h5>
            </div> -->
            <table class=table table-hover table-bordered>
            <tr>
    <th colspan="2" class="panel-title"> تصفح المفقودات عن طريق الفئه</th>
  </tr>
            <tbody>
                <tr style="background: white;">
               <td style="border-width: 2px; border-style: solid;"> 
               <img src="../images/undraw_product_teardown_elol.png" alt="description here" style="width:150px;"/> 
               <br />
               <br />

               <a href="/showFoundandLost/2" style="font-size: 17px;"> متفرقات</a> 
               </td>
               <td style="border-width: 2px; border-style: solid;"> 
               <img src="../images/undraw_android_jr64.png" alt="description here" height="125.5" style="width:150px;" />
               <br />
               <br />

                <a href="/showFoundandLostElectronec/1" style="font-size: 17px;"> الكترونيات </a>
                </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container">
            <table class=table table-hover table-bordered>
             <tr>
             <th></th>
              <th class="panel-title" style="padding-left: 155px;"> أحدث التنويهات </th>
              <th></th>
             </tr>
             <tbody>
             @foreach($losts  as $lost) 
              <tr style="background: white;">
                <td style="text-align-last: right;width: 380px;"> 
                  <!-- <img src="../images/مبلغ مال.png" alt="description here" style="width:130px;"/>  -->
                 <a href="{{route('detalis',$lost->id)}}" style="font-size:20px;color:#6C63FF; font-weight: bold;">{{ $lost->title ??''}} </a> 
                 <br>
                 <p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->date ??''}} - </p> 
                 <i class="fa fa-map-marker" aria-hidden="true"></i><p style="font-size:11px;display: inline-block; margin-right: 5px;"> {{$lost->Place->name_place ??''}}</p> 
                </td>

                <td style="text-align-last: center;width: 300px; padding-top: 35px;">{{ $lost->disclaimer ??'' }} </td>

                <td style="text-align-last: left;width: 300px;"><br><i class='far fa-heart' style="font-size:24px"></i> </td>

                </tr>
                @endforeach
              
                <!-- <tr>
               <td>  -->
                  <!-- <img src="../images/usb.png" alt="description here" style="width:130px;" /> -->
                    <!-- <br />
                    <br />
                    <a href="/showFoundandLostElectronec/1"> حاويه بيانات  </a>
               </td>
               <td>مفقوده</td>
               <td> حفظ </td>
               </tr>
               <tr>
               <td>  -->
                  <!-- <img src="../images/محفظة.png" alt="description here" style="width:130px;" /> -->
                    <!-- <br />
                    <br />
                  <a href="/showFoundandLostElectronec/1"> محفظة </a> -->
               <!-- </td>
               <td>مفقوده</td>
               <td> حفظ </td>

             </tr>
             <tr style="background: white;">
               <td>  -->
                <!-- <img src="../images/حقيبة .png" alt="description here" style="width:130px;" /> -->
                  <!-- <br />
                  <br />
                <a href="/showFoundandLostElectronec/1"> حقيبة </a>
                </td>
                <td>مفقوده</td>
               
               <td> 
               <br><i class='far fa-heart' style="font-size:24px"></i></td>
                </tr>

                <tr>
                <td>  -->
               <!-- <img src="../images/كاميرا.png" alt="description here" style="width:130px;" /> -->
               <!-- <br />
               <br />

                <a href="/showFoundandLostElectronec/1"> كاميرا </a>
                </td>
                <td>مفقوده</td>
               <td> حفظ </td>
                </tr> -->

            </tbody>
        </table>
    </div>
    <!-- <script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
    
    // Function to change heading background color
    function changeHeadingBg(color){
        document.getElementById("heart").style.background = color;
    }
    </script> -->
</body>

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

</html> 

@endsection
