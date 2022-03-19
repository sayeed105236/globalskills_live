@extends('frontend.layouts.master')


@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner1.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>User Profile</li>
                    <li>{{ Auth::user()->name }}</li>
                </ul>
            </div>
        </div>
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="card container">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="col-lg-9 col-md-12 col-sm-12 m-b30">
                                <form action="{{ route('store-image') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Image</label>
                                        <input type="file" name="image" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                        @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-danger">Upload</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection