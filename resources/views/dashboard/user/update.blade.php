@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Manage User Role
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{ route('manage_user.index') }}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Select User Role
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_user.update',$user->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Role</label>
                                <div class="col-xl-10">
                                    <select name="role" id="">
                                        <option value="admin"
                                                @if($user->role == 'admin')
                                                selected
                                                @endif
                                        >Admin</option>
                                        <option value="editor"
                                                @if($user->role == 'editor')
                                                selected
                                                @endif
                                        >Editor</option>
                                        <option value="user"
                                                @if($user->role == 'user')
                                                selected
                                                @endif
                                        >User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
