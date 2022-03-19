@extends('frontend.layouts.master')


@section('content')
<div class="page-content bg-white">
<div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}}')}});">
    <div class="container">
        <div class="page-banner-entry">
          <br/>
          <br/>

 </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
<div class="container">
<ul class="list-inline">
  <li><a href="{{route('home')}}">Home</a></li>
  <li>Our Experts</li>
</ul>
</div>
</div>


<div class="content-block">
<div class="section-area section-sp1">


   <!-- Left part start -->
   <div class="section-area content-inner service-info-bx">
             <div class="container">
       <div class="row">
         @foreach($experts as $row)
         <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
           <div class="service-bx"  style=" background-color:#F5F5F5;">
             <div class="action-box rounded-circle">
               <img src="{{asset("storage/experts/$row->expert_image")}}" alt="image" height="150" width="150">
             </div>
             <div class="info-bx text-center">
                @if($row->intro_link)
               <h6><a class="venobox popup-youtube video" data-autoplay="true" data-vbtype="video" href="{{ $row->intro_link }}">{{Str::limit($row->expert_name,50)}}</a></h6>
                @else
             <h6><a href="#">{{Str::limit($row->expert_name,50)}}</a></h6>

                @endif
               <hr>

                <h6><a href="#">{{Str::limit($row->designation,70)}}</a></h6>
                <hr>

                <a href="#" class="btn-lg"><i class="fab fa-linkedin"></i></a> 
                 <a href="#" class="btn-lg"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="btn-lg"><i class="fab fa-facebook"></i></a>
             </div>
             <hr>
           </div>
         </div>
         @endforeach

       </div>
     </div>
         </div>
         <!-- Our Services END -->






   <!-- Side bar END -->

</div>
</div>
</div>








</div>







@endsection
