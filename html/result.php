<?php
$rightAnswers = require_once('questions.php');
define('ROOT', dirname(__FILE__));
$userId = rand();
$userAnswers = ROOT . '/result/' . $userId;

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $postAnswers["answers"][] = $value;
    }

    file_put_contents($userAnswers, serialize($postAnswers));
    $uns = unserialize(file_get_contents($userAnswers));

    foreach ($uns['answers'] as $key => $value) {
        if ($value == $rightAnswers[$key]) {
            echo 'Ответ на вопрос №' . ++$key . " правильный <br />";
        } else {
            echo 'Ответ на вопрос №' . ++$key . " неправильный <br />";
        }
    }
    header("Location: {$_SERVER['SCRIPT_NAME']}/?user={$userId}");
}

if (isset($_GET['user'])) {
    $user = ROOT . '/result/' . $_GET['user'];
    if (file_exists($user)) {
        $uns = unserialize(file_get_contents($user));

        foreach ($uns['answers'] as $key => $value) {
            if ($value == $rightAnswers[$key]) {
                echo 'Ответ на вопрос №' . ++$key . " правильный <br />";
            } else {
                echo 'Ответ на вопрос №' . ++$key . " неправильный <br />";
            }
        }
    } else {
        echo "<b>Ошибка!</b> Неправильно набран адрес, либо результат теста удален <br />";
        echo 'Нажмите кнопку "Ещё попытку!", чтобы пройти тест.';
    }
} else {
    echo "<b>Ошибка!</b>" . ' Нажмите кнопку "Ещё попытку!", чтобы пройти тест.';
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