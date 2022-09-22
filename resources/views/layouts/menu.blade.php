            <div class="side-content-wrap">
                <div class="sidebar-left open" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                    <ul class="navigation-left">
                         
                        <li class="nav-item <?php if(Request::segment(1) == ""){ echo "active"; } ?>"><a class="nav-item-hold" href="{{ url('/') }}"><i class="i-Bar-Chart text-3xl"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                            
                        @can('organization-list')
                        <li class="nav-item <?php if(Request::segment(1) == "organizations"){ echo "active"; } ?>" data-item="organization"><a class="nav-item-hold" href="{{ url('/organizations') }}"><i class="i-Computer-Secure text-3xl"></i>
                                <p>Organization</p>
                            </a>
                        </li>
                        @endcan
                        @can('sop-list')
                        <li class="nav-item <?php if(Request::segment(1) == "sops"){ echo "active"; } ?>" data-item="sops"><a class="nav-item-hold" href="{{ url('/sops') }}"><i class="i-Folder-Archive text-3xl"></i>
                                <p>Library</p>
                            </a>
                        </li>
                        @endcan
                        @can('fleet-list')
                        <li class="nav-item <?php if(Request::segment(1) == "fleets"){ echo "active"; } ?>" data-item="fleet"><a class="nav-item-hold" href="{{ url('/fleets') }}"><i class="i-Jet text-3xl"></i>
                                <p>Fleet</p>
                            </a>
                        </li>
                        @endcan
                       
                        <li class="nav-item <?php if(Request::segment(1) == "flights"){ echo "active"; } ?>" data-item="flight"><a class="nav-item-hold" href="{{ url('/flights') }}"><i class="i-Plane-2 text-3xl"></i>
                                <p>Flight OPS.</p>
                            </a>
                        </li>
                        
                        @can('rpic-list')
                        <li class="nav-item <?php if(Request::segment(1) == "rpics"){ echo "active"; } ?>" data-item="rpics"><a class="nav-item-hold" href="{{ url('/rpics') }}"><i class="i-Pilot text-3xl"></i>
                                <p>RPICs</p>
                            </a>
                        </li>
                        @endcan
                       
                        @can('user-list')
                        <li class="nav-item <?php if(Request::segment(1) == "users"){ echo "active"; } ?>" data-item="users"><a class="nav-item-hold" href="{{ url('/users') }}"><i class="i-Conference text-3xl"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        @endcan
                        
                    </ul>
                </div>
                <!--<div class="sidebar-left-secondary shadow" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                    
                    <ul class="mb-4 childNav" data-parent="organization" style="display:none">
                        @can('organization-create')
                        <li><a class="flex" href="{{ url('/organizations/create') }}"><i class="nav-icon i-Calendar-4 text-base mr-2"></i><span class="item-name">Add New</span></a></li>
                        @endcan
                        @can('organization-list')
                        <li><a class="flex" href="{{ url('/organizations') }}"><i class="nav-icon i-Book text-base mr-2"></i><span class="item-name">Organizations</span></a></li>       
                        @endcan
                    </ul>
                    <ul class="mb-4 childNav" data-parent="sops" style="display:none">
                        @can('sop-create')
                        <li><a class="flex" href="{{ url('/sops/create') }}"><i class="nav-icon i-Add text-base mr-2"></i><span class="item-name">Add New</span></a></li>
                        @endcan
                        @can('sop-list')
                        <li><a class="flex" href="{{ url('/sops') }}"><i class="nav-icon i-File text-base mr-2"></i><span class="item-name">Sops</span></a></li>       
                        @endcan
                    </ul>
                    <ul class="mb-4 childNav" data-parent="fleet" style="display:none">
                        @can('fleet-create')   
                        <li><a class="flex" href="{{ url('/fleets/create') }}"><i class="nav-icon i-Calendar-4 text-base mr-2"></i><span class="item-name">Add New</span></a></li>
                        @endcan
                        @can('fleet-list')
                        <li><a class="flex" href="{{ url('/fleets') }}"><i class="nav-icon i-Book text-base mr-2"></i><span class="item-name">Fleets</span></a></li>       
                        @endcan
                    </ul>
                    <ul class="mb-4 childNav" data-parent="rpics" style="display:none">
                        @can('rpic-create')
                        <li><a class="flex" href="{{ url('/rpics/create') }}"><i class="nav-icon i-Add-User text-base mr-2"></i><span class="item-name">Add New</span></a></li>
                        @endcan
                        @can('rpic-list')
                        <li><a class="flex" href="{{ url('/rpics') }}"><i class="nav-icon i-Pilot text-base mr-2"></i><span class="item-name">Rpics</span></a></li>       
                        @endcan
                    </ul>
                   
                    <ul class="mb-4 childNav" data-parent="users" style="display:none">
                        @can('user-create')
                        <li><a class="flex" href="{{ url('/users/create') }}"><i class="nav-icon i-Add-User text-base mr-2"></i><span class="item-name">Add New</span></a></li>
                        @endcan
                        @can('user-list')
                        <li><a class="flex" href="{{ url('/users') }}"><i class="nav-icon i-Conference text-base mr-2"></i><span class="item-name">Users</span></a></li>       
                        @endcan
                    </ul>
                    
                </div>-->
            </div>