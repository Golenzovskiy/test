<?php
$answers = require_once('questions.php');
session_start();
if (empty($_SESSION['answers']) & ($_POST)) {
    $i = 1;
    foreach ($_POST as $key => $value) {
        $_SESSION["answers"][$i++] = $value;
    }
    $result = array_intersect($_SESSION['answers'], $answers);
    foreach ($result as $key => $value) {
        echo 'Вы правильно ответили на вопрос №' . $answer = $key . '<br />';
    }
} else {
    echo 'Ошибка! Пройдите тест снова.' . '<br />';
}
?>
<p>
<form action="/" method="post">
<input type="submit" value="Ещё попытку!" />
</form>
</p>