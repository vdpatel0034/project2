@extends('layouts.master')
@section('title')
    General UI
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">General UI</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">General UI</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <h4 class="card-title">Badges</h4>
                                <p class="card-title-desc">Add any of the below mentioned modifier
                                    classes to change the appearance of a badge.</p>
                                <div>
                                    <span class="badge bg-primary">Primary</span>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-info">Info</span>
                                    <span class="badge bg-warning">Warning</span>
                                    <span class="badge bg-danger">Danger</span>
                                    <span class="badge bg-dark">Dark</span>
                                </div>

                                <div class="mt-1">
                                    <span class="badge bg-primary-subtle text-primary ">Primary</span>
                                    <span class="badge badge-soft-success">Success</span>
                                    <span class="badge bg-info-subtle text-info ">Info</span>
                                    <span class="badge bg-warning-subtle text-warning ">Warning</span>
                                    <span class="badge badge-soft-danger">Danger</span>
                                    <span class="badge bg-dark-subtle text-body">Dark</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="card-title">Pill badges</h4>
                                <p class="card-title-desc">Use the <code>.badge-pill</code> modifier
                                    class to make badges more rounded (with a larger
                                    <code>border-radius</code> and additional horizontal
                                    <code>padding</code>). Useful if you miss the badges from v3.
                                </p>

                                <div>
                                    <span class="badge rounded-pill bg-primary">Primary</span>
                                    <span class="badge rounded-pill bg-success">Success</span>
                                    <span class="badge rounded-pill bg-info">Info</span>
                                    <span class="badge rounded-pill bg-warning">Warning</span>
                                    <span class="badge rounded-pill bg-danger">Danger</span>
                                    <span class="badge rounded-pill bg-dark">Dark</span>
                                </div>

                                <div class="mt-1">
                                    <span class="badge rounded-pill bg-primary-subtle text-primary ">Primary</span>
                                    <span class="badge rounded-pill badge-soft-success">Success</span>
                                    <span class="badge rounded-pill bg-info-subtle text-info ">Info</span>
                                    <span class="badge rounded-pill bg-warning-subtle text-warning ">Warning</span>
                                    <span class="badge rounded-pill badge-soft-danger">Danger</span>
                                    <span class="badge rounded-pill bg-dark-subtle text-body">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Popovers</h4>
                    <p class="card-title-desc">Four options are available: top, right, bottom, and left
                        aligned. Directions are mirrored when using Bootstrap in RTL.</p>

                    <div class="button-items" id="popover-container">

                        <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container"
                            data-bs-toggle="popover" data-bs-placement="top"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on top
                        </button>

                        <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container"
                            data-bs-toggle="popover" data-bs-placement="right"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on right
                        </button>

                        <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container"
                            data-bs-toggle="popover" data-bs-placement="bottom"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on bottom
                        </button>

                        <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container"
                            data-bs-toggle="popover" data-bs-placement="left" title="Popover Title"
                            data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on left
                        </button>

                        <button type="button" class="btn btn-success waves-effect waves-light"
                            data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-trigger="focus"
                            title="Dismissible popover"
                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                            popover</button>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tooltips</h4>
                    <p class="card-title-desc">Hover over the links below to see tooltips:</p>

                    <div class="button-items" id="tooltip-container">
                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                            Tooltip on top
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container"
                            data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                            Tooltip on right
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                            Tooltip on left
                        </button>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Pagination</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="font-size-14">Default Example</h5>
                            <p class="card-title-desc">Pagination links indicate a series of related
                                content exists across multiple pages.</p>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14">Disabled and active states</h5>
                                <p class="card-title-desc">Pagination links are customizable for
                                    different circumstances. Use <code>.disabled</code> for links that
                                    appear un-clickable and <code>.active</code> to indicate the current
                                    page.</p>

                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span
                                                    class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                2
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="font-size-14">Sizing</h5>
                                <p class="card-title-desc">Fancy larger or smaller pagination? Add
                                    <code>.pagination-lg</code> or <code>.pagination-sm</code> for
                                    additional sizes.
                                </p>

                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="card-title">Alignment</h5>
                                <p class="card-title-desc">Change the alignment of pagination components
                                    with flexbox utilities.</p>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Border spinner</h4>
                    <p class="card-title-desc">Use the border spinners for a lightweight loading
                        indicator.</p>
                    <div>
                        <div class="spinner-border text-primary m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-secondary m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-success m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-info m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-warning m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-danger m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border text-reset m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Growing spinner</h4>
                    <p class="card-title-desc">If you don’t fancy a border spinner, switch to the grow
                        spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
                    <div>
                        <div class="spinner-grow text-primary m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-reset m-1" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Additive Border</h4>
                        <p class="card-title-desc mb-0">Add borders to custom elements</p>
                    </div><!-- end card -->
                    <div class="d-flex flex-wrap gap-2">
                        <span class="border border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border-top border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border-end border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border-bottom border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border-start border-primary bg-light p-5 d-inline-block"></span>
                    </div>
                </div>
            </div>
        </div> <!--end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Subtractive Border</h4>
                        <p class="card-title-desc mb-0">Or remove borders.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="border border-0 border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border border-top-0 border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border border-end-0 border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border border-bottom-0 border-primary bg-light p-5 d-inline-block"></span>
                        <span class="border border-start-0 border-primary bg-light p-5 d-inline-block"></span>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Border Opacity</h4>
                        <p class="card-title-desc mb-0">To change that opacity, override --bs-border-opacity via custom
                            styles or inline styles.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="border border-primary border-opacity-10 bg-light p-5 d-inline-block"></span>
                        <span class="border border-primary border-opacity-25 bg-light p-5 d-inline-block"></span>
                        <span class="border border-primary border-opacity-50 bg-light p-5 d-inline-block"></span>
                        <span class="border border-primary border-opacity-75 bg-light p-5 d-inline-block"></span>
                        <span class="border border-primary bg-light p-5 d-inline-block"></span>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Border Width</h4>
                        <p class="card-title-desc mb-0">Add classes to an element to easily width apply.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="border border-1 p-5 d-inline-block"></span>
                        <span class="border border-2 p-5 d-inline-block"></span>
                        <span class="border border-3 p-5 d-inline-block"></span>
                        <span class="border border-4 p-5 d-inline-block"></span>
                        <span class="border border-5 p-5 d-inline-block"></span>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div><!--end row-->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Color</h4>
                        <p class="card-title-desc mb-0">Change the border color using utilities built on our theme colors.
                        </p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="border border-primary p-5 d-inline-block"></span>
                        <span class="border border-secondary  p-5 d-inline-block"></span>
                        <span class="border border-success  p-5 d-inline-block"></span>
                        <span class="border border-danger  p-5 d-inline-block"></span>
                        <span class="border border-warning  p-5 d-inline-block"></span>
                        <span class="border border-info  p-5 d-inline-block"></span>
                        <span class="border border-light  p-5 d-inline-block"></span>
                        <span class="border border-dark  p-5 d-inline-block"></span>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Border Radius</h4>
                        <p class="card-title-desc mb-0">Add classes to an element to easily round its corners.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded avatar-xl" alt=" ">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-top avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-end avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-bottom avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-start avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-circle avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="rounded-pill w-25 h-auto">
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div> <!--end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Rounded Sizes</h4>
                        <p class="card-title-desc mb-0">Use the scaling classes for larger or smaller rounded corners.
                            Sizes range from 0 to 5, and can be configured by modifying the utilities API.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-0 avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-1 avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-2 avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-3 avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-4 avatar-xl" alt="">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="rounded-5 avatar-xl" alt="">
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!--end row-->
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
