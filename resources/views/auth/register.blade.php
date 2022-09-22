@extends('layouts.app')

@section('content')
<div class="signin4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 h-screen justify-center items-center hidden lg:flex lg:col-span-7" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('public/images/signin-left.png') }});background-size: 100%;">
                <div class="px-10">
                    <p class="text-4xl text-white font-bold mb-3">Signin your account ?</p>
                    <a class="btn bg-yellow-600" href="{{ url('/login') }}">Login</a>
                </div>
            </div>
            <div class="col-span-12 h-screen lg:col-span-5">
                <div class="h-full overflow-scroll">
                    <div class="flex justify-center">
                        <div class="my-10 text-center">
                            <p class="text-lg uppercase font-black mb-5 tracking-wider px-5">Create an account get unlimited access</p>
							<img class="h-24 m-auto" src="{{ asset('public/images/logo.png') }}">
                        </div>
                    </div>
                    <div class="px-10 pt-10">
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="grid grid-cols-12 gap-5 mb-5">
								<div class="col-span-12 lg:col-span-6 md:col-span-6">
									<input id="name" type="text" class="ul-form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
								</div>
								
								<div class="col-span-12 lg:col-span-6 md:col-span-6">
									<input id="email" type="email" class="ul-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
								</div>
								<div class="col-span-12 lg:col-span-6 md:col-span-6">
									<input id="password" type="password" class="ul-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
								</div>
								<div class="col-span-12 lg:col-span-6 md:col-span-6">
									<input id="password-confirm" type="password" class="ul-form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
								</div>
							</div>
							<label class="inline-flex items-center mt-3 mb-4">
								<input class="form-checkbox h-5 w-5 border border-gray-900 text-primary-500 rounded" type="checkbox" checked=""><span class="ml-2 text-gray-700 font-bold">I Agree with Terms And Conditions</span>
							</label>
							<button class="btn mb-2 btn btn-block btn-primary mb-3" type="submit">Sign Up</button>
							<div class="block lg:hidden">
								<button class="btn mb-2 btn btn-block btn-primary" type="button">SignIn</button>
							</div>
							<div class="mb-8"></div>
							<div class="border-b border-gray-300 mb-5"></div>
							<!--
							<div class="text-center">
								<p class="text-base font-black mb-8">Sign Up WIth</p>
							</div>
							<div class="flex justify-center text-center mb-8">
								<button class="btn mr-2 btn btn-danger-outline" type="button">Google</button>
								<button class="btn mr-2 btn btn-info-outline" type="button">Facebook</button>
								<button class="btn mr-2 btn btn-primary-outline" type="button">Twitter</button>
							</div>-->
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
