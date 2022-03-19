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
                                <form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                                    <div class="">
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                <h3>Personal Details</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label"
                                                for="exampleInputEmail">Name</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail"
                                                    aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label"
                                                for="exampleInputEmail">Email</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input type="text" name="email" class="form-control"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    value="{{ Auth::user()->email }}">
                                            </div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label"
                                                for="exampleInputEmail">Phone</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input type="text" name="phone" class="form-control"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    value="{{ Auth::user()->phone }}">
                                            </div>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="seperator"></div>

                                        <div
                                            class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                <h3 class="m-form__section">Social Links</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input class="form-control" type="text" name="linkedin" value="{{ Auth::user()->linkedin }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input class="form-control" type="text" name="facebook" value="{{ Auth::user()->facebook }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                <input class="form-control" type="text" name="twitter" value="{{ Auth::user()->twitter }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-12 col-sm-3 col-md-3 col-lg-2">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                        <button type="submit" class="btn">Save changes</button>
                                        <button type="reset" class="btn-secondry">Cancel</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection