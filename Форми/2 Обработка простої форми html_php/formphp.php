<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <?php
    //https://metanit.com/web/php/3.1.php
    //http://theory.phphtml.net/books/php/base/osnovy-raboty-s-formami-v-php.html
        if(isset($_POST['login']) && isset($_POST['password'])){

        $login=$_POST['login'];
        $password = $_POST['password'];
        echo "Ваш логин: $login <br> Ваш пароль: $password";
        }
    ?>
</div>
<h3>Вход на сайт</h3>
<form method="POST">
    Логин: <input type="text" name="login" /><br><br>
    Пароль: <input type="text" name="password" /><br><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>