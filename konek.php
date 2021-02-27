<?php
//koneksi ke database mysql, pada bagian mysqli_connect di isi sesuai data server,username,password, dan database
$koneksi = mysqli_connect("localhost","root","","crud");

//mengecek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>