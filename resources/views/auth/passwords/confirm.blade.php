<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{ asset('loginPage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">
    <div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <h3>Confirm Password</h3>

                <!-- Input Password Start -->
                <div class="form-wrapper">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <small id="password-feedback" class="form-text"></small> <!-- Feedback Message -->
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Input Password End -->

                <!-- Confirm Password Button Start -->
                <div class="single-input-item mb-4 text-center">
                    <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                        {{ __('Confirm Password') }}
                    </button>
                </div>
                <!-- Confirm Password Button End -->

                <!-- Forgot Password Link Start -->
                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif
                <!-- Forgot Password Link End -->

            </form>
        </div>
    </div>
