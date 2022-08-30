<!-- Reports -->
<li class="has-submenu last-elements">
    <a href="javascript: void(0);"> <i class="fas fa-book-open"></i><span>Reports</span></a>
    <ul class="submenu megamenu">
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Quick Reports</b></p>
            <ul>
                @can('hasAccess', 'chart_of_accounts')
                    <li><a href="{{route('charts.account')}}">Charts of Account</a></li>
                @endcan
                @can('hasAccess', 'today_report')
                    <li><a href="{{route('today.report')}}">Today's Report</a></li>
                @endcan
                @can('hasAccess', 'cash_book')
                    <li><a href="{{route('cash.book')}}">Cash Book</a></li>
                @endcan
                @can('hasAccess', 'bank_book')
                    <li><a href="{{route('bank.book')}}">Bank Book</a></li>
                @endcan
                @can('hasAccess', 'profit_loss')
                    <li><a href="{{route('profit.loss')}}">Profit Loss</a></li>
                @endcan
                @can('hasAccess', 'balance_sheet')
                    <li><a href="{{route('balance.sheet')}}">Balance Sheet</a></li>
                @endcan
                @can('hasAccess', 'inventory_ledger')
                    <li><a href="{{route('inventory.ledger')}}">Inventory Ledger</a></li>
                @endcan
                @can('hasAccess', 'general_ledger')
                    <li><a href="{{route('general.ledger')}}">General Ledger</a></li>
                @endcan
                @can('hasAccess', 'general_head')
                    <li><a href="{{route('general.head')}}">General Head</a></li>
                @endcan
                @can('hasAccess', 'trail_balance')
                    <li><a href="{{route('trial.balance')}}">Trial Balance</a></li>
                @endcan

            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Other Reports</b></p>
            <ul>
                @can('hasAccess', 'sales_aging_report')
                    <li><a href="{{route('sales.ageing.report')}}">Sales Ageing Report</a></li>
                @endcan
                @can('hasAccess', 'sales_report')
                    <li><a href="{{route('sales.report')}}">Sales Report</a></li>
                @endcan
                @can('hasAccess', 'sales_report_user_wise')
                    <li><a href="{{route('user_wise.sales_report')}}">Sales Report (User Wise)</a></li>
                @endcan
                @can('hasAccess', 'sales_report_product_wise')
                    <li><a href="{{route('product.wise')}}">Sales Report (Product Wise)</a></li>
                @endcan
                @can('hasAccess', 'sales_report_category_wise')
                    <li><a href="{{route('sales_report.category_wise')}}">Sales Report (Category wise)</a></li>
                @endcan
                @can('hasAccess', 'profit_report_sales_wise')
                    <li><a href="{{route('profit_report.sales_wise')}}">Profit Report (Sales wise)</a></li>
                @endcan
                @can('hasAccess', 'sales_return_report')
                    <li><a href="{{route('sales.return')}}">Sales Return</a></li>
                @endcan
                @can('hasAccess', 'supplier_return_report')
                    <li><a href="{{route('supplier.return.report')}}">Supplier Return</a></li>
                @endcan
                @can('hasAccess', 'purchase_report')
                    <li><a href="{{route('purchase.report')}}">Purchase Report</a></li>
                @endcan
                @can('hasAccess', 'purchase_report_category_wise')
                    <li><a href="{{route('purchase_report.category_wise')}}">Purchase Report (Category wise)</a></li>
                @endcan
                @can('hasAccess', 'tax_report')
                    <li><a href="{{route('tax.report')}}">Tax Report</a></li>
                @endcan
                @can('hasAccess', 'customer_due_report')
                    <li><a href="{{route('due.report')}}">Customer Due Report</a></li>
                @endcan
                @can('hasAccess', 'supplier_due_report')
                    <li><a href="{{route('supplier.due.report')}}">Supplier Due Report</a></li>
                @endcan
                @can('hasAccess', 'closing')
                    <li><a href="{{route('dashboard.accounts.closing.report.index')}}">Day Closing</a></li>
                @endcan
                @can('hasAccess', 'closing_report')
                    <li><a href="{{route('closing.report')}}">Closing Report</a></li>
                @endcan
                @can('hasAccess', 'today_customer_receipts')
                    <li><a href="{{route('today.customer.receipt')}}">Today's Customer Receipt</a></li>
                @endcan
                @can('hasAccess', 'shipping_cost_report')
                    <li><a href="{{route('shipping.cost_report')}}">Shipping Cost Report</a></li>
                @endcan
            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> PettyCash</b></p>
            <ul>
                @can('hasAccess', 'pettycash_ledger')
                    <li><a href="{{route('pettycash.ledger')}}">PettyCash Ledger</a></li>
                @endcan
            </ul>
        </li>
    </ul>
</li>
