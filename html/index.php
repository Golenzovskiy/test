<?php
session_start();
$_SESSION['userId'] = rand();
$userId = $_SESSION['userId'];
setcookie('userId', $userId, mktime(0,0,0,31,12,2017));
$actionPath = 'result.php?user=' . $userId;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Тест из 3х вопросов</title>
 </head>
 <body>
<h3>1 Вопрос</h3>
<form method="post" action="<?=$actionPath;?>">
    <p><b>Что такое копчик?</b></p>
    <p><input type="radio" name="answer1" value="1">Кость скелета<Br>
        <input type="radio" name="answer1" value="2">Маленький полицейский<Br>
        <input type="radio" name="answer1" value="3">Детская копилка</p>
<hr />
<h3>2 Вопрос</h3>
    <p><b>Что такое жигули?</b></p>
    <p><input type="radio" name="answer2" value="1">Пивасик<Br>
        <input type="radio" name="answer2" value="2">Машина<Br>
        <input type="radio" name="answer2" value="3">Река</p>
<hr />
<h3>3 Вопрос</h3>
    <p><b>Что такое горилка?</b></p>
    <p><input type="radio" name="answer3" value="1">Маленькая обеъянка<Br>
        <input type="radio" name="answer3" value="2">Горы на Алтае<Br>
        <input type="radio" name="answer3" value="3">Водка</p>
    <p><input type="submit"></p>
</form>
 </body>
</html>