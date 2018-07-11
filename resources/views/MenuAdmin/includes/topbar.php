<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main" style="background-color:#9A2EFE">
        <div class="container" style="background-color:#9A2EFE">

            <!-- LOGO -->
            <div class="row">
                <div class="col-sm-12" style="height: 105px">
                    <div class="topbar-left">
                        <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="user" class="rounded-circle" style="height: 100px">
                            <span>Perpustakaan Dinas Psikologi TNI AD</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Logo container-->


            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="{{ action('MenuController@index') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Home </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="{{ url('transaksi') }}"><i class="zmdi zmdi-money"></i> <span> Transaksi </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('about') }}"><i class="fa fa-user"></i> <span> Data Anggota </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('buku') }}"><i class="zmdi zmdi-collection-text"></i><span> Data Buku </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Laporan </span> </a>
                        <ul class="submenu">
                            <li><a href="tables-basic.php">Pengunjung</a></li>
                            <li><a href="tables-datatable.php">Peminjaman</a></li>
                            <li><a href="tables-responsive.php">Buku</a></li>
                            <li><a href="tables-tablesaw.php">Anggota</a></li>
                            <li><a href="tables-tablesaw.php">Statistik Terbanyak</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="icon-book-open"></i><span> Referensi </span> </a>
                        <ul class="submenu">
                            <li><a href="chart-flot.php">Jenis Pustaka</a></li>
                            <li><a href="chart-morris.php">Kelas Pustaka</a></li>
                            <li><a href="chart-chartjs.php">Lokasi Pustaka</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-settings"></i><span> Konfigurasi </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="calendar.php">Nama Perpustakaan</a></li>
                                    <li><a href="pages-starter.php">Peminjaman</a></li>
                                    <li><a href="pages-login.php">Hari Libur</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="wrapper">
    <div class="container">
