<?php 

include 'connect.php';

$bInfo = $_POST['bookmarkInfo'];
$bUser = $_POST['bookmarkUser'];



$sql = 'INSERT INTO tbl_bookmark VALUE (null, "'.$bInfo.'", "'.$bUser.'")';

$query = mysqli_query($conn, $sql);

if ($query){   
    header('location: isiBookmark.php');
} else{
    echo 'Register Fail';
}
