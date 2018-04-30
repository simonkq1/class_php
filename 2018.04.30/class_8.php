<?php


include 'classapis.php';
$result = $history = '';

if (!isset($_POST['answer'])) {
    //首次進入
    $answer = creataAnswer(4);

} else {
    //之後進入
    $answer = $_POST['answer'];

    $guess = $_POST['guess'];
    $history = $_POST['history'];
    $result = checkAB($answer, $guess);
    $history .= "{$guess} : {$result} <br>";
}

//echo $answer . '<br>';

?>

<form method="post">   <!--method="post"-->
    猜數字：<input type="number" name="guess"/>
    <input type="submit" value="Guess"/>
    <input type="hidden" name="answer" value="<?php echo $answer; ?>"/>
    <input type="hidden" name="history" value="<?php echo $history; ?>"/>
    <input type="button" name="restart" value="重新開始"/>
</form method="post">
<hr/>
<div>
    <?php echo $history ?>
</div>
