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
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">My Drone Mission</a></li>
                            <li>Edit Mission</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Edit Mission</div>
                                       
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
                    
                                {!! Form::model($mission, ['method' => 'PATCH','route' => ['missions.update', $mission->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                       
                                    
                                    <div class="col-span-12">
                                        <label for="" class="">Mission Name</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Mission Name','class' => 'ul-form-input requiredField')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                        <label for="" class="">Requestor name</label>
                                        {!! Form::text('requestor_name', null, array('placeholder' => 'Requestor name','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                        <label for="" class="">Requestor Email</label>
                                        {!! Form::text('requestor_email', null, array('placeholder' => 'Requestor Email','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                        <label for="" class="">Mission Date</label>
                                        <?php 
                                            $phpdate = strtotime($mission->mission_date);
                                            $mysqldate = date( 'm-d-Y', $phpdate );
                                         ?>
                                         <input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="mission_date" value="{{$mysqldate}}" placeholder="Mission Date">
										
                                    </div>

                                    <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                        <label for="" class="">Mission Type</label>
                                        <select id="mission_type" name="mission_type" class="ul-form-input requiredField">
                                            <option value="">Please Select one</option>
                                            <option value="General" <?php if($mission->mission_types == "General"){ echo "selected"; } ?>>General</option>
                                            <option value="Video" <?php if($mission->mission_types == "Video"){ echo "selected"; } ?>>Video</option>
                                            <option value="Photos" <?php if($mission->mission_types == "Photos"){ echo "selected"; } ?>>Photos</option>
                                            <option value="Land survey" <?php if($mission->mission_types == "Land survey"){ echo "selected"; } ?>>Land survey</option>
                                            <option value="Airport survey" <?php if($mission->mission_types == "Airport survey"){ echo "selected"; } ?>>Airport survey</option>
                                            <option value="Roading survey" <?php if($mission->mission_types == "Roading survey"){ echo "selected"; } ?>>Roading survey</option>
                                            <option value="Structure survey" <?php if($mission->mission_types == "Structure survey"){ echo "selected"; } ?>>Structure survey</option>
                                            <option value="Tower survey" <?php if($mission->mission_types == "Tower survey"){ echo "selected"; } ?>>Tower survey</option>
                                            <option value="Site inspection" <?php if($mission->mission_types == "Site inspection"){ echo "selected"; } ?>>Site inspection</option>
                                            <option value="Structure inspection" <?php if($mission->mission_types == "Structure inspection"){ echo "selected"; } ?>>Structure inspection</option>
                                            <option value="Tower inspection" <?php if($mission->mission_types == "Tower inspection"){ echo "selected"; } ?>>Tower inspection</option>
                                            <option value="Solar inspection" <?php if($mission->mission_types == "Solar inspection"){ echo "selected"; } ?>>Solar inspection</option>
                                            <option value="Site survey" <?php if($mission->mission_types == "Site survey"){ echo "selected"; } ?>>Site survey</option>
                                            <option value="Real Estate" <?php if($mission->mission_types == "Real Estate"){ echo "selected"; } ?>>Real Estate</option>
                                            <option value="Utility" <?php if($mission->mission_types == "Utility"){ echo "selected"; } ?>>Utility</option>
                                            <option value="Agriculture" <?php if($mission->mission_types == "Agriculture"){ echo "selected"; } ?>>Agriculture</option>
                                            <option value="Utility - Environment" <?php if($mission->mission_types == "Utility - Environment"){ echo "selected"; } ?>>Utility - Environment</option>
                                            <option value="Utility - Gas" <?php if($mission->mission_types == "Utility - Gas"){ echo "selected"; } ?>>Utility - Gas</option>
                                            <option value="Utility - Facility" <?php if($mission->mission_types == "Utility - Facility"){ echo "selected"; } ?>>Utility - Facility</option>
                                            <option value="Utility - Transmission" <?php if($mission->mission_types == "Utility - Transmission"){ echo "selected"; } ?>>Utility - Transmission</option>
                                            <option value="Utility - Substation" <?php if($mission->mission_types == "Utility - Substation"){ echo "selected"; } ?>>Utility - Substation</option>
                                            <option value="Wincl" <?php if($mission->mission_types == "Wincl"){ echo "selected"; } ?>>Wincl</option>
                                        </select>
                                    </div>

                                    
                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Mission Location</label><br>
										<input name="location" class="ul-form-input border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white requiredField pac-target-input" value="{{$mission->mission_location}}" placeholder="Type your location...">
										<!--<button class="search-btn px-4 p-2 rounded-r-lg bg-primary-500 text-white font-bold uppercase border-primary-500 border-t border-b border-r focus:outline-none">Search</button>-->
                                        <input type="text" id="pac-input" name="location2" class="ul-form-input" value="" style="opacity:0;"/>
										
										<div id="googlmap" style="height:300px;margin-top: 30px" ></div>
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Pilot</label>
                                        <select class="ul-form-input" name="pilot">
                                            <option value="">Select Pilot</option>
                                            @foreach ($rpics as $key => $rpic)
                                                <option value="{{$rpic->id}}" <?php if($mission->pilot == $rpic->id){ echo "selected"; } ?>>{{ $rpic->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-12">
                                        <label for="" class="">Description</label>
                                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    
                                    <div class="col-span-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a class="btn btn-danger float-right" href="{{url('/missions')}}">Cancel</a>
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
