<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('pimpinan.dashboard') }}">
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('pimpinan/dashboard*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pimpinan.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('pimpinan/histories*') ? ' active' : '' }} ">
        <a class="nav-link" href="{{ route('pimpinan.histories.index') }}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>History Transaction</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
