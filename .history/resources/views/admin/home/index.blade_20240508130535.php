<style type="text/css">
<!--
.style1 {color: #0066FF}
-->
</style>

	@include('admin.components.header')

	@include('admin.components.sidebar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-23-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="{{ asset('uploadImage/Logo/logo.png') }}" alt="" width="111" height="22">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							 <div class="weight-600 font-30 text-blue">{{ $greeting }}</div>
							 
									
						</h4>
					</div>
				</div>
			</div>
			<div class="row style1">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0"><?php  
									use Illuminate\Support\Facades\DB;
$countUser = DB::table('users')->count();
echo $countUser;   
?></div>
								<div class="weight-600 font-14">No. of Users </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0"><?php  
$countVoter = DB::table('tblvoters')->count();
echo $countVoter;   
?>
</div>
								<div class="weight-600 font-14">No. of Voter(s)</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0"><?php  
$countCandidate = DB::table('tblcandidates')->count();
echo $countCandidate;   
?></div>
								<div class="weight-600 font-14">No. of Candidate(s) </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
									<?php  
					$countVote = DB::table('tblvoters')->count();
					echo $countVote;   
					?>
					</div>
								<div class="weight-600 font-14">No. of Vote(s) </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0"><?php  
					$countpartys = DB::table('tblpartys')->count();
					echo $countVote;   
					?></div>
								<div class="weight-600 font-14">No. of Political Party </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Transactions (Spare Parts) </h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th width="74" class="table-plus datatable-nosort">Product</th>
							<th width="81">Name</th>
							<th width="37">Color</th>
							<th width="27">Size</th>
							<th width="40">Price</th>
							<th width="25">Oty</th>
							<th width="114" class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td height="55" class="table-plus">
								<img src="vendors/images/product-1.jpg" width="47" height="39" alt="">							</td>
							<td>
								<h5 class="font-16">Shirt</h5>
								by John Doe							</td>
							<td>Black</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>									</div>
								</div>							</td>
						</tr>
					</tbody>
				</table>
			</div>
			

@include('admin.components.footer')
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>