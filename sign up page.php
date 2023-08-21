<?php include('server.php'); ?>
<?php 
include("./header.php");
?>
<?php 
include("./menu.php");
?>
<body>
 <html>   
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
    
    </style>
    <ta align="center"> 
 <div class="header">
 <br>
     <br>
         <br> 
    <h1>ลงทะเบียน</h1>
 </div>
<form action="register.pd.php"method="post">
    <div class="input-group">
        <label for = "username">Username</label>
        <input type="text" name="username"required >
    </div>
    <div class="input-group">  
        <label for = "email">Email</label>
        <input type="email" name="email"required >
    </div>
    <div class="input-group">
        <label for = "password">Password</label>
        <input type="password" name="password"required>
    </div>
    <div class="input-group">
    <button type="submit" name="reg_user" class="btn">Sign up</button>
    </div>
    <p> เป็นสมาชิกอยู่แล้ว <a href="Login.php"> เข้าสู่ระบบ </a></p>
</form>

</body>
</html>