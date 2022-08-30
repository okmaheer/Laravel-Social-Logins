<!-- Accounts -->
<li class="has-submenu">
    <a href="javascript: void(0);"><i class="far fa-money-bill-alt"></i><span>Accounts</span></a>
    <ul class="submenu megamenu">
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Income Head</b></p>
            <ul>
                @can('hasAccess', 'create_income_head')
                    <li><a href="{{route('dashboard.accounts.incomehead.create')}}">Create Income Head</a></li>
                @endcan
                @can('hasAccess', 'view_income_head')
                    <li><a href="{{route('dashboard.accounts.incomehead.index')}}">Manage Income Head</a></li>
                @endcan
            </ul>
            <ul>
                <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Income</b></p>
                @can('hasAccess', 'create_income')
                    <li><a href="{{route('dashboard.accounts.income.create')}}">Create Income</a></li>
                @endcan
                @can('hasAccess', 'view_income')
                    <li><a href="{{route('dashboard.accounts.income.index')}}">Manage Income</a></li>
                @endcan
                @can('hasAccess', 'income_statement')
                    <li><a href="{{route('income.statement')}}">Income Statement</a></li>
                @endcan
            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Expense Head</b></p>
            <ul>
                @can('hasAccess', 'create_expense_head')
                    <li><a href="{{route('dashboard.accounts.expensehead.create')}}">Create Expense Head</a></li>
                @endcan
                @can('hasAccess', 'view_expense_head')
                    <li><a href="{{route('dashboard.accounts.expensehead.index')}}">Manage Expense Head</a></li>
                @endcan
            </ul>
            <ul>
                <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Expenses</b></p>
                @can('hasAccess', 'create_expense')
                    <li><a href="{{route('dashboard.accounts.expense.create')}}">Create Expense</a></li>
                @endcan
                @can('hasAccess', 'view_expense')
                    <li><a href="{{route('dashboard.accounts.expense.index')}}">Manage Expense</a></li>
                @endcan
                @can('hasAccess', 'expense_statement')
                    <li><a href="{{route('expense.statement')}}">Expense Statement</a></li>
                @endcan
            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Vouchers</b></p>
            <ul>
                @can('hasAccess', 'customer_receive_voucher')
                    <li><a href="{{route('customer.receive')}}">Customer Receive</a></li>
                @endcan
                @can('hasAccess', 'supplier_payment_voucher')
                    <li><a href="{{route('supplier.payment')}}">Supplier Payment</a></li>
                @endcan
                @can('hasAccess', 'journal_voucher')
                    <li><a href="{{route('dashboard.accounts.journal.voucher.create')}}">Journal Voucher</a></li>
                @endcan
                @can('hasAccess', 'opening_balance_voucher')
                    <li><a href="{{route('opening.balance')}}">Opening Balance</a></li>
                @endcan
                @can('hasAccess', 'cash_adjustment_voucher')
                    <li><a href="{{route('cash.adjustment')}}">Cash Adjustment</a></li>
                @endcan
                @can('hasAccess', 'debit_voucher')
                    <li><a href="{{route('dashboard.accounts.debit.voucher.create')}}">Debit Voucher</a></li>
                @endcan
                @can('hasAccess', 'credit_voucher')
                    <li><a href="{{route('dashboard.accounts.credit.voucher.create')}}">Credit Voucher</a></li>
                @endcan
                @can('hasAccess', 'contra_voucher')
                    <li><a href="{{route('dashboard.accounts.contra.voucher.create')}}">Contra Voucher</a></li>
                @endcan
                @can('hasAccess', 'voucher_approval')
                    <li><a href="{{route('dashboard.accounts.voucher.approval.index')}}">Voucher Approval</a></li>
                @endcan
                @can('hasAccess', 'create_account_head')
                    <li><a href="{{route('create.account')}}">Create Account Head</a></li>
                @endcan
{{--                @can('hasAccess', 'fiscal_year_closing')--}}
                    <li><a href="{{route('accounts.fiscal-year-closing')}}">Fiscal Year Closing</a></li>
{{--                @endcan--}}
            </ul>
        </li>
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b> Tax</b></p>
            <ul>
                @can('hasAccess', 'create_tax')
                    <li><a href="{{route('dashboard.accounts.tax.create')}}">Add Tax</a></li>
                @endcan
                @can('hasAccess', 'view_tax')
                    <li><a href="{{route('dashboard.accounts.tax.index')}}">Manage Tax</a></li>
                @endcan
            </ul>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Bank</b></p>
            <ul>
                @can('hasAccess', 'create_bank')
                    <li><a href="{{route('dashboard.accounts.bank.create')}}">Add New Bank</a></li>
                @endcan
                @can('hasAccess', 'view_bank')
                    <li><a href="{{route('dashboard.accounts.bank.index')}}">Manage Bank</a></li>
                @endcan
                @can('hasAccess', 'bank_transactions')
                    <li><a href="{{route('bank.transaction')}}">Bank Transaction</a></li>
                @endcan
                @can('hasAccess', 'bank_ledger')
                    <li><a href="{{route('bank.ledger')}}">Bank Ledger</a></li>
                @endcan
            </ul>
        </li>
    </ul>
</li>
