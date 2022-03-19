@extends('admin.admin_master')
@section('admin_dashboard_content')


<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">FlipCard</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>FlipCard</li>
    </ul>
  </div>


  <!-- Card -->
  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">FlipCard</h4>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#FlipCardAdd"><i class="fas fa-plus-circle"></i></a>
             @include('backend.modals.flipcardaddmodal')
          </div>
        <div class="table table-responsive">
          <table id="user_list" class="table table-bordered">
            <thead>
              <tr>
                <th class="wd-10">SL</th>
                <th>Course</th>
                <th>Question</th>
                <th class="wd-10">Answer</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($flipcard as $row)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td class="user_name">
                    {{$row->course->course_title}}
                </td>
                <td>
                    {{$row->question}}
                </td>
                <td>
                    {{$row->answer}}
                </td>
                <td>
                    {{-- <a href="#" data-toggle="modal" data-target="#FaqEdit{{$row->id}}"><i class="fas fa-edit"></i></a> --}}

                  <a  href="/admin/delete-flipcard/{{$row->id}}" id="delete"><i class="fas fa-trash"></i></a>
                      {{-- @include('backend.modals.trainereditmodal') --}}

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
