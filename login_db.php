<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);

        if (empty($name)) {
            array_puch($errors, "name is required");
        }
        if (empty($surname)) {
            array_puch($errors, "surname is required");
        }
        if (empty($username)) {
            array_puch($errors, "username is required");
        }
        if (empty($password)) {
            array_puch($errors, "password is required");
        }
        if (empty($phonenumber)) {
            array_puch($errors, "phonenumber is required");
        }
        if (empty($sex)) {
            array_puch($errors, "sex is required");
        }
    
        $user_check_query = "SELECT * FROM student WHERE username = '$username'";
        $_query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($_query);

        if($result) { // if user exists
            if($result['username'] == $username) {
                array_puch($errors, "Username already exists");
            }
        }

        

        $sql = "INSERT INTO student (name, surname, username, password, phonenumber, sex) VALUES ('$name', '$surname', $username', '$password', '$phonenumber', '$sex')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        
    }
?>

