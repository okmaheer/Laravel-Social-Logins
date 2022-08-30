    <li class="has-submenu">
    <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Inventory</span></a>
    <ul class="submenu megamenu">
        <!-- Products -->
        <li >
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Unit, Category, Product</b></p>
            <ul>
                @can('hasAccess', 'create_category')
                    <li><a href="{{route('dashboard.accounts.category.create')}}">Add Category</a></li>
                @endcan
                @can('hasAccess', 'view_category')
                    <li><a href="{{route('dashboard.accounts.category.index')}}">Category List</a></li>
                @endcan
                @can('hasAccess', 'create_unit')
                    <li><a href="{{route('dashboard.accounts.unit.create')}}">Add Unit</a></li>
                @endcan
                @can('hasAccess', 'view_unit')
                    <li><a href="{{route('dashboard.accounts.unit.index')}}">Unit List</a></li>
                @endcan
                @can('hasAccess', 'create_product')
                    <li><a href="{{route('dashboard.accounts.products.create')}}">{{ trans('accounts.products.add_product') }}</a></li>
                @endcan
                @can('hasAccess', 'view_product')
                    <li><a href="{{route('dashboard.accounts.products.index')}}">{{ trans('accounts.products.manage_product') }}</a></li>
                @endcan

{{--                    <li>--}}
{{--                        <a href="/add_product_csv">{{ trans('accounts.products.add_product_csv') }}</a>--}}
{{--                    </li>--}}
            </ul>
        </li>
        <!-- Purchase -->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Purchase</b></p>
            <ul>
                @can('hasAccess', 'create_purchase')
                    <li><a href="{{route('dashboard.accounts.purchase.create')}}">Add Purchase</a></li>
                @endcan
                @can('hasAccess', 'view_purchase')
                    <li><a href="{{route('dashboard.accounts.purchase.index')}}">Manage Purchase</a></li>
                @endcan
            </ul>
            <!--Sales-->
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Sales</b></p>
            <ul>
                @can('hasAccess', 'create_sale')
                    <li><a href="{{route('dashboard.accounts.sale.create')}}">{{ trans('accounts.sale.new_sale') }}</a></li>
                @endcan
                @can('hasAccess', 'view_sale')
                    <li><a href="{{route('dashboard.accounts.sale.index')}}">{{ trans('accounts.sale.manage_sale') }}</a></li>
                @endcan
                @can('hasAccess', 'pos_sale')
                    <li><a href="{{route('dashboard.accounts.pos.create')}}">{{ trans('accounts.sale.pos_sale') }}</a></li>
                @endcan
            </ul>
        </li>

        <!-- Stock -->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Stock</b></p>
            <ul>
                @can('hasAccess', 'stock_report')
                    <li><a href="{{route('stock.report')}}">Stock Report</a></li>
                @endcan
                @can('hasAccess', 'fix_assets_stock_report')
                    <li><a href="{{route('fix.assets.stock.report')}}">Fix Assets Stock Report</a></li>
                @endcan
            </ul>
        </li>

    </ul>
</li>
