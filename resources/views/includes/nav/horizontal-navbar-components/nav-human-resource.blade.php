<!-- Human Resource -->
<li class="has-submenu">
    <a href="javascript: void(0);"><i class="fas fa-user"></i><span>Human Resource</span></a>
    <ul class="submenu megamenu">
        <!--HRM-->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Employee</b></p>
            <ul>
                @can('hasAccess', 'create_hrm_designation')
                    <li><a href="{{route('dashboard.accounts.designation.create')}}">Create Designation</a></li>
                @endcan
                @can('hasAccess', 'view_hrm_designation')
                    <li><a href="{{route('dashboard.accounts.designation.index')}}">Manage Designation</a></li>
                @endcan
                @can('hasAccess', 'create_employee')
                    <li><a href="{{route('dashboard.accounts.employee.create')}}">Create Employee</a></li>
                @endcan
                @can('hasAccess', 'view_employee')
                    <li><a href="{{route('dashboard.accounts.employee.index')}}">Manage Employee</a></li>
                @endcan
            </ul>
        </li>
        <!--Attendance-->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Attendance</b></p>
            <ul>
                @can('hasAccess', 'create_attendance')
                    <li><a href="{{route('dashboard.accounts.attendance.create')}}">Create Attendance</a></li>
                @endcan
                @can('hasAccess', 'view_attendance')
                    <li><a href="{{route('dashboard.accounts.attendance.index')}}">Manage Attendance</a></li>
                @endcan
                @can('hasAccess', 'attendance_report')
                    <li><a href="{{route('attendance.report')}}" class="child-a">Attendance Report</a></li>
                @endcan
            </ul>
        </li>
        <!--Payroll-->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Payroll</b></p>
            <ul>
                @can('hasAccess', 'advance_salary')
                    <li><a href="{{route('advance.salary.form')}}">Advance Salary</a></li>
                @endcan
                @can('hasAccess', 'create_salary')
                    <li><a href="{{route('salary.employee')}}">Employee Salary</a></li>
                @endcan
                @can('hasAccess', 'view_salary')
                    <li><a href="{{route('dashboard.accounts.salary_generate.index')}}">Manage Salary</a></li>
                @endcan
            </ul>
        </li>
        <!--Employee Loan-->
        <li>
            <p class="ml-4 mb-0 py-2 mt-2 badge badge-soft-primary" style="font-size: 100% !important;"><i class="mdi mdi-arrow-down-drop-circle-outline"></i><b>Employee Loan</b></p>
            <ul>
                @can('hasAccess', 'create_loan_request')
                    <li><a href="{{route('dashboard.accounts.employee_loan.create')}}">Issue Loan</a></li>
                @endcan
                @can('hasAccess', 'receive_loan')
                    <li><a href="{{route('employee.loan.receive')}}">Receive Loan</a></li>
                @endcan
                @can('hasAccess', 'view_loans')
                    <li><a href="{{route('dashboard.accounts.employee_loan.index')}}">Manage Loans</a></li>
                @endcan
                @can('hasAccess', 'loan_report')
                    <li><a href="{{ route('employee.loan.report') }}">Loan Report</a></li>
                @endcan
            </ul>
        </li>
    </ul>
</li>
