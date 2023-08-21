<?php include('server.php'); ?>
<?php 
include("./header.php");
?>
<?php 
include("./menu.php");
?>

<style>
    label {
      display: inline-block;
      width: 80px;
      margin-bottom: 10px;
    }
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
 table {
        text-align: center;
    }
    
    </style>
    <br>
        <br>
            <br>
    <ta align ="center"> 
           <h3>Login</h3>
<form action="Loginp.php"method="post">
<div class="input-group">
        <label for = "username">Username</label>
        <input type="text" name="username" required >
    </div>
    
    <div class="input-group">
        <label for = "password">Password</label>
        <input type="password" name="password"required>
    </div>
    <div class="input-group">
    <button type="submit" name="reg_user" class="btn">Login</button>
    </div>
    <p> สมัครเป็นสมาชิก <a href="sign up page.php">ลงทะเบียน</a></p>
</form>
<?php 

?>