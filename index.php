<?php
$answers = require_once 'answers.php';
//var_dump($answers);
//var_dump($_POST);
session_start();
$_SESSION['test'] = 2;
var_dump($_SESSION);
?>
<h3>1 Вопрос</h3>
<form method="post">
    <p><b>Как по вашему мнению расшифровывается аббревиатура &quot;ОС&quot;?</b></p>
    <p><input type="radio" name="answer" value="a1">Офицерский состав<Br>
        <input type="radio" name="answer" value="a2">Операционная система<Br>
        <input type="radio" name="answer" value="a3">Большой полосатый мух</p>
    <p><input type="submit"></p>
</form>
<h3>2 Вопрос</h3>
<form method="post" action="index.php">
    <p><b>Что такое жигули?</b></p>
    <p><input type="radio" name="answer" value="a1">Пивасик<Br>
        <input type="radio" name="answer" value="a2">Машина<Br>
        <input type="radio" name="answer" value="a3">Река</p>
    <!--<p><input type="submit"></p>-->
</form>
<h3>3 Вопрос</h3>
<form method="post" action="index.php">
    <p><b>Что такое горилка</b></p>
    <p><input type="radio" name="answer" value="a1">Маленькая обеъянка<Br>
        <input type="radio" name="answer" value="a2">Горы на Алтае<Br>
        <input type="radio" name="answer" value="a3">Водка</p>
    <!--<p><input type="submit"></p>-->
</form>
<h3>4 Вопрос</h3>
<form method="post" action="index.php">
    <p><b>Что такое копчик</b></p>
    <p><input type="radio" name="answer" value="a1">Кость скелета<Br>
        <input type="radio" name="answer" value="a2">Маленький полицейский<Br>
        <input type="radio" name="answer" value="a3">Детская копилка</p>
    <!--<p><input type="submit"></p>-->
</form>
<h3>5 Вопрос</h3>
<form method="post" action="index.php">
    <p><b>Кто подставил Кролика Роджера</b></p>
    <p><input type="radio" name="answer" value="a1">Пушкин<Br>
        <input type="radio" name="answer" value="a2">Конь в пальто<Br>
        <input type="radio" name="answer" value="a3">Никто из перечисленных</p>
    <!--<p><input type="submit"></p>-->
</form>

