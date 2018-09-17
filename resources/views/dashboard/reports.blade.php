@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Report Booking
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="container-fluid">
                    {{--For Input Box--}}
                    <div class="card">
                        <div class="card-header">
                            Enter Start And End Date
                        </div>
                        <div class="card-body">
                            <form action="{{url('between/report')}}" method="post">
                                <div class="row">
                                    {{csrf_field()}}
                                    <div class="col-md-4">
                                        <input type="date" name="start" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="emd" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" value="Report" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">All Booking List</div>
                        </div>
                        <div class="card-body">
                            <div id="datatable2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="dt-buttons btn-group">          <button class="btn btn-default buttons-copy buttons-html5 btn-info" tabindex="0" aria-controls="datatable2"><span>Copy</span></button> <button class="btn btn-default buttons-csv buttons-html5 btn-info" tabindex="0" aria-controls="datatable2"><span>CSV</span></button> <button class="btn btn-default buttons-excel buttons-html5 btn-info" tabindex="0" aria-controls="datatable2"><span>Excel</span></button> <button class="btn btn-default buttons-pdf buttons-html5 btn-info" tabindex="0" aria-controls="datatable2"><span>PDF</span></button> <button class="btn btn-default buttons-print btn-info" tabindex="0" aria-controls="datatable2"><span>Print</span></button> </div><div id="datatable2_filter" class="dataTables_filter"><label>Search all columns:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable2"></label></div><table class="table table-striped my-4 w-100 dataTable no-footer dtr-inline" id="datatable2" role="grid" aria-describedby="datatable2_info" style="width: 1611px;">
                                    <thead>
                                    <tr role="row">
                                        <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 228px;" aria-sort="ascending" aria-label="Engine: activate to sort column descending">No.</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 390px;" aria-label="Browser: activate to sort column ascending">Package Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" style="width: 351px;" aria-label="Platform: activate to sort column ascending">Price</th></tr>
                                    </thead>
                                    <tbody>
                                    @if($reports == false)
                                        <tr>
                                            <td colspan="3">
                                                <span class="text text-warning">First! please choose date and click report</span>
                                            </td>
                                        </tr>

                                    @elseif(count($reports) <1)
                                        <tr>
                                            <td colspan="3">
                                                <span class="text text-danger">There is no rsult found!</span>
                                            </td>
                                        </tr>
                                    @else
                                        @php $i = 1; @endphp
                                        @foreach($reports as $r)
                                            <tr>
                                                <td>@php echo $i;$i++; @endphp</td>
                                                <td>{{$r->title}}</td>
                                                <td>{{$r->price}}</td>
                                            </tr>
                                        @endforeach

                                        <tr class="text text-success">
                                            <td colspan="2" class="text-right">Total Price</td>
                                            <td>{{$total_price->p}}</td>
                                        </tr>
                                    @endif

                                    </tbody>
                                </table><div class="dataTables_info" id="datatable2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datatable2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable2_previous"><a href="#" aria-controls="datatable2" data-dt-idx="0" tabindex="0" class="page-link"><em class="fa fa-caret-left"></em></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable2_next"><a href="#" aria-controls="datatable2" data-dt-idx="7" tabindex="0" class="page-link"><em class="fa fa-caret-right"></em></a></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Datatables-->
    <script src="{{asset('dashboard_asset/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons/js/buttons.flash.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-buttons/js/buttons.print.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-keytable/js/dataTables.keyTable.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/jszip/dist/jszip.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/pdfmake/build/pdfmake.js')}}"></script>
    <script src="{{asset('dashboard_asset/vendor/pdfmake/build/vfs_fonts.js')}}"></script>

@endsection