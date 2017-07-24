<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Приховати форму</title>
</head>
<body>
<?php
    //Если город пустой - покажем форму
    if (empty($_REQUEST['city']))
    {
echo <<<_END
            <form action="" method="GET">
                        <input type="text" name="city">
                        <input type="submit">
                    </form>
_END;
    }
?>

<?php
    //Если форма была отправлена и город не пустой:
    if (isset($_REQUEST['city'])) {
        $city = strip_tags($_REQUEST['city']);
        echo 'Ваш город: '.$city;
    }
?>
</body>
</html>