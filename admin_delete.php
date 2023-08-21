<?php include('server.php'); ?>
<?php
   //session_start();
?>
<?php
if (isset($_POST) && !empty($_POST)){
	//print_r($_POST);
	$id = $_POST ["id"];
	$sql = "DELETE FROM user WHERE id = '$id'";
	$query = mysqli_query($conn,$sql);
	if ($query){
		header("Location:admim_page.php");
	}else{
		echo'ลบข้อมูลผิดพลาด';
	}
}
?>
<ta align="center"> 
	<br>
		<br>
			<br>
				<br>
					<br>
						<br>
							<br>
								<br>
									<br>
<form action ="" method="post">
	<input type = "hidden"  name="id" value ="<?=$_GET['id']?>">
	<label><h1>"<font color='#FF0000'> ยืนยันการลบข้อมูล</font>"</h1></label><br>
	<input type ="submit" value ="ยืนยัน">
	<button><a href = "admim_page.php">ยกเลิก</a></button>
</form>
</ta>
</style>
    <body style="background-color:  #F5EED8">
</body>
<style>
input {
      width: 60px;
      margin-bottom: 10px;
    }
	button {
      width: 60px;
      margin-bottom: 10px;
    }
	</style>