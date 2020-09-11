<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{asset('assets/images/users/avatar.jpg')}}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rimon Shil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>
                
                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                <a href="{{route('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>
                <li>
                <a href="{{route('pos.index')}}" class="waves-effect "><i class="md md-home"></i><span class="text-primary"> POS </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Employees </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                    <li><a href="{{route('employee.create')}}">Add Employee</a></li>
                        <li><a href="{{route('employee.index')}}">All Employee</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Customers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                    <li><a href="{{route('customer.create')}}">Add Customer</a></li>
                    <li><a href="{{route('customer.index')}}">All Customer</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Suppliers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('supplier.create')}}">Add Supplier</a></li>
                        <li><a href="{{route('supplier.index')}}">All Supplier</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Salary </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('advanced.salary')}}">Add Advanced Salary</a></li>
                        <li><a href="{{route('all-advanced.salary')}}">All Advanced Salary</a></li>
                        <li><a href="{{route('pay.salary')}}">Pay Salary</a></li>
                        <li><a href="{{route('last.month.salary')}}">Last Month Salary</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('category.create')}}">Add Category</a></li>
                        <li><a href="{{route('category.index')}}">All Category</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Product </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('product.create')}}">Add Product</a></li>
                        <li><a href="{{route('product.index')}}">All Product</a></li>
                        <li><a href="{{route('import.product')}}">Import Product</a></li>
                    </ul>
                </li>
                
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Expense </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('expense.create')}}">Add Expense</a></li>
                        <li><a href="{{route('today.expense')}}">Today Expense</a></li>
                        <li><a href="{{route('monthly.expense')}}">Monthly Expense</a></li>
                        <li><a href="{{route('yearly.expense')}}">Yearly Expense</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Orders </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                    <li><a href="{{route('pending-orders')}}">Pending Orders</a></li>
                    <li><a href="{{route('success-orders')}}">Success Orders</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Attendance </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('take.attendence')}}">Take Attendence</a></li>
                        <li><a href="{{route('all.attendence')}}">All Attendence </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Setting </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('setting.create')}}">Add Company</a></li>
                        <li><a href="{{route('setting.index')}}">All Company </a></li>
                    </ul>
                </li>
                
                


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Multi Level </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul style="">
                                <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>