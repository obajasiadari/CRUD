<?php 
$koneksi = mysqli_connect("localhost","root","","perkuliahan");

// ngecek koneksi
if(mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>