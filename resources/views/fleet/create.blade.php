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
                            <li>Create Fleet</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">New equipment</div>
                                       
                                </div>
                                
                                <div class="card-body">

                                <?php if(isset($_GET['equipment']) && $_GET['equipment'] != ""){ ?>

                                


                                {!! Form::open(array('route' => 'fleets.store','method'=>'POST', 'files' => true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                        @foreach ($organizations as $key => $organization)
                                        <input type="hidden" class="ul-form-input" name="org_id" value="{{ $organization->id }}"/>
                                        @endforeach
                                        <input type="hidden" class="ul-form-input" name="equipment" value="{{ $_GET['equipment'] }}"/>
                                        
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Equipment Type</label>
                                        <input type="text" class="ul-form-input"  value="{{ $_GET['equipment'] }}" readonly/>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Equipment Name</label>
                                        <input type="text" class="ul-form-input requiredField" name="name" placeholder="Equipment Name"/>
                                        </div>
                                        <?php if($_GET['equipment'] != "Software" && $_GET['equipment'] != "Batteries"){ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Make</label>
                                        <input type="text" class="ul-form-input" name="make" placeholder="Make"/>
                                        </div>
                                        <?php } ?>
                                        <?php if($_GET['equipment'] != "Software"){ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Model</label>
                                        <input type="text" class="ul-form-input" name="model" placeholder="Model"/>
                                        </div>
                                        <?php } ?>
                                        <?php if($_GET['equipment'] == "Drone"){ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                            <label for="" class="">Tail Number</label>
                                            <input type="text" class="ul-form-input" name="tail_number" placeholder="Tail Number"/>
                                        </div>
                                        <?php } ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
											<label for="" class="">Date Purchased</label>
											<input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="date_purchased" placeholder="Date Purchased">
										</div>
                                        <?php if($_GET['equipment'] == "Batteries"){ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Batteries</label>
                                        <input type="number" class="ul-form-input" name="batteries" placeholder="Batteries"/>
                                        </div>
                                        <?php } ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Who Purchased</label>
                                        <input type="text" name="who_purchased" class="ul-form-input" placeholder="Who Purchased"/>
                                        </div>
                                        <?php if($_GET['equipment'] == "Drone"){ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                            <label for="" class="">Assigned to</label>
                                            <input type="text" class="ul-form-input" name="main_rpics" placeholder="Assigned to"/>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                            <label for="" class="">Assigned to</label>
                                            <input type="text" class="ul-form-input" name="assigned_to" placeholder="Assigned to"/>
                                        </div>
                                        <?php } ?>
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Group Owner</label>
                                            <input type="text" name="group_own_the_dron" class="ul-form-input" placeholder="Group Owner"/>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Flight Load Out</label>
                                            <input type="text" name="flight_load_out" class="ul-form-input" placeholder="Flight Load Out"/>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Physical Location</label>
                                            <input type="text" name="physical_location" class="ul-form-input" placeholder="Physical Location"/>
                                        </div>

                                        <?php if($_GET['equipment'] == "Batteries" || $_GET['equipment'] == "Carry cases" || $_GET['equipment'] == "Controller"){ ?>
                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">Drone</label>
                                            <select class="ul-form-input" name="drone">
                                                <option value="">Select Drone</option>
                                                @foreach ($drones as $key => $drone)
                                                    <option value="{{$drone->id}}">{{$drone->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <?php } ?>
                                        <!--<div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input" />
                                        </div>
                                        -->
                                        
                                        <div class="col-span-12">
                                        <label for="" class="">Summary</label>
                                        <input type="text" class="ul-form-input" name="short_desc" placeholder="Summary"/>
                                        </div>

                                        <div class="col-span-12">
                                        <textarea cols="30" rows="8" class="ul-form-input" name="long_desc" placeholder="Description"></textarea>
                                        </div>
                                        
                                        <div class="col-span-12">
                                            <input type="button" class="btn btn-primary" value="Submit">
                                            <input type="submit" class="btn btn-submit" value="Submit" style="display:none">
                                            <a class="btn btn-danger float-right" href="{{url('/fleets')}}">Cancel</a>
                                        </div>
                                    
                                    </div>
                                    {!! Form::close() !!}

                                <?php }else{ ?>
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12">
                                            <label for="" class="">Equipment</label>
                                            <select class="ul-form-input" id="equipment">
                                                <option value="">Please select one</option>
                                                <option value="Controller">Controller</option>
                                                <option value="Software">Software</option>
                                                <option value="Tablets">Tablets</option>
                                                <option value="Carry cases">Carry cases</option>
                                                <option value="Survey equipment/RTK">Survey equipment/RTK</option>
                                                <option value="Drone">Drone</option>
                                                <?php if(sizeof($drones) > 0){ ?>
                                                    <option value="Batteries">Batteries</option>
                                                <?php } ?>
                                                
                                                <option value="Radios">Radios</option>
                                            </select>
                                        </div>
                                        <div class="col-span-12">
                                            
                                            <a class="btn btn-danger float-right" href="{{url('/fleets')}}">Cancel</a>
                                        </div>
                                    </div>
                                <?php } ?>



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
