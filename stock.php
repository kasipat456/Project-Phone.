<?php include('server.php'); ?>
<?php

   
   if (!$_SESSION['userid']) {
       header("Location: login.php");
   } else {

   }
?>
<?php 
include("./A1.php");
?>
<?php 
include("./A2.php");
?>

<ta align="center">
    <br><br>
<h3>PHONE</h3>
<a href="stock_add.php"> เพิ่ม </a>
<table align="center" class="table table-striped table-hover ">
<?php
$user_check = "SELECT * FROM phone ";
$result = mysqli_query($conn,$user_check);
    $n=1;
    foreach($result AS $data){?>
  <tr>
<div>
    <img src ="./img/<?php echo $data['phone_image']?> ?img=<?=rand(1,100000)?>" while="200"height="250"> <br><br>
    NO. <?php echo $n ?><br>
         <?php echo $data['phone_names']?> <br>
    ราคา <?php echo $data['phone_price']?> บาท <br><br>
        <button><a href="stock_edit.php?id=<?=$data['phone_id']?>"> แก้ไข </a></button>
        <button><a href="stock_del.php?del=<?=$data['phone_id']?>"> ลบ </a></button>
     <br> <br>
    </div>
    <?php 
    $n=$n+1;
}?>
    </form>
</table>
</body>
<style>
button {
        background-color: #00FF66;
        display: inline-block;
        width: 80px;
        height: 40px;
        margin-bottom: 10px;
    }
</style>
