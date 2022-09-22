
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
                            <li>Roles</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Role Management</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                    <div class="pull-right">
                                        @can('role-create')
                                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Add New</a>
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
                                                    <th class="text-gray-500 font-semibold">Name</th>
                                                    <th class="text-gray-500 font-semibold">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($roles as $key => $role)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        @can('role-list')
                                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Details</a>
                                                        @endcan
                                                        @can('role-edit')
                                                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                                        @endcan
                                                        @can('role-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
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

                    {!! $roles->render() !!}
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
