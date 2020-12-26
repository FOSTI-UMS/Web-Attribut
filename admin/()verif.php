<?php 
session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
	if (isset($_GET['nim'])) {
		include("../koneksi.php");
		$nim=mysqli_escape_string($koneksi, $_GET['nim']);
		$query=mysqli_query($koneksi, "SELECT user.nama, pemesanan.* FROM user, pemesanan WHERE user.username='$nim' AND pemesanan.nim='$nim'");
		$row=mysqli_num_rows($query);
		if ($row == 1) {
			$data=mysqli_fetch_array($query);
			if ($data['sp']=='-') {
				$query=mysqli_query($koneksi, "UPDATE pemesanan SET sp='LUNAS' WHERE nim='$nim'");
				if ($query) {
					echo "<script type='text/javascript'>
							window.location.href='./verifikasi?pesan=sukses';
						  </script>";
				}
			}
			if ($data['sp']=='TERBAYAR') {
				echo "<script type='text/javascript'>
						window.location.href='./verifikasi?pesan=terbayar';
					  </script>";
			}
		} else {
			echo "<script type='text/javascript'>
					window.location.href='./verifikasi?pesan=error';
				  </script>";
		}
	}
}
?>