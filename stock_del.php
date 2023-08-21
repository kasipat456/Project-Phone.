<?php include('server.php'); ?>
<?php print_r($_POST); 
$id = $_GET['del'];


$user_check = " DELETE FROM phone WHERE phone_id=$id ";
$result = mysqli_query($conn,$user_check);

header("Location: stock.php");






?>