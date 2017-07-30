<?php
//Спросите у пользователя логин и пароль (в браузере должен быть звездочками).
// Сравните их с логином $login и паролем $pass, хранящихся в файле.
// Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'.
// Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь (Функція trim() )
echo <<<_END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Форма з паролем</title>
</head>
<body>
_END;
require_once '../3 Безпека даних/sanitizeString.php';
//Если город пустой - покажем форму
if (empty($_REQUEST['username']) || empty($_REQUEST['password'])) {
    echo <<<_END
            <form action="" method='post' autocomplete='on'>
            
                       Логін &ensp; <input type='text' name='username'><br /><br />
                       Пароль <input type='password' name='password' autocomplete='off'><br /><br />
                       <input type="submit" value="Ввійти">             
             </form>
_END;
}
//Если форма была отправлена и город не пустой:
if (!empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {
    $username = sanitizeString(trim($_REQUEST['username']));
    $password = sanitizeString(trim($_REQUEST['password']));
    if($username=="user" && $password=="1") echo "Доступ $username дозволено.";
        else
    echo 'Неправильний логін або пароль: доступ заборонено.';
}
echo <<<_END
</body>
</html>
_END;
?>