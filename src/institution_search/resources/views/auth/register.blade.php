@extends('layouts.app')

@section('content')
<!-- <script type="text/javascript">
	alert("会員登録")
</script> -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<div class="row mb-3">
							<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="row mb-3">
							<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-4">
								<label><input type="radio" id="role" name="role" value="11" checked>会員登録</label>
								<label><input type="radio" id="role" name="role" value="2">店舗登録</label>
								<input type="hidden" id="shop_id" name="shop_id" value="0">
							</div>
						</div>
						<div class="row mb-3">
							<label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>
							<div class="col-md-6">
								<input id="birthdate" type="text" class="form-control" name="birthdate" required autocomplete="new-birthdate">
							</div>
						</div>
						<div class="row mb-3">
							<label for="tel" class="col-md-4 col-form-label text-md-end">{{ __('Tel') }}</label>
							<div class="col-md-6">
								<input id="tel" type="text" class="form-control" name="tel" required autocomplete="new-tel">
							</div>
						</div>
						<div class="row mb-3">
							<label for="zip_code" class="col-md-4 col-form-label text-md-end">{{ __('Zip_code') }}</label>
							<div class="col-md-6">
								<input id="zip_code" type="text" class="form-control" name="zip_code" required autocomplete="new-zip_code">
							</div>
						</div>
						<div class="row mb-3">
							<label for="prefecture" class="col-md-4 col-form-label text-md-end">{{ __('Prefecture') }}</label>
							<div class="col-md-6">
								<input id="prefecture" type="text" class="form-control" name="prefecture" required autocomplete="new-prefecture">
							</div>
						</div>
						<div class="row mb-3">
							<label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>                            
							<div class="col-md-6">
								<input id="city" type="text" class="form-control" name="city" required autocomplete="new-city">
							</div>
						</div>
						<div class="row mb-3">
							<label for="unique_name" class="col-md-4 col-form-label text-md-end">{{ __('Unique_name') }}</label>
							<div class="col-md-6">
								<input id="unique_name" type="text" class="form-control" name="unique_name" required autocomplete="new-unique_name">
							</div>
						</div>
						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
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
