<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- <meta name="author" content="EGM" />
        <meta name="description" content="PT. Endo Global Medikatama"> -->
        <link rel="icon" type="image/png" href="images/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Document title -->
        <title>Welcome To PT. Endo Global Medikatama</title>


        <!-- Stylesheets & Fonts -->
        @stack('before-style')
        @include('frontend.includes.style')
        @stack('after-style')
    </head>

    <body>
        <div class="body-inner">
            @include('frontend.includes.navbarhome')

                            {{-- content --}}
                            @yield('content')

                    <footer>
                        @include('frontend.includes.footer')
                    </footer>
        </div>

        <div class="clearfix"></div>

                {{-- script --}}
            @stack('before-script')
            @include('frontend.includes.script')
            @stack('after-script')
    </body>



</html>
