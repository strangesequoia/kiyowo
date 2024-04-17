<?php
    include "db.php";
    $result = mysqli_query($conn,"SELECT * FROM `news`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Новости</title>
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
    <h1 class="title-news">новости</h1>
    <?php
        while($news = mysqli_fetch_assoc($result))
        {
            ?> 
            <section class="news">

                    <img src=" <?php echo $news['Illustration_news'];?>" alt="" class="news-img">
                    <div class="news-text">
                        <h1 class="news-title"> <?php echo $news['Title_news']; ?></h1>
                        <p class="news-descr"> <?php echo $news['Descr_news']; ?></p>
                    </div>
            </section>
    <?php
        }
    ?>
    
    

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
</body>
</html>