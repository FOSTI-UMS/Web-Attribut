<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['pesan'])){

        // ambil data dari formulir
        $nim = $_SESSION['user']['username'];
        $nick = mysqli_escape_string($koneksi, $_POST['nickname']);
        $pdh = mysqli_escape_string($koneksi, $_POST['pdh']);
        $idcard = mysqli_escape_string($koneksi, $_POST['idcard']);
        $kaos = mysqli_escape_string($koneksi, $_POST['kaos']);
        $ukupdh = mysqli_escape_string($koneksi, $_POST['ukupdh']);
        $ukukaos = mysqli_escape_string($koneksi, $_POST['ukukaos']);
        $lengan = mysqli_escape_string($koneksi, $_POST['lengan']);
        $total = mysqli_escape_string($koneksi, $_POST['total']);;
        $sp="-";
        
        // cek apakah user telah melakukan pemesanan atau belum
        $query=mysqli_query($koneksi, "SELECT nim FROM pemesanan WHERE nim='$nim'");
        $row=mysqli_num_rows($query);
        if ($row > 0) {
            echo "<script>window.location='./pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "INSERT INTO pemesanan (nim, pdh, idcard, kaos, total, sp) VALUE ('$nim', '$pdh', '$idcard', '$kaos','$total','$sp')";
            $data = mysqli_query($koneksi, $sql);

            if ($pdh=="Beli") {
                $datapdh = mysqli_query($koneksi, "INSERT INTO pdh (nim, nickname, size) VALUE ('$nim', '$nick', '$ukupdh')");
            }else {
                $datapdh = mysqli_query($koneksi, "DELETE FROM pdh WHERE nim='$nim'");
            }

            if ($kaos =="Beli") {
                $datakaos = mysqli_query($koneksi, "INSERT INTO kaos (nim, ukuran, lengan) VALUE ('$nim', '$ukukaos', '$lengan')");
            }else {
                $datakaos = mysqli_query($koneksi, "DELETE FROM kaos WHERE nim='$nim'");
            }


            // apakah query simpan berhasil?
            if ($data) {
                // kalau berhasil alihkan ke halaman pemesanan
                echo "<script>window.location='./?sukses';</script>";
                }
            else {
                echo "<script>window.location='./pemesanan?gagal';</script>";
            }
        }
    } else {
        echo "<script>window.location='./';</script>";
    }
}
?>