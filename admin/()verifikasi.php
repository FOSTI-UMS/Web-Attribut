<?php 
session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
	if (isset($_POST['nim'])) {
		include("../koneksi.php");
		$nim=mysqli_escape_string($koneksi, $_POST['nim']);
		$query=mysqli_query($koneksi, "SELECT user.nama, pemesanan.* FROM user, pemesanan WHERE user.username='$nim' AND pemesanan.nim='$nim'");
		$row=mysqli_num_rows($query);
		if ($row == 1) {
			$data=mysqli_fetch_array($query);
			if ($data['sp']=='-') {
			?>
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM VERIFIKASI #2
                                <small>Pastikan Data dibawah ini Benar...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <pre>--Data Pemesanan Atribut--<br>Nama     : <?php echo $data['nama']; ?><br>Nim      : <?php echo $data['nim']; ?><br>PDH      : <?php echo $data['pdh']; ?><br>ID Card  : <?php echo $data['idcard']; ?><br>Kaos     : <?php echo $data['kaos']; ?><br>Total    : <?php echo $data['total']; ?></pre>
                                    <a href="()verif?nim=<?php echo $data['nim']; ?>" class="btn btn-info waves-effect">
                                        <i class="material-icons">check</i>
                                        <span>VERIFIKASI PEMBAYARAN</span>
                                    </a>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			} 
			if ($data['sp']=='TERBAYAR') {
			?>
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM VERIFIKASI #2
                                <small>Pastikan Data dibawah ini Benar...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <b style="color:green">ANGGOTA TELAH TERVERIFIKASI MELAKUKAN PEMBAYARAN...</b>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			}
		} else {
            ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FORM VERIFIKASI #2
                                <small>Pastikan Data dibawah ini Benar...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <b style="color:red">ANGGOTA TIDAK DITEMUKAN...</b>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
	}
}
?>