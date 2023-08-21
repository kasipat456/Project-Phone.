<?php include('server.php'); ?>
<?php
//print_r($_POST); แสดงค่ารัน
$username = $_POST['username'];
$Email = $_POST['email'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

$user_check = "SELECT * FROM user WHERE username = '$username'LIMIT 1";
$result = mysqli_query($conn,$user_check);
$user = mysqli_fetch_assoc($result);

if ($user['username']===$username){
    echo "<script>alert('ชื่อผู้ใช้มีอยู่ระบบแล้ว');</script>";
}
else {
    $passwordenc = md5($password);

    $query = "INSERT INTO user (username, email, password, userlevel) 
                    VALUE ('$username', '$Email', '$passwordenc', '$userlevel')";
                   $result = mysqli_query($conn,$query);
    if ($result) {
        $_SESSION['success'] ="lnsert user successfully";
        header("Location: admim_page.php");
    }
        else {
            $_SESSION['error'] ="somethine wnt wrong";
            header("Location: admim_page.php");
        }
    
    }

?>