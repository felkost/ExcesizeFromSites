<?php
//https://metanit.com/web/php/3.1.php
//http://theory.phphtml.net/books/php/base/osnovy-raboty-s-formami-v-php.html
$login = "Не известно";
$password = "Не известно";
if(isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];

echo "Ваш логин: $login  <br> Ваш пароль: $password";
?>