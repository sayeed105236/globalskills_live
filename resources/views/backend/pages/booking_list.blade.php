@extends('admin.admin_master')


@section('admin_dashboard_content')
<link href="{{asset('datatables/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">






<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Booking List</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>User</li>
    </ul>
  </div>

  <!-- Card -->

  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Classroom Course Booking request</h4>

        </div>


        <!-- Modal -->

        <div class="table table-responsive">
          <table id="booking_list" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>User Name</th>

                <th>Email</th>
                <th>Phone Number</th>
                <th>Course Name</th>
                <th>Category</th>
                <th>Created At</th>
                <th>IP</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($bookings as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$row->user->name}}

                </td>

                <td>
                    {{$row->user->email}}
                </td>
                <td>
                    {{$row->user->phone}}
                </td>
                <td>
                {{$row->classroom_course->classroom_course_title}}


                </td>

                <td>{{$row->course_category->mcategory_title}}</td>
                <td>
                  {{$row->created_at}}
                </td>
                <td>{{$row->ip_address}}</td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-lg-12 m-b20">

            {{$data->links('frontend.partials.pagination')}}

        </div>
      </div>
    </div>
  </div>

</div>

@push('scripts')
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

<script>
  $(document).ready(function() {
    $('#booking_list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

    } );
} );
$(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
@endpush




@endsection
