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
                            <li>Create Group Leader</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Create New Group Leader</div>
                                       
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
                                {!! Form::open(array('route' => 'organizations.store','method'=>'POST', 'files' => true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                    
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Name</label>
                                            <input type="text" class="ul-form-input requiredField" name="name" placeholder="Name"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Group Type </label>
                                            <input type="text" class="ul-form-input requiredField" name="group_type" placeholder="Group Type"/>
                                            
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Contact</label>
                                            <input type="text" class="ul-form-input requiredField" name="contact" placeholder="Phone"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Address</label>
                                            <input type="text" class="ul-form-input requiredField" name="address_line" placeholder="Address Line 1"/>
                                        </div>

                                        

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">City</label>
                                            <input type="text" class="ul-form-input requiredField" name="city" placeholder="City"/>
                                        </div>
                                        
                                       
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">State</label>
                                            <input type="text" class="ul-form-input requiredField" name="state" placeholder="State"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Country </label>
                                            <select id="country" name="country" class="ul-form-input requiredField">
                                                @include('layouts.countryoptions')
                                            </select>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Zip Code</label>
                                            <input type="text" name="zip_code" class="ul-form-input requiredField" placeholder="Zip Code"/>
                                        </div>


                                       

                                      
                                        <div class="col-span-12">
                                            <input type="button" class="btn btn-primary" value="Submit">
                                            <input type="submit" class="btn btn-submit" value="Submit" style="display:none">
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
