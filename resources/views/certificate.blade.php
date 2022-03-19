
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>

{{-- <style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style> --}}

</head>
<body>
    <style>
    div {
  text-align: justify;
  text-justify: inter-word;
}
</style>
    
  <div class="container" style="display:block; margin:0 auto 0 auto; width:50%" >
      <img src="{{public_path("gsda logo.png")}}" alt="">
  </div>
  <div class="container" >
    <h4 style="margin:50px 0 0 80px;">Date: {{$evolution->created_at->format('d-m-Y')}}</h4>
  </div>
  <div class="container" >
    <h2 class="text-center" style="margin:65px 0 0 0; text-align:center;">LETTER OF COURSE ATTENDANCE</h2>
  </div>
  <div class="container" >
    <p style="margin:50px 80px 0 80px;">This letter is to verify that <strong>{{Auth::user()->name}}</strong> has attended
      <strong>{{$evolution->course->course_title}}</strong> course, which  took  place  from {{$evolution->start_date}}  until {{$evolution->end_date}}
       from  online  self study  platform  of  Global  Skills  Development Agency,
         Dhaka Bangladesh.</p>

  </div>
  <div  class="container" style="margin:30px 80px 0 80px;" >
    <p >‘This  is  a  letter  confirming  course  attendance
      only  and  is  not  a  document  demonstrating
      or certifying
      the achievement of any qualification in the subject matter of
      the training course’.</p>
  </div>
 
  <div style="position:absolute;left:100.50px;margin-top:60px;" class="cls_010">
         <span class="cls_010"><img width="60" src="{{ public_path($trainer->signature) }}" alt="Ibrahim Hossain"></span>
     </div>
  <h3 style="margin-left:80px; margin-top:70px;">{{(($trainer->name))}}</h3>
   
    <p style="margin-left:95px;">Course Trainer</p>
    
  
  <div class="container" style="margin:150px 80px 0 80px;">
    <p>{{$evolution->course->accredation_name}}  is a registered trademark of AXELOS Limited,
      used under permission of <p>
      <p style="text-align:center;">AXELOS Limited. All rights reserved. </p>
  </div>

  <div class="container" style="margin:30px 30px 0 30px;">

      <p  >
        Hayat Rose Park Level 5, House No 16 Main Road, Bashundhara Residential Area Dhaka-1229
           <span style="margin-left:130px;">Phone: +8801766343434; Email: info@globalskills.com.bd</span> </p>

  </div>


</body>
</html>
