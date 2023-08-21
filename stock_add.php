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
<form action = "stock_addp.php" method = "POST" enctype="multipart/form-data">




<label>โทรศัพท์</label><input type ="text"  name = "name"  ><br>
<label>ราคา</label><input type ="text"  name = "ptice" ><br>
<label>รายละเอียด</label><input type ="text" name = "userlevel" ><br>
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