@section('title')
Theta - Tree View
@endsection
@extends('templates.backend.layout.app')
@section('style')
<!-- JS Tree css -->
<link href="{{ asset('assets/plugins/jstree/jstree.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Tree View</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Advanced UI Kits</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tree View</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary">Add Widget</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Types Tree View</h5>
                </div>
                <div class="card-body">
                    <div id="types-tree"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Checkbox Tree View</h5>
                </div>
                <div class="card-body">
                    <div id="checkbox-tree"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Drag & Drop Tree View</h5>
                </div>
                <div class="card-body">
                    <div id="drag-drop-tree"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Ajax Tree View</h5>
                </div>
                <div class="card-body">
                    <div id="ajax-tree"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- JS Tree js -->
<script src="{{ asset('assets/plugins/jstree/jstree.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-jstree.js') }}"></script>
@endsection
