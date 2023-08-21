<?php include('server.php'); ?>
<?php
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$userlevel = $_POST['userlevel'];

$query1 = "UPDATE user SET username = '$username', email = '$email', userlevel = '$userlevel'  WHERE id = '$id'";

if (mysqli_query($conn, $query1) === TRUE){
    die(header('Location: admim_page.php'));
}else{
    echo 'การแก้ไขข้อมูลผิดพลาด';
    mysqli_close($conn);
    
}
?>