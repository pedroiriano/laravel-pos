<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @if(Auth::user()->can('pos.menu'))
                <li>
                    <a href="{{ route('pos') }}">
                        <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-cart-outline"></i>
                        <span> POS </span>
                    </a>
                </li>
                @endif
    
                <li class="menu-title mt-2">Apps</li>
                @if(Auth::user()->can('employee.menu'))
                <li>
                    <a href="#sidebarEmployee" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-network-outline"></i>
                        <span> Employee Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmployee">
                        <ul class="nav-second-level">
                            @if(Auth::user()->can('employee.all'))
                            <li>
                                <a href="{{ route('all.employee') }}">All Employee</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('employee.add'))
                            <li>
                                <a href="{{ route('add.employee') }}">Add Employee</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('customer.menu'))
                <li>
                    <a href="#sidebarCust" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Customer Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCust">
                        <ul class="nav-second-level">
                            @if(Auth::user()->can('customer.all'))
                            <li>
                                <a href="{{ route('all.customer') }}">All Customer</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('customer.add'))
                            <li>
                                <a href="{{ route('add.customer') }}">Add Customer</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('supplier.menu'))
                <li>
                    <a href="#sidebarSupplier" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-supervisor"></i>
                        <span> Supplier Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSupplier">
                        <ul class="nav-second-level">
                            @if(Auth::user()->can('supplier.all'))
                            <li>
                                <a href="{{ route('all.supplier') }}">All Supplier</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('supplier.add'))
                            <li>
                                <a href="{{ route('add.supplier') }}">Add Supplier</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('salary.menu'))
                <li>
                    <a href="#sidebarAdv" data-bs-toggle="collapse">
                        <i class="mdi mdi-currency-usd"></i>
                        <span> Employee Salary </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdv" style="">
                        <ul class="nav-second-level">
                            @if(Auth::user()->can('salary.add'))
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('salary.all'))
                            <li>
                                <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('salary.pay'))
                            <li>
                                <a href="{{ route('pay.salary') }}">Pay Salary</a>
                            </li>
                            @endif
                            @if(Auth::user()->can('salary.paid'))
                            <li>
                                <a href="{{ route('month.salary') }}">Last Month Salary</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('attendance.menu'))
                <li>
                    <a href="#sidebarAttend" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-multiple-outline"></i>
                        <span> Employee Attendence </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAttend" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Employee Attendence List</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('category.menu'))
                <li>
                    <a href="#sidebarCategory" data-bs-toggle="collapse">
                        <i class="mdi mdi-bookmark-multiple-outline"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCategory" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">All Category</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('product.menu'))
                <li>
                    <a href="#sidebarProduct" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Product </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProduct" style="">
                        <ul class="nav-second-level">
                            <li>
                            <a href="{{ route('all.product') }}">All Product </a>
                            </li>
                            <li>
                                <a href="{{ route('add.product') }}">Add Product </a>
                            </li>
                            <li>
                                <a href="{{ route('import.product') }}">Import Product </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('orders.menu'))
                <li>
                    <a href="#sidebarOrder" data-bs-toggle="collapse">
                        <i class="fas fa-cart-arrow-down"></i>
                        <span> Orders </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarOrder" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('pending.order') }}">Pending Orders </a>
                            </li>
                            <li>
                                <a href="{{ route('complete.order') }}">Complete Orders </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('stock.menu'))
                <li>
                    <a href="#sidebarStock" data-bs-toggle="collapse">
                        <i class="fas fa-truck"></i>
                        <span> Stock Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarStock" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('stock.manage') }}">Stock </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('roles.menu'))
                <li>
                    <a href="#sidebarRole" data-bs-toggle="collapse">
                        <i class="fas fa-universal-access"></i>
                        <span> Roles And Permission </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarRole" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.permission') }}">All Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('all.roles') }}">All Roles</a>
                            </li>
                            <li>
                                <a href="{{ route('add.roles.permission') }}">Roles in Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('all.roles.permission') }}">All Roles in Permission</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(Auth::user()->can('admin.menu'))
                <li>
                    <a href="#sidebarAdmin" data-bs-toggle="collapse">
                        <i class="fab fa-teamspeak"></i>
                        <span> Setting Admin User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdmin" style="">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admin') }}">All Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('add.admin') }}">Add Admin</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                @endif

                <li class="menu-title mt-2">Custom</li>
                @if(Auth::user()->can('expense.menu'))
                <li>
                    <a href="#sidebarExp" data-bs-toggle="collapse">
                        <i class="mdi mdi-currency-usd-circle-outline"></i>
                        <span> Expense </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExp">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}">Add Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}">Today Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}">Monthly Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}">Yearly Expense</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
                
                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-sitemap.html">Sitemap</a>
                            </li>
                            <li>
                                <a href="pages-search-results.html">Search Results</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>