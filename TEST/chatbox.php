
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
// $(document).ready(function(){

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var ret = xhttp.responseText;
            document.getElementById('chatBox').innerHTML = ret
        };



    };
    setInterval(function(){
            xhttp.open('POST', 'test1.php', true)
            xhttp.send();

            var div = document.getElementById('chatBox');
            div.scrollTop = div.scrollHeight;
        }
        ,1000)
// });

// $("#bt1").click(
//     function scrollWindow()
//     {
//         var div = document.getElementById('chatBox');
//         div.scrollTop = div.scrollHeight;
//     }
//
//     window.onload = function() { scrollWindow(); }
//     )
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

    #chatSpan{
        /*width : 380px;*/
        background-color: #00CC00;
        border-radius: 20px;

    }
    #a{
        /*width : 380px;*/
        /*text-align: right;*/

    }
</style>
 <div class="chatBox" id="chatBox">

</div>
<div class="chatArea">
<form method="post">
    <label>
    <input type="text" name="chat" id="chat" >
    <input type="submit" value=">>">
<!--    <button type="button" id="bt1" > >> </button>-->
    </label>
</form>
</div>

<?php
include_once 'sql.php';
include_once 'member.php';
session_start();


if (!isset($_SESSION['member'])) header('Location: login.php');

if(isset($_REQUEST['chat'])){
    $member=$_SESSION['member'];
    $chat=$_REQUEST['chat'];

    $sql="insert into chattext (`text`,`date`,`cid`) values ('$chat',now(),{$member->id})";
    $result=$mysqli->query($sql);

}

?>
