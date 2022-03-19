@extends('admin.admin_master')


@section('admin_dashboard_content')






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Dashboard</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Dashboard</li>
    </ul>
  </div>
  <!-- Card -->
  <div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
      <div class="widget-card widget-bg1">
        <div class="wc-item">
          <h4 class="wc-title">
            Total Sale
          </h4>
          <br>
          <br>
          
         @php
         $total_sale = App\Models\UserEnrollment::select('regular_price')->get()->sum('regular_price');
         
         
         
         @endphp
          <span class="wc-stats">
              <br>
          <br>
            BDT <span class="counter">{{$total_sale}}</span>
          </span>
          <br><br>
          <div class="progress wc-progress">
            <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="wc-progress-bx">
            <span class="wc-change">
              
            </span>
            <span class="wc-number ml-auto">
             
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
      <div class="widget-card widget-bg2">
        <div class="wc-item">
          <h4 class="wc-title">
             New Feedbacks
          </h4>
          <span class="wc-des">
            Customer Review
          </span>
          <span class="wc-stats counter">
            120
          </span>
          <div class="progress wc-progress">
            <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="wc-progress-bx">
            <span class="wc-change">
              Change
            </span>
            <span class="wc-number ml-auto">
              88%
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
      <div class="widget-card widget-bg3">
        <div class="wc-item">
          <h4 class="wc-title">
            New Orders
          </h4>
          <span class="wc-des">
            Fresh Order Amount
          </span>
          <span class="wc-stats counter">
            772
          </span>
          <div class="progress wc-progress">
            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="wc-progress-bx">
            <span class="wc-change">
              Change
            </span>
            <span class="wc-number ml-auto">
              65%
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
      <div class="widget-card widget-bg4">
        <div class="wc-item">
          <h4 class="wc-title">
            New Users
          </h4>
          <span class="wc-des">
            Joined New User
          </span>
          <?php
          $users=App\Models\User::all();

           ?>
          <span class="wc-stats counter">

            {{count($users)}}
          </span>
          <div class="progress wc-progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="wc-progress-bx">
            <span class="wc-change">
              Change
            </span>
            <span class="wc-number ml-auto">
              90%
            </span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- Card END -->
  <div class="row">
    <!-- Your Profile Views Chart -->

    <!-- Your Profile Views Chart END-->

  </div>
</div>
@endsection
