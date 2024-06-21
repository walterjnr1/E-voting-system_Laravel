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
			
			</div>
			
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>@include('admin.components.footer')		</p>
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