<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Magang</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $menuDashboard ?? ''}}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @if (auth()->user()->jabatan=='Admin')
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Admin
                </div>

                <!-- Nav Item - Charts -->
                <li class="nav-item {{ $menuAdminUser ?? ''}}">
                    <a class="nav-link" href="{{ route('user') }}">
                        <i class="fas fa-user"></i>
                        <span>Data Mahasiswa</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item {{ $menuAdminMagang ?? ''}}">
                    <a class="nav-link" href="{{ route('magang') }}">
                        <i class="fas fa-tasks"></i>
                        <span>Data Magang</span></a>
                </li>

            @else
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Mahasiswa
                </div>

                <!-- Nav Item - Tables -->
                <li class="nav-item {{ $menuMahasiswaMagang ?? ''}}">
                    <a class="nav-link" href="{{ route('magang') }}">
                        <i class="fas fa-tasks"></i>
                        <span>Data Magang</span></a>
                </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->