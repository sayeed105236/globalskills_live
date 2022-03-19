@extends('admin.admin_master')
@section('admin_dashboard_content')
    <div class="d-flex" id="wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Options</h3>
                    <table class="table table-bordered table-striped datatable" id="optionTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Question option</th>
                                <th>Correct</th>
                                <th>More</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($options as $option)
                                <tr>
                                    <td> {{$loop->index+1}}</td>
                                    <td>
                                        <!--@if ($option->question)-->
                                       
                                            {{ $option->question->question_text }}
                                        <!--@endif-->
                                    </td>
                                    <td>{{ $option->option }}</td>
                                    <td>
                                        @if ($option->correct == 1)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('questionsOptions-edit', $option->id) }}"
                                            class="btn btn-xs btn-warning"> <i class="fa fa-pencil"></i> Edit</a>

                                           <a href="/QuestionsOptions-delete/{{ $option->id }}" class="btn btn-xs btn-danger" type="submit"> <i class="fa fa-trash"></i> Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
  $(document).ready(function() {
    $('#optionTable').DataTable();
    } );
</script>
@endsection
