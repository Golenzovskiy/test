<?php
session_start();
if (isset($_SESSION['answers'])) {
	session_destroy();
}
?>
<h3>1 Вопрос</h3>
<form method="post" action="result.php">
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
<h3>4 Вопрос</h3>
<p><b>Как по вашему мнению расшифровывается аббревиатура &quot;ОС&quot;?</b></p>
    <p><input type="radio" name="answer4" value="1">Офицерский состав<Br>
        <input type="radio" name="answer4" value="2">Операционная система<Br>
        <input type="radio" name="answer4" value="3">Большой полосатый мух</p>
<h3>5 Вопрос</h3>
    <p><b>Кто подставил Кролика Роджера?</b></p>
    <p><input type="radio" name="answer5" value="1">Пушкин<Br>
        <input type="radio" name="answer5" value="2">Конь в пальто<Br>
        <input type="radio" name="answer5" value="3">Никто из перечисленных</p>
    <p><input type="submit"></p>
</form>