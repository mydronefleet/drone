
            <div class="main-content-body pt-10 px-4 flex flex-col sm:px-8">
                
                @if(session()->has('success'))
                <div class="ul-alert border-l border-primary-500 bg-success-100 text-success-500 text-sm font-bold mb-3" role="success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!-- Start:: content (Your custom content)-->
               
                <div class="container mx-auto">
                    
                    <div id="javascript" tabindex="0" role="tabpanel" aria-labelledby="aria-tablist-1-tab-1">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-4">
                                <div class="card mb-5">
                                    <div class="card-header">
                                        <p class="font-bold text-base">Basic Info</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Main Rpics</p><small><span id="rpics">{{$mission['pilot']}}</span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Pilot text-3xl"></i></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Mission Date</p><small><span id="mission_date">{{$mission['mission_date']}}</span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Calendar text-3xl"></i></div>
                                        </div>

                                        <div class="flex justify-between items-center mb-3">
                                            <div class="flex-grow">
                                                <p class="text-base font-normal">Mission Type</p><small><span id="mission_type">{{$mission['mission_types']}}</span></small>
                                            </div>
                                            <div></div>
                                            <div class=""><i class="i-Dollar-Sign text-3xl"></i></div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-span-12 xl:col-span-8">
                                <div class="grid grid-cols-12 gap-5">
                                    
                                    <div class="col-span-12 xl:col-span-11">
                                        <div class="card">
                                            <div class="card-header">
                                                
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span id="icon"><i class="i-Plane-2 text-4xl"></i></span>&nbsp;&nbsp;
                                                        <div><a class="hover:text-gray-700" href="#">
                                                                <p id="equipment" class="text-sm font-semibold">{{$mission['name']}}</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--<button class="btn-icon hover:bg-gray-300"><i class="material-icons p-1">more_horiz</i></button>-->
                                                </div>
                                            </div>
                                            
                                            <div class="card-body">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                                <input type="hidden" id="pac-input" value="{{$mission['mission_location']}}">
                                                <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                                <div id="googlmap" style="height:300px"></div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6 md:col-span-6">
                                                <p class="mb-4" id="long_desc">{{$mission['description']}} </p>
                                                <div class="flex justify-between flex-wrap">
                                                   
                                                </div>
                                                </div>
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="container mx-auto">
                    <div class="">
                        
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 px-3">
                            <div class="card">
                                <div class="card-header">
                                    <p><strong>Once mission has been submitted, an email will be sent to you and the RPIC. </strong></p>
                                    <div class="mt-5">
                                    <a class="btn btn-success" data-href="" href="{{url('/send-mail',$mission['id'])}}">Submit</a>
                                    
                                    @can('mission-edit')
                                        <a class="btn btn-primary" href="{{ route('missions.edit',$mission['id']) }}">Edit</a>
                                    @endcan

                                    
                                        <a class="btn btn-danger float-right" href="{{url('/missions')}}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>

                
            </div>
           
