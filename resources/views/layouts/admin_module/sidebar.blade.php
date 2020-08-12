<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Data Warga</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.home') }}">DW</a>
        </div>

        <ul class="sidebar-menu">
            <li class="dropdown">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-briefcase">
                    </i><span>Manajemen Pekerjaan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.jobs.index') }}">Daftar Pekerjaan</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.jobs.create') }}">Tambah Pekerjaan</a> </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-building">
                    </i><span>Manajemen Provinsi</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.provinces.index') }}" class="nav-link">Daftar Provinsi</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.provinces.create') }}">Tambah Provinsi</a> </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-university">
                    </i><span>Manajemen Kota</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.cities.index') }}" class="nav-link">Daftar Kota</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.cities.create') }}">Tambah Kota</a> </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.users.index') }}" class="nav-link">
                    <i class="fa fa-users"></i><span>Manajemen User</span> </a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.reports.index') }}" class="nav-link">
                    <i class="fa fa-envelope"></i><span>Laporan Warga</span> </a>
            </li>
        </ul>
    </aside>
</div>
