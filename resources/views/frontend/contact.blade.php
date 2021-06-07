@extends('frontend.layouts.else')

@section('content')
<!-- Page title -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d495.8168704652764!2d106.86669471838532!3d-6.192917468542005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f53ae0e3ca29%3A0xfba9636463a1ce8b!2sIS%20PLAZA%20BALLROOM!5e0!3m2!1sen!2sid!4v1622801395032!5m2!1sen!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
{{-- <section class="no-padding">
    <!-- Google Map -->
    <div class="map" data-latitude="-6.192671478655565" data-longitude="106.86658206560733" data-style="light" data-info="#" data-height-lg="800" data-height-xs="200" data-height-sm="500" style="height: 500px"></div>
    <!-- end: Google Map -->
</section> --}}
<!-- end: Page title -->
<!-- CONTENT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                <div class="row m-t-40">
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                 @include('flash::message')
                <form action="contact-us" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name" class="form-control-label">Your Name</label>
                            <input  type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"/>
                            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email" class="form-control-label">Your Email</label>
                            <input  type="text"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"/>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="subject" class="form-control-label">Subject</label>
                            <input  type="text"
                                    name="subject"
                                    value="{{ old('subject') }}"
                                    class="form-control @error('subject') is-invalid @enderror"/>
                            @error('subject') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-lg-12">
                        <div class="form-group">
                            <label for="message" class="form-control-label">Your Message</label>
                            <textarea name="message"
                                    class="form-control @error('message') is-invalid @enderror">{{ old('message')}}</textarea>
                            @error('message') <div class="text-muted">{{ $message }}</div> @enderror
                          </div>
                        </div>
                    {{-- <div class="form-group">
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                    </div> --}}
                    {{-- <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button> --}}
                    <div class="form-group col-md-12">
                    <div class="text-right" style="padding-right: 8px">
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">
                                <i class="fa fa-paper-plane"></i>&nbsp;Send Message
                            </button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> <!-- end: Content -->
@endsection
