<?php require 'includes/header_start.blade.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<?php require 'includes/header_end.blade.php'; ?>




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
        <h4 class="page-title">Halaman Referensi</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12" style="height: 300px; background-color: white">
    </div>
</div> 







<?php require 'includes/footer_start.blade.php' ?>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>

<?php require 'includes/footer_end.blade.php' ?>
