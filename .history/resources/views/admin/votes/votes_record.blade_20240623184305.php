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

                      
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                               
                                <th>
                                    <div align="center"><strong>Voters' Photo </strong></div>
                                </th>
                                <th>
                                    <div align="center"><strong>Voters' Name </strong></div>
                                </th>
                               
                                <th>
                                    <div align="center"><strong>Election</strong></div>
                                </th>
                                <th>
                                    <div align="center"><strong>Candidate Voted for</strong></div>
                                </th>
                                <th width="254">
                                    <div align="center"><strong>Action</strong></div>
                              </th>
                             </tr>

                        </thead>
                        <tbody>
                            @foreach ($data as $cnt => $row)
                                <tr>
                                   
                                    <td>
                                        <div align="center"><img src="../{{$row->image }}" width="37"
                                                height="31" border="2" /></div>
                                    </td>
                                    <td class="table-plus">
                                        <div align="center">{{ $row->fullname }} </div>
                                    </td>
                                    

                                    <td class="table-plus">
                                        <div align="center">{{ $row->election_type }} </div>
                                    </td>

                                    <td class="table-plus">
                                        <div align="center">{{ $row->candidateName }}</div>
                                    </td>
                                    <td class="table-plus">
                                        <div align="center">
                                    <a href="{{ route('ViewAllVotesRecords.view', $row->id) }}">
                                        <i class="fa fa-eye" title="View All Record"></i>
                                    </a> 
                                    <div>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

            <!-- Export Datatable End -->
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>@include('admin.components.footer') </p>

   

</div>

</div>

 </div>



    <!-- Confirmation modal Disable User -->
</div>
<!-- End of Confirmation modal -->



</div>
<!-- js -->
<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<!-- Datatable Setting js -->
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
</body>

</html>
