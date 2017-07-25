<?php
/* http://theory.phphtml.net/tasks/php/base/osnovy-raboty-s-formami-v-php.html
 * Спросите у пользователя имя, возраст, а также попросите его ввести сообщение
 * (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей.
 * Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт. *
 */
echo <<<_END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вивести дані</title>
    <link href="../../stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
_END;
require_once '../3 Безпека даних/sanitizeString.php';
//Если город пустой - покажем форму
if (empty($_REQUEST['name']) || empty($_REQUEST['age']) || empty($_REQUEST['message'])) {
    echo <<<_END
    <div >
            <form action="" method="GET" class="form">

                       Введіть ім'я <input type="text" name="name"><br><br>
                       Введіть вік <input type="text" name="age"><br><br>
                       Введіть повідомлення <textarea name="message"></textarea><br><br>
                       <input type="submit" class="btn">

             </form>
     <div>
_END;
}
//Если форма была отправлена и город не пустой:
if (!empty($_REQUEST['name']) && !empty($_REQUEST['age']) && !empty($_REQUEST['message'])) {
    $name = sanitizeString($_REQUEST['name']);
    $age = sanitizeString($_REQUEST['age']);
    $message = sanitizeString($_REQUEST['message']);
    echo 'Ваше ім\'я: '.$name,"<br />",'Ваш вік: '.$age,"<br />",'Ваше повідомлення: '.$message,"<br />";
}
echo <<<_END
</body>
</html>
_END;
?>