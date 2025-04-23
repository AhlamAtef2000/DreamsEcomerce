@extends('frontend.layout')
@section('content')

  <!-- Breadcrumb Section Start -->
  <div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Contact Us</h1>
                <ul>

                        <li><a href="{{ url('/') }}">Home</a></li>

                    <li class="active"> Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Contact Us Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n10">
            <div class="col-12 col-lg-8 mb-10">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Get In Touch</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->
                <!-- Contact Form Wrapper Start -->
                <div class="contact-form-wrapper contact-form">
                    <form action="{{ route('admin.contacts.store') }}" id="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <!-- Name Field -->
                                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                        <div class="input-item mb-4">
                                            <input class="input-item" type="text" placeholder="Your Name *" name="name" value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                        <div class="input-item mb-4">
                                            <input class="input-item" type="email" placeholder="Email *" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Subject Field -->
                                    <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                        <div class="input-item mb-4">
                                            <input class="input-item" type="text" placeholder="Subject *" name="subject" value="{{ old('subject') }}" required>
                                            @error('subject')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Message Field -->
                                    <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                                        <div class="input-item mb-8">
                                            <textarea class="textarea-item" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                                        <button type="submit" id="submit" name="submit" class="btn btn-dark btn-hover-primary rounded-0">Send A Message</button>
                                    </div>
                                    <p class="col-8 form-message mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form Wrapper End -->
            </div>
            <div class="col-12 col-lg-4 mb-10">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Contact Info</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->

                <!-- Contact Information Wrapper Start -->
                <div class="row contact-info-wrapper mb-n6">

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">
                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content" >
                            <h4 class="title">Postal Address</h4>
                            <p class="desc-content">{{ $contactInfo->postal_address }}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="400">
                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Contact Us Anytime</h4>
                            <p class="desc-content">Mobile: {{ $contactInfo->mobile }} <br>Fax: {{ $contactInfo->fax }}</p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                    <!-- Single Contact Information Start -->
                    <div class="col-lg-12 col-md-6 col-sm-12 col-12 single-contact-info mb-6" data-aos="fade-up" data-aos-delay="500">
                        <!-- Single Contact Icon Start -->
                        <div class="single-contact-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <!-- Single Contact Icon End -->

                        <!-- Single Contact Title Content Start -->
                        <div class="single-contact-title-content">
                            <h4 class="title">Support Overall</h4>
                            <p class="desc-content"><a href="mailto:{{ $contactInfo->support_email }}">{{ $contactInfo->support_email }}</a> <br><a href="mailto:{{ $contactInfo->info_email }}">{{ $contactInfo->info_email }}</a></p>
                        </div>
                        <!-- Single Contact Title Content End -->

                    </div>
                    <!-- Single Contact Information End -->

                </div>

                <!-- Contact Information Wrapper End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact us Section End -->

<!-- Contact Map Start -->
<div class="section" data-aos="fade-up" data-aos-delay="300">
    <!-- Google Map Area Start -->
    <div class="google-map-area w-100">
        <iframe class="contact-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52444.33544494922!2d35.8597!3d31.9637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1519edcd8c924d9b%3A0x10c8c59b4079e6a6!2sAmman%2C%20Jordan!5e0!3m2!1sen!2s!4v1611260188535!5m2!1sen!2s"></iframe>
    </div>

    <!-- Google Map Area Start -->
</div>

@endsection
