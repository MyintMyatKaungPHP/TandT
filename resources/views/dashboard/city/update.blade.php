@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Update City
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{ route('manage_city.index') }}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Enter City Information
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_city.update',$city->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="name" required minlength="1" max="255" value="{{$city->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Update</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
