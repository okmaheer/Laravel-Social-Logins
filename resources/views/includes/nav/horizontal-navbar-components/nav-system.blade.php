<li class="has-submenu last-elements">
    <a href="javascript: void(0);"><i class="ti-settings"></i><span>System</span></a>
    <ul class="submenu megamenu">
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Access</b></p>
            <ul>
                @can('hasAccess', 'view_user')
                    <li><a href="{{route('dashboard.accounts.users.index')}}">Users</a></li>
                @endcan
                @can('hasAccess', 'view_role')
                    <li><a href="{{route('dashboard.accounts.roles.index')}}">Roles</a></li>
                @endcan
            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Settings</b></p>
            <ul>
                @can('hasAccess', 'hardware_settings')
                    <li><a href="{{route('settings.hardware.settings')}}">Hardware Settings</a></li>
                @endcan
                @can('hasAccess', 'software_settings')
                    <li><a href="{{route('dashboard.accounts.location-settings')}}">Software Settings</a></li>
                @endcan
                @can('hasAccess', 'view_sms_template')
                    <li><a href="{{route('dashboard.accounts.sms-templates.index')}}">SMS Templates</a></li>
                @endcan
            </ul>
        </li>
    </ul>
</li>

