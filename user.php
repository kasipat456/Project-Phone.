
<?php 
 include('server.php'); 

if (isset($_POST['username'])){
	 $username = $_POST['username'];
     $password = $_POST['password'];
	 $passwordenc = md5 ($password);

	 $qusry = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

	$result = mysqli_query($conn,$qusry);
	
	if (mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);

		$_SESSION['userid'] = $row ['id'];
		$_SESSION['user'] = $row ['username'];
		$_SESSION['userlevel'] = $row ['userlevel'];

		if ($_SESSION['userlevel'] == 'A') {
            header("Location: admim_page.php");
		}
		if ($_SESSION['userlevel'] == 'U') {
            header("Location: user_page.php");
			
		}
	 } else {
         echo "<script>alert('User หรือ Pssword ไม่ถูกต้อง'); </script>";
	 } 
	 /*else {
		header("Location: login.php");
	}*/
}
?>