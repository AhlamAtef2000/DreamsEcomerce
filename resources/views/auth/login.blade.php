<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{ asset('loginPage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">
<div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
    <div class="inner">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3>Login Form</h3>

            <!-- Input Email Start -->
            <div class="form-wrapper">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
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
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                <small id="password-feedback" class="form-text"></small> <!-- Feedback Message -->
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Input Password End -->

            <!-- Checkbox/Remember Me Start -->
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="text-center mb-3">
                <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot Your Password?') }}</a>
            </div>
            <!-- Checkbox/Remember Me End -->

            <!-- Login Button Start -->
            <div class="single-input-item mb-4">
                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill" id="login-btn">
                    {{ __('Login') }}
                </button>
            </div>
            <!-- Login Button End -->

        </form>
        <!-- Form Action End -->

        <!-- Register Link Start -->
        <div class="text-center">
            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="font-weight-bold">Register Here</a></p>
        </div>
        <!-- Register Link End -->

    </div>
</div>