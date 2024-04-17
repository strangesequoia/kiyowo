<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script src="../script.js"></script>
    <title>Администрация</title>
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
<section class="admin-use">
    <!-- - кнопка на добавление в меню -->
    <input type="button" id="b-menu-add" value="Добавить позицию в меню" onclick="showM()" class="b-add">
        <form id="menu-add" action="menu-add.php" method="post" enctype="multipart/form-data">
        <h1 class="menu-add-title">Добавление позиции меню</h1>
            <ul class="menu-add-ul">
                <li class="menu-add-li">
                    <input class="auto-in" type="text" id="name-item" name="name-item" placeholder="название товара">
                </li>
                <li class="menu-add-li">
                    <input  class="auto-in" type="text" id="desc-item" name="desc-item" placeholder="описание товара">
                </li>
                <li class="menu-add-li">
                    <input class="auto-in" type="file" name="item-pic">
                </li>
                <li class="menu-add-li">
                <li class="menu-add-li">
                    <input  class="auto-in" type="number" id="price" name="price" placeholder="цена товара" min="0" max="10.00">
                </li>
                <li class="menu-add-li">
                    <input  class="auto-in" type="number" id="number" name="number" placeholder="количество товара" min="0" max="1000">
                </li>
                <select class="auto-in" type="text" id="type-item" name="type-item" placeholder="Тип товара">
                    <option value="1">Завтрак</option>
                    <option value="2">Суп</option>
                    <option value="3">Закуски</option>
                    <option value="4">Десерт</option>
                    <option value="5">Горячее</option>
                </select>
                </li>
                <li class="menu-add-li">
                    <button class="b-login" type="submit" id="submit">Создать позицию</button>
                </li>
            </ul>
        </form>
<!-- - на добавление в новости -->
<input type="button" id="b-news-add" value="Добавить запись новостей" onclick="showN()" class="b-add">

<form id="news-add" action="news-add.php" method="post" enctype="multipart/form-data">
        <h1 class="news-add-title">Добавить запись новостей</h1>
            <ul class="news-add-ul">
                <li class="news-add-li">
                    <input class="auto-in" type="text" id="name-item" name="name-item" placeholder="Заголовок записи новостей">
                </li>
                <li class="news-add-li">
                    <input  class="auto-in" type="text" id="desc-item" name="desc-item" placeholder="Описание записи новостей">
                </li>
                <li class="news-add-li">
                    <input class="auto-in" type="file" name="newspic">
                </li>
                <li class="news-add-li">
                    <button class="b-login" type="submit" id="submit">Создать запись новостей</button>
                </li>
            </ul>
        </form>
<!-- - на добавление в акции -->
<input type="button" id="b-action-add" value="Добавить запись акций" onclick="showA()" class="b-add">

<form id="action-add" action="action-add.php" method="post" enctype="multipart/form-data">
        <h1 class="action-add-title">Добавить запись акции</h1>
            <ul class="action-add-ul">
                <li class="action-add-li">
                    <input class="auto-in" type="text" id="name-item" name="name-item" placeholder="Заголовок записи акций">
                </li>
                <li class="action-add-li">
                    <input  class="auto-in" type="text" id="desc-item" name="desc-item" placeholder="Описание записи акций">
                </li>
                <li class="action-add-li">
                    <input class="auto-in" type="file" name="actionpic">
                </li>
                <li class="action-add-li">
                    <button class="b-login" type="submit" id="submit">Создать запись акции</button>
                </li>
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