<?php
 session_start();
 include "db.php";

 $nameitem = $_POST['name-item'];
 $descitem = $_POST['desc-item'];
 $price = $_POST['price'];
 $number = $_POST['number'];
 $typeitem = $_POST['type-item'];


 $_FILES['item-pic']['name'];
        $path = '../uploads/'. time() . $_FILES['item-pic']['name'];
        if (!move_uploaded_file($_FILES['item-pic']['tmp_name'], $path)){
            $_SESSION['message'] = 'ошибка при загрузке';
            header( "Location: admin.php");
            exit( );
        }
        
        mysqli_query($conn, "INSERT INTO `items` (`ID_item`, `Title_item`, `Descr_item`, `Illustration_item`, `Price`, `Number`, `ID_type`) VALUES (NULL, '$nameitem', '$descitem', '$path', '$price', '$number', '$typeitem')");
        
        header( "Location: admin.php");