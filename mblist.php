<?php include('server.php'); ?>
<?php

   
   if (!$_SESSION['userid']) {
       header("Location: login.php");
   } else {

   }
?>
<?php 
include("./U1.php");
?>
<?php 
include("./U2.php");
?>

<ta align="center">
    <br><br>
<h1>PHONE</h1>

<table>
<?php
$user1= $_SESSION['user'];
$user_check = "SELECT * FROM mobile WHERE user='$user1'";
$result = mysqli_query($conn,$user_check);
$n=1;
    foreach($result AS $data){?>
  <tr>
<div >
    <img src ="./img/<?php echo $data['mb_image']?>" while="200"height="250"> <br><br>
    NO. <?php echo $n ?><br>
         <?php echo $data['mb_names']?> <br>
    ราคา <?php echo $data['mb_price']?> บาท <br>
    สถานะ: <?php echo $data['mb_status']?><br><br>

    <?php
    if($data['mb_status']=='ยืนยันการจอง'){
        echo "<div class='btn btn-light'> ยืนยันการจองแล้ว </div>";
    }
    else{
        $id=$data['mb_id'];
        echo "<a href='mblist_del.php?del=$id' class='btn btn-danger' readonly> ยกเลิกการจอง </a>";
    }
    
    ?>
      
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
