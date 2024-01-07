<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Alrescha Wash</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li>
            <li class="{{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li> --}}
            <li class="menu-header">Starter</li>
            <li class="{{ Request::routeIs('admin.produk.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/produk') }}"><i class="fas fa-boxes-stacked"></i>
                    <span>Daftar Jasa</span></a>
            </li>
            <li class="{{ Request::routeIs('admin.transaksi.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/transaksi') }}"><i class="fas fa-money-bill"></i>
                    <span>Pesanan</span></a>
            </li>

            {{--     <li class="nav-item dropdown {{ $type_menu === 'laporan' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Laporan Penjualan</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('admin.laporan.transaksi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/laporan/transaksi') }}">Transaksi</a>
                    </li>
                </ul>
            </li> --}}

            <li class="menu-header">Utilitas</li>
            <li class="{{ Request::routeIs('admin.kategori-produk.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/kategori-produk') }}"><i class="fas fa-boxes-stacked"></i>
                    <span>Kategori Jasa</span></a>
            </li>

        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-warning btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> ADMIN
            </a>
        </div>
    </aside>
</div>
