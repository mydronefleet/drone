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
                            <li>Create Rpic</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Create New Rpic</div>
                                       
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

                                {!! Form::open(array('route' => 'rpics.store','method'=>'POST', 'files'=>true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                        
                                        <input type="hidden" class="ul-form-input" name="org_id" value="1"/>
                                       
                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">First Name</label>
                                        <input type="text" class="ul-form-input requiredField" name="fname" placeholder="First Name"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                        <label for="" class="">Last Name</label>
                                        <input type="text" class="ul-form-input requiredField" name="lname" placeholder="Last Name"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                            <label for="" class="">Email</label>
                                            <input type="text" class="ul-form-input requiredField" name="email" placeholder="Email"/>
                                        </div>

                                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
											<label for="" class="">Date of certified</label>
											<input datepicker datepicker-format="mm-dd-yyyy" type="text" class="ul-form-input" name="date_of_certified" placeholder="Date of certified">
										</div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">Mission Type </label>
                                            <input type="text" class="ul-form-input" name="mission_type" placeholder="Mission Type "/>
                                        
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                            <label for="" class="">Callsign </label>
                                            <input type="text" class="ul-form-input" name="callsign" placeholder="Callsign"/>
                                        
                                        </div>

                                        <div class="col-span-12 lg:col-span-4 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input image" />
                                        <input type="hidden" name="image" value="" />
                                        </div>
                                        
                                        <div class="col-span-12 lg:col-span-4 md:col-span-6 lst increment">
                                            <label for="" class="">Upload pilot certificate</label>

                                            <div class="clone hidden">
                                                <input type="file" name="certificate[]" class="rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none" />
                                                <button type="button" class="remove-btn px-4 rounded-r-lg border-t border-b border-r focus:outline-none"><span class="material-icons mt-2 text-gray-400">remove</span></button>
                                            </div>
                                            
                                                <input type="file" name="certificate[]" class="rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none" />
                                                <button type="button" class="add-btn px-4 rounded-r-lg border-t border-b border-r focus:outline-none"><span class="material-icons mt-2 text-gray-400">add</span></button>
                                            
                                        </div>
                                        
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
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
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
