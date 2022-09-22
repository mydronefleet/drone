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
                            <li>Fleets</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Fleets</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                <div class="pull-right">
                                        @can('fleet-create')
                                        <a class="btn btn-success" href="{{ route('fleets.create') }}"> Add New</a>
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
                                                    <th class="text-gray-500 font-semibold">No.</th>
                                                    <th class="text-gray-500 font-semibold">Photo</th>
                                                    <th class="text-gray-500 font-semibold">Equipment Name</th>
                                                    <th class="text-gray-500 font-semibold">Equipment Type</th>
                                                    <th class="text-gray-500 font-semibold">Make</th>
                                                    <th class="text-gray-500 font-semibold">Model</th>
                                                    
                                                    @canany(['fleet-edit', 'fleet-delete'])
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                    @endcanany
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($fleets as $key => $fleet)

                                            <?php 
                                                $class = "";
                                                if($fleet->equipment == "Drone"){
                                                    $class = "i-Jet";
                                                }elseif($fleet->equipment == "Controller"){
                                                    $class = "i-Gamepad-2";
                                                }elseif($fleet->equipment == "Software"){
                                                    $class = "i-Disk";
                                                }elseif($fleet->equipment == "Tablets"){
                                                    $class = "i-Tablet-Secure";
                                                }elseif($fleet->equipment == "Carry cases"){
                                                    $class = "i-Suitcase";
                                                }elseif($fleet->equipment == "Survey equipment/RTK"){
                                                    $class = "i-Control-2";
                                                }elseif($fleet->equipment == "Batteries"){
                                                    $class = "class";
                                                }elseif($fleet->equipment == "Radios"){
                                                    $class = "i-Walkie-Talkie";
                                                }
                                            ?>
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        <?php if($class == "class"){ ?>
                                                            <div class="flex icon"><img width="36px" src="{{asset('public/images/Iconsmind-Outline-Battery-75.ico')}}"></div>
                                                        <?php }else{ ?>
                                                            <div class="flex icon"><i class="{{$class}} text-4xl"></i></div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>{{ $fleet->name }}</td>
                                                    <td>{{ $fleet->equipment }}</td>
                                                    <td>{{ $fleet->make }}</td>
                                                    <td>{{ $fleet->model }}</td>
                                                    
                                                    <td>
                                                        @can('fleet-list')
                                                        <a class="btn btn-info  mr-2 modalLink" data-href="{{ route('fleets.show',$fleet->id) }}" href="javascript:;" data-toggle="ul-modal" data-target="#fleetModalXl">Details</a>
                                                        @endcan
                                                        @can('fleet-edit')
                                                            <a class="btn btn-primary" href="{{ route('fleets.edit',$fleet->id) }}">Edit</a>
                                                        @endcan
                                                        @can('fleet-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['fleets.destroy', $fleet->id],'style'=>'display:inline']) !!}
                                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
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

                                                <p class="mb-4" id="long_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p><img class="rounded mb-4" src="assets/images/gallery/sq-16.jpg" alt="">
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
