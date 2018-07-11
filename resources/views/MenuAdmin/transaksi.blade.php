<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<?php require 'includes/header_end.php'; ?>




<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="height: 50px;">
    </div>
</div>
<div class="row">
    <div class="col-sm-12" style="position: right">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                    data-toggle="dropdown" aria-expanded="false">Admin <span class="m-l-5"><i class="zmdi zmdi-power"></i></span></button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Logout</a>
            </div>

        </div>
        <h4 class="page-title">Halaman Transaksi</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12" style="height: 300px; background-color: white">
        <button type="button" class="btn btn-info waves-effect waves-light w-md" style="margin-left: 20px; margin-top: 25px">Transaksi Baru</button>
        <div class="pull-right" style="margin-top: 30px; margin-right: 20px">
            <form action="#" method="post">
                <input type="text" class="form-control" id="exampleInputEmail1" style="width: 200px; margin-left: -210px" placeholder="Masukan ID Anggota" required="">
                <input type="submit" value="Cari" class="btn btn-info waves-light" style="margin-top:-65px; padding:7px 20px 7px 20px;">
            </form>
        </div>
        <div class="p-20">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color: #dddbd9">
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Jumlah Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Elvan Panca Prasetya</td>
                    <td>2</td>
                    <td>19/10/2018</td>
                    <td>20/11/2018</td>
                    <td>Baca</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dwi Laksono</td>
                    <td>5</td>
                    <td>1/11/2018</td>
                    <td>18/11/2018</td>
                    <td>Mencari Ilmu</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 







<?php require 'includes/footer_start.php' ?>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>

<?php require 'includes/footer_end.php' ?>
