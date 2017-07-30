<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
<form action="" method="GET">
    <textarea  name="name" placeholder="Введите текст для поиска">
        <?php if (isset($_GET['name'])) echo $_GET['name']; ?>
    </textarea>
    <input type="submit" value="Відправити">
</form>
<?php

//в цій задачі скрипт присвоюється value. Через це структура файлу php+html+php , як в попередніх задачах
//викликає синтаксичну помилку. Потрібно створювати структуру файлу html+php+html
?>
</body>
</html>


