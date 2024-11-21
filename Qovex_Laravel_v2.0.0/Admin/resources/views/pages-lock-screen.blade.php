@extends('layouts.master-without-nav')
@section('title')
    Lock screen
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="index" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Lock screen</h5>
                                <p class="text-white-50 mb-0">Enter your password to unlock the screen!</p>
                                <a href="index" class="logo logo-admin mt-4">
                                    <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" action="index">

                                    <div class="user-thumb text-center mb-4">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                            class="rounded-circle img-thumbnail avatar-md" alt="thumbnail">
                                        <h5 class="font-size-15 mt-3">Maria Laird</h5>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Unlock</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Not you ? return <a href="pages-login" class="fw-medium text-primary"> Sign In
                            </a> </p>
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Qovex. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
