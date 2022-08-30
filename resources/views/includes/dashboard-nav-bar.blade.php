<div id="nav" class="left-sidenav">
    <div id="navigation-menu">
        <ul class="metismenu left-sidenav-menu" id="side-nav">
            @php $userRole = auth()->user()->roles[0]->name; @endphp

            @if($userRole == \App\Enum\RoleEnum::ROLE_SUPER_ADMIN)
                <li><a href="{{route('super-admin.sms-api.index')}}" class="parent-a" ><i class="fas fa-comment-alt"></i> {{ __('accounts.sms.manage_sms_api') }}</a></li>
                @include('includes.nav.reports')
            @else
                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT || $userRole == \App\Enum\RoleEnum::ROLE_DATA_OPERATOR)
                    <!-- Customer -->
                    @include('includes.nav.customer')
                @endif
                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Supplier -->
                   @include('includes.nav.supplier')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT || $userRole == \App\Enum\RoleEnum::ROLE_DATA_OPERATOR)
                    <!-- Product -->
                  @include('includes.nav.product')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT || $userRole == \App\Enum\RoleEnum::ROLE_DATA_OPERATOR)
                    <!-- Purchase -->
                    @include('includes.nav.purchase')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT || $userRole == \App\Enum\RoleEnum::ROLE_DATA_OPERATOR)
                    <!-- Sale -->
                  @include('includes.nav.sale')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Stock -->
                   @include('includes.nav.stock')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Income -->
                   @include('includes.nav.income')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- PettyCash -->
                   @include('includes.nav.pettycash')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Expense -->
                    @include('includes.nav.expense')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Quick Accounts -->
                   @include('includes.nav.quickaccounts')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Accounts -->
                  @include('includes.nav.accounts')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT)
                    <!-- Reports -->
                    @include('includes.nav.reports')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN || $userRole == \App\Enum\RoleEnum::ROLE_ACCOUNTANT || $userRole == \App\Enum\RoleEnum::ROLE_HR_MANAGER)
                    <!-- HR -->
                    @include('includes.nav.hr')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN)
                    <!-- Access -->
                   @include('includes.nav.access')
                @endif

                @if($userRole == \App\Enum\RoleEnum::ROLE_ADMIN)
                    <!-- Settings -->
                    @include('includes.nav.settings')
                @endif

            <!-- Service -->
            {{--<li>
            <a href="javascript: void(0);"> <i class="fas fa-american-sign-language-interpreting"></i><span>   Service</span><span
                    class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{route('dashboard.accounts.service.create')}}">Add Service</a></li>
                <li><a href="{{route('dashboard.accounts.service.index')}}">Manage Service</a></li>
                <li><a href="{{route('dashboard.accounts.service_invoice.create')}}">Service Invoice</a></li>
                <li><a href="{{route('dashboard.accounts.service_invoice.index')}}">Manage Service Invoice </a></li>
                <li>
                    <a href="javascript: void(0);">Quotation<span class="menu-arrow left-has-menu"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('dashboard.accounts.quotation.create')}}">Add Quotation</a></li>
                        <li><a href="{{route('dashboard.accounts.quotation.index')}}">Manage Quotation</a></li>
                    </ul>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);"> <i class="ti-layout-grid2"></i><span> Commission</span><span
                    class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{route('commission')}}">commission</a></li>
            </ul>
        </li>--}}

        @endif
        </ul>
    </div>
</div>
