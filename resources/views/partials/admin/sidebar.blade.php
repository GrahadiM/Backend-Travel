<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/categories*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fas fa-list-alt"></i>
            <span>Category</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/travel-packages*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.travel-packages.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Travel Package</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/transactions*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.transactions.index') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Transaction</span>
        </a>
    </li>

    {{-- <li class="nav-item {{ request()->is('admin/cars*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.cars.index') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Car</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/posts*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('admin.posts.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Post</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">


</ul>
