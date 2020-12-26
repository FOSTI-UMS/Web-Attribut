<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ATRIBUT FOSTI - Halaman Pengguna</title>
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

    <!-- sweetalert2 -->
    <link href="../assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />

    <!-- CSS manual -->
    <link href="../style.css" rel="stylesheet">
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
                    <li class="active">
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
                    <li>
                        <a href="./penggunaan">
                            <i class="material-icons">stars</i>
                            <span>Penggunan</span>
                        </a>
                    </li>
                    <li class="header">ACCOUNT</li>
                    
                    <li>
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

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                Halaman Pengguna <small>Halaman untuk melakukan pemesanan Atribut FOSTI UMS...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <p class="align-justify">WEB ATRIBUT digunakan untuk melakukan dan memanage pemesanan Pakaian Dinas Harian (PDH), ID CARD dan KAOS FOSTI Universitas Muhammadiyah Surakarta...
                            Lakukan Pemesanan sesuai dengan kecocokan diri anda mulai dengan nickname & ukuran. untuk informasi bisa di lihat <a href="pemesanan">disini</a></p>
                            <p class="align-justify">Tata cara penggunaan website mulai dari cara pemesanan sampai cara pembayaran bisa dilihat di menu PENGGUNAAN.</p>
                            <?php
                            $username=$_SESSION['user']['username'];
                            include_once("../koneksi.php");
                            $query=mysqli_query($koneksi, "SELECT nim, sp FROM pemesanan WHERE nim='$username'");
                            $row=mysqli_num_rows($query);
                            if ($row>0) {
                                $data=mysqli_fetch_array($query);
                                if ($data['sp']=='-') {
                                    ?>
                                    <hr>
                                    <div class="alert alert-danger">STATUS PEMBAYARAN : <b>BELUM BAYAR</b></div>

                                    <?php
                                }
                                if ($data['sp']=='LUNAS') {
                                    ?>
                                    <hr>
                                    <div class="alert alert-success">STATUS PEMBAYARAN : <b> LUNAS</b></div>
                                    <?php                       
                                }                             
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <b>v3.3.0</b>
                                    <small>25 Januari 2020</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>- Penambahan Fitur Pesan Kaos dan ID Card</p>
                                <p></p>
                            </div>
                        </div>
                       <div class="card">
                            <div class="header">
                                <h2>
                                    <b>v3.0.0</b>
                                    <small>20 Januari 2020</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>- Perubahan Menjadi Web Atribut FOSTI UMS</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <b>v2.1.0</b>
                                    <small>22 Januari 2019</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>- Penambahan Sistem Alert PopUp</p>
                                <p>- Penambahan Sistem Konfirmasi Pembayaran</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <b>v2.0.0</b>
                                    <small>20 January 2019</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>- Penambahan Sistem Login & Logout</p>
                                <p>- Penambahan Sistem Edit Pemesanan</p>
                                <p>- Penambahan Cetak Pemesanan</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- MODAL -->
    <!-- For Material Design Colors -->
    <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Pemesanan Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p style="text-align: justify;">Pemesanan Berhasil !! Silahkan cek kembali data anda di menu pemesanan. Apabila data yang anda inputkan salah anda dapat mengedit kembali atau data yang anda inputkan benar maka tidak perlu mengedit data.</p>
                    <p style="text-align: justify;">Lakukan Pembayaran kepada Divisi Hubungan Publik. Anda bisa membaca tata cara pembayaran di menu PENGGUNAAN terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mdModalEdited" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Edit Pemesanan Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p style="text-align: justify;">Edit Pemesanan Berhasil !! Silahkan cek kembali data anda di menu pemesanan. Apabila data yang anda Edit salah anda dapat mengedit kembali atau data yang anda Edit benar maka tidak perlu mengedit data.</p>
                    <p><b>Edit Data hanya berlaku sampai tanggal 30 Januari 2020. setelah tanggal terebut tidak di perkenankan edit data.</b></p>
                    <p style="text-align: justify;">Lakukan Pembayaran kepada Divisi Hubungan Publik. Anda bisa membaca tata cara pembayaran di menu PENGGUNAAN terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Sweetalert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <?php 
        if (isset($_GET['sukses'])) {
            ?>
            <script type="text/javascript">                
                $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + 'light-blue');
                $('#mdModal').modal('show');
            </script>
            <?php
        }
        ?>
        <?php
        if (isset($_GET['batal'])) {
            echo "<script type='text/javascript'>
                swal({
                title: 'Pembatalan pembelian berhasil!',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
        }
        if (isset($_GET['edited'])) {
            ?>
            <script type="text/javascript">                
                $('#mdModalEdited .modal-content').removeAttr('class').addClass('modal-content modal-col-' + 'light-red');
                $('#mdModalEdited').modal('show');
            </script>
            <?php
        }
    ?>
</body>

</html>
<?php
}
?>