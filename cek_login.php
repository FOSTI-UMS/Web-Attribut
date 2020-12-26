<?php 
// mengaktifkan session pada php
session_start();
if(!isset($_SESSION['admin']) OR empty($_SESSION['user'])){
	// menghubungkan php dengan koneksi database
	include 'koneksi.php';

	// menangkap data yang dikirim dari form login
	$username = mysqli_escape_string($koneksi, $_POST['username']);
	$password = mysqli_escape_string($koneksi, $_POST['password']);


	// menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);

	// cek apakah username dan password di temukan pada database
	if($cek > 0){

		$data = mysqli_fetch_assoc($login);

		// cek jika user login sebagai admin
		if($data['level']=="admin"){
			$_SESSION['admin']=array(
				'username'=>$data['username'],
				'password'=>$data['password'],
				'nama'=>$data['nama'],
				'level'=>$data['level']
			);
			echo "<script>window.location='admin/';</script>";

		// cek jika user login sebagai user
		}else if($data['level']=="user"){
				$_SESSION['user']=array(
					'username'=>$data['username'],
					'password'=>$data['password'],
					'angkatan'=>$data['angkatan'],
					'nama'=>$data['nama'],
					'level'=>$data['level']
				);
				echo "<script>window.location='user/';</script>";	
		}else{
			// alihkan ke halaman login kembali
			echo "window.location='./?pesan=gagal';</script>";
		}	
	}else{
		echo "<script>window.location='./?pesan=gagal';</script>";
	}

} else {
	if (isset($_SESSION['admin'])) {
        echo "<script>window.location='admin/';</script>";
    } elseif (isset($_SESSION['user'])) {
        echo "<script>window.location='user/';</script>";
    }
}

?>