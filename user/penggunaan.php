<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    $Nim=$_SESSION['user']['username'];
    include_once("../koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Atribut FOSTI - Halaman Penggunaan Web Atribut</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Harap Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   <div class="bg-1"></div>
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="./">PENGGUNA - WEB ATRIBUT</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b><?php echo $_SESSION['user']['nama']; ?></b>
                        <br>
                        <?php echo $_SESSION['user']['username']; ?>
                            
                        </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li role="separator" class="divider"></li>
                            <li><a href="../logout"><i class="material-icons">power_settings_new</i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="./">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="./pemesanan">
                            <i class="material-icons">assignment</i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="./informasi">
                            <i class="material-icons">info</i>
                            <span>Info Atribut</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./penggunaan">
                            <i class="material-icons">stars</i>
                            <span>Penggunan</span>
                        </a>
                    </li>
                    <li class="header">ACCOUNT</li>
                    
                    <li class="">
                        <a href="../logout">
                            <i class="material-icons col-red">power_settings_new</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="http://fosti.ums.ac.id">FOSTI UMS</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <div class="row clearfix">
                <!-- Colorful Panel Items With Icon -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PENGGUNAAN WEBSITE ATRIBUT
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-green">
                                            <div class="panel-heading" role="tab" id="headingOne_17">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
                                                        <i class="material-icons">perm_contact_calendar</i> Cara Melakukan Pemesanan Atribut
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                                <div class="panel-body">
                                                	<p class="justify-align">
                                                   	Berikut tata cara untuk melakukan pemesanan Atribut pada WEB ATRIBUT FOSTI UMS:
                                                   	<ol style="1">
                                                   		<li>Pastikan Data Nama & NIM anda benar, apabila salah silahkan chat ADMIN</li>
                                                   		<li>Login WEB ATRIBUT FOSTI UMS</li>
                                                   		<li>Pilih menu PEMESANAN</li>
                                                   		<li>Centang atribut yang ingin dipesan</li>
                                                   		<li>Isi form sesuai data kamu</li>
                                                   		<li>Tekan Pesan</li>
                                                   		<li>Lakukan Pembayaran & Konfirmasi Pembayaran</li>
                                                   	</ol>
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingTwo_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                                       aria-controls="collapseTwo_17">
                                                        <i class="material-icons">cloud_download</i> Cara Edit Pemesanan Atribut
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                                <div class="panel-body">
                                                	<p class="justify-align">
                                                    Silahkan cek terlebih dahulu pemesanan anda pada menu PEMESANAN. Apabila data pemesanan anda salah anda dapat melakukan pengeditan pemesanan sampai tanggal <b>30 JANUARI 2020</b>. Setelah tanggal tersebut tidak diperkenankan melakukan pengeditan data!
                                                    </p>
                                                    <p class="justify-align">
                                                    	Cara Melakukan EDIT Pemesanan Atribut:
                                                    	<ol style="1">
                                                    		<li>Pastikan Anda telah melakukan pemesanan. hal ini bisa di ketahui di menu PEMESANAN apabila telah memesan atribut akan terlihat FORM EDIT yang menampilkan data Pemesanan anda jika belum melakukan pemesanan maka hanya terlihat FORM PEMESANAN.</li>
                                                    		<li>Masuk Menu PEMESANAN</li>
                                                    		<li>Edit data yang ingin di edit</li>
                                                    		<li>Hilangkan centang jika ingin membatalkan pesanan</li>
                                                    		<li>Tekan Edit Pemesanan</li>
                                                    	</ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingThree_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false"
                                                       aria-controls="collapseThree_17">
                                                        <i class="material-icons">payment</i> Cara Melakukan Pembayaran
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                                <div class="panel-body">
                                                    <p class="justify-align">
                                                    	Pembayaran dapat dilakukan melalui TRANSFER BANK / CASH KE ADMIN. <b>Sebelum Melakukan Pembayaran silahkan konfirmasi kepada ADMIN ingin melakukan pembayaran via BANK / CASH</b>
                                                    </p>
                                                    <p class="justify-align">
                                                    	<h4 style="color: red;">Cara Melakukan Pembayaran VIA BANK </h4>
                                                    	<ol style="1">
                                                    		<li><b >Konfirmasi / Tanya ke ADMIN ingin melakukan Transfer via BANK nanti akan di kasih NO-REK</b></li>
                                                    		<li>Lakukan Pembayaran ( Transfer ) di ATM / BANK terdekat</li>
                                                    		<li>Simpan bukti transfer</li>
                                                    		<li>Lakukan konfirmasi Bahwa telah melakukan transfer dengan menyertakan bukti transfer kepada ADMIN</li>
                                                    		<li>Admin melakukan verifikasi, tunggu 1x24 Jam. Apabila admin telah memverifikasi silahkan lihat di menu beranda. lihat status PEMBAYARAN</li>
                                                    	</ol>
                                                    	NB : <b>SIMPAN BUKTI TRANSFER</b>
                                                    </p>
                                                    <p class="justify-align">
                                                    	<h4 style="color: red;">Cara Melakukan Pembayaran VIA CASH :</h4>
                                                    	<ol style="1">
                                                    		<li><b>Konfirmasi / Tanya ke ADMIN ingin melakukan Transfer via CASH nanti akan COD / Bagaimana.</b></li>
                                                    		<li>Lakukan Pembayaran</li>
                                                    		<li>Simpan bukti Pembayaran</li>
                                                    		<li>Admin Melakukan verifikasi, tunggu 1x24 Jam. Apabila admin telah memverifikasi silahkan lihat di menu beranda. lihat status PEMBAYARAN</li>
                                                    	</ol>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-orange">
                                            <div class="panel-heading" role="tab" id="headingFour_17">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseFour_17" aria-expanded="false"
                                                       aria-controls="collapseFour_17">
                                                        <i class="material-icons">phone</i> Contact Person ADMIN
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17">
                                                <div class="panel-body">
                                                    Berikut Adalah contact person ADMIN :
                                                    <ol style="1">
                                                    	<li> +62 857-9020-9085 (WA / Sekar) </li>
                                                    	<li> +62 812-1609-0396  (WA / Danang) </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morrisjs/morris.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
  
</body>

</html>
<?php 
}
?>