
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
                    <h4 align="center" class="text-blue h4">{{ $page_name }}</h4>

                    <a href="{{ url()->previous() }}">Back </a> 
                
                </div>

                @foreach ($data as $cnt => $row)

              <div class="pb-20">
                <table width="627" align="center" cellpadding="7" cellspacing="7" class="data-table table stripe hover nowrap">
                  <thead>
                    <tr>
                      <th width="215" class="datatable-nosort table-plus"><div align="left"><strong>Image</strong></div></th>
                      <th width="361"><img src="../{{$row->image }}" width="92"
                                                height="88" border="2" /></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
  <tr>
    <td class="table-plus"><div align="left"><strong>Fullname</strong></div></td>
    <td>{{$row->fullname }}</td>
     </tr>
  
         
</table>
@endforeach

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
<!-- js -->
<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>

<!-- Datatable Setting js -->
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
</body>

</html>
