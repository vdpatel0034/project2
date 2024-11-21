@extends('layouts.master')
@section('title')
    Task List
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Task List</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Task List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Upcoming</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td style="width: 60px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a Qovex Dashboard UI</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill bg-secondary-subtle text-secondary  font-size-11">Waiting</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2" checked>
                                            <label class="form-check-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a New Landing UI</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        3 +
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill bg-primary-subtle text-primary  font-size-11">Approved</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a Qovex Logo</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        F
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill bg-secondary-subtle text-secondary  font-size-11">Waiting</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">In Progress</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td style="width: 60px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck4" checked>
                                            <label class="form-check-label" for="customCheck4"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Brand logo design</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill badge-soft-success font-size-11">Complete</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                            <label class="form-check-label" for="customCheck5"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a Blog Template UI</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        S
                                                    </span>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill bg-warning-subtle text-warning  font-size-11">Pending</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Completed</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td style="width: 60px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                            <label class="form-check-label" for="customCheck6"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Redesign - Landing page</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        F
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill badge-soft-success font-size-11">Complete</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck7" checked>
                                            <label class="form-check-label" for="customCheck7"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Multipurpose Landing</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill badge-soft-success font-size-11">Complete</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck8">
                                            <label class="form-check-label" for="customCheck8"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a Blog Template UI</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        S
                                                    </span>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <span
                                                class="badge rounded-pill badge-soft-success font-size-11">Complete</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Tasks</h4>

                    <div id="task-chart" class="apex-charts"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Recent Tasks</h4>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Brand logo design</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Create a Blog Template UI</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        S
                                                    </span>
                                                </div>
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="text-truncate font-size-14 m-0"><a href="#"
                                                class="text-reset">Redesign - Landing page</a></h5>
                                    </td>
                                    <td>
                                        <div class="team">
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                            <a href="javascript: void(0);" class="team-member d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                    class="rounded-circle avatar-xs m-1" alt="">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
            </div>

        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/tasklist.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
