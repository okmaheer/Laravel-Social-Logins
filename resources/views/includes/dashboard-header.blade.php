<div class="topbar">
    <nav class="navbar-custom">
        <div class="topbar-left">
            <a href="{{ route('dashboard') }}" class="logo">
               <span>
                   <img src="{{ asset('uploads/settings/deskbook.png' ) }}" alt="Deskbook ERP"
                        style="height:75px; width:175px;">
               </span>
            </a>
        </div>
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
                   role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline nav-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge">
                        <span class="notifiction_counter">{{ Auth::user()->unreadNotifications()->count() }}</span>
                   </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                    <!-- item-->
                    <h6 class="dropdown-item-text">
                        Notifications <span class="notifiction_counter">({{ Auth::user()->unreadNotifications()->count() }})</span>
                    </h6>
                    <div class="slimscroll notification-list notification_holder">
                        @if(Auth::user()->unreadNotifications()->count()>0)
                            @foreach(Auth::user()->unreadNotifications as $notification)
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <div class="notify-details">
                                        <small class="text-muted">{{ $notification->data }}</small>
                                        <span class="my-2 badge badge-xs btn-info px-0" onclick="apply_mark_as_read(this);">
                                            Mark as Read
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                   role="button"
                   aria-haspopup="false" aria-expanded="false">
                    @if(file_exists(auth()->user()->avatar))
                        <img src="{{ asset(auth()->user()->avatar) }}" alt="profile-user"
                             class="rounded-circle border"/>
                    @else
                        <img src="{{ asset('images/user.png') }}" alt="profile-user" class="rounded-circle border"/>
                    @endif
                    <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('dashboard.accounts.user.profile') }}"><i
                            class="dripicons-user text-muted mr-2"></i> Profile</a>
                    @if(!auth()->user()->hasRole(\RoleEnum::ROLE_SUPER_ADMIN))
                        @can('softwareSettings', \App\Models\Setting::class)
                            <a class="dropdown-item" href="{{ route('dashboard.accounts.location-settings') }}"><i
                                    class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        @endcan
                    @endif
                    <div class="dropdown-divider"></div>
                    <form method="post" action="{{ route('logout') }}" id="logoutForm">
                        @csrf
                    </form>
                    <button type="button" class="dropdown-item" onclick="LogoutConfirm();">
                        <i class="dripicons-exit text-muted mr-2"></i>Logout
                    </button>
                </div>
            </li>

        </ul>
{{--        <ul class="list-unstyled topbar-nav mb-0">--}}

{{--            <li>--}}
{{--                <button onclick="ToggleNavBar()" class="button-menu-mobile nav-link waves-effect waves-light">--}}
{{--                    <i class="mdi mdi-menu nav-icon"></i>--}}
{{--                </button>--}}
{{--            </li>--}}
{{--        </ul>--}}


        {{--<ul class="list-unstyled topbar-nav mb-0">
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fas fa-search"></i></a>
                </form>
            </li>

        </ul>--}}

    </nav>
    <!-- end navbar-->
</div>
