@extends('member.member_dashboard')
@section('member_content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="mb-3">Hi, welcome back!</h4>
                                <p class="text-muted
                                    mb-4">Your web analytics dashboard template. All your web analytics data in an easy to use and customizable dashboard.</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <h5 class="mb-2">Total Revenue</h5>
                                            <h4>$6,890</h4>
                                            <p class="text-muted
                                                mb-0">Jan - Apr 2021</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <h5 class="mb-2">Total Revenue</h5>
                                            <h4>$6,890</h4>
                                            <p class="text-muted
                                                mb-0">Jan - Apr 2021</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <h5 class="mb-2">Total Revenue</h5>
                                            <h4>$6,890</h4>
                                            <p class="text-muted
                                                mb-0">Jan - Apr 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <img src="assets/images/dashboard.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        
    </div>
    <!-- container-fluid -->
</div>
@endsection