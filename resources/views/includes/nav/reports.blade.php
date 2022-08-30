<li @class(['active' => auth()->user()->hasRole(\RoleEnum::ROLE_SUPER_ADMIN)])>
    <a href="javascript: void(0);"> <i class="fas fa-book-open"></i><span>Reports</span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <!-- Quick Reports -->
        <li><a href="{{route('sales.ageing.report')}}" class="parent-a" >Sales Ageing Report</a></li>
        <li><a href="{{route('today.report')}}" class="parent-a" >Today's Report</a></li>
        <li><a href="{{route('sales.report')}}" class="parent-a" >Sales Report</a></li>
        <li><a href="{{route('due.report')}}" class="parent-a" >Customer Due Report</a></li>
        <li><a href="{{route('supplier.due.report')}}" class="parent-a" >Supplier Due Report</a></li>
        <li><a href="{{route('cash.book')}}" class="child-a" >Cash Book</a></li>
        <li><a href="{{route('purchase.report')}}" class="parent-a" >Purchase Report</a></li>
        <li><a href="{{route('balance.sheet')}}" class="child-a" >Balance Sheet</a></li>
        <!-- End Quick Reports -->
        <!-- Accounts Reports -->
        <li><a href="{{route('inventory.ledger')}}" class="child-a" >Inventory Ledger </a></li>
        <li><a href="{{route('bank.book')}}" class="child-a" >Bank Book</a></li>
        <li><a href="{{route('general.ledger')}}" class="child-a" >General Ledger</a></li>
        <li><a href="{{route('general.head')}}" class="child-a" >General Head</a></li>
        <li><a href="{{route('trial.balance')}}" class="child-a" >Trial Balance</a></li>
        <li><a href="{{route('profit.loss')}}" class="child-a" >Profit Loss</a></li>
        <li><a href="{{route('cash.flow')}}" class="child-a" >Cash Flow</a></li>
        <li><a href="{{route('coa.print')}}" class="child-a" >COA Print</a></li>
        <!-- End Accounts Reports -->

        <li><a href="{{route('dashboard.accounts.closing.report.index')}}" class="parent-a" >Day Closing</a></li>
        <li><a href="{{route('closing.report')}}" class="parent-a" >Closing Report</a></li>
        <li><a href="{{route('today.customer.receipt')}}" class="parent-a" >Today's Customer Receipt</a></a></li>
        <li><a href="{{route('user_wise.sales_report')}}" class="parent-a" >Sales Report (User Wise)</a></li>
        <li><a href="{{route('shipping.cost_report')}}" class="parent-a" >Shipping Cost Report</a></li>
        <li><a href="{{route('purchase_report.category_wise')}}" class="parent-a" >Purchase Report (Category wise)</a></li>
        <li><a href="{{route('product.wise')}}" class="parent-a" >Sales Report (Product Wise)</a></li>
        <li><a href="{{route('sales_report.category_wise')}}" class="parent-a" >Sales Report (Category wise)</a></li>
        <li><a href="{{route('sales.return')}}" class="parent-a" >Sales Return</a></li>
        <li><a href="{{route('supplier.return.report')}}" class="parent-a" >Supplier Return</a></li>
        <li><a href="{{route('tax.report')}}" class="parent-a" >Tax Report</a></li>
        <li><a href="{{route('profit_report.sales_wise')}}" class="parent-a" >Profit Report (Sales wise)</a></li>
    </ul>
</li>
