<?php
    session_start();
    include "db.php";

    $nameitem = $_POST['name-item'];
    $descitem = $_POST['desc-item'];

        $_FILES['newspic']['name'];
        $path = '../uploads/'. time() . $_FILES['newspic']['name'];
        if (!move_uploaded_file($_FILES['newspic']['tmp_name'], $path)){
            $_SESSION['message'] = 'ошибка при загрузке';
            header( "Location: admin.php");
            exit( );
        }
        
        mysqli_query($conn, "INSERT INTO `news` (`ID_news`, `Title_news`, `Descr_news`, `Illustration_news`) VALUES (NULL, '$nameitem', '$descitem', '$path')");
        
        header( "Location: admin.php");
   