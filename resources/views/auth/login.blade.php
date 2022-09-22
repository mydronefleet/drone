@extends('layouts.app')

@section('content')
<div class="signin4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 h-screen justify-center items-center hidden lg:flex lg:col-span-7" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('public/images/signin-left.png') }});background-size: 100%;">
                <div class="px-10">
                    <p class="text-4xl text-white font-bold mb-3">Fleet Management Chaos Simplified</p>
                    <p class="text-base text-white font-semibold mb-5">Don't have an account?</p>
                    <a class="btn bg-yellow-600" href="{{ url('/register') }}">Sign Up</a>
                </div>
            </div>
            <div class="col-span-12 h-screen lg:col-span-5">
                <div class="h-full overflow-scroll">
                    <div class="flex justify-center">
                        <div class="my-10 text-center"><img class="h-24 m-auto" src="{{ asset('public/images/logo.png') }}">
                            <p class="text-lg text-primary-500 font-black">My Fly Login</p>
                            <p class="text-base text-gray-400 font-bold">Sign in to your account </p>
                        </div>
                    </div>
					
                    <div class="px-10 pt-10">
					@if (count($errors) > 0)
                                    	
						@foreach ($errors->all() as $error)

						<div class="bg-danger-100 border border-danger-400 text-danger-700 px-4 py-3 rounded relative" role="alert">

							<span class="block sm:inline">{{ $error }}</span>
						
						</div>
						@endforeach
						<br/>
					@endif
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<input class="ul-form-input mb-4 @error('email') is-invalid @enderror" name="email" type="text" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>
							
							<input class="ul-form-input mb-8 @error('password') is-invalid @enderror" type="password"  name="password" required autocomplete="current-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<a href="{{url('/password/reset')}}" class="btn-link my-3">
                                        Forgot Your Password?
                                    </a>
							<button class="btn mb-2 btn btn-block btn-primary mb-3" type="submit">Signin</button>
							<div class="block lg:hidden">
								<button class="btn mb-2 btn btn-block btn-primary" type="button">Sign Up</button>
							</div>
							<div class="mb-8"></div>
							<div class="border-b border-gray-300 mb-5"></div>
							
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
