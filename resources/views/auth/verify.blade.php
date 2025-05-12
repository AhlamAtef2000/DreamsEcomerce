    <div class="wrapper" style="background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <div class="content-wrapper">
                <div class="text-center mb-4">
                    <h3 class="title mb-3">{{ __('Verify Your Email Address') }}</h3>
                </div>

                @if (session('resent'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <div class="text-center mb-4">
                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="custom-button">{{ __('click here to request another') }}</button>
                        </form>
                    </p>
                </div>

                <!-- Button to Go Home -->
                <div class="text-center">
                    <a class="custom-button-home" href="{{ url('/') }}" >
                        {{ __('Go to Home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .wrapper {
            background-image: url('{{ asset('loginPage/images/bg-registration-form-2.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .inner {
            background-color: rgba(255, 255, 255, 0.85); /* White with some transparency */
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
        }

        .content-wrapper {
            padding: 20px;
        }

        .title {
            font-size: 32px;
            color: #333;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn-dark {
            background-color: #007bff;
            color: #fff;
            border-radius: 50px; /* Rounded Button */
        }

        .btn-dark:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .btn-link {
            color: #007bff;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .form-text {
            font-size: 14px;
            color: #6c757d;
        }
        .custom-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Atlassian Sans' !important;        }
        .custom-button:hover {
            background-color: #0056b3;
            color: #fff;
        }
        .text-center {
            text-align: center;
        }
        .custom-button-home {
            background-color: #6c757d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Atlassian Sans' !important;

        }
        .custom-button-home:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
