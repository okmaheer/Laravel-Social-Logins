<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="{{ asset(session(\App\Enum\SessionEnum::SESSION_LOCATION_MODEL)->logo) }}" alt="user" class="img-thumbnail mb-1"
                style="background-color: #fff !important; border: 1px solid #fff !important;">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                 <h5 class="text-light text-left">{{ auth()->user()->getName() }}</h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="{{ route('dashboard.accounts.user.profile') }}" data-toggle="tooltip" data-placement="top" title="{{ __('accounts.general.profile') }}"><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    @if(!auth()->user()->hasRole(\RoleEnum::ROLE_SUPER_ADMIN))
                        @can('softwareSettings', \App\Models\Setting::class)
                        <li class="list-inline-item">
                            <a href="{{ route('dashboard.accounts.location-settings') }}" data-toggle="tooltip" data-placement="top" title="{{ __('accounts.general.settings') }}"><i
                                    class="mdi mdi-settings text-light"></i></a>
                        </li>
                        @endcan
                    @endif
                    <li class="list-inline-item">
                        <button type="button" onclick="LogoutConfirm();" data-toggle="tooltip" data-placement="top" title="{{ __('accounts.general.logout') }}"><i class="mdi mdi-power text-danger"></i></button>
                    </li>
                </ul>
            </div>
        </div>
        @if(auth()->user()->hasRole(\RoleEnum::ROLE_SUPER_ADMIN))
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        @if(session()->has(\App\Enum\SessionEnum::SESSION_LOCATION_ID))
                            <a href="{{ route('super-admin.clear-location') }}" class="btn btn-primary btn-sm w-sm float-right">Change Location</a>
                            <h5 class="float-right text-white pr-3">Current Location: <b>{{ \Cache::get(\CacheEnum::AUTH_LOCATION)->name }}</b></h5>
                        @endif
                    </div>
                </div>
            </div>
        @else
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right align-item-center mt-2">

                    </div>
                    <!-- <h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h4> -->
                    <div class="">
                        <ol class="breadcrumb">
                            @if (isset($breadcrumbs))
                                @foreach ($breadcrumbs as $key => $value)
                                    @if ($loop->last)
                                        <li class="breadcrumb-item active">
                                            {{ $key }}
                                        </li>
                                    @else
                                        <li class="breadcrumb-item">
                                            <a href="{!! empty($value) ? 'javascript:void(0);' : $value !!}">{{ $key }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ol>
                    </div>
                    <div class="row mt-2">





                        <div class="col-md-12">

                            <a href="{{ route('customer.receive') }}"
                                class="btn btn-xs btn-danger text-white  w-md float-right ">Customer Receive</a>

                            <a href="{{ route('supplier.payment') }}"
                                class="btn btn-xs btn-primary text-white  w-md float-right mr-1">Supplier Payment</a>

                            <a href="{{ route('dashboard.accounts.purchase.create') }}"
                                class="btn btn-xs btn-warning text-white  w-md float-right mr-1">Purchase</a>
                            <a href="{{ route('dashboard.accounts.sale.create') }}"
                                class=" btn btn-xs btn-success text-white w-md float-right mr-1">Sale</a>
                        </div>


                    </div>
                </div>
                <!--end page title box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        @endif
        <!-- end page title end breadcrumb -->
    </div>
    <!--end page-wrapper-img-inner-->
</div>
