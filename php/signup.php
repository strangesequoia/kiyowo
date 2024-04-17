<?php
    session_start();
    include "db.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $password_check = $_POST['password-check'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if($password === $password_check){
        $_FILES['avatar']['name'];
        $path = '../uploads/'. time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
            $_SESSION['message'] = 'ошибка при загрузке';
            header( "Location: reg.php");
            exit( );
        }
         $password = md5($password);

        mysqli_query($conn, "INSERT INTO `users` (`ID_user`, `Name`, `Email`, `Password`, `Profile_picture`, `Address`, `Phone`, `Role`) VALUES (NULL, '$name', '$email', '$password', '$path', '$address', '$phone', 'user')");
        $_SESSION['message'] = 'регистрация прошла успешно';
        header( "Location: login.php");
    } else {
        $_SESSION['message'] = 'пароли не совпадают';
        header( "Location: reg.php");
        exit( );
    }

   

    