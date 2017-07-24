<?php
echo <<<_END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Приховати форму</title>
</head>
<body>
_END;
require_once '../3 Безпека даних/sanitizeString.php';
    //Если город пустой - покажем форму
    if (empty($_REQUEST['city'])) {
        echo <<<_END
            <form action="" method="GET">
                        <input type="text" name="city">
                        <input type="submit">
                    </form>
_END;
    }
    //Если форма была отправлена и город не пустой:
    if (isset($_REQUEST['city'])) {
        $city = sanitizeString($_REQUEST['city']);
        echo 'Ваш город: '.$city;
    }
echo <<<_END
</body>
</html>
_END;
?>