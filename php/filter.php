<?php

include "db.php";

$bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=3");

if (isset($_POST['завтрак']))
    {
        while ($items = mysqli_fetch_assoc($bf)){ ?>
            <div class="items ">
                <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                <p class="price-items "><?php echo $items['Price'];?></p> 
            </div> <?php
        }
    }
?>


