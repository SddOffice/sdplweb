    <a href="index3.html" class="brand-link">
        <img src="{{asset('public/sdpl-assets/images/logo/sdpl_admin_logo.jpg')}}" alt="SDPL Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SDPL Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        
        @if (session('USER_LOGIN') == true)
            <div class="dropdown bg-light  pt-1 pb-1 ">
                <button class="btn btn-secondry btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('public/sdpl-assets/images/logo/user_active.png')}}" class="rounded-circle" alt="..."> Welcome - {{ucwords(session('USER_NAME'))}}
                </button>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
                    <li class="nav-item">
                        <a class="dropdown-item active" aria-current="page" href="{{url('user/logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
            
        @else
            
        @endif

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-item menu-open">
                    <a href="{{url('/user/dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard </p>
                    </a>
                </li> --}}

                @if (session('USER_LOGIN') == true)
                    <li class="nav-item menu-open">
                        <a href="{{url('/user/dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('/user/profile')}}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item inline">
                        <a href="{{url('/user/project')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>Project</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item menu-open">
                        <a href="{{url('/dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard </p>
                        </a>
                    </li>
                @endif
        
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Master<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/country')}}" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i><p>Country</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/state')}}" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i><p>State</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/city')}}" class="nav-link">
                                <i class="fas fa-angle-right nav-icon"></i><p>City</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            
                
            </ul>
        </nav>
        <!-- /.sidebar-menu --> 
    </div>