<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{ asset('loginPage/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="{{ asset('loginPage/css/style.css') }}">

    <div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Registration Form</h3>

                <!-- First Name and Last Name Fields -->
                    <div class="form-wrapper">
                        <label for="name">First Name</label>
                        <input type="text"class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required>
                        <small id="name-feedback"  class="form-text"></small> <!-- Feedback Message -->

                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                   

                <!-- Email Field -->
                <div class="form-wrapper">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
                    <small id="email-feedback"  class="form-text"></small> <!-- Feedback Message -->

                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-wrapper">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password">
                    <small id="password-feedback"  class="form-text"></small> <!-- Feedback Message -->

                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="form-wrapper">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                    <small id="confirm-password-feedback"  class="form-text"></small> <!-- Feedback Message -->

                </div>

                <!-- Terms and Conditions Checkbox -->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="terms" required> I accept the Terms of Use & Privacy Policy.
                        <span class="checkmark"></span>
                        <small id="terms-feedback"  class="form-text"></small> <!-- Feedback Message -->

                    </label>
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">Register Now</button>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var submitButton = document.querySelector('button[type="submit"]');
            submitButton.disabled = true; // Disable the submit button by default
    
            // First Name Validation
            document.getElementById('name').addEventListener('input', function () {
                var nameInput = this.value;
                var regex = /^[a-zA-Z\s]+$/; // Only letters and spaces allowed
                var feedback = document.getElementById('name-feedback');
                if (regex.test(nameInput)) {
                    feedback.innerHTML = "<i class='fa fa-check' style='color: green;'></i> Valid name!";
                    submitButton.disabled = false; // Enable submit button
                } else {
                    feedback.innerHTML = "<i class='fa fa-times' style='color: red;'></i> Invalid name. Only letters and spaces are allowed.";
                    submitButton.disabled = true; // Disable submit button
                }
            });
    
           
    
            // Email Validation
            document.getElementById('email').addEventListener('input', function () {
                var emailInput = this.value;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email validation regex
                var emailFeedback = document.getElementById('email-feedback');
                if (emailRegex.test(emailInput)) {
                    emailFeedback.innerHTML = "<i class='fa fa-check' style='color: green;'></i> Valid email!";
                    submitButton.disabled = false;
                } else {
                    emailFeedback.innerHTML = "<i class='fa fa-times' style='color: red;'></i> Invalid email format.";
                    submitButton.disabled = true;
                }
            });
    
            // Password Validation
            document.getElementById('password').addEventListener('input', function () {
                var passwordInput = this.value;
                var passwordFeedback = document.getElementById('password-feedback');
                var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Password must be at least 8 characters long, include letters and numbers
                if (passwordRegex.test(passwordInput)) {
                    passwordFeedback.innerHTML = "<i class='fa fa-check' style='color: green;'></i> Strong password!";
                    submitButton.disabled = false;
                } else {
                    passwordFeedback.innerHTML = "<i class='fa fa-times' style='color: red;'></i> Weak password. At least 8 characters and must contain letters and numbers.";
                    submitButton.disabled = true;
                }
            });
    
            // Confirm Password Validation
            document.getElementById('password_confirmation').addEventListener('input', function () {
                var confirmPasswordInput = this.value;
                var passwordInput = document.getElementById('password').value;
                var confirmPasswordFeedback = document.getElementById('confirm-password-feedback');
                if (confirmPasswordInput === passwordInput) {
                    confirmPasswordFeedback.innerHTML = "<i class='fa fa-check' style='color: green;'></i> Passwords match!";
                    submitButton.disabled = false;
                } else {
                    confirmPasswordFeedback.innerHTML = "<i class='fa fa-times' style='color: red;'></i> Passwords do not match.";
                    submitButton.disabled = true;
                }
            });
    
            // Terms & Conditions Checkbox Validation
            document.querySelector('input[name="terms"]').addEventListener('change', function () {
                var termsChecked = this.checked;
                var termsFeedback = document.getElementById('terms-feedback');
                if (termsChecked) {
                    termsFeedback.innerHTML = "<i class='fa fa-check' style='color: green;'></i> You have accepted the Terms.";
                    submitButton.disabled = false;
                } else {
                    termsFeedback.innerHTML = "<i class='fa fa-times' style='color: red;'></i> You must accept the Terms.";
                    submitButton.disabled = true;
                }
            });
        });
    </script>
    