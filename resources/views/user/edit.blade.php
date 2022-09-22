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
                            <li>Edit User</li>
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

                                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'files' => true]) !!}

                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Name</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'ul-form-input requiredField')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Email</label>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'ul-form-input requiredField')) !!}
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Phone</label>
                                        {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'ul-form-input ')) !!}
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Upload Photo</label>
                                        <input type="file" name="file" class="ul-form-input image" />
                                        <input type="hidden" name="image" value="" />
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Address Line </label>
                                        {!! Form::text('address_line', null, array('placeholder' => 'Address Line','class' => 'ul-form-input')) !!}
                                    </div>

                                    

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">City</label>
                                        {!! Form::text('city', null, array('placeholder' => 'City','class' => 'ul-form-input')) !!}
                                        
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">State</label>
                                        {!! Form::text('state', null, array('placeholder' => 'State','class' => 'ul-form-input')) !!}
                                    </div>

                                    

                                    <div class="col-span-12 md:col-span-6">
                                        <label for="" class="">Country</label>
                                        {!! Form::text('country', null, array('placeholder' => 'Country','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <div class="col-span-12">
                                        <label for="" class="">Roles</label>
                                        <select class="ul-form-input requiredField" name="role">
                                        @foreach ($roles as $key => $role)
                                            <option value="{{ $role->id }}" <?php if($currentrole[0]['role_id'] == $role->id){ echo "selected"; } ?>>{{ $role->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-12">
                                        <label for="" class="">Description</label>
                                        {!! Form::textarea('long_desc', null, array('placeholder' => 'Description','class' => 'ul-form-input')) !!}
                                        
                                    </div>
                                    <div class="col-span-12">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a class="btn btn-danger float-right" href="{{url('/users')}}">Cancel</a>
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
                            
                        </div>
                        <div class="modal-body">
                        <div class="container mx-auto">
                    
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-6">
                           <img id="image" src="">
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
