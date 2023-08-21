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
<h1>PHONE</h1>



<table class="table table-striped table-bordered table-hover  w-75 align-middle" >
    <thead><tr><th></th><th>NO.</th><th>ชื่อ</th><th>ราคา</th><th>ผู้สั่งจอง</th><th>สถานะ</th><th>ยกเลิกการจอง</th></tr></thead>
<?php
$user1= $_SESSION['user'];
$user_check = "SELECT * FROM mobile ";
$result = mysqli_query($conn,$user_check);
$n=1;
    foreach($result AS $data){?>
  <tr>
    <td> <img src ="./img/<?php echo $data['mb_image']?>" while="100"height="100"></td>
    <td> <?php echo $n ?></td>
    <td> <?php echo $data['mb_names']?> </td>
    <td> <?php echo $data['mb_price']?> บาท </td>    
    <td> <?php echo $data['user']?> </td> 
    <td> <a href="mbstock_edit.php?edit=<?=$data['mb_id']?>"> <?php echo $data['mb_status']?> </a></td>
    <td> <a href="mbstock_del.php?del=<?=$data['mb_id']?>"> ยกเลิก </a></td>
   </tr>

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
