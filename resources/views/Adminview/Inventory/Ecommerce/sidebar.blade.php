<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="index.html#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">shahanaz Akter</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-muted left-user-info">Admin Inventory</p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="index.html#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="index.html#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">



                <li>
                    <a href="{{url('/home')}}" style="color: black;">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Home </span>
                    </a>

                </li>

                <li>
                    <a href="{{url('/dashboard')}}" style="color: black;">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <ul>
                        <div>Inventory</div>
                        <li>
                            <a href="{{url('/add_super_parent_category')}}" style="color: black;">
                                <i class="mdi mdi-calendar-blank-outline"></i>
                                <span class="">Add Super Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/add_sub_category')}}" style="color: black;">
                                <i class="mdi mdi-calendar-blank-outline"></i>
                                <span class="">Add Sub Category</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/show_all')}}" style="color: black;">
                                <i class="mdi mdi-calendar-blank-outline"></i>
                                <span class="">Show All</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li>
                    <a href="{{url('/logout')}}" style="color: black;">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span>Log Out</span>
                    </a>
                </li>



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->