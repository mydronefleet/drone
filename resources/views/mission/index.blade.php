@extends('layouts.app')

@section('content')

<div class="loadscreen" id="preloader">
        <div class="loader spinner-bubble spinner-bubble-primary"></div>
    </div>
    <div class="app-admin-wrap-layout-2 layout-sidebar-large subheader-none">
        <div class="header-2-wrapper">
            @include('layouts.topnav')
        </div>
        <div class="main-content-wrap">
                @include('layouts.menu')
            <!-- Start:: content body-->
            <div class="main-content-body pt-10 px-4 flex flex-col sm:px-8">
                <div class="container mx-auto">
                    <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
                        <!--<p class="text-xl mr-1 font-semibold">Dashboard</p>-->
                        <ul>
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">My Drone Fleet</a></li>
                            <li>Missions</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Missions</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                <div class="pull-right">
                                        @can('mission-create')
                                        <a class="btn btn-success" href="{{ route('missions.create') }}"> Add New</a>
                                        @endcan
                                    </div>
                                    @if(session()->has('success'))
                                    <div class="ul-alert border-l border-primary-500 bg-success-100 text-success-500 text-sm font-bold mb-3" role="success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="dataTable-container borderless hover">
                                        <table class="table-3">
                                            <thead>
                                                <tr>
                                                    <th class="text-gray-500 font-semibold">Rpic.</th>
                                                    <th class="text-gray-500 font-semibold">Requestor</th>
                                                    <th class="text-gray-500 font-semibold">Mission Name</th>
                                                    <th class="text-gray-500 font-semibold">Mission Date</th>
                                                    <th class="text-gray-500 font-semibold">Status</th>
                                                    <th class="text-gray-500 font-semibold">Type</th>
                                                    
                                                    
                                                    @canany(['mission-edit', 'mission-delete'])
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                    @endcanany
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($missions as $key => $mission)

                                            
                                                <tr>
                                                    <td>{{ $mission->pilot }}</td>
                                                    <td>{{ $mission->requestor_name }}</td>
                                                    <td>{{ $mission->name }}</td>
                                                    <td>{{ $mission->mission_date }}</td>
                                                    <td><?php if( $mission->status == 2){ echo "<span class='badge-pill text-white bg-primary-600 mr-3'>Completed</span>"; }elseif( $mission->status == 0){ echo "<span class='badge-pill sm text-white bg-warning-500 mr-3'>Pending</span>"; }else{ echo "<span class='badge-pill text-white bg-success mr-3'>Approved</span>"; } ?></td>
                                                    <td>{{ $mission->mission_types }}</td>
                                                    
                                                    <td>
                                                        @can('mission-list')
                                                        <a class="btn btn-info  mr-2 modalLink" href="{{ route('missions.show',$mission->id) }}" >Details</a>
                                                        @endcan
                                                       
                                                        @can('mission-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['missions.destroy', $mission->id],'style'=>'display:inline']) !!}
                                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        @endcan
                                                        
                                                        @can('mission-edit')
                                                        <?php if( $mission->status == 0){ ?>
                                                            <a class="btn btn-primary" href="{{ url('missions/change_status',$mission->id) }}/?action=approve">Approve</a>
                                                        <?php }else if($mission->status != 2){ ?>
                                                            <a class="btn btn-primary" href="{{ url('missions/change_status',$mission->id) }}/?action=notapprove">Not Approve</a>
                                                        <?php } ?>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>
                </div>



                <div class="modal" data-target="#fleetModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Fleet information</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="container mx-auto">
                    <div class="mb-10 px-10 pt-5 bg-white">
                        <div class="flex items-center flex-wrap sm:flex-nowrap"><img class="mr-4 avatar-lg" src="assets/images/avatars/006-woman-1.svg">
                            <div class="w-full">
                                <div class="flex flex-wrap sm:flex-nowrap">
                                    <div class="mr-8">
                                        <div class="flex flex-wrap flex-col mr-8">
                                            <h4 class="text-xl font-semibold"><span id="fleetname"></span><i class="material-icons text-primary-600 text-base ml-1 align-middle">verified</i></h4>
                                            
                                        </div>
                                    </div>
                                    <!--<div class="my-2"><span class="badge-pill text-primary-500 bg-primary-100 mr-3">Lifestyle</span><span class="badge-pill text-warning-500 bg-warning-100 mr-3">Music</span></div>-->
                                    <div class="flex-grow"></div>
                                    
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <div id="javascript" tabindex="0" role="tabpanel" aria-labelledby="aria-tablist-1-tab-1">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="card mb-5">
                                    <div class="card-header">
                                        <p class="font-bold text-base">Basic Info</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Main Rpics</p><small><span id="rpics"></span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Pilot text-3xl"></i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Who Purchased</p><small><span id="owner"></span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Dollar-Sign text-3xl"></i></div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="grid grid-cols-12 gap-5">
                                    
                                    <div class="col-span-12 xl:col-span-11">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span id="icon"><i class="i-Jet text-4xl"></i></span>&nbsp;&nbsp;
                                                        <div><a class="hover:text-gray-700" href="#">
                                                                <p id="equipment" class="text-sm font-semibold">About</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--<button class="btn-icon hover:bg-gray-300"><i class="material-icons p-1">more_horiz</i></button>-->
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="flex my-3 flex-wrap sm:flex-nowrap">
                                                <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Equipment Name:</span><span class="text-sm text-gray-500" id="sofequipment"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Make:</span><span class="text-sm text-gray-500" id="make"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Model:</span><span class="text-sm text-gray-500" id="model"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Batteries:</span><span class="text-sm text-gray-500" id="batteries"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Tail Number:</span><span class="text-sm text-gray-500" id="tailno"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Group owner:</span><span class="text-sm text-gray-500" id="groupdrone"></span></div>
                                                    <div class="my-0 mr-8 dtl"><span class="font-bold mr-1">Assigned to Drone:</span><span class="text-sm text-gray-500" id="droneassigned"></span></div>
                                                </div>
                                                <p class="text-gray-700" id="short_desc"></p>
                                            </div>
                                            <div class="card-body">

                                                <p class="mb-4">Once mission has been submitted, the flight approval process status. please check email for next steps </p><img class="rounded mb-4" src="assets/images/gallery/sq-16.jpg" alt="">
                                                <div class="flex justify-between flex-wrap">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                        </div>
                    </div>
                    </div>



                <!-- Start:: content (Your custom content)-->
                @include('layouts.footer')
            </div>
            <!-- End:: content body-->
        </div>
    </div>
    <div class="ul-sidebar-panel-overlay"></div>

@endsection
