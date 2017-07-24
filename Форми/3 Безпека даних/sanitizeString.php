<?php
//sanitizeString — удаляет потенциально вредный код или теги из информации, введенной пользователем
//Никсон стр.300 або стр.671
function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}