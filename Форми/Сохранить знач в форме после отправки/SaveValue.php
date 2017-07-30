<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
<form action="" method="GET">
    <input type="text" name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <input type="submit" value="Відправити">
</form>
<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    echo $name;
}
//в цій задачі скрипт присвоюється value. Через це структура файлу php+html+php , як в попередніх задачах
//викликає синтаксичну помилку. Потрібно створювати структуру файлу html+php+html
?>
</body>
</html>


