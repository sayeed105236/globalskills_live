@extends('admin.admin_master')


@section('admin_dashboard_content')

<link href="{{asset('datatables/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">




<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Evaluation List</h4>
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
          <h4 class="card-title">Evaluation Lists</h4>

        </div>


        <!-- Modal -->

        <div class="table table-responsive">
          <table id="evolution_list" class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>User Name</th>

                <th>Email</th>
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>Course Name</th>
               
                <th>Start Date</th>
                <th>End Date</th>
                <th>Reason for participation:</th>
                <th>Trainer’s competence Review</th>
                <th>Training presentation material Review</th>
                <th>Course material Review</th>
                <th>Usefulness of the training</th>
                <th>Experience about training and exam booking</th>
                <th>Overall satisfaction in this training </th>

              </tr>
            </thead>
            <tbody>

              @foreach ($evolutions as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    {{$row->users->name}}

                </td>
                <td>{{Str::limit($row->users->email,10)}}</td>
                <td>{{Str::limit($row->company_name,10)}}</td>
                <td>{{$row->users->phone}}</td>

                <td>
                    {{$row->course->course_title}}
                </td>
                
                <td>
                {{$row->start_date}}


                </td>

                <td>{{$row->end_date}}</td>
                <td>
                  {{$row->reason}}
                </td>
                <td>{{$row->trainers_competence}}</td>
                <td>{{$row->presentation}}</td>
                <td>{{$row->material}}</td>
                <td>{{$row->usefullness}}</td>
                <td>{{$row->experience}}</td>
                <td>{{$row->satisfaction}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
    $('#evolution_list').DataTable( {
        dom: 'Bfrtip',

        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        buttons: [
{
extend: 'pdfHtml5',
orientation: 'landscape',
pageSize: 'LEGAL'
}
]
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
