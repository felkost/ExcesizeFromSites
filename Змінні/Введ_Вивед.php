<?php
//Завдання: http://magnoli.ru/zd1.1.php?id=1
$title = "Виведення HTML";
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$title</title>
</head>
<body>
_END;

$name = "Гадкий-Я";
$age = 43;
echo 'Поточна дата: ' .date('d-m-Y H:i:s'),"<br />";
echo "Мене звати: $name","<br />";
echo "Мені $age роки","<br />";

unset($name);
unset($age);

define("My_Const", "Привіт, світ!");
echo "Перевірка існування константи: ",defined("My_Const"),"<br />";
echo "<h2>",My_Const,"</h2>"; //виведення константи

$arr["key"]="val";
echo $arr["key"],"<br />";
var_dump($arr['key']);
echo <<<_END
</body>
</html>
_END;
