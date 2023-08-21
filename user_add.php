<?php include('server.php'); ?>
<?php print_r($_POST); 
$img = $_POST['img'];
$id = $_POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$ptice = $_POST['ptice'];
$userlevel = $_POST['userlevel'];
$user = $_SESSION['user'];

$user_check = " INSERT INTO mobile(mb_id, mb_names, mb_detail, mb_price, mb_amount, mb_image,mb_status, user) VALUES 
('','$name','$userlevel','$ptice','','$img','รอการยืนยัน','$user') ";
$result = mysqli_query($conn,$user_check);

header("Location: user_page.php");






?>
<input type ="hidden"  name = "img" value = "<?php echo $data['phone_image'];?>" readonly ><br>
&nbsp;&nbsp;&nbsp;&nbsp;<img src ="./img/<?php echo $data['phone_image']?>" while="200"height="250"> <br><br><br>
<label>ID</label><input type ="text"  name = "id" value = "<?php echo $data['phone_id'];?>" readonly ><br>
<label for = "username">ชื่อ</label><input type="text" placeholder= "กรอกชื่อคุณ" name="username" value = "<?php echo $_SESSION['user'];?> " readonly > <br>
<label>โทรศัพท์</label><input type ="text"  name = "name" value = "<?php echo $data['phone_names'];?>" readonly ><br>
<label>ราคา</label><input type ="text"  name = "ptice" value = "<?php echo $data['phone_price'];?>" readonly><br>
<label>รายละเอียด</label><input type ="text" name = "userlevel" value = "<?php echo $data['phone_detail'];?>" readonly><br>