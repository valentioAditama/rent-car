<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index.admin.show-cars')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-car"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rent Car</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.admin.show-cars') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Tampilkan Mobil</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.admin.tripped-history') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Riwayat Perjalanan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index.admin.inquery') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Inquery</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>