<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <form action="" method="GET">

	<p><textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea></p><br /><br /><br />
        <p> <input type="text" name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>"></p>
        <br />
        <input type="submit">
    </form>
    <?php
    //В textarea текст повторно виводиться скриптом, який має розміщуватись між тегами.
    //тег input в даному описі форми ніяк не проявляє себе: скоріш за все  перекривається textarea
    // і стає недоступний для введення інформації.
    //теги <p> та <br /> використані для спроби відокремити елементи форми: невдала спроба.
    ?>
</body>
</html>


