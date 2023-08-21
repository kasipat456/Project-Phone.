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
$user_check = "SELECT * FROM phone ";
$result = mysqli_query($conn,$user_check);
$n=1;
    foreach($result AS $data){?>
  <tr>
    <img src ="./img/<?php echo $data['phone_image']?>" while="200"height="250"> <br><br>

    NO. <?php echo $n ?><br>
         <?php echo $data['phone_names']?> <br>
    ราคา <?php echo $data['phone_price']?> บาท <br><br>
        <a href="user_details.php?id=<?=$data['phone_id']?>" class="btn btn-success"> จองโทรศัพท์ </a>
     <br> <br>
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
