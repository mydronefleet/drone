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
                            <li>Edit Rpic</li>
                        </ul>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-5">



                    <div class="col-span-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="card-title py-3">Edit Rpic</div>
                                       
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

                                {!! Form::model($sop, ['method' => 'PATCH','route' => ['sops.update', $sop->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 ">
                                        <label for="" class="">Title</label>
                                        {!! Form::hidden('org_id', null, array('placeholder' => 'Fleet Name','class' => 'ul-form-input')) !!}
                                        
                                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 ">
                                        <!--<label for="" class="">Upload Sops  Document(pdf/docs)</label>
                                        <input type="file" name="file" class="ul-form-input requiredField" />-->
										<textarea class="ul-form-input" name="longtext" id="article-ckeditor"></textarea>
                                        </div>
                                    
                                        <div class="col-span-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
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
