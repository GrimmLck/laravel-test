<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{url('images/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub @yield('acdashboard')">
                    <a class="js-arrow" href="{{url('/')}}">
                        <i class="fas fa-home"></i>DASHBOARD</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                    </ul>
                </li>
                <li class="has-sub @yield('acbuku')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-book"></i>BUKU</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('buku/add')}}"><i class="fas fa-plus"></i>Tambah Buku</a>
                        </li>
                        <li>
                            <a href="{{url('buku/list')}}"><i class="fas fa-tags"></i>Daftar Buku</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('acanggota')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>ANGGOTA</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('anggota/add')}}"><i class="fas fa-plus"></i>Tambah Anggota</a>
                        </li>
                        <li>
                            <a href="{{url('anggota')}}"><i class="fas fa-tags"></i>List Anggota</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('ackategori')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-key"></i>KATEGORI</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('kategori/add')}}"><i class="fas fa-plus"></i>Tambah Kategori</a>
                        </li>
                        <li>
                            <a href="{{url('kategori')}}"><i class="fas fa-tags"></i>List Kategori</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('acpenerbit')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>PENERBIT</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('penerbit/add')}}"><i class="fas fa-plus"></i>Tambah Penerbit</a>
                        </li>
                        <li>
                            <a href="{{url('penerbit')}}"><i class="fas fa-tags"></i>List Penerbit</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('acpengarang')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>PENGARANG</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('pengarang/add')}}"><i class="fas fa-plus"></i>Tambah Pengarang</a>
                        </li>
                        <li>
                            <a href="{{url('pengarang')}}"><i class="fas fa-tags"></i>List Pengarang</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('actransaksi')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-shopping-cart"></i>TRANSAKSI</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('trans/peminjaman')}}"><i class="fas fa-angle-double-right"></i>Peminjaman Buku</a>
                        </li>
                        <li>
                            <a href="{{url('trans/pengembalian')}}"><i class="fas fa-angle-double-right"></i>Pengembalian Buku</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @yield('acuser')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>USER</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('user/add')}}"><i class="fas fa-plus"></i>Tambah User</a>
                        </li>
                        <li>
                            <a href="{{url('user')}}"><i class="fas fa-tags"></i>Daftar Users</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub @yield('acpage')">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-book"></i>LAPORAN</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{url('report/buku')}}"><i class="fas fa-angle-double-right"></i>Laporan Data Buku</a>
                        </li>
                        <li>
                            <a href="{{url('report/anggota')}}"><i class="fas fa-angle-double-right"></i>Laporan Data Anggota</a>
                        </li>
                        <li>
                            <a href="{{url('report/peminjaman')}}"><i class="fas fa-angle-double-right"></i> Laporan Data Peminjaman</a>
                        </li>
                        <li>
                            <a href="{{url('report/pengembalian')}}"><i class="fas fa-angle-double-right"></i> Laporan Data Pengembalian</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
