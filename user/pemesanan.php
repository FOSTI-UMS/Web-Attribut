<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    $nim=$_SESSION['user']['username'];
    include_once("../koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ATRIBUT FOSTI - Halaman Pemesanan Atribut</title>
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

    <!-- Bootstrap Spinner Css -->
    <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet"/>

    <!-- sweetalert2 -->
    <link href="../assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />

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
            <p>Tunggu Sebentar...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="./">PENGGUNA - WEB ATRIBUT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
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
                    <li class="active">
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
                    &copy; 2020 <a href="https://fosti.ums.ac.id">FOSTI UMS</a>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-green">
                                <h2 class="">FORM PEMESANAN ATRIBUT FOSTI UMS</h2>
                                <small>Silahkan sesuaikan kebutuhan yang ingin dipesan</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                $query=mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nim='$nim'");
                $dpdh=mysqli_query($koneksi, "SELECT * FROM pdh WHERE nim='$nim'");
                $dk=mysqli_query($koneksi, "SELECT * FROM kaos WHERE nim='$nim'");
                $row=mysqli_num_rows($query);
                if ($row>0) { 
                    $data=mysqli_fetch_array($query);
                    $datapdh=mysqli_fetch_array($dpdh);
                    $datakaos=mysqli_fetch_array($dk);
                ?>
                    <div id="pemesanan" class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form id="form_validation" action="update.php" method="POST">
                        <div class="card">
                            <div class="header">
                                <h2 class="">FORM EDIT PEMESANAN ATRIBUT</h2>
                                <small>Edit Form dibawah ini apablia pemesanan anda ada yang salah</small>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Informasi Pribadi</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nim" class="form-control" placeholder="<?php echo $_SESSION['user']['username'] ?>" disabled="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" class="form-control" placeholder="<?php echo $_SESSION['user']['nama'] ?>" disabled="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="angkatan" class="form-control" placeholder="FOSTI <?php echo $_SESSION['user']['angkatan'] ?>" disabled="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="card-inside-title">Pilihan Pemesanan:</h2>
                                <?php if ($_SESSION['user']['angkatan']==2018){ ?>
                                <div class="checkbox-group_edit">
                                <input type="hidden" name="pdh" value="Tidak"/>
                                <input type="checkbox" name="pdh" id="pdh" value="Beli" <?php if ($data['pdh'] == 'Beli') echo "checked='checked'"; ?> class="filled-in chk-col-green" onclick="cekpdh()">
                                <label for="pdh">PDH</label>
                                <input type="hidden" name="idcard" value="Tidak"/>
                                <input type="checkbox" <?php if ($data['idcard'] == 'Beli') echo "checked='checked'"; ?> name="idcard" id="idcard" value="Beli" class="filled-in chk-col-green" onclick="cekidcard()">
                                <label for="idcard">ID Card</label>
                                <input type="hidden" name="kaos" value="Tidak"/>
                                <input type="checkbox" <?php if ($data['kaos'] == 'Beli') echo "checked='checked'"; ?> name="kaos" id="kaos" value="Beli" class="filled-in chk-col-green" onclick="cekkaos()" disabled>
                                <label for="kaos">Kaos</label>
                                </div>
                                <?php }
                                else { ?>
                                <div class="checkbox-group_edit">
                                <input type="hidden" name="pdh" value="Beli"/>
                                <input type="checkbox" name="pdh" id="pdh" value="Beli" class="filled-in chk-col-green" onclick="cekpdh()" checked="" disabled>
                                <label for="pdh">PDH</label>
                                <input type="hidden" name="idcard" value="Beli"/>
                                <input type="checkbox" name="idcard" id="idcard" value="Beli" class="filled-in chk-col-green" onclick="cekidcard()" checked="" disabled>
                                <label for="idcard">ID Card</label>
                                <input type="hidden" name="kaos" value="Tidak"/>
                                <input type="checkbox" name="kaos" id="kaos" value="Beli" class="filled-in chk-col-green" onclick="cekkaos()" disabled>
                                <label for="kaos">Kaos</label>
                                </div>
                                <?php } ?>

                                    <label style="color: #F44336; font-size: 12px; font-weight: normal">Untuk sementara kaos belum bisa dipesan.</label>

                                <div id="formpdh" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan PDH</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                <p>
                                                    Nickname
                                                </p>
                                                    <input type="text" required placeholder="John Doe" name="nickname" class="form-control" value="<?php echo $datapdh['nickname']; ?>"  />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Ukuran
                                                </p>
                                                <select id="nambah1" name="ukupdh" class="form-control show-tick" onchange="nambah()">
                                                    <?php $cek=mysqli_num_rows($dpdh);
                                                    if ($cek>0) {
                                                        echo "<option value='".$datapdh['size']."'>".$datapdh['size']." ( Ukuran Sebelumnya )</option>";
                                                    }?>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL (Tambah 5k)</option>
                                                    <option value="XXXL">XXXL (Tambah 5k)</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="hargapdh" name="" class="form-control" placeholder="Rp. 100.000,-" disabled=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="formidcard" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan ID Card</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="" class="form-control" placeholder="Rp. 20.000,-" disabled=""/>
                                        </div>
                                    </div>
                                </div>

                                <div id="formkaos" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan Kaos</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Ukuran
                                                </p>
                                                <select name="ukukaos" class="form-control show-tick">
                                                    <?php $cek=mysqli_num_rows($dk);
                                                    if ($cek>0) {
                                                        echo "<option value='".$datakaos['ukuran']."'>".$datakaos['ukuran']." ( Ukuran Sebelumnya )</option>";
                                                    }?>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                    <option value="XXXL">XXXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Panjang/Pendek
                                                </p>
                                                <select name="lengan" class="form-control show-tick">
                                                    <?php
                                                    if ($cek>0) {
                                                        echo "<option value='".$datakaos['lengan']."'>".$datakaos['lengan']." ( Pilihan Sebelumnya )</option>";
                                                    }?>
                                                    <option value="Panjang">Panjang</option>
                                                    <option value="Pendek">Pendek</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="" class="form-control" placeholder="Rp. 50.000,-" disabled=""/>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="form-line">
                                        <b style="color:black">Total</b>
                                        <input style="color:black; font-weight:bold" type="text" id="total" class="form-control" placeholder="" value="<?php echo $data['total'] ?>" disabled=""/>
                                        <input type="hidden" name="total" id="total1" class="form-control" value="<?php echo $data['total'] ?>"/>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-9">
                                    </div>
                                    <div class="col-sm-3">
                                    <button type="submit" id="pesan" name="pesan" class="btn btn-success waves-effect">
                                        <i class="material-icons">send</i>
                                        <span> EDIT PESANAN </span>
                                    </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                <div id="pemesanan" class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form id="form_validation" action="beli" method="POST">
                        <div class="card">
                            <div class="header">
                                <h2 class="">FORM PEMESANAN ATRIBUT</h2>
                                <small>Isi form dibawah untuk melakukan pemesanan ATRIBUT FOSTI UMS</small>
                            </div>
                            <div class="body">
                                <h2 class="card-inside-title">Informasi Pribadi</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nim" class="form-control" placeholder="<?php echo $_SESSION['user']['username'] ?>" disabled="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" class="form-control" placeholder="<?php echo $_SESSION['user']['nama'] ?>" disabled="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="angkatan" class="form-control" placeholder="FOSTI <?php echo $_SESSION['user']['angkatan'] ?>" disabled="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="card-inside-title">Pilihan Pemesanan:</h2>
                                <?php if ($_SESSION['user']['angkatan']==2018){ ?>
                                <div class="checkbox-group">
                                <input type="hidden" name="pdh" value="Tidak"/>
                                <input type="checkbox" name="pdh" id="pdh" value="Beli" class="filled-in chk-col-green" onclick="cekpdh()">
                                <label for="pdh">PDH</label>
                                <input type="hidden" name="idcard" value="Tidak"/>
                                <input type="checkbox" name="idcard" id="idcard" value="Beli" class="filled-in chk-col-green" onclick="cekidcard()">
                                <label for="idcard">ID Card</label>
                                <input type="hidden" name="kaos" value="Tidak"/>
                                <input type="checkbox" name="kaos" id="kaos" value="Beli" class="filled-in chk-col-green" onclick="cekkaos()" disabled>
                                <label for="kaos">Kaos</label>
                                </div>
                                <?php }
                                else { ?>
                                <div class="checkbox-group">
                                <input type="hidden" name="pdh" value="Beli"/>
                                <input type="checkbox" name="pdh" id="pdh" value="Beli" class="filled-in chk-col-green" onclick="cekpdh()" checked="" disabled>
                                <label for="pdh">PDH</label>
                                <input type="hidden" name="idcard" value="Beli"/>
                                <input type="checkbox" name="idcard" id="idcard" value="Beli" class="filled-in chk-col-green" onclick="cekidcard()" checked="" disabled>
                                <label for="idcard">ID Card</label>
                                <input type="hidden" name="kaos" value="Tidak"/>
                                <input type="checkbox" name="kaos" id="kaos" value="Beli" class="filled-in chk-col-green" disabled onclick="cekkaos()">
                                <label for="kaos">Kaos</label>
                                </div>
                                <?php } ?>

                                    <label style="color: #F44336; font-size: 12px; font-weight: normal">Untuk sementara kaos belum bisa dipesan.</label>

                                <div id="formpdh" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan PDH</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                <p>
                                                    Nickname
                                                </p>
                                                    <input type="text" name="nickname" class="form-control" placeholder="John Doe"  required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Ukuran
                                                </p>

                                                <select id="nambah1" name="ukupdh" class="form-control show-tick" onchange="nambah()">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL (Tambah 5k)</option>
                                                    <option value="XXXL">XXXL (Tambah 5k)</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="hargapdh" name="" class="form-control" placeholder="Rp. 100.000,-" disabled=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="formidcard" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan ID Card</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="" class="form-control" placeholder="Rp. 20.000,-" disabled=""/>
                                        </div>
                                    </div>
                                </div>

                                <div id="formkaos" style="display:block">
                                    <br>
                                    <h2 class="card-inside-title">Form Pemesanan Kaos</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Ukuran
                                                </p>

                                                <select name="ukukaos" class="form-control show-tick">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                    <option value="XXXL">XXXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="custom-select">
                                                <p>
                                                    Panjang/Pendek
                                                </p>
                                                <select name="lengan" class="form-control show-tick">
                                                    <option value="Panjang">Panjang</option>
                                                    <option value="Pendek">Pendek</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="" class="form-control" placeholder="Rp. 50.000,-" disabled=""/>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="form-line">
                                        <b style="color:black">Total</b>
                                        <input style="color:black; font-weight:bold" type="text" id="total" class="form-control" placeholder="" value="Rp. 0,-" disabled=""/>
                                        <input type="hidden" name="total" id="total1" class="form-control" value="Rp. 0,-"/>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-9">
                                    </div>
                                    <div class="col-sm-3">
                                    <button type="submit" id="pesan" name="pesan" class="btn btn-success waves-effect">
                                        <i class="material-icons">send</i>
                                        <span> PESAN </span>
                                    </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        </div>
                    </div>

                <?php } ?>
                  </div>  
            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- JS Pesan Atribut -->
    <script src="../assets/js/pesan.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../assets//plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morrisjs/morris.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets//plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>

    <!-- Sweetalert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Checkbox required -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pesan').click(function() {
            checked = $(".checkbox-group :checkbox:checked").length;
            // edit = $(".checkbox-group_edit :checkbox:checked").length;
            <?php
                if ($row==0) { 
            ?>
            if(!checked) {
                swal({
                    title: 'Harap Centang Minimal 1!',
                    type: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#4caf50',
                    reverseButtons: true,
                    focusConfirm: true,
                });
                return false;
            } 
            <?php } else { ?> 
            // if (!edit) {
                <?php
                    // Hapus data pemesanan
                    // $nim = $_SESSION['user']['username'];
                    // $data = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE nim='$nim'");
                ?>
            // }
            <?php } ?>
            });
        });
    </script>
    <?php
    if(isset($_GET['gagal'])){
        echo "<script type='text/javascript'>
            swal({
                title: 'Harap Coba Lagi Nanti!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
            });
            </script>";
        }
    ?>
</body>

</html>
<?php 
}
?>