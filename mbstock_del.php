<?php include('server.php'); ?>
<?php print_r($_POST); 
print_r($_GET); 
$id = $_GET['del'];
$query = " DELETE FROM mobile WHERE mb_id=$id ";
$result = mysqli_query($conn,$query);

header("Location: mbstock.php");



?>