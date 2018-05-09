
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){

    })
</script>
<style>
    .chatBox{
        position:relative;
        border:1px solid black ;
        width : 400px;
        height : 500px;
        margin: auto;
        overflow-y: scroll;
    }
    .chatArea{
        margin: auto;
        text-align: center;
        margin-top:10px;

    }
    #chat{

        width: 365px;
        height:30px;
        border:1px solid black;
        border-radius: 20px;
        outline: none;
    }
</style>
<div class="chatBox">

</div>
<div class="chatArea">
<form>
    <input type="text" name="chat" id="chat" >
    <input type="submit" value=">>">
    <button type="button"> >> </button>
</form>
</div>

<?php

include_once 'sql.php';
include_once 'member.php';
include_once 'Chat.php';
$chat=$_GET['chat'];
$sql="insert into chattext (text,date) values ('$chat',now())";
$result=$mysqli->query($sql);
$data=$result->fetch_object('chat');
echo $data->chat;

?>
