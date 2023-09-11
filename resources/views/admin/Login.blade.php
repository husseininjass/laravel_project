<!DOCTYPE html>
<html lang="en">

<head>
	<title>Adventures-login </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">

	<!-- FontAwesome JS-->
	<script defer src="{{ asset('assetsAdmin/plugins/fontawesome/js/all.min.js') }}"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="{{ asset('assetsAdmin/css/portal.css') }}">

</head>

<body class="app app-login p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<br> <br><br> <br> <br> <br>
					<div class="app-auth-branding mb-4">
						<!-- <a class="app-logo" href="index.html"><img
								class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a> -->
					</div>
					<h2 class="auth-heading text-center mb-5">Log in to Admin Dashboard</h2>
					<div class="auth-form-container text-start">
						<form class="auth-form login-form" method="POST" action="logadmin">
							@csrf
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" name="email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
							</div>
							@if ($errors->has('email'))
							<p class="alert alert-danger ">{{ $errors->first('email') }}</p>
							@endif
							<!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="password" type="password" class="form-control signin-password" placeholder="Password" required="required">

								@if ($errors->has('password'))
								<p class="alert alert-danger ">{{ $errors->first('password') }}</p>
								@endif
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log
									In</button>
							</div>
							@if(session('message'))
							<div class="alert alert-info">
								{{ session('message') }}
							</div>
							@endif
						</form>

					</div><!--//auth-form-container-->

				</div><!--//auth-body-->


			</div><!--//flex-column-->
		</div><!--//auth-main-col-->
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
			<div class="auth-background-holder">
			</div>
			<div class="auth-background-mask"></div>

		</div>//auth-background-col

	</div><!--//row-->


</body>

</html>