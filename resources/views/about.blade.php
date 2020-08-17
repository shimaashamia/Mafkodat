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
<!-- 
<div style="background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;">This text is the content of the box. We have added a 50px padding, 
20px margin and a 15px green border. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> -->

 
<div class="container" style="text-align-last: center;">
            <!-- <div class="panel-heading">
                <h5 class="panel-title"> تصفح المفقودات عن طريق الفئه</h5>
            </div> -->
            <table class=table table-hover table-bordered>
           
            <tbody>
                <tr style="background: white;">
               <img src="../images/lost-and-found-pic1.png" alt="description here" style="width:1080px; hight:400px;"/> 
               <br />
               <br />
                </tr>
                <tr><h3>
                ي هذا المشروع ، خدمة المفقودات الموزعة على شبكة الإنترنت للجامعة الإسلامية في غزة.                 </tr>
                </h3>
                </tr>
                <br>
                <br>
                <tr><h3>
                لهدف الرئيسي من هذا المشروع هو مساعدة الطلاب في جميع أنحاء الجامعة من خلال خدمة ويب للعثور على الأشياء المفقودة بسرعة أكبر.                <br>
                </tr>
                <br>
                <br>
                <tr><h3>
                التطبيق عبارة عن بوابة ويب مفقودة وموجودة عبر الإنترنت مع واجهة مستخدم تفاعلية.
                </h3>
                </tr>
                <br>
                <br>
                <tr><h3>
                إنه تطبيق ويب سهل الاستخدام يتم إنشاؤه باستخدام لغات برمجة الويب المتصلة بقاعدة البيانات.                </tr>
                </h3>
                </tr>
                <br>
            </tbody>
        </table>
    </div>
</body>
</html> 

@endsection
