<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

					<form method="post" action="{{route('stockin.post') }}">
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<select name="name" id="name" class="form-control" onchange="getSparepartDetails(this.value)">
									<option value="">--- Select SparePart ---</option>
									@foreach ($details as $row)
										<option value="{{ $row->id }}">{{ $row->name }}</option>
									@endforeach
								</select>	
									</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="price" >
							</div>
						</div>
						
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Current Quantity</label>
							<div class="col-sm-6 col-md-4">
								<input class="form-control" type="text" name="oldqty"  id="oldqty" value="" readonly>
								<img src="{{asset('src/images/loader.gif')}}" alt="loader" name="loader"  id="loader" width="24" height="25" align="middle" id=loader />
							</div>
							<label class="col-sm-12 col-md-2 col-form-label">Quantity</label>
							<div class="col-sm-6 col-md-4">
								<input class="form-control" type="number" name="qty"  >
							</div>
						</div>
                        
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
							
								<div align="center">
								  <p>&nbsp;</p>
								  <p><img src="{{(!empty($row->photo))? url($row->photo):url('uploadImage/spare_part/empty.png')}}" alt="sparepart"  id="showImage" width="100" height="80">							        </p>
								</div>
								
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
	<script src={{asset('vendors/scripts/core.js') }}></script>
	<script src={{asset('vendors/scripts/script.min.js') }}></script>
	<script src={{asset('vendors/scripts/process.js') }}></script>
	<script src={{asset('vendors/scripts/layout-settings.js') }}></script>
	
	
	
	<style>
        #loader {
            right: 18px;
            top: 30px;
            width: 20px;
			display: none;
        }
    </style>
	<script>
		function getSparepartDetails(name) {
			var loader = $('#loader')
			let img = document.querySelector('#showImage')
			loader.show();

		  $.ajax({
			url: '/fetchsparepartDetails/' + name,
			type: "GET",
			
			success: function(response) {
			  if (response.success) {
				loader.hide();
				console.log(response)
				$('#oldqty').val(response.data.qty);
				// $('#showImage').val(response.data.photo);
				img.src = response.data.photo;
			  }
			}
		  });
		}
		</script>
</body>
</html>