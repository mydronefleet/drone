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
                            <li>Edit Rpic</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Edit Rpic</div>
                                       
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

                                {!! Form::model($rpic, ['method' => 'PATCH','route' => ['rpics.update', $rpic->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">First Name</label>
                                        {!! Form::hidden('org_id', null, array('placeholder' => 'Fleet Name','class' => 'ul-form-input')) !!}
                                        
                                        {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'ul-form-input requiredField')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Last Name</label>
                                        {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'ul-form-input requiredField')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Email</label>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'ul-form-input requiredField')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Date of certified</label>
                                        <?php 
                                            $phpdate = strtotime($rpic->date_of_certified);
                                            $mysqldate = date( 'm-d-Y', $phpdate );
                                         ?>
                                        <input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="date_of_certified" value="{{$mysqldate}}" placeholder="Date of certified">
										
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                    <label for="" class="">Mission Type </label>
                                        {!! Form::text('mission_type', null, array('placeholder' => 'Mission Type','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                    <label for="" class="">Callsign</label>
                                        {!! Form::text('callsign', null, array('placeholder' => 'Callsign','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input image" />
                                        <input type="hidden" name="image" value="" />
                                    </div>
                                    <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">Upload pilot certificate</label>
                                        <input type="file" name="certificate" class="ul-form-input" />
                                    </div>
                                    <div class="col-span-12">
                                        <label for="" class="">Summary</label>
                                        {!! Form::text('short_desc', null, array('placeholder' => 'Summary','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12">
                                        <label for="" class="">Description</label>
                                        {!! Form::textarea('long_desc', null, array('placeholder' => 'Description','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    
                                    <div class="col-span-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a class="btn btn-danger float-right" href="{{url('/rpics')}}">Cancel</a>
                                    </div>
                                </div>

                                {!! Form::close() !!}

                                </div>
                            </div>
                        </div>

                    
                    </div>
                </div>



                <div class="modal" data-target="#imgModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-md">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Crop your image</p>
                        </div>
                        <div class="modal-body">
                            <div class="container mx-auto">
                        
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 xl:col-span-6">
                                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="preview" style="width:100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
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
