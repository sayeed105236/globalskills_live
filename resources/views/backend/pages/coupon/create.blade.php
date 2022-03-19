@extends('admin.admin_master')
@section('admin_dashboard_content')


<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Coupon</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Coupon</li>
    </ul>
  </div>


  <!-- Card -->
  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Coupon</h4>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#CouponAdd"><i class="fas fa-plus-circle"></i></a>
             @include('backend.modals.couponaddmodal')
          </div>
        <div class="table table-responsive">
          <table id="user_list" class="table table-bordered">
            <thead>
              <tr>
                <th class="wd-10">SL</th>
                <th>C.Name</th>
                <th>C.Discount</th>
                <th class="wd-10">C.Validity</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($coupons as $key=>$item)
              <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $item->coupon_name }}</td>
                  <td>{{ $item->coupon_discount }}%</td>
                  <td>
                      {{ Carbon\Carbon::parse($item->coupon_validity)->format('D,d F Y') }}
                  </td>
                  <td>
                      @if($item->coupon_validity >=  Carbon\Carbon::now()->format('Y-m-d') )

                        <span class="badge badge-pill badge-success">Valid</span>

                      @else

                        <span class="badge badge-pill badge-danger">Invalid</span>

                      @endif
                    </td>
             <td>
                 {{-- <a href="{{ url('admin/coupon-edit/'.$item->id) }}" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i></a> --}}
                 <a href="{{ url('admin/coupon/delete/'.$item->id) }}" class="btn btn-danger" title="delete data" id="delete"><i class="fa fa-trash"></i></a>
             </td>
                </tr>
              @endforeach
    

          </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

    <!-- Modal -->

</div>




@endsection
