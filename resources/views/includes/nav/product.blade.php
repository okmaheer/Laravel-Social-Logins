<li>
    <a href="javascript: void(0);"> <i class=" fa fa-cubes"></i><span>Product</span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">

        <li>
            <a href="{{route('dashboard.accounts.category.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Category</span></a>
        </li>


        <li>
            <a href="{{route('dashboard.accounts.category.index')}}" class="parent-a"><i class="fas fa-list-ul"></i><span>Category List</span></a>
        </li>


        <li>
            <a href="{{route('dashboard.accounts.unit.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Unit</span></a>
        </li>


        <li>
            <a href="{{route('dashboard.accounts.unit.index')}}" class="parent-a" ><i class="fas fa-list-ul"></i><span>Unit List</span></a>
        </li>


        <li>
            <a href="{{route('dashboard.accounts.products.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>
                {{ trans('accounts.products.add_product') }}</span>
            </a>
        </li>


        <li>
            <a href="{{route('dashboard.accounts.products.index')}}" class="parent-a" ><i class="fas fa-edit"></i><span>
                    {{ trans('accounts.products.manage_product') }}</span>
            </a>
        </li>

        <li>
            <a href="{{route('dashboard.accounts.variation-templates.index')}}" class="parent-a" ><i class="fas fa-asterisk"></i><span>Variations</span>
            </a>
        </li>

        {{-- <li>
            <a href="/add_product_csv">{{ trans('accounts.products.add_product_csv') }}</a>
        </li>--}}
    </ul>
</li>
