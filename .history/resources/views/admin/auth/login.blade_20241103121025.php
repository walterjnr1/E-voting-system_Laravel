<style type="text/css">
<!--
.style1 {	color: #0000FF;
	font-weight: bold;
}
-->
</style>d
@include('admin.components.authheader')
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
				  <div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To Dashboard</h2>
						</div>
						@include('admin.partials.message')

						<form method="POST" action="{{ route('login.post') }}">
						@csrf
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="{{ route('forgot.view') }}">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">

											<input class="btn btn-primary btn-lg btn-block" name = "btnsave" type="submit" value="Sign In">
											<!--
										<a class="btn btn-primary btn-lg btn-block" href="#">Sign In</a>
									-->
									</div>

								</div>
							</div>
							</form>
				  </div>


			</div>
		</div>
	</div>

	<!-- js -->
	<script src="{{ asset('vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>


</body>
</html>
