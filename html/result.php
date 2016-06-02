<?php
$answers = require_once('questions.php');
define('ROOT', dirname(__FILE__));
$userAnswers = ROOT . '/result';

if (!empty($_POST)) {
	foreach ($_POST as $key => $value) {
		$postAnswers["answers"][] = $value;
	}
file_put_contents($userAnswers, serialize($postAnswers));

$uns = unserialize(file_get_contents($userAnswers));
foreach ($uns['answers'] as $key => $value) {
if ($value == $answers[$key]) {
	echo 'Ответ на вопрос №' . ++$key . " правильный <br />";
	} else {
		echo 'Ответ на вопрос №' . ++$key . " неправильный <br />";
	}
}
}
if (!file_exists($userAnswers) || !$_POST) {
	echo 'Ошибка! Пройдите тест снова';
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