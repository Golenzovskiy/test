<?php
require_once ('functions.php');
$rightAnswers = require_once('questions.php');
define('ROOT', dirname(__FILE__));
define('RESULT_DIR', ROOT . '/result/');

session_start();
$userIdFromGet = $_GET['user'];
if ((isset($_SESSION['userId']) or isset($_COOKIE['userId'])) && !$_POST) {
    $restoreId = (empty($_SESSION['userId'])) ? $_COOKIE['userId'] : $_SESSION['userId'];
    if (!isset($userIdFromGet)) {
        header("Location: {$_SERVER['SCRIPT_NAME']}?user={$restoreId}");
    }
    echo '<h3>Результат прошых попыток:</h3>';
	
    $user = RESULT_DIR . $userIdFromGet;
    if (file_exists($user)) {
        $answersFromFile = unserialize(file_get_contents($user));
        mathAnswers($rightAnswers, $answersFromFile);
    } else {
        writeError();
    }
} elseif ($_POST) {
    echo '<h3>Результат вашей попытки:</h3>';
    foreach ($_POST as $key => $value) {
        $userAnswers["answers"][] = $value;
    }

    writeAnswers($userAnswers, $userIdFromGet);
    mathAnswers($rightAnswers, $userAnswers);
} else {
    writeError();
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