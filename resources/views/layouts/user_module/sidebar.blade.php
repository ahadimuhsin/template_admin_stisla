<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('user.home') }}">Data Warga</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('user.home') }}">DW</a>
        </div>

        <ul class="sidebar-menu">
            <li class="dropdown">
                <a href="{{ route('user.home') }}"
                class="nav-link"><i class="fa fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fa fa-envelope"></i><span>Laporan Mandiri</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('user.reports.create')}}">Buat Laporan</a></li>
                    <li><a class="nav-link" href="{{route('user.reports.index')}}">Riwayat Laporan</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
