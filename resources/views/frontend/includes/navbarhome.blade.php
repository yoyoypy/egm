<!-- Header -->
<header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="/">
                    <img class="logo-default" src="{{ asset('logo-with-name.png')}}" alt="#">
                    <img class="logo-dark" src="{{ asset('logo-with-name2.png')}}" alt="#">
                        {{-- <span class="logo-default">EGM</span>
                        <span class="logo-dark">EGM</span> --}}
                </a>
            </div>
            <!--End: Logo-->
            <!-- Search -->
            {{-- <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div> --}}
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                    </li>
                    <li>
                        <div class="p-dropdown">
                            <a href="#"><i class="icon-globe"></i><span>ID</span></a>
                            <ul class="p-dropdown-content">
                                <li><a href="#">Indonesia</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="dropdown"><a href="product">Our Product</a>
                                <ul class="dropdown-menu">
                                @foreach ( $categories as $category)
                                    {{-- <li class="dropdown-submenu"><a href="category/{{$category->slug}}">{{$category->category}}</a> --}}
                                    <li class="dropdown-submenu"><a>{{$category->category}}</a>
                                        <ul class="dropdown-menu">
                                            @foreach ( $category->Product as $product )
                                            <li><a href="product/{{$product->slug}}">{{$product->product_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"><a href="../about-us">About Us</a></li>
                            <li class="dropdown mega-menu-item"><a href="../contact-us">Contact Us</a></li>
                            <li class="dropdown mega-menu-item"><a href="../blog">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->
