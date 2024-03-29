<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Global Skills Development Agency" />

	<!-- OG -->
	<meta property="og:title" content="Global Skills Development Agency" />
	<meta property="og:description" content="Global Skills Development Agency" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Global Skills Development Agency</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="{{ asset('js/html5shiv.min.js')}}"></script>
	<script src="{{ asset('js/respond.min.js')}}"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css')}}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/typography.css')}}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/color/color-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/lib/toastr/toastr.css">

</head>



<!-- Content -->
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url({{ asset('images/background/bg2.jpg')}});">
			<a href="/"><img src="{{ asset('images/gsda logo.png')}}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="{{route('register')}}">Create one here</a></p>
				</div>
        <form class="contact-bx" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="row placeani">
            <div class="col-lg-12">
              <div class="form-group">
                <div class="input-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" required="" class="form-control mt-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <div class="input-group">
                  <label for="password">Your Password</label>
                  <input id="password" type="password" class="form-control mt-3" name="password" required autocomplete="current-password">


                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group form-forget">
                <div class="custom-control custom-checkbox">

                  <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">Remember me</label>

                </div>
                  @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="ml-auto">Forgot Password?</a>
                @endif
              </div>
            </div>
            <div class="col-lg-12 m-b30">
              <button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>

            </div>
            <div class="col-lg-12">
              <h6>Login with Social media</h6>
              <div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="{{ route('login.facebook') }}"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="{{ route('login.google') }}"><i class="fa fa-google-plus"></i>Google</a>
              </div>
            </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>






<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{ asset('vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{ asset('vendors/counter/waypoints-min.js')}}"></script>
<script src="{{ asset('vendors/counter/counterup.min.js')}}"></script>
<script src="{{ asset('vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{ asset('vendors/masonry/masonry.js')}}"></script>
<script src="{{ asset('vendors/masonry/filter.js')}}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('js/functions.js')}}"></script>
<script src="{{ asset('js/contact.js')}}"></script>
<script src="{{ asset('vendors/switcher/switcher.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend') }}/lib/toastr/toastr.min.js"></script>

<script>
  @if(Session::has('message'))
	var type ="{{Session::get('alert-type','info')}}"
	switch(type){
		case 'info':
			toastr.info(" {{Session::get('message')}} ");
			break;
		case 'success':
			toastr.success(" {{Session::get('message')}} ");
			break;
		case 'warning':
			toastr.warning(" {{Session::get('message')}} ");
			break;
		case 'error':
			toastr.error(" {{Session::get('message')}} ");
			break;
	}
@endif
</script>
</body>

</html>
