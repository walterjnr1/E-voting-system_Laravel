@include('admin.components.header')

@include('admin.components.sidebar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
                        @include('admin.partials.message')
                        <h4 class="text-blue h4">{{ $page_name }}</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
                                    <th class="table-plus datatable-nosort">
                                        <div align="center"><strong>SN </strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>Photo </strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>Candidate ID </strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>fullname</strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>Sex</strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>Occupation</strong></div>
                                        </th>
                                        <th>
                                            <div align="center"><strong>Qualification </strong></div>
                                        </th>
                                       <th>
                                            <div align="center"><strong>State</strong></div>
                                        </th>
                                      
                                        <th>
                                            <div align="center"><strong>Office</strong></div>
                                        </th>
                                      
                                        <th>
                                            <div align="center"><strong>Status</strong></div>
                                        </th>
                                       
                                        <th>
                                            <div align="center"><strong>Action</strong></div>
                                        </th>
								</tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $cnt => $row)
                                    <tr>
                                        <td height="116" class="table-plus">
                                            <div align="center">{{ $cnt + 1 }}</div>
                                      </td>
                                        <td>
                                            <div align="center"><img src="../{{$row->image }}" width="37"
                                                    height="31" border="2" /></div>
                                        </td>
                                        <td>
                                            <div align="center">{{ $row->candidateID }}</div>
                                        </td>
                                        <td class="table-plus">
                                            <div align="center">{{ $row->fullname }} </div>
                                        </td>
    
                                        <td class="table-plus">
                                            <div align="center">{{ $row->sex }} </div>
                                        </td>
    
                                        <td class="table-plus">
                                            <div align="center">{{ $row->occupation }} </div>
                                        </td>
                                        <td class="table-plus">
                                            <div align="center">{{ $row->educational_qualification }} </div>
                                        </td>
                                        <td class="table-plus">
                                            <div align="center">{{ $row->state }} </div>
                                        </td>
                                        <td class="table-plus">
                                            <div align="center">{{ $row->office }} </div>
                                        </td>
                                       
                                        <td class="table-plus">
                                            <div align="center">
                                                @if ($row->status == 1)
                                                    <span class="right badge badge-success">Active</span>
                                                @else
                                                    <span class="right badge badge-danger">InActive</span>
                                                @endif
                                            </div>
                                        </td>
                                      
                                        <td>
    
                                            <div align="center">
                                            <?php if (($row['status'])==(('1')))  { ?>
                                            <i class="fa fa-times" data-toggle="modal"
                                                    data-target="#confirmation-modal-disable" title="Disable Candidate"></i>
                                            
    
                                            <?php } else {?>
                                            <i class="fa fa-check" data-toggle="modal"
                                                    data-target="#confirmation-modal-Enable" title="Enable Candidate"></i>
    
                                            <?php } ?>
    
                                            <i class="fa fa-trash" data-toggle="modal"
                                            data-target="#confirmation-modal-delete" title="Delete Candidate"></i>
                                            
                                                                             
                                        </div>
    
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
					</div>
				</div>
				
				
				<!-- Export Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>@include('admin.components.footer') </p>			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>