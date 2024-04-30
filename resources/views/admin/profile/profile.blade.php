
@include('admin.components.header')

@include('admin.components.sidebar')
	<div class="mobile-menu-overlay"></div>
 
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<img src="{{(!empty($profileData->photo))? url($profileData->photo):url('uploadImage/Profile/default.png')}}" alt="" class="avatar-photo" height="33" width="111">
							
							</div>
							<h5 class="text-center h5 mb-0">{{ $profileData->fullname }}</h5>
							<div class="profile-info">
								<ul>
									<li>
										<span>Email Address:</span>
										{{ $profileData->email }}
									</li>
                                    <li>
										<span>username:</span>
										{{ $profileData->username }}
									</li>
									
                                    
                                    <li>
										<span>Date Joined:</span>
										{{ $profileData->created_at }}
									</li>
                                   
								</ul>
															</div>
							
							
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        @include('admin.partials.message')

						<div class="card-box height-100-p overflow-hidden">

											<div class="profile-setting">
                                            <form method="POST" id="dataform" action="{{ route('profile.post') }}" enctype="multipart/form-data">

                                                @csrf
													<ul class="profile-edit-list row">
													
														<li class="weight-500 col-md-9">
															<h4 class="text-blue h5 mb-20">Edit Profile Information</h4>
															<div class="form-group">
																<label>Fullname:</label>
																<input class="form-control form-control-lg" type="text" name="fullname" value="{{ $profileData->fullname }}" >
															</div>
															<div class="form-group">
																<label>Email:</label>
																<input class="form-control form-control-lg" type="telephone" name="email" value="{{ $profileData->email }}">
															</div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                                                <input type="file" name="photo" class="form-control" id="exampleInputUsername1" autocomplete="off"  onChange="display_img(this)">
                                                            </div>
                                        
                                        
                                            <div align="center"><img class="wd-80 rounded-circle" src="{{(!empty($profileData->photo))? url($profileData->photo):url('uploadImage/Profile/default.png')}}" alt="adminphoto"  id="showImage">   
                              </div>
                                                        
                                                            <button type="submit" class="btn btn-success"> Save Changes</button>
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="footer-wrap pd-20 mb-20 card-box">
                @include('admin.components.footer')
            </div>
		</div>
	</div>
	<!-- js -->
	<script src={{ asset('vendors/scripts/core.js') }}></script>
	<script src={{ asset('vendors/scripts/script.min.js') }}></script>
	<script src={{ asset('vendors/scripts/process.js') }}></script>
	<script src={{ asset('vendors/scripts/layout-settings.js') }}></script>
	<script src={{ asset('src/plugins/cropperjs/dist/cropper.js') }}></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>

<script>
    function display_img(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#showImage').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
   
</script>
</body>
</html>