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
                        <p class="text-xl mr-1 font-semibold">Dashboard</p>
                        <ul>
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">My Drone Fleet</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                            <div class="card">
                                <a href="{{url('/sops')}}">
                                    <div class="card-body">
                                        <div class="flex align-center"><img src="{{ asset('public/images/SOPs.png') }}" />
                                            <div class="m-auto">
                                                <p class="text-gray-400 text-2xl">SOPs</p>
                                                <p class="text-4xl text-primary-600">{{$sopcount}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                            <div class="card">
                                <a href="{{url('/fleets')}}">
                                    <div class="card-body">
                                        <div class="flex align-center"><img src="{{ asset('public/images/DroneFleetManagement96x96.png') }}" />
                                            <div class="m-auto">
                                                <p class="text-gray-400 text-2xl">My Fleet</p>
                                                <p class="text-4xl text-primary-600">{{$fleetcount}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                       
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                            <div class="card">
                                <a href="{{url('/rpics')}}">
                                    <div class="card-body">
                                        <div class="flex align-center"><i class="i-Pilot text-8xl text-primary-200" style="color: #000;"></i>
                                            <div class="m-auto">
                                                <p class="text-gray-400 text-2xl">Registered RPICs</p>
                                                <p class="text-4xl text-primary-600">{{$rpicCount}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-span-12 xl:col-span-8 md:col-span-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-4">Rpics who need to update certificate within the next 3 months</div>
                                    <div class="dataTable-container borderless hover">
                                        <table class="table-3">
                                            <thead>
                                                <tr>
                                                     <th class="text-gray-500 font-semibold">Profile Pic</th>
                                                    <th class="text-gray-500 font-semibold">First Name</th>
                                                    <th class="text-gray-500 font-semibold">Last Name</th>
                                                    <th class="text-gray-500 font-semibold">Date of certified</th>
                                                    <th class="text-gray-500 font-semibold">Mission type</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($rpics as $key => $rpic)
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="flex"><img class="avatar rounded-full mr-2" src="<?php echo asset("storage/app/")."/".$rpic['pic']?>" alt="" /></div>
                                                    </td>
                                                    <td>{{ $rpic['first_name'] }}</td>
                                                    <td>{{ $rpic['last_name'] }}</td>
                                                    <td>{{ $rpic['date_of_certified'] }}</td>
                                                    <td>{{ $rpic['mission_type'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 md:col-span-6">
                            <div class="card h-full">
                                <div class="card-body">
                                    <div class="card-title">Fleet Type</div>
                                    <div id="fleet_type"></div>
                                </div>
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
