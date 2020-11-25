<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect('localhost','id15500073_root','O1K1#C+38-(/ErxL','id15500073_universitas');

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
