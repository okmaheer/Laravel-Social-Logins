@extends('layouts.dashboard')
@section('page_title', $page_title)
@section('content')
@section('innerStyleSheet')
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/dropify/css/dropify.min.css') }}">
    <link href="{{ asset('dashboard/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@include('includes.dashboard-breadcrumbs')

@section('body')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="
                        height: 84%;">
                        <div class="card-body mb-0">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <div class="">
                                        <h4 class="mt-0 header-title">Total Sales This Month</h4>
                                        <h3 class="mt-0 font-weight-bold text-dark">{{ \AccountHelper::number_format($sale, 0) . ' Pkr' }}</h3>

                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-4 align-self-center">
                                    <div class="icon-info text-right">
                                        <i class="dripicons-cart bg-soft-warning"></i>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                        <div class="card-body overflow-hidden p-0">
                            <div class="d-flex mb-0 h-100 dash-info-box">
                                <div class="w-100">
                                    <div class="apexchart-wrapper">
                                        <div id="dash_spark_1" class="chart-gutters"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-4">
                    <div class="card carousel-bg-img" style="height: 84%;">
                        <div class="card-body dash-info-carousel mb-0">
                            <div id="petty_cih" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">CASH IN HAND</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-wallet bg-soft-success"></i>
                                                    </div>
                                                    <h3 class="mt-0 font-weight-bold text-dark">
                                                        {{ $cih->balance . ' Pkr' }}
                                                    </h3>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Petty Cash</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-wallet bg-soft-success"></i>
                                                    </div>
                                                    <h3 class="mt-0 font-weight-bold text-dark">
                                                        {{ $pettycash->balance . ' Pkr' }}</h3>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->




                                </div>
                                <a class="carousel-control-prev" href="#petty_cih" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#petty_cih" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card carousel-bg-img" style="height: 84%;">
                        <div class="card-body dash-info-carousel mb-0">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Total Receivable</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-jewel bg-soft-pink"></i>
                                                    </div>
                                                    <h3 class="mt-0 font-weight-bold text-dark">
                                                        {{ $recieve->balance . ' Pkr' }}</h3>
{{--                                                    <p class="mb-1 text-muted"><span class="text-success"><i--}}
{{--                                                                class="mdi mdi-arrow-up"></i>35.5%</span> Receivable</p>--}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Total Payable</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-basket bg-soft-info"></i>
                                                    </div>
                                                    <h3 class="mt-0 font-weight-bold text-dark">
                                                        {{ $pay->balance . ' Pkr' }}
                                                    </h3>
{{--                                                    <p class="mb-1 text-muted"><span class="text-danger"><i--}}
{{--                                                                class="mdi mdi-arrow-down"></i>1.5%</span> Down From Last--}}
{{--                                                        week</p>--}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Total Suppliers</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-swap bg-soft-primary"></i>
                                                    </div>
                                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $supplier }}</h2>
                                                    <p class="mb-1 text-muted"><span class="text-success"></span> Supplier
                                                    </p>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-12 align-self-center">
                                                <div class="text-center">
                                                    <h4 class="mt-0 header-title text-left">Total Customers</h4>
                                                    <div class="icon-info my-3">
                                                        <i class="dripicons-store bg-soft-warning"></i>
                                                    </div>
                                                    <h2 class="mt-0 font-weight-bold text-dark">{{ $customer }}</h2>
                                                    <p class="mb-1 text-muted">Customers</p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end carousel-item-->

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Best Selling Products</h4>
                            <div class="chart-demo">
                                <div id="apex_bar1" class="apex-charts"></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Expense Statement</h4>
                            <div class="chart-demo">
                                <div id="apex_pie1" class="apex-charts"></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="card" style="
                    height: 95%;">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Today's OverView</h4>
                            <div class="">
                                <div id="apex_pie2" class="apex-charts"></div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Sales and Purchases</h4>
                            <div class="chart-demo">
                                <div id="yearlySalesPurchase" class="apex-charts"></div>
                            </div>                                        
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
            <!--end row-->
            <!--end row-->
           

        </div><!-- container -->

        @include('includes.dashboard-footer')
    </div>
@endsection
@endsection
@section('innerScriptFiles')

<script src="{{ asset('dashboard/plugins/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('dashboard/pages/jquery.apexcharts.init.js') }}"></script>
@include('includes.charts.charts')


@endsection
