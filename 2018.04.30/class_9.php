<?php


include 'classapis.php';

if(!isset($_GET['answer'])){
    //首次進入
    $answer = creataAnswer(4);

}else {
    //之後進入
    $answer = $_GET['answer'];

    $guess = $_GET['guess'];
    $result = checkAB($answer, $guess);
}

echo $answer . '<br>';

?>


<form>
    猜數字：<input type="number" name="guess" />
    <input type="submit" value="Guess"/>
    <input type="hidden" name="answer" value="<?php echo $answer; ?>"  />
</form>
<hr/>
<div>
    <?php echo $result ?>
</div>
