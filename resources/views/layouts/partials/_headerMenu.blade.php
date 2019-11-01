<ul class="main-menu">
    <li><a class="{{\Illuminate\Support\Facades\Request::is('/*') ? 'active' : ''}}" href="{{route('home')}}">
            <i class="fa fa-home" style="margin-right: .7em"></i>Home</a></li>
    <li class="menu-item-has-children">
        <a class="{{\Illuminate\Support\Facades\Request::is('product*') ? 'active' : ''}}" href="#">
            <i class="fa fa-car" style="margin-right: .7em"></i>Products <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu dropdown-arrow">
            <li class="menu-item-has-children">
                <a href="#">SUPREME WRAP FILM <i class="fa fa-angle-right dropdown-i"></i></a>
                <ul class="dropdown-menu">
                    <li class="menu-item-has-children">
                        <a href="#">OVERVIEW <i class="fa fa-angle-right dropdown-i"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('show.product.overview',
                            ['category' => 'mpi-series'])}}">MPI&trade; SERIES</a></li>
                            <li><a href="{{route('show.product.overview',
                            ['category' => 'conform-chrome'])}}">CONFORM CHROME</a></li>
                            <li><a href="{{route('show.product.overview',
                            ['category' => 'solid-color'])}}">SOLID COLOR</a></li>
                            <li><a href="{{route('show.product.overview',
                            ['category' => 'supreme-wrap-care'])}}">SUPREME WRAP CARE</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('show.product.visualizer')}}">VISUALIZER</a></li>
                </ul>
            </li>
            <li>
                <a href="http://ppf.co.id" target="_blank">PPF (SPF-XI)</a>
            </li>
        </ul>
    </li>
    <li><a class="{{\Illuminate\Support\Facades\Request::is('gallery*') ? 'active' : ''}}"
           href="{{route('show.gallery')}}"><i class="fa fa-photo-video" style="margin-right: .7em"></i>Gallery</a></li>
    <li><a class="{{\Illuminate\Support\Facades\Request::is('installers*') ? 'active' : ''}}"
           href="{{route('show.installers')}}"><i class="fa fa-tools" style="margin-right: .7em"></i>Installers</a></li>
    <li><a class="{{\Illuminate\Support\Facades\Request::is('blog*') ? 'active' : ''}}" href="{{route('show.blog')}}">
            <i class="fa fa-blog" style="margin-right: .7em"></i>Blog</a></li>
</ul>
