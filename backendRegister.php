<?php 

include 'connect.php';

$username = $_POST['Username'];
$password = $_POST['Password'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Date = $_POST['Date'];
$jenisKelamin = $_POST['jenis_kelamin'];
$NoHP = $_POST['NoHP'];
$Alamat = $_POST['Alamat'];
$Umur = $_POST['Umur'];


$sql = 'INSERT INTO tbl_user VALUE (null, "'.$username.'", "'.$password.'", "'.$Nama.'", "'.$Alamat.'", "'.$NoHP.'", "'.$Email.'", "'.$Umur.'", "'.$jenisKelamin.'", "'.$Date.'", "User")';;

$query = mysqli_query($conn, $sql);

if ($query){   
    echo '<script>alert("Registrasi Berhasil ! Silahkan melakukan Login")</script>';
    header('location: login.php');
} else{
    echo 'Register Fail';
}
