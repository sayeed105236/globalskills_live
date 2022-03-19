@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="container-fluid">
  <div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Timer</h4>
    <ul class="db-breadcrumb-list">
      <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a></li>
      <li>Timer</li>
    </ul>
  </div>
  <!-- Card -->
  <div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Timer</h4>
         <a href="#" class="btn btn-success" data-toggle="modal" data-target="#timer"><i class="fas fa-plus"></i></a>
          </div>
          @include('backend.modals.timeraddmodal')
        <div class="table table-responsive">
          <table id="user_list" class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Set Time</th>
                <th>Course Name</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($timer as $key=>$row)

              <tr>
                <td>{{++$key}}</td>
                <td class="user_name">
                    {{$row->time}}
                </td>
                <td class="user_name">
                    {{$row->course->course_title}}
                </td>
                <td>
                    <span class="badge badge-pill badge-success"></span>
                    @if($row->status=='1')
                    <a href="{{ url('/admin/active-approve/'.$row->id) }}" class="btn btn-sm btn-primary">Inactive</a>
                    @endif
                </td>
                <td>
                  <a id="delete" href="/admin/delete-timer/{{$row->id}}"><i class="fas fa-trash"></i></a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



@endsection
