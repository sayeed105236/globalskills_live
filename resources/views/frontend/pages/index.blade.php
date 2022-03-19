@extends('frontend.layouts.master')


@section('content')

<!-- Content -->
  <!-- Main Slider -->
@include('frontend.content.sliders')
    <!-- Main Slider -->
<div class="content-block">

  <!-- Our Services -->
  @include('frontend.content.inner_service')

  <!-- E-learning Courses -->
  @include('frontend.content.e-learning')
  <!-- E-learning Courses END -->

  <!-- Classroom -->
  
  @include('frontend.content.classroom')

  
  <!-- Classroom -->
    <?php
  $mocktest= App\Models\mockTestCategory::all();
  //dd($mocktest < 0);

   ?>
  <!-- Classroom -->
  <?php if ($mocktest > null): ?>


  @include('frontend.content.mocktest')

  <?php endif; ?>

  <!-- Mock Test -->

  <br>
  <br>

  <!-- Mock Test -->
  
  @include('frontend.content.accreditation')


  <!-- Form -->
 

  <!-- Form END -->
  @include('frontend.content.events')


  <!-- Testimonials -->


  <!-- Testimonials END -->

  <!-- Recent News -->
  @include('frontend.content.recent_news')
  <br><br>
  

  <!-- Recent News End -->


    </div>
<!-- contact area END -->

<!-- Content END-->

@endsection
