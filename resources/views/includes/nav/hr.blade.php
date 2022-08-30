<li>
    <a href="javascript: void(0);"><i class="fa fa-users"></i><span>Human Resource</span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="parent-a" >HRM<span class="menu-arrow left-has-menu"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{route('dashboard.accounts.designation.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Designation</span></a></li>


                <li><a href="{{route('dashboard.accounts.designation.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Designation</span></a></li>


                <li><a href="{{route('dashboard.accounts.employee.create')}}" class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Employee</span></a></li>


                <li><a href="{{route('dashboard.accounts.employee.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Employee</span></a></li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="parent-a" >Attendance<span class="menu-arrow left-has-menu"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{route('dashboard.accounts.attendance.create')}}"  class="child-a" ><i class="fas fa-plus-circle"></i><span>Create Attendance</span></a></li>


                <li><a href="{{route('dashboard.accounts.attendance.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Attendance</span></a></li>


                <li><a href="{{route('attendance.report')}}" class="child-a" ><i class="fas fa-book"></i><span>Attendance Report</span></a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="parent-a" >Payroll<span class="menu-arrow left-has-menu"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                {{--<li><a href="{{route('dashboard.accounts.benifits.index')}}">Manage Benifits</a></li>
                <li><a href="{{route('dashboard.accounts.salary_setups.create')}}">Create Salary Setups</a>
                </li>
                    <li><a href="{{route('dashboard.accounts.salary_setups.index')}}">Manage Salary Setups </a>
                </li>--}}

                <li><a href="{{route('advance.salary.form')}}" class="child-a" ><i class="fas fa-ship"></i><span>Advance Salary</span></a>
                </li>


                <li><a href="{{route('salary.employee')}}" class="child-a" ><i class="fas fa-money-bill-wave"></i><span>Employee Salary</span></a></li>


                <li><a href="{{route('dashboard.accounts.salary_generate.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Salary</span></a></li>

                {{--<li><a href="{{route('salary.payment')}}">Salary Payement</a></li>--}}

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="parent-a" >Loan Management<span class="menu-arrow left-has-menu"><i
                        class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{route('dashboard.accounts.employee_loan.create')}}" class="child-a" ><i class="fas fa-hand-holding-usd"></i><span>Create Loan Request</span></a></li>


                <li><a href="{{route('employee.loan.receive')}}" class="child-a" ><i class="fas fa-money-check-alt"></i><span>Receive Loan</span></a></li>


                <li><a href="{{route('dashboard.accounts.employee_loan.index')}}" class="child-a" ><i class="fas fa-edit"></i><span>Manage Loans</span></a></li>


                <li><a href="{{ route('employee.loan.report') }}" class="child-a" ><i class="fas fa-file-medical-alt"></i><span>Loan Report</span></a></li>

                {{--<li><a href="{{route('salary.payment')}}">Salary Payement</a></li>--}}

            </ul>
        </li>


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
