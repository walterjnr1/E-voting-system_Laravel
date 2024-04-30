
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
							<h4 class="text-blue h4">{{ ($page_name) }}</h4>
							<p class="text-blue h4">&nbsp;</p>
						</div>

					</div>
					@include('admin.partials.message')

					<form method="post" action="{{route('Update.SparepartRecord') }}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id"  value="{{$data->id}}"   >

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name" value="{{ $data->name }} ">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="price" value="{{ $data->price }} ">
							</div>
						</div>
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Quantity</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="qty" value="{{ $data->qty }} ">
							</div>
						</div>
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
								<input type="file" name="photo" class="form-control" id="exampleInputUsername1" autocomplete="off"  onChange="display_img(this)">
							
								<div align="center">
								  <p>&nbsp;</p>
								  <p><img src="{{(!empty($data->photo))? url($data->photo):url('uploadImage/spare_part/empty.png')}}" alt="sparepart"  id="showImage" width="160" height="112">							        </p>
								</div>
								
							</div>
							
						</div>
						
						
						<button type="submit" class="btn btn-primary">Save Changes</button>
</form>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms End -->

			</div>


<p>@include('admin.components.footer')    </p>
		</div>
        
	</div>
	<!-- js -->
	<script src={{asset('vendors/scripts/core.js') }}></script>
	<script src={{asset('vendors/scripts/script.min.js') }}></script>
	<script src={{asset('vendors/scripts/process.js') }}></script>
	<script src={{asset('vendors/scripts/layout-settings.js') }}></script>

<!-- display image withoutout refreshing page -->
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