<li>
    <a href="javascript: void(0);"><i class="fas fa-money-bill-wave"></i>Expense<span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">

        <li><a href="{{route('dashboard.accounts.expensehead.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Expense Head</span></a>
        </li>


        <li><a href="{{route('dashboard.accounts.expensehead.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Expense Head</span></a>
        </li>


        <li><a href="{{route('dashboard.accounts.expense.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Expense</span></a></li>


        <li><a href="{{route('dashboard.accounts.expense.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Expense</span></a></li>


        <li><a href="{{route('expense.statement')}}" class="child-a" ><i class="fas fa-book"></i><span>Expense Statement</span></a></li>

    </ul>
</li>
