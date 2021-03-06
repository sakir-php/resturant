@push('title')
    Theta - Home
@endpush
@extends('layouts.backend.branch')
@push('style')

@endpush
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">

</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        @foreach ($branches as $branch)
        <div class="col-md-6 col-lg-6 col-xl-3 text-center">
            <div class="card text-center m-b-20">
                <img class="card-img-top"  height="197px;" width="286px;"  src="{{ asset($branch->image ?? 'assets/backend/images/ui-cards/ui-cards-1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-18">{{ $branch->name }}</h5>
                    <a href="{{ route('branch.show', $branch) }}" class="btn btn-primary">Dashboard</a>
                    @hasanyrole('Super Admin|Admin')
                    <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-info">Edit</a>
                    @endrole
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-6 col-lg-6 col-xl-3 text-center">
            <div class="card m-b-30">
                <a href="{{ route('branch.create') }}">
                    <img class="card-img-top rounded-circle border border-success " src="{{ asset('uploads/images/plus.png') }}" alt="Card image cap">
                </a>

            </div>
        </div>

        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@push('script')


@endpush
