<?php
require_once ('config.php');
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
 <form method="post" action="<?=$actionPathVasya;?>">
     <? foreach ($answers as $key => $value) : ?>
         <? $question = $answers[$key++]['question']; ?>
         <h3><?= $key; ?> Вопрос</h3>
         <p><b><?= $question; ?></b></p>
         <p>
         <? foreach ($answers[--$key]['answers'] as $num => $value) : ?>
             <input type="radio" name="answer<?= $key; ?>" value="<?= $num; ?>"><?= $value; ?><br>
         <? endforeach; ?>
         </p>
     <? endforeach; ?>
     <p><input type="submit"></p>
 </form>
 </body>
</html>