<?php
function searchForId($id, $array) {
    foreach ($array as $key => $val) {
        if ($val['equipment'] === $id) {
            return $key;
        }
    }
    return null;
 }

?>

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
                        <p class="text-xl mr-1 font-semibold">Dashboard</p>
                        <ul>
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">My Drone Fleet</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto homepage">
                    <div class="grid grid-cols-12 gap-5">
					<?php if(sizeof($equipment) > 0){ 
					
						$firstOne = $equipment[0]['equipment'];
					
					?>
                        <div class="col-span-12 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-6">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Jet text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                    
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Drone</p>
                                                        <?php
														
														$n = searchForId('Drone', $equipment);
														if($firstOne == "Drone"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Disk text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Software</p>
                                                        <?php
														
														$n = searchForId('Software', $equipment);
														if($firstOne == "Software"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Tablet-Secure text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Tablets</p>
                                                        <?php
														
														$n = searchForId('Tablets', $equipment);
														if($firstOne == "Tablets"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Suitcase text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Carry Cases</p>
                                                        <?php
														
														$n = searchForId('Carry cases', $equipment);
														if($firstOne == "Carry cases"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Control-2 text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl">Survey equipment/RTK</p>
                                                        <span class="title" style="display: none;">Survey equipment-RTK</span>
                                                        <?php
														
                                                            $n = searchForId('Survey equipment/RTK', $equipment);
															if($firstOne == "Survey equipment/RTK"){ ?>
																<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
															<?php }elseif($n == ""){ ?>
																<p class="text-4xl text-primary-600">0</p>
															<?php }else{ ?>
																<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
															<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Gamepad-2 text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Controller</p>
															<?php
														
                                                            $n = searchForId('Controller', $equipment);
															if($firstOne == "Controller"){ ?>
																<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
															<?php }elseif($n == ""){ ?>
																<p class="text-4xl text-primary-600">0</p>
															<?php }else{ ?>
																<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
															<?php } ?>
															
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <img class="mx-auto" width="48px" src="{{asset('public/images/Iconsmind-Outline-Battery-75.ico')}}">
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Batteries</p>
                                                        <?php
														
														$n = searchForId('Batteries', $equipment);
														if($firstOne == "Batteries"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                    <div class="card">
                                        <a data-toggle="ul-modal" data-target="#fleetsModalXl" href="javascript:;">
                                            <div class="card-body text-center">
                                                <i class="i-Walkie-Talkie text-5xl text-primary-200" style="color: #000;"></i>
                                                <div class="flex align-center">
                                                
                                                    <div class="m-auto">
                                                        <p class="text-gray-400 text-2xl title">Radios</p>
                                                        <?php
														
														$n = searchForId('Radios', $equipment);
														if($firstOne == "Radios"){ ?>
															<p class="text-4xl text-primary-600">{{$equipment[0]['total']}}</p>
														<?php }elseif($n == ""){ ?>
															<p class="text-4xl text-primary-600">0</p>
														<?php }else{ ?>
															<p class="text-4xl text-primary-600">{{$equipment[$n]['total']}}</p>
														<?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
					<?php } ?>
                        <div class="col-span-12 xl:col-span-6 md:col-span-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-4">Rpics who need to update certificate within the next 3 months</div>
                                    <div class="dataTable-container borderless hover">
                                        <table class="table-3">
                                            <thead>
                                                <tr>
                                                     <th class="text-gray-500 font-semibold">Profile Pic</th>
                                                    <th class="text-gray-500 font-semibold">First Name</th>
                                                    <th class="text-gray-500 font-semibold">Last Name</th>
                                                    <th class="text-gray-500 font-semibold">Date of certified</th>
                                                    <th class="text-gray-500 font-semibold">Mission type</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($rpics as $key => $rpic)
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="flex"><img class="avatar rounded-full mr-2" src="<?php echo asset("storage/app/")."/".$rpic['pic']?>" alt="" /></div>
                                                    </td>
                                                    <td>{{ $rpic['first_name'] }}</td>
                                                    <td>{{ $rpic['last_name'] }}</td>
                                                    <td>{{ $rpic['date_of_certified'] }}</td>
                                                    <td>{{ $rpic['mission_type'] }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="card mt-10">
                                <div class="card-body">
                                    <div class="card-title mb-4">User Roles</div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                            <div class="card">
                                               <div class="card-body text-center">
                                                    <i class="i-User text-5xl text-primary-200" style="color: #000;"></i>
                                                    <div class="flex align-center">
                                                    
                                                        <div class="m-auto">
                                                            <p class="text-gray-400 text-2xl">{{$admins}}</p>
                                                            <p class="text-4xl text-primary-600">Admin</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                            <div class="card">
                                               <div class="card-body text-center">
                                                    <i class="i-User text-5xl text-primary-200" style="color: #000;"></i>
                                                    <div class="flex align-center">
                                                    
                                                        <div class="m-auto">
                                                            <p class="text-gray-400 text-2xl">{{$rpicusers}}</p>
                                                            <p class="text-4xl text-primary-600">RPICs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                                            <div class="card">
                                               <div class="card-body text-center">
                                                    <i class="i-User text-5xl text-primary-200" style="color: #000;"></i>
                                                    <div class="flex align-center">
                                                    
                                                        <div class="m-auto">
                                                            <p class="text-gray-400 text-2xl">{{$users}}</p>
                                                            <p class="text-4xl text-primary-600">Users</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6 md:col-span-6">
                            <div class="card h-full">
                                <div class="card-body">
                                    <div class="card-title">Equipment Type</div>
                                    <div id="fleet_type"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-span-12 xl:col-span-6 md:col-span-6">
                            <div class="card h-full">
                                <div class="card-body">
                                    <div class="card-title">Org. Group Leaders</div>
                                    <div class="mt-10 align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                        <table class="min-w-full basic-table">
                                            <thead>
                                                <tr>
                                                    <th class="text-gray-500 font-semibold">Name</th>
                                                    <th class="text-gray-500 font-semibold">Group Type</th>
                                                    <th class="text-gray-500 font-semibold">Contact #</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($leaders as $key => $leader)
                                                <tr>
                                                    
                                                    <td>{{ $leader->name }}</td>
                                                    <td>{{ $leader->group_type }}</td>
                                                    <td>{{ $leader->contact }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 xl:col-span-6 md:col-span-6">
                            <div class="card h-full">
                                <div class="card-body">
                                    <div class="card-title">Drone Make</div>
                                    <div id="drone_make"></div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>



                <div class="modal fleetsModalXl" data-target="#fleetsModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold">Fleets</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="card h-full">
                                <div class="card-body">
                                    <div class="card-title"></div>
                                    <div class="mt-10 align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                        <table class="min-w-full basic-table" id="fleetsAll">
                                            
                                        </table>
                                    </div>
                                    </div>
                        </div>  
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

