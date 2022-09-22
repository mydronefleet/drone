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
                            <li>Organization Info</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Organizations</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                <div class="pull-right mb-2">
                                        @can('organization-create')
                                        <a class="btn btn-success mb-4" href="{{ route('organizations.create') }}"> Add Group Leader</a>
                                        @endcan
                                    </div>
                                    @if(session()->has('success'))
                                    <div class="ul-alert border-l border-primary-500 bg-success-100 text-success-500 text-sm font-bold mb-3" role="success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="mb-10 align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                        <table class="min-w-full basic-table">
                                            <thead>
                                                <tr>
                                                    <th class="text-gray-500 font-semibold">No.</th>
                                                    <th class="text-gray-500 font-semibold">Org. Name</th>
                                                    <th class="text-gray-500 font-semibold">Address</th>
                                                    <th class="text-gray-500 font-semibold">City</th>
                                                    <th class="text-gray-500 font-semibold">Country</th>
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($organizations as $key => $organization)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                   
                                                    <td>{{ $organization->org_name }}</td>
                                                    <td>{{ $organization->address_line1 }}</td>
                                                    <td>{{ $organization->city }}</td>
                                                    <td>{{ $organization->country }}</td>
                                                    <td>
                                                        @can('organization-list')
                                                        <a class="btn btn-info  mr-2 modalLink" data-href="{{ route('organizations.show',$organization->id) }}" href="javascript:;" data-toggle="ul-modal" data-target="#orgModalXl">Details</a>
                                                        
                                                        @endcan
                                                        @can('organization-edit')
                                                            <a class="btn btn-primary" href="{{ route('organizations.edit',$organization->id) }}">Edit</a>
                                                        @endcan
                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="card-header">
                                        <div class="card-title py-3">Group Leaders</div>
                                        
                                    </div>
                                    <div class="mt-10 align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                        <table class="min-w-full basic-table">
                                            <thead>
                                                <tr>
                                                    <th class="text-gray-500 font-semibold">No.</th>
                                                    <th class="text-gray-500 font-semibold">Name</th>
                                                    <th class="text-gray-500 font-semibold">Group Type</th>
                                                    <th class="text-gray-500 font-semibold">Address</th>
                                                    <th class="text-gray-500 font-semibold">Contact #</th>
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($leaders as $key => $leader)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                   
                                                    <td>{{ $leader->name }}</td>
                                                    <td>{{ $leader->group_type }}</td>
                                                    <td>{{ $leader->address_line }}</td>
                                                    <td>{{ $leader->contact }}</td>
                                                    <td>

                                                    @can('organization-list')
                                                        <a class="btn btn-info  mr-2 modalLink" data-href="{{ url('organizations/leadershow',$leader->id) }}" href="javascript:;" data-toggle="ul-modal" data-target="#leaderModalXl">Details</a>
                                                        
                                                        @endcan
                                                        @can('organization-edit')
                                                            <a class="btn btn-primary" href="{{ url('organizations/leaderedit',$leader->id) }}">Edit</a>
                                                        @endcan


                                                    @can('organization-delete')
                                                        {!! Form::open(['method' => 'DELETE','route' => ['organizations.destroy', $leader->id],'style'=>'display:inline']) !!}
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



                <div class="modal" data-target="#orgModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Organization information</p>
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
                                            <h4 class="text-xl font-semibold"><span id="orgname"></span><i class="material-icons text-primary-600 text-base ml-1 align-middle">verified</i></h4>
                                        </div>
                                    </div>
                                    <!--<div class="my-2"><span class="badge-pill text-primary-500 bg-primary-100 mr-3">Lifestyle</span><span class="badge-pill text-warning-500 bg-warning-100 mr-3">Music</span></div>-->
                                    <div class="flex-grow"></div>
                                    <div>
                                        <button class="btn-icon mr-2 bg-gray-100 hover:bg-gray-300 hover:text-white"><i class="material-icons p-1">mail_outline</i></button>
                                        <button class="btn-icon mr-2 bg-gray-100 hover:bg-gray-300 hover:text-white"><i class="material-icons p-1">more_horiz</i></button>
                                    </div>
                                </div>
                                <!--<div class="flex my-3 flex-wrap sm:flex-nowrap">
                                    <div class="my-0 mr-8"><span class="font-bold mr-1">1,022</span><span class="text-sm text-gray-500">Posts</span></div>
                                    <div class="my-0 mr-8"><span class="font-bold mr-1">100k</span><span class="text-sm text-gray-500">Followers</span></div>
                                    <div class="my-0 mr-8"><span class="font-bold mr-1">1540</span><span class="text-sm text-gray-500">Following</span></div>
                                </div>-->
                                
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
                                                <p class="text-base font-normal">POC Email</p><small><span id="poc_email"></span></small>
                                            </div>
                                            <div></div>
                                            <div class="badge-circle bg-gray-100 text-gray-600 font-bold h-8 w-8 mr-2"><i class="material-icons text-sm">email </i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">City</p><small><span id="city"></span></small>
                                            </div>
                                            <div></div>
                                            <div class="badge-circle bg-gray-100 text-gray-600 font-bold h-8 w-8 mr-2"><i class="material-icons text-sm">favorite </i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Country</p><small><span id="country"></span></small>
                                            </div>
                                            <div></div>
                                            <div class="badge-circle bg-gray-100 text-gray-600 font-bold h-8 w-8 mr-2"><i class="material-icons text-sm">home </i></div>
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
                                                        <div>
                                                            <a class="hover:text-gray-700" href="#">
                                                                <p class="font-bold text-base">About</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--<button class="btn-icon hover:bg-gray-300"><i class="material-icons p-1">more_horiz</i></button>-->
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="flex my-3 flex-wrap sm:flex-nowrap">
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">POC Name: </span><span class="text-sm text-gray-500" id="poc_name"></span></div>
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Address: </span><span class="text-sm text-gray-500" id="address_line1"></span></div>
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Phone: </span><span class="text-sm text-gray-500" id="poc_phone"></span></div>
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



                    <div class="modal" data-target="#leaderModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Group Leader information</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="container mx-auto">
                    <div class="mb-10 px-10 pt-5 bg-white">
                        <div class="flex items-center flex-wrap sm:flex-nowrap">
                        <i class="i-Administrator text-9xl p-1"></i>
                            <div class="w-full">
                                <div class="flex flex-wrap sm:flex-nowrap">
                                    <div class="mr-8">
                                        <div class="flex flex-wrap flex-col mr-8">
                                            <h4 class="text-xl font-semibold"><span id="name"></span><i class="material-icons text-primary-600 text-base ml-1 align-middle">verified</i></h4>
                                        </div>
                                    </div>
                                    <div class="flex-grow"></div>
                                    <div>
                                        
                                    </div>
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
                                                <p class="text-base font-normal">City</p><small><span id="city"></span></small>
                                            </div>
                                            <div></div>
                                            <div class="badge-circle bg-gray-100 text-gray-600 font-bold h-8 w-8 mr-2"><i class="material-icons text-sm">favorite </i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Country</p><small><span id="country"></span></small>
                                            </div>
                                            <div></div>
                                            <div class="badge-circle bg-gray-100 text-gray-600 font-bold h-8 w-8 mr-2"><i class="material-icons text-sm">home </i></div>
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
                                                        <div>
                                                            <a class="hover:text-gray-700" href="#">
                                                                <p class="font-bold text-base">About</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--<button class="btn-icon hover:bg-gray-300"><i class="material-icons p-1">more_horiz</i></button>-->
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="flex my-3 flex-wrap sm:flex-nowrap">
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Group Type: </span><span class="text-sm text-gray-500" id="group_type"></span></div>
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Address: </span><span class="text-sm text-gray-500" id="address_line"></span></div>
                                                    <div class="my-0 mr-8"><span class="font-bold mr-1">Phone: </span><span class="text-sm text-gray-500" id="phone"></span></div>
                                                </div>
                                                <p class="text-gray-700" id="short_desc"></p>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-4" id="long_desc"> </p><img class="rounded mb-4" src="assets/images/gallery/sq-16.jpg" alt="">
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
