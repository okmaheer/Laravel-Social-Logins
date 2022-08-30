<div class="page-wrapper-inner" style="padding: 20px;">

    <!-- Navbar Custom Menu -->
    <div class="navbar-custom-menu">

        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu list-unstyled">

                    @php $userRole = auth()->user()->roles[0]->name; @endphp
                    @if($userRole == \App\Enum\RoleEnum::ROLE_SUPER_ADMIN)
                        <li><a href="{{route('super-admin.sms-api.index')}}"><i class="fas fa-comment-alt"></i> {{ __('accounts.sms.manage_sms_api') }}</a></li>
                    @else
                        @include('includes.nav.horizontal-navbar-components.nav-people')
                        @include('includes.nav.horizontal-navbar-components.nav-inventory')
                        @include('includes.nav.horizontal-navbar-components.nav-accounts')
                        @include('includes.nav.horizontal-navbar-components.nav-human-resource')
                        @include('includes.nav.horizontal-navbar-components.nav-reports')
                        @include('includes.nav.horizontal-navbar-components.nav-system')
                    @endif
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div> <!-- end container-fluid -->
    </div>
    <!-- end left-sidenav-->
</div>
