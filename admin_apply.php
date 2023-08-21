<?php include('server.php'); ?>
<?php
   session_start();
?>

<meta charset="UTF-8">
<?php
$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$Email = $_REQUEST['email'];
$userlevel= $_REQUEST['userlevel'];
$password = $_REQUEST['password'];
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 
$sql = "DELETE FROM user WHERE username='$id', '$username', '$Email', '$userlevel', '$password' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'admim_page.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>

