<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['pesan'])){

    // ambil data dari formulir
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
        
        // cek apakah user telah melakukan pemesanan atau belum
        $query=mysqli_query($koneksi, "SELECT nim FROM pemesanan WHERE nim='$nim'");
        $row=mysqli_num_rows($query);
        if ($row == 0) {
            echo "<script>window.location='./pemesanan';</script>";
        } else {
            if ($pdh=="Beli") {
                $cek=mysqli_query($koneksi, "SELECT * FROM pdh WHERE nim='$nim'");
                $cekpdh=mysqli_num_rows($cek);
                if ($cekpdh>0) {
                    $datapdh = mysqli_query($koneksi, "UPDATE pdh SET nim='$nim', nickname='$nick', size='$ukupdh' WHERE nim='$nim'");
                } else {
                    $datapdh = mysqli_query($koneksi, "INSERT INTO pdh (nim, nickname, size) VALUE ('$nim', '$nick', '$ukupdh')");
                }
            }else {
                $datapdh = mysqli_query($koneksi, "DELETE FROM pdh WHERE nim='$nim'");
            }
            if ($kaos=="Beli") {
                $cek=mysqli_query($koneksi, "SELECT * FROM kaos WHERE nim='$nim'");
                $cekkaos=mysqli_num_rows($cek);
                if ($cekkaos>0) {
                    $datakaos = mysqli_query($koneksi, "UPDATE kaos SET nim='$nim', ukuran='$ukukaos', lengan='$lengan' WHERE nim='$nim'");
                } else {
                    $datakaos = mysqli_query($koneksi, "INSERT INTO kaos (nim, ukuran, lengan) VALUE ('$nim', '$ukukaos', '$lengan')");
                }
            }else {
                $datakaos = mysqli_query($koneksi, "DELETE FROM kaos WHERE nim='$nim'");
            }
            if ($pdh=="Tidak" AND $idcard=="Tidak" AND $kaos=="Tidak"){
                $batal = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE nim='$nim'");
                echo "<script>window.location='./?batal';</script>";
            } else {
                // buat query PEMESANAN
                $sql = "UPDATE pemesanan SET pdh='$pdh', idcard='$idcard', kaos='$kaos', total='$total' WHERE nim='$nim'";
                $query = mysqli_query($koneksi, $sql);
                if ($query) {
                    // kalau berhasil alihkan ke halaman pemesanan
                    echo "<script>window.location='./?edited';</script>";
                } else {
                    echo "<script>window.location='./pemesanan?gagal';</script>";
                }
            }   
        }
    } else {
        echo "<script>window.location='./';</script>";
    }
}
?>