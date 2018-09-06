@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Manage Users
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="container-fluid">
                    <!-- DATATABLE-->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">All Users List</div>
                        </div>
                        @include('dashboard.layout.error')
                        <div class="card-body">
                            <table class="table table-striped my-4 w-100 text text-center" id="datatable1">
                                <thead class="text-center">
                                <tr>
                                    <th data-priority="1">No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach($users as $u)
                                    <tr>
                                        <td class="text-center">@php echo $i.'.';$i++; @endphp</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->role}}</td>
                                        <td>{{$u->phone}}</td>
                                        <td>{{$u->address}}</td>
                                        <td class="text-center">
                                            <a href="{{route('manage_user.edit',$u->id)}}" class="badge badge-info">Change Role</a>
                                            <form action="{{route('manage_user.destroy',$u->id)}}" class="d-inline" method="post" >
                                                {{csrf_field()}}
                                                {{method_field('Delete')}}
                                                <button class="badge badge-danger" type="submit">Ban</button>
                                            </form>
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