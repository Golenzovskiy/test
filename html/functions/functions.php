<?php
function writeError()
{
    echo "<b>Ошибка!</b> Неправильно набран адрес, либо результат теста удален.<br />";
    echo 'Нажмите кнопку "Ещё попытку!", чтобы пройти тест.';
}

function writeAnswerFile($userAnswers)
{
    $fileAnswers = RESULT_DIR . $_GET['user'];
    file_put_contents($fileAnswers, serialize($userAnswers));
}

function mathAnswers($userAnswers, $answers)
{
    foreach ($userAnswers as $key => $value) {
        if ($value == $answers[$key]['correct']) {
            echo 'Ответ на вопрос №' . ++$key . " правильный <br />";
        } else {
            echo 'Ответ на вопрос №' . ++$key . " неправильный <br />";
        }
    }
}