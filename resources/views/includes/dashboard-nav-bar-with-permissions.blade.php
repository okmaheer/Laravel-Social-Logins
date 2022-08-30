<div id="nav" class="left-sidenav">
    <div id="navigation-menu">
        <ul class="metismenu left-sidenav-menu" id="side-nav">
            <!-- Customer -->
            @canAny(['create','view','creditCustomer','paidCustomer','ledger','advance'], \App\Models\Customer::class)
            <li>
                <a href="javascript: void(0);"> <i class="fas fa-user-circle"></i><span>Customer</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create',\App\Models\Customer::class)
                    <li><a href="{{route('dashboard.accounts.customer.create')}}" class="parent-a"><i class="fas fa-user-plus"></i><span>Add Customer</span></a></li>
                    @endcan
                    @can('view',\App\Models\Customer::class)
                    <li><a href="{{route('dashboard.accounts.customer.index')}}" class="parent-a" ><i class="fas fa-user-friends"></i><span>Customer List</span></a></li>
                    @endcan
                    @can('creditCustomer',\App\Models\Customer::class)
                    <li><a href="{{route('customer.credit')}}" class="parent-a" ><i class="fas fa-credit-card"></i><span>Credit Customer</span></a></li>
                    @endcan
                    @can('paidCustomer',\App\Models\Customer::class)
                    <li><a href="{{route('paid.customer')}}" class="parent-a" ><i class="fas fa-handshake"></i><span>Paid Customer</span></a></li>
                    @endcan
                    @can('ledger',\App\Models\Customer::class)
                    <li><a href="{{route('customer.ledger')}}" class="parent-a" ><i class="fas fa-book"></i><span>Customer Ledger</span></a></li>
                    @endcan
                    @can('advance',\App\Models\Customer::class)
                    <li><a href="{{route('customer.advance')}}" class="parent-a" ><i class="fas fa-forward"></i><span>Customer Advance</span></a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Supplier -->
            @canAny(['create','view','ledger','advance'], \App\Models\Supplier::class)
            <li>
                <a href="javascript: void(0);"> <i class="fa fa-user-secret"></i><span>Supplier</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create',\App\Models\Supplier::class)
                    <li><a href="{{route('dashboard.accounts.supplier.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Supplier</span></a></li>
                    @endcan
                    @can('view',\App\Models\Supplier::class)
                    <li><a href="{{route('dashboard.accounts.supplier.index')}}" class="parent-a" ><i class="fas fa-list-ul"></i><span>Supplier List</span></a></li>
                    @endcan
                    @can('ledger',\App\Models\Supplier::class)
                    <li><a href="{{route('supplier.ledger')}}" class="parent-a" ><i class="fas fa-book"></i><span>Supplier Ledger</span></a></li>
                    @endcan
                    @can('advance',\App\Models\Supplier::class)
                    <li><a href="{{route('supplier.advance')}}" class="parent-a" ><i class="fas fa-forward"></i><span>Supplier Advance</span></a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Product -->
            <li>
                <a href="javascript: void(0);"> <i class=" fa fa-cubes"></i><span>Product</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create',\App\Models\Category::class)
                    <li>
                        <a href="{{route('dashboard.accounts.category.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Category</span></a>
                    </li>
                    @endcan
                    @can('view',\App\Models\Category::class)
                    <li>
                        <a href="{{route('dashboard.accounts.category.index')}}" class="parent-a"><i class="fas fa-list-ul"></i><span>Category List</span></a>
                    </li>
                    @endcan
                    @can('create',\App\Models\Unit::class)
                    <li>
                        <a href="{{route('dashboard.accounts.unit.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Unit</span></a>
                    </li>
                    @endcan
                    @can('view',\App\Models\Unit::class)
                    <li>
                        <a href="{{route('dashboard.accounts.unit.index')}}" class="parent-a" ><i class="fas fa-list-ul"></i><span>Unit List</span></a>
                    </li>
                    @endcan
                    @can('create',\App\Models\Product::class)
                    <li>
                        <a href="{{route('dashboard.accounts.products.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>
                            {{ trans('accounts.products.add_product') }}</span>
                        </a>
                    </li>
                    @endcan
                    @can('view',\App\Models\Product::class)
                        <li>
                            <a href="{{route('dashboard.accounts.products.index')}}" class="parent-a" ><i class="fas fa-edit"></i><span>
                                {{ trans('accounts.products.manage_product') }}</span>
                            </a>
                        </li>
                    @endcan

                    {{-- <li>
                        <a href="/add_product_csv">{{ trans('accounts.products.add_product_csv') }}</a>
                    </li>--}}
                </ul>
            </li>
            <!-- Purchase -->
            @canAny(['create', 'view'], \App\Models\Purchase::class)
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-scale-balance"></i>Purchase<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create', \App\Models\Purchase::class)
                    <li><a href="{{route('dashboard.accounts.purchase.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Add Purchase</span></a></li>
                    @endcan
                    @can('view', \App\Models\Purchase::class)
                    <li><a href="{{route('dashboard.accounts.purchase.index')}}" class="parent-a"  ><i class="fas fa-edit"></i><span>Manage Purchase</span></a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Sale -->
            @canAny(['create', 'view', 'pos'], \App\Models\Invoice::class)
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-cart"></i>{{ trans('accounts.sale.name') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create', \App\Models\Invoice::class)
                    <li><a href="{{route('dashboard.accounts.sale.create')}}" class="parent-a"><i class="fas fa-plus-circle"></i><span>{{ trans('accounts.sale.new_sale') }}</span></a></li>
                    @endcan
                    @can('view', \App\Models\Invoice::class)
                    <li><a href="{{route('dashboard.accounts.sale.index')}}" class="parent-a"><i class="fas fa-edit"></i><span>{{ trans('accounts.sale.manage_sale') }}</span></a></li>
                    @endcan
                    @can('pos', \App\Models\Invoice::class)
                    <li><a href="{{route('gui.pos')}}" class="parent-a"><i class="fas fa-cart-plus"></i><span>{{ trans('accounts.sale.pos_sale') }}</span></a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Stock -->
            @canAny(['stockReport', 'fixAssetReport'], \App\Models\Reports::class)
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-apps"></i>Stock<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('stockReport', \App\Models\Reports::class)
                    <li><a href="{{route('stock.report')}}" class="parent-a" >Stock Report</a></li>
                    @endcan
                    @can('fixAssetReport', \App\Models\Reports::class)
                        <li><a href="{{route('fix.assets.stock.report')}}" class="parent-a" >Fix Assets Stock Report</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Income -->
            <li>
                <a href="javascript: void(0);"><i class="fas fa-wallet"></i>Income<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create', \App\Models\IncomeHead::class)
                    <li><a href="{{route('dashboard.accounts.incomehead.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Income Head</span></a>
                    </li>
                    @endcan
                    @can('view', \App\Models\IncomeHead::class)
                    <li><a href="{{route('dashboard.accounts.incomehead.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Income Head</span></a>
                    </li>
                    @endcan
                    @can('create', \App\Models\Income::class)
                    <li><a href="{{route('dashboard.accounts.income.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Income</span></a></li>
                    @endcan
                    @can('view', \App\Models\Income::class)
                    <li><a href="{{route('dashboard.accounts.income.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Income</span></a></li>
                    @endcan
                    @can('statement', \App\Models\Income::class)
                    <li><a href="{{route('income.statement')}}" class="child-a" ><i class="fas fa-book"></i><span>Income Statement</span></a></li>
                    @endcan
                </ul>
            </li>
            <!-- PettyCash -->
            @can('ledger', \App\Models\PettyCash::class)
            <li>
                <a href="javascript: void(0);"> <i class="fas fa-shopping-basket"></i><span>PettyCash</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                <!--<li><a href="{{route('dashboard.accounts.pettycash.create')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>New PettyCash Account</span></a></li>
                    <li><a href="{{route('dashboard.accounts.pettycash.index')}}" class="parent-a" ><i class="fas fa-list-ul"></i><span>PettyCash Accounts</span></a></li>-->
                    <li><a href="{{route('pettycash.ledger')}}" class="parent-a" ><i class="fas fa-book"></i><span>PettyCash Ledger</span></a></li>
                </ul>
            </li>
            @endcan
            <!-- Expense -->
            <li>
                <a href="javascript: void(0);"><i class="fas fa-money-bill-wave"></i>Expense<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('create', \App\Models\ExpenseHead::class)
                    <li><a href="{{route('dashboard.accounts.expensehead.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Expense Head</span></a>
                    </li>
                    @endcan
                    @can('view', \App\Models\ExpenseHead::class)
                    <li><a href="{{route('dashboard.accounts.expensehead.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Expense Head</span></a>
                    </li>
                    @endcan
                    @can('create', \App\Models\Expense::class)
                    <li><a href="{{route('dashboard.accounts.expense.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Expense</span></a></li>
                    @endcan
                    @can('view', \App\Models\Expense::class)
                    <li><a href="{{route('dashboard.accounts.expense.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Expense</span></a></li>
                    @endcan
                    @can('statement', \App\Models\Expense::class)
                    <li><a href="{{route('expense.statement')}}" class="child-a" ><i class="fas fa-book"></i><span>Expense Statement</span></a></li>
                    @endcan
                </ul>
            </li>
            <!-- Quick Accounts -->
            @canAny(['coa', 'supplierPaymentVoucher', 'customerReceiveVoucher', 'journalVoucher'], \App\Models\Accounts::class)
            <li>
                <a href="javascript: void(0);"><i class="far fa-money-bill-alt"></i><span>Quick Accounts</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('coa', \App\Models\Accounts::class)
                    <li><a href="{{route('charts.account')}}" class="parent-a">Chart of Accounts</a></li>
                    @endcan
                    @can('supplierPaymentVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('supplier.payment')}}" class="parent-a" >Supplier Payment</a></li>
                    @endcan
                    @can('customerReceiveVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('customer.receive')}}" class="parent-a" >Customer Receive</a></li>
                    @endcan
                    @can('journalVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.journal.voucher.create')}}" class="parent-a" >Journal Voucher</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Quick Reports -->
            @canAny(['todayReport','salesReport','customerDueReport','supplierDueReport','cashBook','purchaseReport','balanceSheet'], \App\Models\Reports::class)
            <li>
                <a href="javascript: void(0);"> <i class="fas fa-book-open"></i><span>Quick Reports</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('todayReport', \App\Models\Reports::class)
                    <li><a href="{{route('today.report')}}" class="parent-a" >Today's Report</a></li>
                    @endcan
                    @can('salesReport', \App\Models\Reports::class)
                    <li><a href="{{route('sales.report')}}" class="parent-a" >Sales Report</a></li>
                    @endcan
                    @can('customerDueReport', \App\Models\Reports::class)
                    <li><a href="{{route('due.report')}}" class="parent-a" >Customer Due Report</a></li>
                    @endcan
                    @can('supplierDueReport', \App\Models\Reports::class)
                    <li><a href="{{route('supplier.due.report')}}" class="parent-a" >Supplier Due Report</a></li>
                    @endcan
                    @can('cashBook', \App\Models\Reports::class)
                    <li><a href="{{route('cash.book')}}" class="child-a" >Cash Book</a></li>
                    @endcan
                    @can('purchaseReport', \App\Models\Reports::class)
                    <li><a href="{{route('purchase.report')}}" class="parent-a" >Purchase Report</a></li>
                    @endcan
                    @can('balanceSheet', \App\Models\Reports::class)
                    <li><a href="{{route('balance.sheet')}}" class="child-a" >Balance Sheet</a></li>
                    @endcan
                </ul>
            </li>
            @endcan
            <!-- Accounts -->
            <li>
                <a href="javascript: void(0);"><i class="far fa-money-bill-alt"></i><span>Accounts</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('openingBalanceVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('opening.balance')}}" class="parent-a" >Opening Balance</a></li>
                    @endcan
                    @can('cashAdjustmentVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('cash.adjustment')}}" class="parent-a" >Cash Adjustment</a></li>
                    @endcan
                    @can('debitVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.debit.voucher.create')}}" class="parent-a" >Debit Voucher</a></li>
                    @endcan
                    @can('creditVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.credit.voucher.create')}}" class="parent-a" >Credit Voucher</a></li>
                    @endcan
                    @can('cashTransferVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.cashtransfer.voucher.create')}}" class="parent-a" >Cash Transfer Voucher</a></li>
                    @endcan
                    @can('contraVoucher', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.contra.voucher.create')}}" class="parent-a" >Contra Voucher</a></li>
                    @endcan
                    @can('voucherApproval', \App\Models\Accounts::class)
                    <li><a href="{{route('dashboard.accounts.voucher.approval.index')}}" class="parent-a" >Voucher Approval</a></li>
                    @endcan
                    @can('createAccountHead', \App\Models\Accounts::class)
                    <li><a href="{{route('create.account')}}" class="parent-a" >Create Account Head</a></li>
                    @endcan
                    <li>
                        <a href="javascript: void(0);" class="parent-a" ><i class="fas fa-book-open"></i>Report <span
                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('inventoryLedger', \App\Models\Reports::class)
                            <li><a href="{{route('inventory.ledger')}}" class="child-a" >Inventory Ledger </a></li>
                            @endcan
                            @can('bankBook', \App\Models\Reports::class)
                            <li><a href="{{route('bank.book')}}" class="child-a" >Bank Book</a></li>
                            @endcan
                            @can('generalLedger', \App\Models\Reports::class)
                            <li><a href="{{route('general.ledger')}}" class="child-a" >General Ledger</a></li>
                            @endcan
                            @can('generalHead', \App\Models\Reports::class)
                            <li><a href="{{route('general.head')}}" class="child-a" >General Head</a></li>
                            @endcan
                            @can('trailBalance', \App\Models\Reports::class)
                            <li><a href="{{route('trail.balance')}}" class="child-a" >Trail Balance</a></li>
                            @endcan
                            @can('profitLoss', \App\Models\Reports::class)
                            <li><a href="{{route('profit.loss')}}" class="child-a" >Profit Loss</a></li>
                            @endcan
                            @can('cashFlow', \App\Models\Reports::class)
                            <li><a href="{{route('cash.flow')}}" class="child-a" >Cash Flow</a></li>
                            @endcan
                            @can('coaPrint', \App\Models\Reports::class)
                            <li><a href="{{route('coa.print')}}" class="child-a" >COA Print</a></li>
                            @endcan
                        </ul>
                    </li>
                    @canAny(['create', 'view', 'edit', 'delete', 'transactions', 'ledger'], \App\Models\Bank::class)
                    <li>
                        <a href="javascript: void(0);" class="parent-a" ><i class="fas fa-briefcase"></i>Bank<span
                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('create', \App\Models\Bank::class)
                            <li><a href="{{route('dashboard.accounts.bank.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add New Bank</span></a></li>
                            @endcan
                            @can('view', \App\Models\Bank::class)
                            <li><a href="{{route('dashboard.accounts.bank.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Bank</span></a></li>
                            @endcan
                            @can('transactions', \App\Models\Bank::class)
                            <li><a href="{{route('bank.transaction')}}" class="child-a" ><i class="fas fa-handshake"></i><span>Bank Transaction</span></a></li>
                            @endcan
                            @can('ledger', \App\Models\Bank::class)
                            <li><a href="{{route('bank.ledger')}}"  class="child-a" ><i  class="fas fa-money-check"></i><span>Bank Ledger</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    @canAny(['create', 'view', 'edit', 'delete'], \App\Models\Tax::class)
                    <li>
                        <a href="javascript: void(0);" class="parent-a" > <i class="far fa-money-bill-alt"></i>Tax<span
                                class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('create', \App\Models\Tax::class)
                            <li><a href="{{route('dashboard.accounts.tax.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add Tax</span></a></li>
                            @endcan
                            @can('view', \App\Models\Tax::class)
                            <li><a href="{{route('dashboard.accounts.tax.index')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Manage Tax</span></a></li>
                            @endcan
                            {{--<li><a href="{{route('tax.setting')}}" class="child-a"><i class="fas fa-cogs"></i><span>Tax Settings</span></a></li>
                            <li><a href="{{route('dashboard.accounts.income_tax.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add Income Tax</span></a></li>
                            <li><a href="{{route('dashboard.accounts.income_tax.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Income Tax</span></a></li>
                            <li><a href="{{route('tax.report')}}" class="child-a" ><i class="fas fa-book"></i><span>Tax Report</span></a></li>
                            <li><a href="{{route('invoice.wise')}}" class="child-a" ><i class="fas fa-book"></i><span>Invoice Wise Tax Report</span></a></li>--}}
                        </ul>
                    </li>
                    @endcan
                </ul>
            </li>
            <!-- Reports -->
            <li>
                <a href="javascript: void(0);"> <i class="fas fa-book-open"></i><span>Reports</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('closing', \App\Models\Reports::class)
                    <li><a href="{{route('dashboard.accounts.closing.report.index')}}" class="parent-a" >Day Closing</a></li>
                    @endcan
                    @can('closingReport', \App\Models\Reports::class)
                    <li><a href="{{route('closing.report')}}" class="parent-a" >Closing Report</a></li>
                    @endcan
                    @can('todayCustomerReceipts', \App\Models\Reports::class)
                    <li><a href="{{route('today.customer.receipt')}}" class="parent-a" >Today's Customer Receipt</a></a></li>
                    @endcan
                    @can('salesReportUserWise', \App\Models\Reports::class)
                    <li><a href="{{route('user_wise.sales_report')}}" class="parent-a" >Sales Report (User Wise)</a></li>
                    @endcan
                    @can('shippingCostReport', \App\Models\Reports::class)
                    <li><a href="{{route('shipping.cost_report')}}" class="parent-a" >Shipping Cost Report</a></li>
                    @endcan
                    @can('purchaseReportCategoryWise', \App\Models\Reports::class)
                    <li><a href="{{route('purchase_report.category_wise')}}" class="parent-a" >Purchase Report (Category wise)</a></li>
                    @endcan
                    @can('salesReportProductWise', \App\Models\Reports::class)
                    <li><a href="{{route('product.wise')}}" class="parent-a" >Sales Report (Product Wise)</a></li>
                    @endcan
                    @can('salesReportCategoryWise', \App\Models\Reports::class)
                    <li><a href="{{route('sales_report.category_wise')}}" class="parent-a" >Sales Report (Category wise)</a></li>
                    @endcan
                    @can('salesReturnReport', \App\Models\Reports::class)
                    <li><a href="{{route('sales.return')}}" class="parent-a" >Sales Return</a></li>
                    @endcan
                    @can('supplierReturnReport', \App\Models\Reports::class)
                    <li><a href="{{route('supplier.return.report')}}" class="parent-a" >Supplier Return</a></li>
                    @endcan
                    @can('taxReport', \App\Models\Reports::class)
                    <li><a href="{{route('tax.report')}}" class="parent-a" >Tax Report</a></li>
                    @endcan
                    @can('profitReportSalesWise', \App\Models\Reports::class)
                    <li><a href="{{route('profit_report.sales_wise')}}" class="parent-a" >Profit Report (Sales wise)</a></li>
                    @endcan
                </ul>
            </li>
            <!-- HR -->
            <li>
                <a href="javascript: void(0);"><i class="fa fa-users"></i><span>Human Resource</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="javascript: void(0);" class="parent-a" >HRM<span class="menu-arrow left-has-menu"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('create', \App\Models\Designation::class)
                            <li><a href="{{route('dashboard.accounts.designation.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Designation</span></a></li>
                            @endcan
                            @can('view', \App\Models\Designation::class)
                            <li><a href="{{route('dashboard.accounts.designation.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Designation</span></a></li>
                            @endcan
                            @can('create', \App\Models\Employee::class)
                            <li><a href="{{route('dashboard.accounts.employee.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Employee</span></a></li>
                            @endcan
                            @can('view', \App\Models\Employee::class)
                            <li><a href="{{route('dashboard.accounts.employee.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Employee</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @canAny(['view', 'create', 'edit', 'delete', 'report', 'syncAttendance'], \App\Models\Attendance::class)
                    <li>
                        <a href="javascript: void(0);" class="parent-a" >Attendance<span class="menu-arrow left-has-menu"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('create', \App\Models\Attendance::class)
                            <li><a href="{{route('dashboard.accounts.attendance.create')}}"  class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Attendance</span></a></li>
                            @endcan
                            @can('view', \App\Models\Attendance::class)
                            <li><a href="{{route('dashboard.accounts.attendance.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Attendance</span></a></li>
                            @endcan
                            @can('report', \App\Models\Attendance::class)
                            <li><a href="{{route('attendance.report')}}" class="child-a" ><i class="fas fa-book"></i><span>Attendance Report</span></a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    @canAny(['view', 'create', 'delete', 'salaryPayment', 'salaryPayslip', 'advanceSalary'], \App\Models\Salary::class)
                    <li>
                        <a href="javascript: void(0);" class="parent-a" >Payroll<span class="menu-arrow left-has-menu"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            {{--<li><a href="{{route('dashboard.accounts.benifits.index')}}">Manage Benifits</a></li>
                            <li><a href="{{route('dashboard.accounts.salary_setups.create')}}">Create Salary Setups</a>
                            </li>
                                <li><a href="{{route('dashboard.accounts.salary_setups.index')}}">Manage Salary Setups </a>
                            </li>--}}
                            @can('advanceSalary', \App\Models\Salary::class)
                            <li><a href="{{route('advance.salary.form')}}" class="child-a" ><i class="fas fa-ship"></i><span>Advance Salary</span></a>
                            </li>
                            @endcan
                            @can('create', \App\Models\Salary::class)
                            <li><a href="{{route('salary.employee')}}" class="child-a" ><i class="fas fa-money-bill-wave"></i><span>Employee Salary</span></a></li>
                            @endcan
                            @can('view', \App\Models\Salary::class)
                            <li><a href="{{route('dashboard.accounts.salary_generate.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Salary</span></a></li>
                            @endcan
                            {{--<li><a href="{{route('salary.payment')}}">Salary Payement</a></li>--}}

                        </ul>
                    </li>
                    @endcan
                    @canAny(['request', 'receive', 'view', 'report'], \App\Models\EmployeeLoan::class)
                    <li>
                        <a href="javascript: void(0);" class="parent-a" >Loan Management<span class="menu-arrow left-has-menu"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @can('request', \App\Models\EmployeeLoan::class)
                            <li><a href="{{route('dashboard.accounts.employee_loan.create')}}" class="child-a" ><i class="fas fa-hand-holding-usd"></i><span>Create Loan Request</span></a></li>
                            @endcan
                            @can('receive', \App\Models\EmployeeLoan::class)
                            <li><a href="{{route('employee.loan.receive')}}" class="child-a" ><i class="fas fa-money-check-alt"></i><span>Receive Loan</span></a></li>
                            @endcan
                            @can('view', \App\Models\EmployeeLoan::class)
                            <li><a href="{{route('dashboard.accounts.employee_loan.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Loans</span></a></li>
                            @endcan
                            @can('report', \App\Models\EmployeeLoan::class)
                            <li><a href="{{ route('employee.loan.report') }}" class="child-a" ><i class="fas fa-file-medical-alt"></i><span>Loan Report</span></a></li>
                            @endcan
                            {{--<li><a href="{{route('salary.payment')}}">Salary Payement</a></li>--}}

                        </ul>
                    </li>
                    @endcan

{{--                    <li>--}}
{{--                        <a href="javascript: void(0);">Office Loan<span class="menu-arrow left-has-menu"><i--}}
{{--                                    class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="nav-second-level" aria-expanded="false">--}}
{{--                            <li><a href="{{route('dashboard.accounts.person.create')}}">Add Person</a></li>--}}
{{--                            <li><a href="{{route('dashboard.accounts.person.index')}}">Manage Person</a></li>--}}
{{--                            <li><a href="{{route('add.loan')}}">Add Loan</a></li>--}}
{{--                            <li><a href="{{route('add.payement')}}">Add Payement</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript: void(0);">Personal Loan<span class="menu-arrow left-has-menu"><i--}}
{{--                                    class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="nav-second-level" aria-expanded="false">--}}
{{--                            <li><a href="{{route('dashboard.accounts.person_1.create')}}">Add Person</a></li>--}}
{{--                            <li><a href="{{route('dashboard.accounts.person_1.index')}}">Manage Person</a></li>--}}
{{--                            <li><a href="{{route('add.loan_1')}}">Add Loan</a></li>--}}
{{--                            <li><a href="{{route('add.payement_1')}}">Add Payement</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

                </ul>
            </li>
            <!-- Access -->
             <li>
                <a href="javascript: void(0);"> <i class="fa fa-user-secret"></i><span>Access</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('view',\App\Models\User::class)
                        <li>
                            <a href="{{route('dashboard.accounts.users.index')}}" class="parent-a" >Users</a>
                        </li>
                    @endcan
                    @can('view',\App\Models\Role::class)
                        <li>
                            <a href="{{route('dashboard.accounts.roles.index')}}" class="parent-a" >Roles</a>
                        </li>
                    @endcan
                    {{--@can('view',\App\Models\Permission::class)
                        <li>
                            <a href="{{route('dashboard.accounts.permissions.index')}}" class="parent-a" >Permissions</a>
                        </li>
                    @endcan
                    @can('sync',\App\Models\Permission::class)
                        <li>
                            <a href="{{route('dashboard.accounts.permissions.sync')}}" class="parent-a" >Sync Permissions</a>
                        </li>
                    @endcan--}}
                </ul>
            </li>
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
            <!-- Settings -->
{{--            @canAny(['hardwareSettings', 'softwareSettings'], \App\Models\Setting::class)--}}
            <li>
                <a href="javascript: void(0);"> <i class="fas fa-shopping-basket"></i><span>Settings</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    @can('hardwareSettings', \App\Models\Setting::class)
                    <li><a href="{{route('settings.hardware.settings')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Hardware Settings</span></a></li>
                    @endcan
                    @can('softwareSettings', \App\Models\Setting::class)
                    <li><a href="{{route('dashboard.accounts.settings.index')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Software Settings</span></a></li>
                    @endcan
                    @can('view', \App\Models\Company::class)
                    <li><a href="{{route('dashboard.accounts.companies.index')}}" class="parent-a" ><i class="fas fa-plus-circle"></i><span>Company Settings</span></a></li>
                    @endcan
                </ul>
            </li>
{{--            @endcan--}}
        </ul>
    </div>
</div>
