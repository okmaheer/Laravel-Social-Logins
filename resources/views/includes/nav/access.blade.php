<li>
    <a href="javascript: void(0);"> <i class="fa fa-user-secret"></i><span>Access</span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <li>
            <a href="{{route('dashboard.accounts.users.index')}}" class="parent-a" >Users</a>
        </li>
        <li>
            <a href="{{route('dashboard.accounts.roles.index')}}" class="parent-a" >Roles</a>
        </li>

        {{--
            <li>
                <a href="{{route('dashboard.accounts.permissions.index')}}" class="parent-a" >Permissions</a>
            </li>


            <li>
                <a href="{{route('dashboard.accounts.permissions.sync')}}" class="parent-a" >Sync Permissions</a>
            </li>
        --}}
    </ul>
</li>
