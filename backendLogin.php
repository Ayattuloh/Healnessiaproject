<?php 

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'SELECT * from tbl_user WHERE Username = "'.$username.'" AND Password = "'.$password.'"';

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query)){   
    $row = mysqli_fetch_object($query);
    $_SESSION['Role'] = $row->Role;
    $_SESSION['Username'] = $row->Username;
    $_SESSION['idUser'] = $row->idUser;
} else{
    echo 'tidak adaaaa';
}

header('location: index.php');

?>