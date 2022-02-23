    <a href="index3.html" class="brand-link">
        <img src="{{asset('public/sdpl-assets/images/logo/logo_new.png')}}" alt="SDPL Logo" class="brand-image elevation-3" style="border-radius:5px;">
        <h4><strong>SDPL</strong>Web</h4>
    </a>

    {{-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr> --}}
    
    <!-- Sidebar -->
    <div class="sidebar">
        
        @if (session('USER_LOGIN') == true)
            <div class="dropdown bg-light pl-1 py-2">
                <button class="btn btn-secondry btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('public/sdpl-assets/images/logo/businessman.png')}}" width="30" height="30" class="rounded-circle me-2" alt="...">
                     <strong>Welcome</strong>{{ucwords(session('USER_NAME'))}}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownMenuButton2">
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
                            <p>Existing Project</p>
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