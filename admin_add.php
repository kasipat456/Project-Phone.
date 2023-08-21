<?php include('server.php'); ?>
<ta align="center"> 
 <div class="header">
 <br>
     <br>
         <br> 
    <h1>เพิ่มสมาชิก</h1>
 </div>
<form action="admim_pd1.php"method="post">
    <div class="input-group">
        <label for = "username">ผู้ใช้</label>
        <input type="text" name="username"required >
    </div>
    <div class="input-group">  
        <label for = "email">อีเมล์</label>
        <input type="email" name="email"required >
    </div>
    <div class="input-group">
        <label for = "password">รหัสผู้ใช้</label>
        <input type="password" name="password"required>
    </div>
    <div class="input-group">
        <label for = "userlevel">ตำแหน่ง</label>
        <input type="userlevel" name="userlevel"required>
    </div>
    <?php echo "<font color='#FF0000'>* กรอกข้อมูล A=Admin U=Username กรุณาพิมพ์ AกับU *</font>";?><br>
    <div class="input-group">
    <button type="submit" name="reg_user" class="btn">เพิ่มสมาชิก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href= admim_page.php ><input type="button" value= กลับ style="width:100px;height:30px;background-color:#e0e0e0 ;"></a>
</div>
</form>
</body>
</html>
<style>
    button {
        width: 100px;
        height :30px;
        background-color: #e0e0e0 ;
}
    label {
      display: inline-block;
      width: 60px;
      margin-bottom: 10px;
    }
    
    </style>
    <body style="background-color:  #F5EED8">
</body>
    