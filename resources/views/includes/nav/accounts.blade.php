<li>
    <a href="javascript: void(0);"><i class="far fa-money-bill-alt"></i><span>Accounts</span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">

        <li><a href="{{route('opening.balance')}}" class="parent-a" >Opening Balance</a></li>


        <li><a href="{{route('cash.adjustment')}}" class="parent-a" >Cash Adjustment</a></li>


        <li><a href="{{route('dashboard.accounts.debit.voucher.create')}}" class="parent-a" >Debit Voucher</a></li>


        <li><a href="{{route('dashboard.accounts.credit.voucher.create')}}" class="parent-a" >Credit Voucher</a></li>


        <li><a href="{{route('dashboard.accounts.cashtransfer.voucher.create')}}" class="parent-a" >Cash Transfer Voucher</a></li>


        <li><a href="{{route('dashboard.accounts.contra.voucher.create')}}" class="parent-a" >Contra Voucher</a></li>


        <li><a href="{{route('dashboard.accounts.voucher.approval.index')}}" class="parent-a" >Voucher Approval</a></li>


        <li><a href="{{route('create.account')}}" class="parent-a" >Create Account Head</a></li>

        <li>
            <a href="javascript: void(0);" class="parent-a" ><i class="fas fa-briefcase"></i>Bank<span
                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{route('dashboard.accounts.bank.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add New Bank</span></a></li>


                <li><a href="{{route('dashboard.accounts.bank.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Bank</span></a></li>


                <li><a href="{{route('bank.transaction')}}" class="child-a" ><i class="fas fa-handshake"></i><span>Bank Transaction</span></a></li>


                <li><a href="{{route('bank.ledger')}}"  class="child-a" ><i  class="fas fa-money-check"></i><span>Bank Ledger</span></a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="parent-a" > <i class="far fa-money-bill-alt"></i>Tax<span
                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{route('dashboard.accounts.tax.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add Tax</span></a></li>


                <li><a href="{{route('dashboard.accounts.tax.index')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Manage Tax</span></a></li>

                {{--<li><a href="{{route('tax.setting')}}" class="child-a"><i class="fas fa-cogs"></i><span>Tax Settings</span></a></li>
                <li><a href="{{route('dashboard.accounts.income_tax.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Add Income Tax</span></a></li>
                <li><a href="{{route('dashboard.accounts.income_tax.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Income Tax</span></a></li>
                <li><a href="{{route('tax.report')}}" class="child-a" ><i class="fas fa-book"></i><span>Tax Report</span></a></li>
                <li><a href="{{route('invoice.wise')}}" class="child-a" ><i class="fas fa-book"></i><span>Invoice Wise Tax Report</span></a></li>--}}
            </ul>
        </li>

    </ul>
</li>
