<?php
    include "db.php";
    $filters = mysqli_query($conn,"SELECT * FROM `types`");
    $menu = mysqli_query($conn,"SELECT * FROM `items`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Меню</title>
</head>
<body>
<header>
        <nav>
            <a href="index.php" class="logo"> <img src="../icon/logo.svg" alt="logo"> </a>
            <ul class="nav-li">
                <li class="link"><a href="news.php" class="a-header"> <h1>новости</h1></a></li>
                <li class="link"><a href="menu.php" class="a-header"> <h1>меню</h1> </a></li>
                <li class="link"><a href="action.php" class="a-header"> <h1>акции</h1></a></li>
                <li class="link"><a href="booking.php" class="a-header"><h1>бронь</h1></a></li>
                <li class="link"><a href="contacts.php" class="a-header"><h1>контакты</h1></a></li>
                <li class="icon"><a href="cart.php"> <img src="../icon/cart.png" alt="cart" class="icon-img"></a></li>
                <li class="icon"><a href="reg.php"><img src="../icon/person.png" alt="person" class="icon-img"> </a></li>
            </ul>
        </nav>
    </header>

        <h1 class="menu-title">меню</h1>
        <section class="filters">
            <div class="filter">
            <?php 
     while($type = mysqli_fetch_assoc($filters))
     {
    ?> 
    <form method="POST">
        <button name="<?php echo $type['Type'];?>" type="submit" value="<?php echo $type['Type'];?>" id="<?php echo $type['Type'];?>" class="b-menu"><?php echo $type['Type'];?> </button>
    </form>
    
    <?php
     }
    ?>
    <a href="cart.php" class="to-cart"><img src="../icon/cart.png" alt=""></a>
    </div>
    <div class="filtered">
    <?php 

    switch (isset($_POST)) {
        case (isset($_POST["завтрак"])): 
            $bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=1");
            while ($items = mysqli_fetch_assoc($bf)){ ?>
                <div class="items ">
                    <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                    <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                    <p class="price-items "><?php echo $items['Price'];?></p> 
                </div> <?php
            }
            break;
            case (isset($_POST["суп"])):
            $bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=2");
            while ($items = mysqli_fetch_assoc($bf)){ ?>
            <div class="items ">
                <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                <p class="price-items "><?php echo $items['Price'];?></p> 
            </div> <?php
        }
        break;
        case (isset($_POST["закуски"])):
             $bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=3");
        while ($items = mysqli_fetch_assoc($bf)){ ?>
            <div class="items ">
                <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                <p class="price-items "><?php echo $items['Price'];?></p> 
            </div> <?php
        }
        break;
        case (isset($_POST["десерт"])):
             $bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=4");
        while ($items = mysqli_fetch_assoc($bf)){ ?>
            <div class="items ">
                <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                <p class="price-items "><?php echo $items['Price'];?></p> 
            </div> <?php
        }
        break;
        case (isset($_POST["горячее"])):
             $bf= mysqli_query($conn,"SELECT * FROM `items` WHERE `ID_type`=5");
        while ($items = mysqli_fetch_assoc($bf)){ ?>
            <div class="items ">
                <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">     
                <h1 class="title-item"><?php echo $items['Title_item'];?> </h1> 
                <p class="price-items "><?php echo $items['Price'];?></p> 
            </div> <?php
        }
        break;
        default:
        ?>
        <section class="menu" id="menu">
<?php 
        while($items = mysqli_fetch_assoc($menu))
        {
            ?>  <div class="items " id="items">
                    <img src="<?php echo $items['Illustration_item'];?>" alt="" class="item-img">
                    <h1 class="title-item"><?php echo $items['Title_item'];?> </h1>
                    <p class="price-items "><?php echo $items['Price'];?></p>
                </div>
            <?php
        } 
        break;
    ?>
    <?php
    }

     
    ?>
            </div>
    
        </section>

</section>
    <footer>
        <ul class="footer-contacts">
            <li class="footer-li">
                <p>kiyowo@gmail.ru</p>
            </li>
            <li class="footer-li">
                <p>+7(495)711-46-58</p>
            </li>
            <li class="footer-li">
                <p>москва, ул. ак. глушко д. 14</p>
            </li>
            <liclass="footer-li">
                <div class="footer-socials">
                    <img src="" alt="" class="social">
                    <img src="" alt="" class="social">
                </div>
            </li>
        </ul>
        <ul class="footer-nav">
            <li class="footer-li"><a href="news.php" class="a-footer">новости</a></li>
            <li class="footer-li"><a href="menu.php" class="a-footer">меню</a></li>
            <li class="footer-li"><a href="action.php" class="a-footer">акции</a></li>
            <li class="footer-li"><a href="booking.php" class="a-footer">бронь</a></li>
            <li class="footer-li"><a href="contacts.php" class="a-footer">контакты</a></li>
            <li class="footer-li"><a href="account.php" class="a-footer">личный кабинет</a></li>
        </ul>
    </footer>
        <script src="../script.js"></script>
</body>
</html>