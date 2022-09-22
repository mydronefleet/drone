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
                            <li>Create Role</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Edit Organization</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {!! Form::model($organization, ['method' => 'PATCH','route' => ['organizations.update', $organization->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Organization Name</label>
                                        {!! Form::text('org_name', null, array('placeholder' => 'Organization Name','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Address Line 1</label>
                                        {!! Form::text('address_line1', null, array('placeholder' => 'Address Line 2','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Address Line 2</label>
                                        {!! Form::text('address_line2', null, array('placeholder' => 'Address Line 2','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">City</label>
                                        {!! Form::text('city', null, array('placeholder' => 'City','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">State</label>
                                        {!! Form::text('state', null, array('placeholder' => 'State','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Country</label>
                                        {!! Form::text('country', null, array('placeholder' => 'Country','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Zip Code</label>
                                        {!! Form::text('zip_code', null, array('placeholder' => 'Zip Code','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input" placeholder="Upload Photo"/>
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">POC Name</label>
                                        {!! Form::text('poc_name', null, array('placeholder' => 'POC Name','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">POC Email</label>
                                        {!! Form::text('poc_email', null, array('placeholder' => 'POC Email','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">POC Phone</label>
                                        {!! Form::text('poc_phone', null, array('placeholder' => 'POC Phone','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Short Description</label>
                                        {!! Form::text('short_desc', null, array('placeholder' => 'Short Description','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    
                                    <div class="col-span-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a class="btn btn-danger float-right" href="{{url('/organizations')}}">Cancel</a>
                                    </div>
                                </div>

                                {!! Form::close() !!}

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
