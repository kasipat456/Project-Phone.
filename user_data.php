<?php include('server.php'); ?>
<body>
 <html>   
<style>

    label {
      display: inline-block;
      width: 50px;
      margin-bottom: 10px;
    }
    </style>
    <ta align="center"> 
 <div class="header">
 <br>
     <br>
         <br> 
    <h1>กรองข้อมูล</h1>
 </div>
<form action="register.pd.php"method="post">
    <div class="input-group">
        <label for = "day">วันที</label>
        <input type="day" name="day"required>
    </div>
    <div class="input-group">
        <label for = "day">กำหนดวันคืน</label>
        <input type="day" name="day"required>
    </div>
    <div class="input-group">
    <button type="submit" name="reg_user" class="btn">ลงทะเบียน</button> &nbsp; &nbsp;
    <button><a href="admim_page.php">กลับ </a></button>
    </div>
</form>

</body>
</html>