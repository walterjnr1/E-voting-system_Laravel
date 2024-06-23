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
            </div>

            <!-- Export Datatable End -->
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>@include('admin.components.footer') </p>

   
<div class="modal fade" id="confirmation-modal-disable" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to Disable This Candidate ?
                </h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                            data-dismiss="modal"><i class="fa fa-times"></i></button>
                        NO
                    </div>
                    <div class="col-6">
                        <a href="{{ route('enable_disable.Candidate', $row->id) }}"><button button type="submit"
                                class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i
                                    class="fa fa-check"></i></button></a>
                        YES
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Confirmation modal -->
<!-- Confirmation modal Enable User -->
</div>
<div class="modal fade" id="confirmation-modal-Enable" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to Enable This Voter ?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                            data-dismiss="modal"><i class="fa fa-times"></i></button>
                        NO
                    </div>
                    <div class="col-6">
                        <a href="{{ route('enable_disable.Candidate', $row->id) }}"><button button type="submit"
                                class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i
                                    class="fa fa-check"></i></button></a>
                        YES
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End of Confirmation modal -->

<!-- Confirmation modal delete User -->
</div>
<div class="modal fade" id="confirmation-modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-15">
                <h4 class="padding-top-30 mb-40 weight-500">Are you sure you want to Delete This Voter ?
                </h4>
                <div class="padding-bottom-30 row" style="max-width: 190px; margin: 0 auto;">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                            data-dismiss="modal"><i class="fa fa-times"></i></button>
                        NO
                    </div>
                    <div class="col-6">
                        <a href="{{ route('delete.Candidate', $row->id) }}"><button button type="submit"
                                class="btn btn-primary border-radius-100 btn-block confirmation-btn"><i
                                    class="fa fa-check"></i></button></a>
                        YES
                    </div>
                </div>
            </div>
        </div>
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
