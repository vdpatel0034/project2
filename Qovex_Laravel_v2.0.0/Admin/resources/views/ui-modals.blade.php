@extends('layouts.master')
@section('title')
    Modals
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Modals</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Modals</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Modals Examples</h4>
                    <p class="card-title-desc">Modals are streamlined, but flexible dialog prompts
                        powered by JavaScript. They support a number of use cases from user notification
                        to completely custom content and feature a handful of helpful subcomponents,
                        sizes, and more.</p>

                    <div class="modal bs-example-modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <div class="row">

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Standard modal</p>
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#myModal">Standard
                                    modal</button>
                            </div>

                            <!-- sample modal content -->
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="font-size-16">Overflowing text to show scroll
                                                behavior</h5>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                                changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Extra large modal</p>
                                <!-- Extra Large modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra
                                    large
                                    modal</button>
                            </div>

                            <!--  Modal content for the above example -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">
                                                Extra large modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                consectetur. Praesent commodo cursus magna, vel
                                                scelerisque nisl consectetur et. Donec sed odio dui.
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Large modal</p>
                                <!-- Large modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large
                                    modal</button>
                            </div>

                            <!--  Modal content for the above example -->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Large
                                                modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                consectetur. Praesent commodo cursus magna, vel
                                                scelerisque nisl consectetur et. Donec sed odio dui.
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Small modal</p>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small
                                    modal</button>
                            </div>

                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="mySmallModalLabel">Small
                                                modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                consectetur. Praesent commodo cursus magna, vel
                                                scelerisque nisl consectetur et. Donec sed odio dui.
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Center modal</p>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Center
                                    modal</button>
                            </div>

                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0">Center modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed
                                                consectetur. Praesent commodo cursus magna, vel
                                                scelerisque nisl consectetur et. Donec sed odio dui.
                                                Donec ullamcorper nulla non metus auctor fringilla.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Scrollable modal</p>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Scrollable
                                    modal</button>
                            </div>

                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">
                                                Scrollable Modal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Static backdrop
                                    modal</p>
                                <!-- Satic modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Static backdrop modal
                                </button>
                            </div>

                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            I will not close if you click outside me. Don't even try to
                                            press escape key.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Full Screen</p>
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#fullscreenModal">Fullscreen
                                    modal</button>
                            </div>

                            <!-- sample modal content -->
                            <div id="fullscreenModal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel1">Modal
                                                Heading
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="font-size-16">Overflowing text to show scroll
                                                behavior</h5>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras
                                                justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Donec sed odio dui. Donec ullamcorper nulla non
                                                metus auctor fringilla.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                                changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Tooltips and popovers</p>
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalPopovers">Tooltips and
                                    popovers</button>
                            </div>


                            <div class="modal fade" id="exampleModalPopovers" tabindex="-1"
                                aria-labelledby="exampleModalPopoversLabel" aria-hidden="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Popover in a modal</h5>
                                            <p>This <a href="#" role="button" class="btn btn-secondary"
                                                    data-bs-toggle="popover"
                                                    data-bs-content="Popover body content is set in this attribute."
                                                    data-bs-container="#exampleModalPopovers">button</a> triggers a popover
                                                on click.</p>
                                            <hr>
                                            <h5>Tooltips in a modal</h5>
                                            <p><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-container="#exampleModalPopovers">This link</a> and <a
                                                    href="#" data-bs-toggle="tooltip"
                                                    data-bs-container="#exampleModalPopovers">that link</a> have tooltips
                                                on hover.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end modal-->
                        </div> <!--end col-->

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Using grid</p>
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#gridSystemModal">Using grid</button>
                            </div>


                            <div class="modal fade" id="gridSystemModal" tabindex="-1" aria-labelledby="gridModalLabel"
                                aria-hidden="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">.col-md-4</div>
                                                    <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                                    <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        Level 1: .col-sm-9
                                                        <div class="row">
                                                            <div class="col-8 col-sm-6">
                                                                Level 2: .col-8 .col-sm-6
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                Level 2: .col-4 .col-sm-6
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end modal-->
                        </div> <!--end col-->

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Varying modal content</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for
                                    @getbootstrap</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="@getbootstrap" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end modal-->
                        </div> <!--end col-->

                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="my-4 text-center">
                                <p class="text-muted">Toggle between modal</p>
                                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button">Toggle between modal</a>
                            </div>
                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Show a second modal and hide this one with the button below.
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                                data-bs-toggle="modal">Open second modal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Hide this modal and show the first with the button below.
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Back to first</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
