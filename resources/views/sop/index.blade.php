@extends('layouts.app')

@section('content')
<link href="{{ asset('public/css/section4.css') }}" rel="stylesheet">
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
                            <li>Sops</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5 mb-5">
                        <div class="col-span-12 px-10">
                            <div class="">
                                @can('sop-create')
                                        <a class="btn btn-success" href="{{ route('sops.create') }}"> Add New</a>
                                        @endcan
                                    </div>
                                    @if(session()->has('success'))
                                    <div class="ul-alert border-l border-primary-500 bg-success-100 text-success-500 text-sm font-bold mb-3" role="success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                <!--<div class="mb-2">
                                    <form class="flex">
                                        <input class="rounded-l-lg p-3 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none" placeholder="Search..." />
                                        <button class="px-4 bg-primary-500 rounded-r-lg border-t border-b border-r focus:outline-none"><span class="material-icons mt-2 text-white">search</span></button>
                                    </form>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="sops text-center px-10">

                    <div class="px-36 mx-auto mb-10">
                        <h1 class="display-4">UAV SOP</h1>
                        <p class="lead" contenteditable="true">This SOP describes best practices of UAV use for general commercial, public safety, or governmental operations. Through careful adherence to these procedures an organization, agency, or single pilot operator will boost efficiency, reduce risk and errors, as well as ensure regulatory and safety standard compliance. This document is not a comprehensive work on the rapidly advancing technological subject. However, the information and references contained herein will serve as a foundation for the establishment of a safety conscious and regulatory compliant UAV based operation.</p>
                        <p class="lead mb-5">Quickly access operating procedures below to help support your UAS program.</p>
                    </div>
                        <div class="ul-ecommerce-sidebar-overlay"></div>
                        
                        <div class="ul-ecommerce-container">
                            <div class="grid grid-cols-12 gap-5 mb-5">
								@foreach ($sops as $key => $sop)
                                <div class="col-span-12 xl:col-span-4 md:col-span-6">
                                    <div class="card overflow-hidden relative">
                                        <div class="card-body">
                                            <div class="mb-3 px-10"><h3>{{ $sop->title }}</h3></div>
                                           
                                            <div class="px-10">
                                                <a href="javascript:;" data-title="{{ $sop->title }}" data-content="<?php echo $sop->content; ?>" class="btn btnsop ripple btn-primary mb-2" type="button" data-toggle="ul-modal" data-target="#sopsModalXl">More Detail</a>
                                            </div>
                                            @can('sop-edit')
                                            <span class="pull-left" title="Edit"><a class="btn btn-primary" href="{{ route('sops.edit',$sop->id) }}">Edit</a></span>
                                            @endcan
                                            @can('sop-delete')
                                            <span class="pull-right" title="Delete">
                                                {!! Form::open(['method' => 'DELETE','route' => ['sops.destroy', $sop->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
                                                {!! Form::close() !!}
                                            </span>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
								@endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal" data-target="#sopsModalXl">
                    <div class="modal-overlay"></div>
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content shadow">
                        <div class="modal-header"> 
                            <p class="text-2xl font-semibold" id="title">SOPs Detail</p>
                            <button class="modal-close hover:bg-gray-100 focus:outline-none hover:text-gray-700 rounded-full" type="button">
                            <i class="i-Close-Window text-xl p-1"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container mx-auto" id="content">
                            
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
