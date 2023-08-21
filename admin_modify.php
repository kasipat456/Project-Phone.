<?php include('server.php'); ?>
<body style="background-color:  #F5EED8">
<?php
$id = $_GET['id'];
$query = "SELECT id, username, password, email, userlevel  FROM user WHERE id = '$id'";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
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
<h1>แก้ไข้ข้อมูล</h1>
<form action = "update-process.php" method = "POST">
<input type ="text"  name = "id" value = "<?php echo $row['id'];?>" readonly hidden><br>   
<label>ผู้ใช้งาน</label><input type ="text" placeholder= "กรอกชื่อ" name = "username" value = "<?php echo $row['username'];?>" required><br>
<label>อีเมล</label><input type ="text" placeholder= "กรอกอีเมล" name = "email" value = "<?php echo $row['email'];?>" required><br>
<label>ตําแหน่ง</label><input type ="text" placeholder= "กรอกตำแหน่ง" name = "userlevel" value = "<?php echo $row['userlevel'];?>" required><br>
<?php echo "<font color='#FF0000'>* กรอกข้อมูล A=แอดมิน U=ผู้ใช้งาน กรุณาพิมพ์ AกับU *</font>";?><br>
    <button type = "submit">แก้ไข</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href= admim_page.php ><input type="button" value= กลับ style="width:90px;"></a>
</form>
</ta>
<style>
     button {
      display: inline-block;
      width: 80px;
      margin-bottom: 10px;
    }
    label {
      display: inline-block;
      width: 60px;
      margin-bottom: 10px;
    }
    input {
      margin-bottom: 20px;
    }
    </style>