@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Create New Route
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('manage_route.index')}}" class="btn btn-labeled btn-outline-info">
                           <span class="btn-label"><i class="fa fa-arrow-left"></i>
                           </span>Back
                </a>
                <div class="card card">
                    <div class="card-header">
                        Enter Route Information
                    </div>
                    @include('dashboard.layout.error')
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('manage_route.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">From</label>
                                <div class="col-xl-6 col-10">
                                    <select name="from" id="select2-2" class="form-control">
                                        @foreach($cities as $c)
                                            <option value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">To</label>
                                <div class="col-xl-6 col-10">
                                    <select name="to" id="select2-2" class="form-control">
                                        @foreach($cities as $c)
                                            <option value="{{$c->name}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">To</label>
                                <div class="col-xl-6 col-10">
                                    <select name="type" id="select2-2" class="form-control">
                                       <option value="Flight">Flight</option>
                                       <option value="Car">Car</option>
                                       <option value="Ship">Ship</option>
                                       <option value="Locomotive">Locomotive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Price</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="number" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Create</button>
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