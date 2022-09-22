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
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">Flight Closeout</a></li>
                            <li>Flight Closeout</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Flight Closeout</div>
                                       
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

                                {!! Form::open(array('route' => 'flights.store','method'=>'POST', 'files'=>true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                       
                                        <div class="col-span-12">
                                            <label for="" class="">Mission Name </label>
                                            <input type="hidden" id="mission_name" name="mission_name" />
                                            <select id="pilot" name="mission_id" class="ul-form-input requiredField">
                                                <option value="">Please Select one</option>
                                                @foreach ($missions as $key => $mission)

                                                <option data-name="{{ $mission['name'] }}" data-pilot="{{ $mission['pilot'] }}" value="{{ $mission['id'] }}">{{ $mission['name'] }}</option>

                                                @endforeach
                                                
                                            </select>
                                        
                                        </div>

                                        <div class="col-span-12">
                                            <label for="" class="">Was <span id="rpic_name">(Rpic Name)</span> Your RPIC?</label>
                                            <li><input type="radio" class="ul-form-input" name="rpic_conf" value="Yes"/>  &nbsp;&nbsp;&nbsp;Yes</li>
                                            <li><input type="radio" class="ul-form-input" name="rpic_conf" value="No"/>  &nbsp;&nbsp;&nbsp;No</li>
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                            <label for="" class="">Was your flight delayed?</label>
                                            <li><input type="radio" class="ul-form-input" name="flight_delayed" value="Yes"/>   &nbsp;&nbsp;&nbsp;Yes</li>
                                            <li><input type="radio" class="ul-form-input" name="flight_delayed" value="No"/>    &nbsp;&nbsp;&nbsp;No</li>
                                        </div>

                                        <div class="col-span-12 lg:col-span-6 md:col-span-6" id="delayed" style="display:none">
                                            <label for="" class="">Explain why your flight was delayed?</label>
                                            <input type="text" class="ul-form-input " name="delayed_explaination" placeholder="Explain here..."/>
                                        </div>

                                        <div class="col-span-12">
											<label for="" class="">Who was the "VO"?</label>
										    <input type="text" class="ul-form-input requiredField" name="whowas" placeholder="Type Name"/>
                                        </div>

                                        <div class="col-span-12">
                                            <label for="" class="">Did you have to deviate from your flight?</label>
                                            <li><input type="radio" class="ul-form-input" name="deviate" value="Yes"/>   &nbsp;&nbsp;&nbsp;Yes</li>
                                            <li><input type="radio" class="ul-form-input" name="deviate" value="No"/>    &nbsp;&nbsp;&nbsp;No</li>
                                        </div> 
                                        
                                        

                                        <div class="col-span-12 md:col-span-6">
                                            <label for="" class="">After mission, is drone deemed operable for next flight?</label>
                                            <li><input type="radio" class="ul-form-input" name="operable" value="Yes"/>   &nbsp;&nbsp;&nbsp;Yes</li>
                                            <li><input type="radio" class="ul-form-input" name="operable" value="No"/>    &nbsp;&nbsp;&nbsp;No</li>
                                        </div>   
                                        <div class="col-span-12 md:col-span-6" id="flight_plan" style="display:none">
                                            <label for="" class="">What casted a Devietion from your flight plan?</label>
                                            <input type="text" class="ul-form-input " name="flight_plan" placeholder=""/>
                                        </div>

                                        <div class="col-span-12">
                                        <label for="" class="">Mission Comments</label>
                                        <textarea cols="30" rows="8" class="ul-form-input" name="description" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-span-12">
                                            <input type="button" class="btn btn-primary" value="Submit">
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


                <!-- Start:: content (Your custom content)-->
                @include('layouts.footer')
            </div>
            <!-- End:: content body-->
        </div>
    </div>
    <div class="ul-sidebar-panel-overlay"></div>

@endsection
