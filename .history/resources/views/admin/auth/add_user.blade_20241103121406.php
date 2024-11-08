
@include('admin.components.header')

@include('admin.components.sidebar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">

				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Admin Registration</h4>
							<p class="text-blue h4">&nbsp;</p>
						</div>
						@include('admin.partials.message')

					</div>
					<form method="post" action="{{ route('registration.post') }}">
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Username</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="username" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fullname</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="fullname" >
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="password" name="password" >
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="email" name="email" >
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Save</button>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->

			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
                @include('admin.components.footer')
            </div>
		</div>

	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
