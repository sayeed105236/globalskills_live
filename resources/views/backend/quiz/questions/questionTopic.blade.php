@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="d-flex" id="wrapper">
    <div class="container">
        <div class="row">
            <h3 class="page-title">Question Topics</h3>
            <div class="d-flex">

                @foreach($topics as $topic)
                <input type="hidden" name="topic_id" value="$topic->id">
                    <div class="card d-flex m-1" style="background-color: #163B4A; border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"  style="color: #fff">{{$topic->title}}</h5>

                            <a href="{{ url('admin/question/index/'.$topic->id) }}" class="inline_block btn btn-primary">Show Question</a>
                            @if(Auth::user())
                                @if(Auth::user()->is_admin == '1')


                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
