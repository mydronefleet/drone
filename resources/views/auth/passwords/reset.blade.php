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
                            <p class="text-base text-gray-400 font-bold">{{ __('Reset Password') }}</p>
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
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="ul-form-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="ul-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="ul-form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn mb-2 btn btn-block btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
