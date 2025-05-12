
   <!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{ asset('loginPage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">
   <div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <h3>Reset Password</h3>

                <!-- Input Email Start -->
                <div class="form-wrapper">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    <small id="email-feedback" class="form-text"></small> <!-- Feedback Message -->
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input Email End -->

                <!-- Input Password Start -->
                <div class="form-wrapper">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <small id="password-feedback" class="form-text"></small> <!-- Feedback Message -->
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input Password End -->

                <!-- Confirm Password Start -->
                <div class="form-wrapper">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <small id="confirm-password-feedback" class="form-text"></small> <!-- Feedback Message -->
                </div>
                <!-- Confirm Password End -->

                <!-- Reset Password Button Start -->
                <div class="single-input-item mb-4">
                    <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                        {{ __('Reset Password') }}
                    </button>
                </div>
                <!-- Reset Password Button End -->

            </form>
        </div>
    </div>
