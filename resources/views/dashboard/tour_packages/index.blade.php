@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Manage Tour Packages
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="container-fluid">
                    <!-- DATATABLE-->
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('manage_package.create')}}" class="btn btn-labeled btn-success mb-2">
                               <span class="btn-label"><i class="fa fa-plus"></i>
                               </span>Add New Tour Package
                            </a>
                        </div>
                        <div class="card-header">
                            <div class="card-title">All Tour Packages List</div>
                        </div>
                        @include('dashboard.layout.error')
                        <div class="card-body">
                            <table class="table table-striped my-4 w-100 text text-center" id="datatable1">
                                <thead class="text-center">
                                <tr>
                                    <th data-priority="1">No.</th>
                                    <th>Title</th>
                                    <th>Destination</th>
                                    <th>Price (MMK)</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Destination</th>
                                    <th>Price (MMK)</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach($packages as $p)
                                    <tr>
                                        <td class="text-center">@php echo $i.'.';$i++; @endphp</td>
                                        <td>{{$p->title}}</td>
                                        <td>{{$p->cities->name}}</td>
                                        <td>{{$p->price}}</td>
                                        <td>{{$p->duration}}</td>
                                        <td class="text-center">
                                            <a href="{{route('manage_package.show',$p->id)}}" class="badge badge-purple ">Detail</a>
                                            <a href="{{route('manage_package.edit',$p->id)}}" class="badge badge-info">Update</a>
                                            @if(Auth::user()->role=='admin')
                                            <form action="{{route('manage_package.destroy',$p->id)}}" class="d-inline" method="post" >
                                                {{csrf_field()}}
                                                {{method_field('Delete')}}
                                                <button class="badge badge-danger" type="submit">Delete</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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