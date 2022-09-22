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
                            <li>Rpics</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">RPICs</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                <div class="pull-right">
                                        @can('rpic-create')
                                        <a class="btn btn-success" href="{{ route('rpics.create') }}"> Add New</a>
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
                                                    <th class="text-gray-500 font-semibold">Profile Pic</th>
                                                    <th class="text-gray-500 font-semibold">First Name</th>
                                                    <th class="text-gray-500 font-semibold">Last Name</th>
                                                    <th class="text-gray-500 font-semibold">Date of certified</th>
                                                    <th class="text-gray-500 font-semibold">Mission type</th>
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($rpics as $key => $rpic)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>
                                                        <div class="avatar flex"><img class="rounded-full mr-2" src="<?php if($rpic->pic != ""){ echo asset("storage/app/$rpic->pic"); } ?>" alt="" /></div>
                                                    </td>
                                                    <td>{{ $rpic->first_name }}</td>
                                                    <td>{{ $rpic->last_name }}</td>
                                                    <td>{{ $rpic->date_of_certified }}</td>
                                                    <td>{{ $rpic->mission_type }}</td>
                                                    <td>
                                                        @can('rpic-list')
                                                        <a class="btn btn-info  mr-2 modalLink" data-href="{{ route('rpics.show',$rpic->id) }}" href="javascript:;" data-toggle="ul-modal" data-target="#rpicModalXl">Details</a>
                                                        
                                                        @endcan
                                                        @can('rpic-edit')
                                                            <a class="btn btn-primary" href="{{ route('rpics.edit',$rpic->id) }}">Edit</a>
                                                        @endcan
                                                        @can('rpic-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['rpics.destroy', $rpic->id],'style'=>'display:inline']) !!}
                                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
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



                <div class="modal" data-target="#rpicModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Rpic information</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="container mx-auto">
                    <div class="grid pt-5 grid-cols-12 gap-4 mb-10 px-10 pt-5">
                        <div class="col-span-12 md:col-span-6 flex items-center flex-wrap sm:flex-nowrap"><div class="avatar-lg"><img class="mr-4" src="assets/images/avatars/006-woman-1.svg"></div>
                            <div class="w-full">
                                <div class="flex flex-wrap sm:flex-nowrap">
                                    <div class="mr-8">
                                        <div class="flex flex-wrap flex-col mr-8">
                                            <h4 class="text-xl font-semibold"><span id="rpicname"></span><i class="material-icons text-primary-600 text-base ml-1 align-middle">verified</i></h4>
                                            
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
                                                <p class="text-base font-normal">Email:</p><small><span id="email"></span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Mail-2 text-3xl"></i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Mission Type</p><small><span id="mission_type"></span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Internet text-3xl"></i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Certificate</p><small><span id="allcertificates"></span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Diploma-2 text-3xl"></i></div>
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
                                                    <i class="i-Pilot text-4xl"></i>&nbsp;&nbsp;
                                                        <div><a class="hover:text-gray-700" href="#">
                                                                <p class="text-sm font-semibold">About</p>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--<button class="btn-icon hover:bg-gray-300"><i class="material-icons p-1">more_horiz</i></button>-->
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="flex my-3 flex-wrap sm:flex-nowrap">
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Date of certificate:</span><span class="text-sm text-gray-500" id="dateC"></span></div>
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Certificate will expire after:</span><span class="text-sm text-gray-500" id="dateExpire"></span></div>
                                                    <div class="my-0 mr-8 dtl" style="display:none"><span class="font-bold mr-1">Callsign:</span><span class="text-sm text-gray-500" id="callsign"></span></div>
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
