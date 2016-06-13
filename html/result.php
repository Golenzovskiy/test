<?php
require_once ('config.php');

session_start();
$userIdFromGet = $_GET['user'];
if ((isset($_SESSION['userId']) or isset($_COOKIE['userId'])) && !$_POST) {
    $restoreId = (empty($_SESSION['userId'])) ? $_COOKIE['userId'] : $_SESSION['userId'];
    if (!isset($userIdFromGet)) {
        header("Location: {$_SERVER['SCRIPT_NAME']}?user={$restoreId}");
    }
    echo '<h3>Результат прошых попыток:</h3>';
    $user = RESULT_DIR . $_GET['user'];
    if (file_exists($user)) {
        $user = RESULT_DIR . $_GET['user'];
        $userAnswers = unserialize(file_get_contents($user));
        mathAnswers($userAnswers, $answers);
    } else {
        writeError();
    }
} elseif ($_POST) {
    echo '<h3>Результат вашей попытки:</h3>';
    foreach ($_POST as $key => $value) {
        $userAnswers[] = ++$value;
    }
    writeAnswerFile($userAnswers);
    mathAnswers($userAnswers, $answers);
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