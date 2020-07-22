@extends('layouts.app')
@section('title','login')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('theme-back/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						{{__('Login')}}
					</span>
				</div>

				<form class="login100-form validate-form" action="" method="post">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{('E-Email')}}</span>
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter Email" id="email" value="{{old('email')}}" require autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" id="password" required autocomplete="current-password">
                            @error('password')
                        <span class="focus-input100">
                            <strong>{{$message}}</strong>
                        </span>
                            @enderror
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="ckb1">
								{{ __('Remember me')}}
							</label>
						</div>

						<div>
                            @if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" class="txt1">
								{{ __('Forgot Password?')}}
                            </a>
                            @endif
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Login')}}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection
