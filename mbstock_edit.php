<?php include('server.php'); ?>
<body style="background-color:  #F5EED8">
<?php


?>
<ta align="center"> 
    <br>
        <br>
            <br>
				<br>
					<br>
						<br>					
<h1>ข้อมูลโทรศัพท์</h1>
<form action = "mbstock_editp.php" method = "POST" enctype="multipart/form-data">

<?php
$id= $_GET['edit'];
$qusry = "SELECT * FROM mobile WHERE mb_id=$id";
$result = mysqli_query($conn,$qusry); 
foreach($result AS $data){
    $id=$data['mb_id']+1;
}
?>

<input type ="hidden"  name = "id" value = "<?php echo $data['mb_id'];?> "  readonly>
<input type ="hidden"  name = "img" value = "<?php echo $data['mb_image'];?> "  readonly>
&nbsp;&nbsp;&nbsp;&nbsp;<img src ="./img/<?php echo $data['mb_image']?> ?img=<?=rand(1,100000)?>" while="200"height="250"readonly> <br><br><br>
<label>โทรศัพท์</label><input type ="text"  name = "name" value = "<?php echo $data['mb_names'];?> "  readonly><br>
<label>ราคา</label><input type ="text"  name = "ptice" value = "<?php echo $data['mb_price'];?> " readonly><br>
<label>รายละเอียด</label><input type ="text" name = "userlevel" value = "<?php echo $data['mb_detail'];?> " readonly><br>
<label>ผู้สั่งจอง</label><input type ="text" name = "user" value = "<?php echo $data['user'];?> " readonly><br>
<label>สถานะ</label>
<select name="status">
    <option value="รอการยืนยัน">รอการยืนยัน</option>
    <option value="ยืนยันการจอง">ยืนยันการจอง</option>
</select><br>
    <button type = "submit" style="width:200;">บันทึก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href= stock.php ><input type="button" value= กลับ style="width:90px;"></a>
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