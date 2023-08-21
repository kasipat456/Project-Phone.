<?php include('server.php'); ?>
<?php
$id = $_POST['id'];
$status = $_POST['status'];
echo $status;
  $qusry = " UPDATE mobile SET mb_status='$status' WHERE mb_id=$id ";
  $result = mysqli_query($conn,$qusry); 
  header("Location: mbstock.php");
?>
