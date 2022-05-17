
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="{{route('dashboard')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/tejas-travel-ico.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/tejas-travel-logo.png') }}" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="{{route('dashboard')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/images/tejas-travel-ico.png') }}" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/images/tejas-travel-logo.png') }}" alt="" height="30">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">
            
                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link {{strpos(url()->current(),'country') !== false || strpos(url()->current(),'state') !== false || strpos(url()->current(),'sub-city') !== false || strpos(url()->current(),'city') !== false ? 'active' : ''}}" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                    aria-expanded="{{strpos(url()->current(),'country') !== false || strpos(url()->current(),'state') !== false || strpos(url()->current(),'sub-city') !== false || strpos(url()->current(),'city') !== false ? 'true' : 'false'}}" aria-controls="sidebarDashboards">
                                    <i class="ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Location Management</span>
                                </a>
                                <div class="collapse menu-dropdown {{strpos(url()->current(),'country') !== false || strpos(url()->current(),'state') !== false || strpos(url()->current(),'subcity') !== false || strpos(url()->current(),'city') !== false ? 'show' : ''}}" id="sidebarDashboards">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('country_view')}}" class="nav-link {{strpos(url()->current(),'country') !== false ? 'active' : ''}}" data-key="t-analytics"> Countries </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('state_view')}}" class="nav-link {{strpos(url()->current(),'state') !== false ? 'active' : ''}}" data-key="t-analytics"> States </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('city_view')}}" class="nav-link {{strpos(url()->current(),'city') !== false ? 'active' : ''}}" data-key="t-analytics"> Cities </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('subcity_view')}}" class="nav-link {{strpos(url()->current(),'sub-city') !== false ? 'active' : ''}}" data-key="t-analytics"> Sub-Cities </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link {{strpos(url()->current(),'vehicle-type') !== false || strpos(url()->current(),'amenity') !== false || strpos(url()->current(),'accommodation') !== false ? 'active' : ''}}" href="#sidebarDashboards1" data-bs-toggle="collapse" role="button"
                                    aria-expanded="{{strpos(url()->current(),'vehicle-type') !== false || strpos(url()->current(),'amenity') !== false || strpos(url()->current(),'accommodation') !== false ? 'true' : 'false'}}" aria-controls="sidebarDashboards1">
                                    <i class="bx bx-folder-plus"></i> <span data-key="t-dashboards">Master</span>
                                </a>
                                <div class="collapse menu-dropdown {{strpos(url()->current(),'vehicle-type') !== false || strpos(url()->current(),'amenity') !== false || strpos(url()->current(),'accommodation') !== false ? 'show' : ''}}" id="sidebarDashboards1">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('vehicletype_view')}}" class="nav-link {{strpos(url()->current(),'vehicle-type') !== false ? 'active' : ''}}" data-key="t-analytics"> Vehicle Types </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('amenity_view')}}" class="nav-link {{strpos(url()->current(),'amenity') !== false ? 'active' : ''}}" data-key="t-analytics"> Amenity </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('accommodation_view')}}" class="nav-link {{strpos(url()->current(),'accommodation') !== false ? 'active' : ''}}" data-key="t-analytics"> Accommodation </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->
                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>