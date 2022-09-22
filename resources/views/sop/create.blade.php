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
                            <li>Create Sop</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Create New Sop</div>
                                       
                                </div>
                                
                                <div class="card-body">
                                {!! Form::open(array('route' => 'sops.store','method'=>'POST', 'files'=>true)) !!}
                                    <div class="grid grid-cols-12 gap-4">
                                        
                                         <div class="col-span-12">
                                        <label for="" class="">Title</label>
                                        <input type="text" class="ul-form-input requiredField" name="doctitle" placeholder="Title"/>
                                        </div>

                                        <div class="col-span-12 ">
                                        <!--<label for="" class="">Upload Sops  Document(pdf/docs)</label>
                                        <input type="file" name="file" class="ul-form-input requiredField" />-->
										<textarea class="ul-form-input ckeditor" name="longtext" id="article-ckeditor"></textarea>
                                        </div>

                                        
                                        <div class="col-span-12">
                                            <input type="button" class="btn btn-primary" value="Submit">
                                            <input type="submit" class="btn btn-submit" value="Submit" style="display:none">
                                            <a class="btn btn-danger float-right" href="{{url('/sops')}}">Cancel</a>
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
