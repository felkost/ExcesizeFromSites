<?php
//завдання : http://htmllab.ru/ustanovka-i-nastroyka-php-zadachi/
echo "привіт \n"; //в консольному режимі: подвійні кавички, тоді працює \n, з одинарними - ні;
//в браузері застосовувати лише <br />
echo 'Текущая версия PHP: ' . phpversion()."\n";  //http://php.net/manual/ru/function.phpversion.php
echo 'Текущая дата: ' .date('d-m-Y H:i:s');
// про теги та тег-закривання: http://php.net/manual/ru/language.basic-syntax.phptags.php