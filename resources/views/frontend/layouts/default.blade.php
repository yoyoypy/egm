<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="PT. Endo Global Medikatama" />
        <meta name="description" content="Distributor berbagai jenis lampu jalan pintar yang dilengkapi dengan fitur tambahan yang menarik seperti Mobile Network, Smart Lighting, Environment Monitoring, Camera, LED, Emergent Broadcast, Electrombile Carging.">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Document title -->
        <title>Welcome To PT. Endo Global Medikatama</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3KQW1ZT7GV"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-3KQW1ZT7GV');
        </script>


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
