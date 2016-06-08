<?php
function writeError()
{
    echo "<b>Ошибка!</b> Неправильно набран адрес, либо результат теста удален.<br />";
    echo 'Нажмите кнопку "Ещё попытку!", чтобы пройти тест.';
}

function writeAnswers($userAnswers)
{
    $fileAnswers = ROOT . RESULT_DIR . $_GET['user'];
    file_put_contents($fileAnswers, serialize($userAnswers));
}

function mathAnswers($rightAnswers, $userAnswers)
{
    foreach ($userAnswers['answers'] as $key => $value) {
        if ($value == $rightAnswers[$key]) {
            echo 'Ответ на вопрос №' . ++$key . " правильный <br />";
        } else {
            echo 'Ответ на вопрос №' . ++$key . " неправильный <br />";
        }
    }
}