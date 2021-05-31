<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Product</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('productlist.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Product</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('productlist.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Product</a>
                    </li>

                    <li class="menu-title">Photo Product</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('productgallery.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Photo Product</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('productgallery.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Photo Product</a>
                    </li>

                    <li class="menu-title">Product Category</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('productcategory.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Category</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('productcategory.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Category</a>
                    </li>

                    <li class="menu-title">Blog</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('blog.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Artikel</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('blog.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Artikel</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
