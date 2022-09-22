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
                            <li>Create Mission</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Create New Mission</div>
                                       
                                </div>
                                
                                <div class="card-body">


                                @if (count($errors) > 0)
                                    <div class="bg-danger-100 border border-danger-400 text-danger-700 px-4 py-3">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {!! Form::open(array('route' => 'missions.store','method'=>'POST', 'files'=>true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                        
                                        <input type="hidden" class="ul-form-input" name="org_id" value="1"/>
                                       
                                        <div class="col-span-12">
                                        <label for="" class="">Name</label>
                                        <input type="text" class="ul-form-input requiredField" name="name" placeholder="Name"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                        <label for="" class="">Requestor Name</label>
                                        <input type="text" class="ul-form-input requiredField" name="rname" placeholder="Requestor Name"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                            <label for="" class="">Requestor Email</label>
                                            <input type="text" class="ul-form-input requiredField" name="remail" placeholder="Requestor Email"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 md:col-span-6">
											<label for="" class="">Mission Date</label>
											<input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="mission_date" placeholder="Mission Date">
										</div>

                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">Mission Type </label>
                                            <select id="mission_type" name="mission_type" class="ul-form-input requiredField">
                                                <option value="">Please Select one</option>
                                                <option value="General">General</option>
                                                <option value="Video">Video</option>
                                                <option value="Photos">Photos</option>
                                                <option value="Land survey">Land survey</option>
                                                <option value="Airport survey">Airport survey</option>
                                                <option value="Roading survey">Roading survey</option>
                                                <option value="Structure survey">Structure survey</option>
                                                <option value="Tower survey">Tower survey</option>
                                                <option value="Site inspection">Site inspection</option>
                                                <option value="Structure inspection">Structure inspection</option>
                                                <option value="Tower inspection">Tower inspection</option>
                                                <option value="Solar inspection">Solar inspection</option>
                                                <option value="Site survey">Site survey</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Utility">Utility</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Utility - Environment">Utility - Environment</option>
                                                <option value="Utility - Gas">Utility - Gas</option>
                                                <option value="Utility - Facility">Utility - Facility</option>
                                                <option value="Utility - Transmission">Utility - Transmission</option>
                                                <option value="Utility - Substation">Utility - Substation</option>
                                                <option value="Wincl">Wincl</option>
                                            </select>
                                        
                                        </div>
                                        
                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">Mission Location</label><br>
                                            <input name="location" class="ul-form-input border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white requiredField pac-target-input bg-white" placeholder="Type your location...">
											<button class="search-btn px-4 p-2 rounded-r-lg bg-primary-500 text-white font-bold uppercase border-primary-500 border-t border-b border-r focus:outline-none">Search</button>
											<input type="text" id="pac-input" name="location2" class="ul-form-input" style="opacity:0;"/>
											
											<div id="map" style="height:300px;margin-top: 30px;"></div>
                                        </div>

                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">Pilot </label>
                                            <select id="pilot" name="pilot" class="ul-form-input requiredField">
                                                <option value="">Please Select one</option>
                                                @foreach ($rpics as $key => $rpic)

                                                <option value="{{ $rpic->id }}">{{ $rpic->name }}</option>

                                                @endforeach
                                                
                                            </select>
                                        
                                        </div>

                                        <div class="col-span-12">
                                        <textarea cols="30" rows="8" class="ul-form-input" name="description" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-span-12">
                                            <input type="button" class="btn btn-primary" value="Create Mission">
                                            <input type="submit" class="btn btn-submit" value="Submit" style="display:none">
                                            <a class="btn btn-danger float-right" href="{{url('/flights')}}">Cancel</a>
                                        </div>
                                    
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                    
                    </div>
                </div>

                <div class="modal missionModalXl" data-target="#missionModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Mission Details</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                         
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
