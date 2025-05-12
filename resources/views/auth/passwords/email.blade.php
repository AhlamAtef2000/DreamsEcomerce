<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{ asset('loginPage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">
    <div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h3>Reset Password</h3>
      <!-- Status Message Start -->
      @if (session('status'))
      <div class="alert alert-success mb-4" role="alert">
          {{ session('status') }}
      </div>
  @endif
                <!-- Email Field -->
                <div class="form-wrapper">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <small id="email-feedback" class="form-text"></small> <!-- Feedback Message -->
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- Email Field End -->

                <!-- Send Reset Link Button Start -->
                <div class="single-input-item mb-4">
                    <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
                <!-- Send Reset Link Button End -->

            </form>

      
            <!-- Status Message End -->
        </div>
    </div>

=