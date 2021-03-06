@push('title')
    Other
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Other</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Other</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="card m-b-30 col-12 ">
                <div class="card-header bg-danger">
                    <h5 class="card-title">Other</h5>
                </div>
                <div class="card-body">
                    <form class="row justify-content-center" method="POST" action="{{ route('otherStaticOptionUpdate') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="blog_highlight" class="col-sm-4 col-form-label">Subscribe title</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('subscribe_title') }}" name="subscribe_title"
                                           type="text" class="form-control" id="subscribe_title" placeholder="Subscribe title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subscribe_description" class="col-sm-4 col-form-label">Subscribe description</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('subscribe_description') }}" name="subscribe_description"
                                           type="text" class="form-control" id="subscribe_description"
                                           placeholder="Subscribe description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="faq_highlight" class="col-sm-4 col-form-label">Faq highlight</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('faq_highlight') }}" name="faq_highlight"
                                           type="text" class="form-control" id="faq_highlight"
                                           placeholder="Faq highlight">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="faq_title" class="col-sm-4 col-form-label">Faq title</label>
                                <div class="col-sm-8">
                                    <input value="{{ get_static_option('faq_title') }}" name="faq_title"
                                           type="text" class="form-control" id="faq_title"
                                           placeholder="Faq title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="map_link" class="col-sm-4 col-form-label">Map link</label>
                                <div class="col-sm-8">
                                    <textarea name="map_link" type="text" class="form-control" id="map_link">{{ get_static_option('map_link') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_checkout_description" class="col-sm-4 col-form-label">Product checkout description</label>
                                <br>
                                <div class="col-12">
                                    <textarea name="product_checkout_description" type="text" class="form-control description" id="product_checkout_description">{!! get_static_option('product_checkout_description') !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="submit-btn" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')


@endpush

@push('note')
    <script>
        $('.description').summernote({
            placeholder: 'Product checkout description...',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
