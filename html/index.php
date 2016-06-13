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
 <form method="post" action="<?=$actionPath;?>">
     <?php foreach ($answers as $key => $value) {
         $question = $answers[$key++]['question'];
         $numAnswer = $key;
         echo "<h3>{$numAnswer} Вопрос</h3>";
         echo "<p><b>{$question}</b></p>";
         echo '<p>';
            foreach ($answers[--$numAnswer]['answers'] as $key => $value) {
                echo '<input type="radio" name="answer' . $numAnswer . ' "value="' . $key . '">' . $value . "<br>";
            };
         echo "</p>";
     };?>
     <p><input type="submit"></p>
 </form>
 </body>
</html>