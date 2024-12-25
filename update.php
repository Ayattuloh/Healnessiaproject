<?php 

include 'connect.php';

$username = $_POST['Username'];
$password = $_POST['Password'];
$Nama = $_POST['Nama'];
$Email = $_POST['email'];
$Date = $_POST['tanggalLahir'];
$jenisKelamin = $_POST['jenis_kelamin'];
$NoHP = $_POST['noHP'];
$Alamat = $_POST['Alamat'];
$Umur = $_POST['Umur'];


$sql = 'UPDATE tbl_user SET Username="'.$username.'", Password="'.$password.'", Nama="'.$Nama.'", Alamat="'.$Alamat.'", noHP="'.$NoHP.'", email="'.$Email.'", Umur="'.$Umur.'", jenisKelamin="'.$jenisKelamin.'", tanggalLahir="'.$Date.'" WHERE idUser = '.$_SESSION['idUser'].'';

$query = mysqli_query($conn, $sql);

if ($query){   
    echo '<script>alert("Registrasi Berhasil ! Silahkan melakukan Login")</script>';
    header('location: profil.php');
} else{
    echo 'Register Fail';
}
