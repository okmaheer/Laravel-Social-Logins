    <li class="has-submenu">
    <a href="javascript: void(0);"><i class="fas fa-user-circle"></i><span>People</span></a>
    <ul class="submenu megamenu">

            <!-- Customers -->
            <li >
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Customer</b></p>
            <ul>
                @can('hasAccess', 'create_customer')
                    <li><a href="{{route('dashboard.accounts.customer.create')}}">Add Customer</a></li>
                @endcan
                @can('hasAccess', 'view_customer')
                    <li><a href="{{route('dashboard.accounts.customer.index')}}">Customer List</a></li>
                @endcan
                @can('hasAccess', 'credit_customer_list')
                    <li><a href="{{route('customer.credit')}}">Credit Customer</a></li>
                @endcan
                @can('hasAccess', 'paid_customer_list')
                    <li><a href="{{route('paid.customer')}}">Paid Customer</a></li>
                @endcan
                @can('hasAccess', 'customer_ledger')
                    <li><a href="{{route('customer.ledger')}}">Customer Ledger</a></li>
                @endcan
                @can('hasAccess', 'customer_advance')
                    <li><a href="{{route('customer.advance')}}">Customer Advance</a></li>
                @endcan
            </ul>
        </li>
            <!-- Suppliers -->
            <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Supplier</b></p>
            <ul>
                @can('hasAccess', 'create_supplier')
                    <li><a href="{{route('dashboard.accounts.supplier.create')}}">Add Supplier</a></li>
                @endcan
                @can('hasAccess', 'view_supplier')
                    <li><a href="{{route('dashboard.accounts.supplier.index')}}">Supplier List</a></li>
                @endcan
                @can('hasAccess', 'supplier_ledger')
                    <li><a href="{{route('supplier.ledger')}}">Supplier Ledger</a></li>
                @endcan
                @can('hasAccess', 'supplier_advance')
                    <li><a href="{{route('supplier.advance')}}">Supplier Advance</a></li>
                @endcan
            </ul>
        </li>

    </ul>
</li>
