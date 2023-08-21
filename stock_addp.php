<?php include('server.php'); ?>
<?php
$name = $_POST['name'];
$ptice = $_POST['ptice'];
$userlevel = $_POST['userlevel'];



$target_dir = "img/";
$target_file = $target_dir . $_FILES["img"]["name"];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image


$qusry = "SELECT * FROM phone order by phone_id desc limit 1";
$result = mysqli_query($conn,$qusry); 
foreach($result AS $data){
    $id=$data['phone_id']+1;
}
    
$target_file= $target_dir .$id.".".  $imageFileType;
$img= $id.".".  $imageFileType;
echo $target_file;
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    //echo "Sorry, there was an error uploading your file.";
  }
  $qusry = "INSERT INTO phone(phone_id, phone_names, phone_detail, phone_price, phone_amount, phone_image) VALUES 
  ('','$name','$userlevel','$ptice','','$img')";
  $result = mysqli_query($conn,$qusry); 
  header("Location: stock.php");
?>
