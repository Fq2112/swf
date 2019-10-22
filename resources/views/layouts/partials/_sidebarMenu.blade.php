<ul class="sidebar-menu">
    <li class="menu-header">General</li>
    <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/dashboard*') ? 'active' : ''}}">
        <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
    </li>

    @if(Auth::user()->isRoot())
        <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/inbox*') ? 'active' : ''}}">
            <a href="{{route('admin.inbox')}}" class="nav-link"><i class="fas fa-envelope"></i><span>Inbox</span></a>
        </li>
    @endif

    <li class="menu-header">Data Master</li>
    <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/tables/admin-accounts*') ? 'active' : ''}}">
        <a href="{{route('table.admins')}}" class="nav-link">
            <i class="fas fa-users"></i><span>Admin Accounts</span>
        </a>
    </li>

    @if(Auth::user()->isRoot())
        <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/tables/galleries*') ? 'active' : ''}}">
            <a href="{{route('table.galleries')}}" class="nav-link">
                <i class="fas fa-photo-video"></i><span>Galleries</span>
            </a>
        </li>
        <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/tables/installers*') ? 'active' : ''}}">
            <a href="{{route('table.installers')}}" class="nav-link">
                <i class="fas fa-tools"></i><span>Installers</span>
            </a>
        </li>
    @endif
    
    <li class="dropdown {{\Illuminate\Support\Facades\Request::is('scott.royce/tables/blog*') ? 'active' : ''}}">
        <a href="javascript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-blog"></i><span>Blog</span></a>
        <ul class="dropdown-menu">
            <li class="{{\Illuminate\Support\Facades\Request::is('scott.royce/tables/blog/categories*') ?
            'active' : ''}}"><a href="{{route('table.blog.categories')}}" class="nav-link">Categories</a></li>
            <li class="{{\Illuminate\Support\Facades\Request::is('scott.royce/tables/blog/posts*') ?
            'active' : ''}}"><a href="{{route('table.blog.posts')}}" class="nav-link">Posts</a></li>
        </ul>
    </li>
</ul>

<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="{{route('home')}}" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> GO TO MAIN SITE</a>
</div>
