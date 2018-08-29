@extends('dashboard.layout.app')
@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Page title
            </div>
        </div>
        @include('dashboard.layout.error')
        <div class="row">
            <div class="col-xl-12">
                <p>A row with content</p>
            </div>
        </div>
    </div>
@endsection