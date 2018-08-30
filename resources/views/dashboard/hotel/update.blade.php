@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Update Hotel
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{ route('manage_hotel.index') }}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Enter Hotel Information
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_hotel.update',$hotel->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="name" value="{{$hotel->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Place</label>
                                <div class="col-xl-6 col-10">
                                    <select name="place" id="select2-2" class="form-control">
                                        @foreach($cities as $c)
                                            <option
                                                    @if($c->name == $hotel->place)
                                                        selected
                                                    @endif
                                                    value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Price</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="number" value="{{$hotel->price}}" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Website Address</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="link" value="{{$hotel->link}}" required>
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