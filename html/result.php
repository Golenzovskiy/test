<?php
$answers = require_once('questions.php');
session_start();
if (empty($_SESSION['answers']) && (!empty($_POST))) {
    foreach ($_POST as $key => $value) {
        $_SESSION["answers"][] = $value;
    }
    $result = array_intersect($_SESSION['answers'], $answers);
	foreach ($result as $key => $value) {
        echo 'Вы правильно ответили на вопрос №' . $answer = ++$key . '<br />';
    }
} else {
    echo 'Ошибка! Пройдите тест снова.' . '<br />';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Тест из 3х вопросов</title>
 </head>
 <body>
<p>
<form action="/index.php" method="post">
<input type="submit" value="Ещё попытку!" />
</form>
</p>
 </body>
</html>