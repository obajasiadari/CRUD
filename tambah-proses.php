<?php
//konektor database
include 'koneksi.php';

//menangkapdata yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];

//menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('$nama','$nim','')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>