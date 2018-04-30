<?php


include 'classapis.php';


$answer = creataAnswer(4);

echo $answer . '<br>';
?>


<form>
    猜數字：<input type="number" name="guess"/>
    <input type="submit" value="Guess"/>
</form>
