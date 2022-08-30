<li>
    <a href="javascript: void(0);"><i class="mdi mdi-cart"></i>{{ trans('accounts.sale.name') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">

        <li><a href="{{route('dashboard.accounts.sale.create')}}" class="parent-a"><i class="fas fa-plus-circle"></i><span>{{ trans('accounts.sale.new_sale') }}</span></a></li>


        <li><a href="{{route('dashboard.accounts.sale.index')}}" class="parent-a"><i class="fas fa-edit"></i><span>{{ trans('accounts.sale.manage_sale') }}</span></a></li>


        <li><a href="{{route('dashboard.accounts.pos.create')}}" class="parent-a"><i class="fas fa-cart-plus"></i><span>{{ trans('accounts.sale.pos_sale') }}</span></a></li>

    </ul>
</li>
