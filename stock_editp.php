<?php include('server.php'); ?>
<?php
$name = $_POST['name'];
$ptice = $_POST['ptice'];
$userlevel = $_POST['userlevel'];
$img = $_POST['img'];
$id = $_POST['id'];

if(isset($_FILES['img'])){
$target_dir = "img/";
$target_file = $target_dir .$img ;

// Check if image file is a actual image or fake image

echo $target_file;
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    //echo "Sorry, there was an error uploading your file.";
  }
}
  $qusry = " UPDATE phone SET phone_names='$name',phone_detail='$userlevel',phone_price='$ptice',
  phone_amount='',phone_image='$img' WHERE phone_id=$id ";
  $result = mysqli_query($conn,$qusry); 
  header("Location: stock.php");
?>
