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
<form action = "stock_editp.php" method = "POST" enctype="multipart/form-data">

<?php
$id= $_GET['id'];
$qusry = "SELECT * FROM phone WHERE phone_id=$id";
$result = mysqli_query($conn,$qusry); 
foreach($result AS $data){
    $id=$data['phone_id']+1;
}
?>

<input type ="hidden"  name = "id" value = "<?php echo $data['phone_id'];?> "  >
<input type ="hidden"  name = "img" value = "<?php echo $data['phone_image'];?> "  >
&nbsp;&nbsp;&nbsp;&nbsp;<img src ="./img/<?php echo $data['phone_image']?> ?img=<?=rand(1,100000)?>" while="200"height="250"> <br><br><br>
<label>โทรศัพท์</label><input type ="text"  name = "name" value = "<?php echo $data['phone_names'];?> "  ><br>
<label>ราคา</label><input type ="text"  name = "ptice" value = "<?php echo $data['phone_price'];?> " ><br>
<label>รายละเอียด</label><input type ="text" name = "userlevel" value = "<?php echo $data['phone_detail'];?> " ><br>
<label>รูปภาพ</label><input type="file" name="img" id="img"><br>
    <button type = "submit">บันทึก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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