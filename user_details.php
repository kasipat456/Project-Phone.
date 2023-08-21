<?php include('server.php'); ?>
<body style="background-color:  #F5EED8">
<?php
$id = $_GET['id'];
$query = "SELECT *  FROM phone WHERE phone_id = '$id'";
//echo $_SESSION['user'];
$data = mysqli_fetch_assoc(mysqli_query($conn,$query));
?>
<ta align="center"> 
    <br>
        <br>
            <br>
				<br>
					<br>
						<br>					
<h1>ข้อมูลโทรศัพท์</h1>
<form action = "user_add.php" method = "POST">
<input type ="hidden"  name = "img" value = "<?php echo $data['phone_image'];?>" readonly ><br>
&nbsp;&nbsp;&nbsp;&nbsp;<img src ="./img/<?php echo $data['phone_image']?>" while="200"height="250"> <br><br><br>
<label>ID</label><input type ="text"  name = "id" value = "<?php echo $data['phone_id'];?>" readonly ><br>
<label for = "username">ชื่อ</label><input type="text" placeholder= "กรอกชื่อคุณ" name="username" value = "<?php echo $_SESSION['user'];?> " readonly > <br>
<label>โทรศัพท์</label><input type ="text"  name = "name" value = "<?php echo $data['phone_names'];?>" readonly ><br>
<label>ราคา</label><input type ="text"  name = "ptice" value = "<?php echo $data['phone_price'];?>" readonly><br>
<label>รายละเอียด</label><input type ="text" name = "userlevel" value = "<?php echo $data['phone_detail'];?>" readonly><br>
    <button type = "submit">จอง</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href= user_page.php ><input type="button" value= กลับ style="width:90px;"></a>
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
      width: 100px;
      margin-bottom: 10px;
    }
    input {
      margin-bottom: 20px;
    }

    </style>