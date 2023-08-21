<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Register</h2>

    </div>

    <form action="login_db.php" method="post">
    <div class="input-group">
            <label for="name">Name*</label>
            <input type="text" name="name">
        </div>

        <div class="input-group">
            <label for="surname">Surname*</label>
            <input type="text" name="surname">
        </div>

        <div class="input-group">
            <label for="username">Username*</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">Password*</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label for="phonenumber">phonenumber*</label>
            <input type="phonenumber" name="phonenumber">
        </div>

        <div class="input-group "></div>
        <lable for="sex">sex</lable>
        <input type="radio" name="sex" value="=Male">Male</input>
        <input type="radio" name="sex" value="Female"> Female</input>

        <div class="input-group">
             <button for="submit" name="reg_user" class="btn">Register</button> 
        </div>

        <p>Already a number <a href="login.php">Sign in </a></p> 
</form>


    
</body>
</html>