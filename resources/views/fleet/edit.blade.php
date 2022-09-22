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
                            <li>Edit Fleet</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Edit Fleet</div>
                                       
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
                    
                                {!! Form::model($fleet, ['method' => 'PATCH','route' => ['fleets.update', $fleet->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                       
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Fleet Type</label>
                                        {!! Form::text('equipment', null, array('placeholder' => 'Fleet Type','class' => 'ul-form-input requiredField', 'readonly')) !!}
                                    </div>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Fleet Name</label>
                                        {!! Form::hidden('org_id', null, array('placeholder' => 'Fleet Name','class' => 'ul-form-input')) !!}
                                        {!! Form::text('name', null, array('placeholder' => 'Fleet Name','class' => 'ul-form-input requiredField')) !!}
                                        
                                    </div>
                                    <?php if($fleet->equipment != "Software"){ ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Make</label>
                                        {!! Form::text('make', null, array('placeholder' => 'Make','class' => 'ul-form-input')) !!}
                                    </div>

                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Model</label>
                                        {!! Form::text('model', null, array('placeholder' => 'Model','class' => 'ul-form-input')) !!}
                                    </div>

                                    <?php }
                                    
                                    if($fleet->equipment == "Drone"){ ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Tail Number</label>
                                        {!! Form::text('tail_number', null, array('placeholder' => 'Tail Number','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <?php } ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Date Purchased</label>
                                        <?php 
                                            $phpdate = strtotime($fleet->date_purchased);
                                            $mysqldate = date( 'm-d-Y', $phpdate );
                                         ?>
                                        <input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="date_purchased" value="{{$mysqldate}}" placeholder="Date Purchased">
										
                                    </div>
                                    
                                    <?php if($fleet->equipment == "Survey equipment/RTK"){ ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Batteries</label>
                                        {!! Form::number('batteries', null, array('placeholder' => 'Batteries','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <?php } ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Who Purchased</label>
                                        {!! Form::text('who_purchased', null, array('placeholder' => 'Who Purchased','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <?php if($fleet->equipment == "Drone"){ ?>
                                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Main Rpics</label>
                                        {!! Form::text('main_rpics', null, array('placeholder' => 'Main Rpics','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <?php } ?>

                                    <div class="col-span-12  md:col-span-6">
                                        <label for="" class="">Group Owner</label>
                                        {!! Form::text('group_own_the_dron', null, array('placeholder' => 'Group Owner','class' => 'ul-form-input')) !!}
                                    </div>
                                    

                                    <?php if($fleet->equipment == "Batteries" || $fleet->equipment == "Carry cases" || $fleet->equipment == "Controller"){ ?>
                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">Drone</label>
                                            <select class="ul-form-input" name="drone">
                                                <option value="">Select Drone</option>
                                                @foreach ($drones as $key => $drone)
                                                    <option value="{{$drone->id}}" <?php if($fleet->drone == $drone->id){ echo "selected"; } ?>>{{$drone->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <?php } ?>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input" />
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
                                        <a class="btn btn-danger float-right" href="{{url('/fleets')}}">Cancel</a>
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
