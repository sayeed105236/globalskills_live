@extends('frontend.layouts.master')

@section('content')

    <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg')}});">
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
                <li><a href="{{route('course_details')}}">Home</a></li>
                <li><a href="#">Cart</a></li>

            </ul>
        </div>
    </div>
    <br>
    <br>

    <div class="container">
        @if(Session::has('cart_deleted'))
            <div class="alert alert-danger" role="alert">
                <div class="alert-body">
                    {{Session::get('cart_deleted')}}
                </div>
            </div>
        @endif

        <div class="row" id="table-hover-animation">
            <div class="col-md-7 col-xl-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title" style="color:#ca2128; text-transform:uppercase;">Cart <i
                                        class="fa fa-cart-arrow-down fa-2x"></i></h4>
                            </div>
                            <div class="color">

                            </div>
                        </div>
                    </div>

                    <div class="table table-responsive">
                        <table id="tableContent" class="table table-hover-animation">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Regular Price</th>
                                <th>Sale Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $price = 0;
                            ?>
                             @foreach(App\Models\Cart::totalCarts() as $row)
                                <tr>
                                    <td>
                                        {{$loop->index+1}}
                                    </td>
                                    <td>
                                      @if($row->course_id != null)
                                        <span class="font-weight-bold"><a
                                                href="home/course_details/{{isset($row->course->id)}}">{{$row->course->course_title}}</a></span>

                                      @elseif($row->mocktest_id != null)
                                      <span class="font-weight-bold"><a
                                              href="#">{{$row->mocktest->mock_category}}</a></span>
                                              @else
                                              No Data
                                              @endif
                                    </td>
                                    <td>
                                        @if($row->course_id != null)

                                      <img src="{{asset('storage/courses/' .$row->course->course_image)}}" alt="image"
                                             height="50"
                                             width="50"/>
                                             @elseif($row->mocktest_id != null)
                                             <img src="{{ asset($row->mocktest->image) }}" alt="image"
                                                    height="50"
                                                    width="50"/>
                                                    @else
                                                    No Data
                                                    @endif


                                           </td>
                                    <td>
                                        @if($row->course_id != null)

                                      {{$row->course->course_category->mcategory_title}}
                                    @elseif($row->mocktest_id != null)
                                        MockTest Category
                                        @else
                                        No Data
                                        @endif

                                    </td>

                                    <td>
                                        <del>
                                            @if($row->course_id != null)


                                          {{$row->course->regular_price}}৳</del>
                                        @elseif($row->mocktest_id != null)
                                            {{$row->mocktest->regular_price}}৳</del>

                                            @else
                                            No Data

                                          @endif

                                    </td>
                                    <td>
                                        @if($row->course_id != null)

                                      {{$row->course->sale_price}}৳
                                    @elseif($row->mocktest_id != null)
                                        {{$row->mocktest->discount_price}}৳</del>
                                        @else

                                        No Data
                                        @endif

                                    </td>

                                    <td>
                                        <?php
                                        if ($row->course_id != null) {
                                          if ($row->course->sale_price > 0) {
                                              $price += $row->course->sale_price;
                                           } else {
                                              $price += $row->course->regular_price;
                                          }
                                        }elseif($row->mocktest_id != null) {
                                          if ($row->mocktest->discount_price > 0) {
                                              $price += $row->mocktest->discount_price;
                                           } else {
                                              $price += $row->mocktest->regular_price;
                                          }
                                        }


                                        ?>
                                        <a id="delete" href="/carts/delete/{{$row->id}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                  <hr>
                @foreach(App\Models\Cart::totalCarts() as $row)
                  @if($row->course_id != null)

                @if($row->course->id == 15 || $row->course->id == 13 || $row->course->id == 14)


                <div class="widget recent-posts-entry widget-courses">
                                  <h5 class="widget-title style-1"></h5>
                                  <div class="widget-post-bx">

                                      <div class="widget-post clearfix">
                                          <?php
                                                        $take2= App\Models\Course::where('id','36')->get()->first();
                                                        //dd($take2);
                                                         ?>
                                          <div class="ttr-post-media"> <img src="{{asset('storage/courses/' .$take2->course_image)}}" alt="image"
                                                   height="50"
                                                   width="50"/> </div>
                                          <div class="ttr-post-info">
                                              <div class="ttr-post-header">
                                                  <h6 class="post-title"><a href="#"> Add on Take 2</a></h6>
                                              </div>
                                              <h6>Take2 gives you a second chance at retaking this examination, at a fixed, attractive price.</h6>
                                              <div class="ttr-post-meta">
                                                <ul>




                                                    <li class="price">

                                                      <h5 style="color:#ca2128;">8099৳</h5>
                                                    </li>
                                                    <li class="price">

                                                       <form class="hidden" action="{{route('add-carts')}}" method="post">
                                                        @csrf
                                                        <?php
                                                        $take2= App\Models\Course::where('id','36')->get()->first();
                                                        //dd($take2);
                                                         ?>
                                                        <input type="hidden" name="course_id" value="{{$take2->id}}">

                                                        <button  class="btn btn-sm"><i class="fa fa-check-circle"> Add To Cart</i></button>

                                                      </form>
                                                    </li>


                                                </ul>
                                              </div>
                                          </div>
                                      </div>


                                  </div>
                              </div>
                              @endif

    @endif
                @endforeach
            </div>

            <div class="col-md-5 col-xl-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="color:#ca2128; text-transform:uppercase;">Total</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover-animation">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody id="couponCalField">
                                <tr>
                                    <td>
                                        <span class="font-weight-bold">Course Price</span>
                                    </td>
                                    <td></td>
                                    <td>{{$price}}৳</td>
                                </tr>
                               
                                <tr>
                                    <td>
                                        <span class="font-weight-bold">Vat(15%)</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <?php
                                       
                                        $total_price_vat = 0;
                                        $total_price_vat = (($price * 15) / 100);
                                    
                                        $total = $total_price_vat+ $price;
                                        ?>
                                        {{$total_price_vat}}৳
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">Total</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">{{$total}}
                                        ৳
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
                <br>
                @if(Session::has('coupon'))

                @else
                <table class="table" id="couponField">
                    <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Discount Code</span>
                                <p>Enter your coupon code if you have one..</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon.." id="coupon_name">
                                    </div>
                                    <div class="clearfix pull-right">
                                        <button type="submit" class="btn-upper btn btn-primary" onclick="applyCoupon()">APPLY COUPON</button>
                                    </div>
                                </td>
                            </tr>
                    </tbody><!-- /tbody -->
                </table><!-- /table -->
                @endif
            

                <form id="paymentform" class="hidden" action="{{route('payment')}}" method="post">
                    @csrf
                    <input type="hidden" id="total_amount" name="amount" value="{{isset($total)?$total:''}}">
                    {{-- <input type="hidden"  name="session" value="{{ session()->get('coupon') }}"> --}}
                    <input type="hidden" id="t_amount" name="price" value="{{isset($price)?$price:''}}">
                    <input type="hidden" name="email" value="{{isset(Auth::user()->email)?Auth::user()->email:''}}">
                    <input type="hidden" name="name" value="{{isset(Auth::user()->name)?Auth::user()->name:''}}">
                    <input type="hidden" name="phone" value="{{isset(Auth::user()->phone)?Auth::user()->phone:''}}">
                    @if($total > 0 )
                        <button type="submit" class="text-center btn float-right">Procceed To Payment</button>
                    @else
                        <button type="submit" class="text-center btn float-right" disabled >Procceed To Payment</button>
                    @endif

                </form>
            </div> 


        </div>
    </div>

    <br>
    <br>
    @push('scripts')
        <script type="text/javascript">
            //$('#tableContent td:nth-child(2)').each(function(index, tr) {
            //$(tr).find('td').each (function (index, td) {
            //  console.log(index, tr)
            //});
            //});
            $(function () {
                //use the :nth-child selector to get second element
                //iterate with .each()
                var name = [];
                $('#tableContent  td:nth-child(2)').each(function (index, element) {
                    //var name = $(element).text();
                    var arr2 = $.trim($(element).text());
                    name.push(arr2);


                });
                $('#paymentform').append('<input type="hidden" name="course_title" value=' + name + '>');

            });

        </script>
 {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
 <script> 
function applyCoupon()
     {
         var coupon_name=$('#coupon_name').val();
         var t_amount=$('#t_amount').val();
         var total_amount=$('#total_amount').val();
         
        $.ajax({
            type:'POST',
            dataType:'json',
            data:{coupon_name:coupon_name,t_amount:t_amount,total_amount:total_amount},
            url: "{{ url('/coupon-apply') }}",  
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            success:function(data){
                couponCalculation();
                if(data.validity==true)
                {
                    $('#couponField').hide();
                }
                      //  start message
                      const Toast = Swal.mixin({
                         toast: true,
                         position: 'top-bottom',
                         showConfirmButton: false,
                         timer: 3000
                       })
                      if($.isEmptyObject(data.error)){
                           Toast.fire({
                             type: 'success',
                             title: data.success
                           })
                      }else{
                          $('#coupon_name').val('');
                            Toast.fire({
                               type: 'error',
                               title: data.error
                           })
            }
                     //  end message
                }
                 });
     }

     function couponCalculation(){
        var t_amount=$('#t_amount').val();
         $.ajax({
             type:'POST',
             url:"{{ url('/coupon/calculation') }}",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},   
             dataType:'json',
             data:{t_amount:t_amount},
             success:function(data){
                $('#coupon_name').val('');
                 if(data.total){
                     $('#couponCalField').html(`            
                     <tr>
                                    <td>
                                        <span class="font-weight-bold">Course Price</span>
                                    </td>
                                    <td></td>
                                    <td>{{$price}}৳</td>
                                </tr>
                                
                                    <td>
                                        <span class="font-weight-bold">Vat(15%)</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <?php
                                        
                                        $total_price_vat = 0;
                                        $total_price_vat =(($price * 15) / 100);
                                        
                                        $total = $price + $total_price_vat;
                                        ?>
                                        {{$total_price_vat}}৳
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">Total</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">{{$total}}
                                        ৳
                                    </td>

                                </tr>
                     
                     `)
                 }else{
                     $('#couponCalField').html(`
                     
                     <tr>
                                   <td>
                                        <span class="font-weight-bold" style="color:#ca2128;">Previous Total</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:#ca2128;">{{$total}}</td>
                                </tr>
                     <tr>
                                    <td>
                                        <span class="font-weight-bold">Coupon Name</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:green;">${data.coupon_name} &nbsp;
                                        <button onclick="couponRemove()" type="submit"><i class="fa fa-times"></i></button>
         
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold">Discounted Amount</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:green;">${data.discount_amount}৳</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">Grand Total</span>
                                    </td>
                                    <td>=</td>
                                    <td class="font-weight-bold" style="color:#ca2128; text-transform:uppercase;">${data.total_amount}
                                        ৳
                                    </td>

                                </tr>
                     
                     `)
                 }
             }
         });
     }
     couponCalculation();


        </script>
<script>
    
     function couponRemove(){
       $.ajax({
           type:'GET',
           url: "{{ url('/coupon-remove') }}",
           dataType:'json',
           success:function(data){
               couponCalculation();
               $('#couponField').show();
               // $('#couponField').css("display","");
               $('#coupon_name').val('');
               //  start message
               const Toast = Swal.mixin({
                       toast: true,
                       position: 'top-bottom',
                       showConfirmButton: false,
                       timer: 3000
                     })
                    if($.isEmptyObject(data.error)){
                         Toast.fire({
                           type: 'success',
                           title: data.success
                         })
                    }else{
                          Toast.fire({
                             type: 'error',
                             title: data.error
                         })
                    }
                   //  end message
           }
       });
   }
</script>

    @endpush






@endsection
