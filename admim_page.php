<?php include('server.php'); ?>
<?php
   
   if (!$_SESSION['userid']) {
       header("Location: login.php");
   } else {

   }
?>
<?php
$user_check = "SELECT * FROM user ";
$result = mysqli_query($conn,$user_check);
?>
<?php 
include("./A1.php");
?>
<?php 
include("./A2.php");
?>



<h2>สมาชิก</h2>

<table class="table table-striped table-bordered table-hover w-75 ">

  <thead >
  <tr>
    <th>ไอดี</th>
    <th>ชื่อ</th>
    <th>อีเมล</th>
    <th>ตำแหน่ง</th>
    <th>แก้ไข</th>
    <th>ลบ</th>
  </tr>
  </thead>
  
    <?php
    foreach($result AS $data){?>
  <tr>
    <th><?php echo $data['id']?></th>
    <th><?php echo $data['username']?></th>
    <th><?php echo $data['email']?></th>
    <th><?php echo $data['userlevel']?></th>
    <th><a href = "admin_modify.php?id=<?=$data['id']?>">แก้ไข</a></th>
    <th><a href = "admin_delete.php?id=<?=$data['id']?>">ลบ</a></th>
  
  </tr>
    </form>
    <?php }?>
</table>
</body>
    <style>
     button {
    background-color: #008CBA; /* Blue */
    border: none;
    width: 90px;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
 }
    </style>
    <br>
    <form action="admin_add.php"method="post">
    <button type="submit" name="reg_user" class="btn">เพิ่ม</button>
    </form>
