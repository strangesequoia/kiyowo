<?php
    session_start();
    include "db.php";
 
    $nameitem = $_POST['name-item'];
    $descitem = $_POST['desc-item'];

        $_FILES['actionpic']['name'];
        $path = '../uploads/'. time() . $_FILES['actionpic']['name'];
        if (!move_uploaded_file($_FILES['actionpic']['tmp_name'], $path)){
            $_SESSION['message'] = 'ошибка при загрузке';
            header( "Location: admin.php");
            exit( );
        }
        
        mysqli_query($conn, "INSERT INTO `actions` (`ID_action`, `Title_action`, `Descr_action`, `Illustration_action`) VALUES (NULL, '$nameitem', '$descitem', '$path')");
        
        header( "Location: admin.php");