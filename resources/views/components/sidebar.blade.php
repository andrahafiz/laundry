<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Dapur Amy</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('karyawan/dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Kasir</li>
            <li class="{{ $type_menu === 'kasir' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('karyawan/kasir') }}"><i class="fas fa-reguler fa-cash-register"></i>
                    <span>Kasir</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="{{ Request::routeIs('karyawan.produk.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('karyawan/produk') }}"><i class="fas fa-boxes-stacked"></i>
                    <span>Enslikopedia Produk</span></a>
            </li>
            <li class="{{ Request::routeIs('karyawan.transaksi.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('karyawan/transaksi') }}"><i class="fas fa-money-bill"></i>
                    <span>Manajemen Laporan</span></a>
            </li>

            <li class="{{ Request::routeIs('karyawan.feedback.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('karyawan/feedback') }}"><i class="fas fa-comments"></i>
                    <span>Feedback</span></a>
            </li>
            <li class="menu-header">Utilitas</li>
            <li class="{{ Request::routeIs('karyawan.kategori-produk.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('karyawan/kategori-produk') }}"><i class="fas fa-boxes-stacked"></i>
                    <span>Kategori Produk</span></a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Karyawan
            </a>
        </div>
    </aside>
</div>
