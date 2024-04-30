@include('admin.components.authheader')
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="{{ asset('vendors/images/sforgotpassword.jpg') }}" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">

						@include('admin.partials.message')


						<div class="login-title">
							<h2 class="text-center text-primary">Reset Password</h2>
						</div>
						<form method="POST" action="">
							@csrf
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
								</div>
							</div>
                            <div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="cpassword" placeholder="Confirm Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
                            
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Reset">
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('login.show') }}">Login</a>
									</div>
								</div>
							</div>
						</form>
					</div>
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