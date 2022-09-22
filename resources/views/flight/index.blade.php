
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
                       
                        <ul>
                            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">My Drone Fleet</a></li>
                            <li>Flight OPS.</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                @if(session()->has('success'))
                                    <div class="ul-alert border-l border-primary-500 bg-success-100 text-success-500 text-sm font-bold mb-3" role="success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                <div class="container mx-auto homepage">
                    <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                    <a href="{{url('missions/create')}}"><div class="card">
                                <div class="card-body">
                                    <div class="flex align-center"><i class="i-Calendar-4 text-6xl text-primary-200" style="color: #000;"></i>
                                        <div class="m-auto">
                                            <p class="text-gray-400">Create Mission</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                        <a href="{{url('/flights/create')}}"><div class="card">
                                <div class="card-body">
                                    <div class="flex align-center"><i class="i-Plane text-6xl text-primary-200" style="color: #000;"></i>
                                        <div class="m-auto">
                                            <p class="text-gray-400">Flight Closeout</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6">
                            <a href="{{url('/missions')}}"><div class="card">
                                <div class="card-body">
                                    <div class="flex align-center"><i class="i-Notepad text-6xl text-primary-200" style="color: #000;"></i>
                                        <div class="m-auto">
                                            <p class="text-gray-400">Mission Logs</p>
                                            
                                        </div>
                                    </div>
                                </div></a>
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

