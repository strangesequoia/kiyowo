<?php
    session_start();
    include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script href="../script.js"></script>
    <title>регистрация</title>
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
                <li class="icon"><a href="account.php"><img src="../icon/person.png" alt="person" class="icon-img"> </a></li>
            </ul>
        </nav>
    </header>
    <!-- форма регистрации -->
    <section class="signup">
    <h1 class="reg-title">регистрация</h1>
        <form class="reg" action="signup.php" method="post" enctype="multipart/form-data">
            <ul class="reg-ul">
                <li class="reg-li">
                    <input class="auto-in" type="text" id="name" name="name" placeholder="имя">
                </li>
                <li class="reg-li">
                    <input  class="auto-in" type="email" id="email" name="email" placeholder="e-mail">
                </li>
                <li class="reg-li">
                    <input class="auto-in" type="password" id="password" name="password" placeholder="пароль">
                </li>
                <li class="reg-li">
                    <input class="auto-in" type="password" id="password-check" name="password-check" placeholder="подтвердите пароль">
                </li>
            </ul>

            <ul class="reg-ul">
                <li class="reg-li">
                    <input class="auto-in" type="text" id="phone" name="phone" placeholder="телефон">
                </li>
                <li class="reg-li">
                <input class="auto-in" type="text" id="address" name="address" placeholder="адрес">
                </li>
                <li class="reg-li">
                <input class="auto-in" type="file" name="avatar">
                </li>
                <li class="reg-li">
                    <button class="b-login" type="submit" id="submit">зарегистрироваться</button>
                </li>
                <li class="reg-li">
                    <a href="login.php" class="a-in">уже есть аккаунт</a>
                </li>
                <!-- <?php
                    if ($_SESSION['message']){
                        echo '<li class="reg-li">
                        <p class="msg">'. $_SESSION['message'] . '</p>
                        </li>';
                    } 
                    unset($_SESSION['message']); ?> -->
            </ul>
</form>
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
</body>
</html>