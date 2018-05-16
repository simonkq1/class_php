<?php

include_once 'sql.php';
include_once 'member.php';
session_start();
if (!isset($_SESSION['member'])) header('Location: login.php');


if (isset($_REQUEST['chat'])) {
    $member = $_SESSION['member'];
    $chat = $_REQUEST['chat'];
    $toId = $_GET['toId'];
    $myId = $_GET['myId'];
    $_SESSION['toId'] = $toId;
    $_SESSION['myId'] = $myId;

}
?>
<!--<link rel="stylesheet" href="popover.css">-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>


    setInterval(function () {
        $.post('p2pAJAX.php', function (text) {
            // document.getElementById('debug').innerHTML=status;
            if(status == 'success'){
                var data = JSON.parse(text);
            // var data = JSON.parse(text);
            $("#chatBox").empty();
            for (i = 0; i < data.length; i++) {
                $("#chatBox").append("<p id='a'>" + data[i].name + " >> &nbsp;" + data[i].date + ": <span id='chatSpan'> &nbsp; " + data[i].text + " &nbsp; </span></p>");
            }
            }
        });
    }, 500);

    function sendMessage(text) {
        if (text != '') {
            if(status == 'success'){
                $.post('p2p_insertmessage.php', {text: text}, function (data) {
                });
                document.getElementById('chat').value = '';
            }
        }
        var div = document.getElementById('chatBox');
        div.scrollTop = div.scrollHeight;
    }


</script>
<style>
    .chatBox {
        position: relative;
        border: 1px solid black;
        width: 400px;
        height: 500px;
        margin: auto;
        overflow-y: scroll;

    }

    .chatArea {
        margin: auto;
        text-align: center;
        margin-top: 10px;

    }

    .icon {
        margin-left: 35%;
        /*border: 1px solid black;*/
        height: 40px;
    }

    .face {
        height: 23px;
        width: 23px;
        BORDER: none;
        padding: auto;
    }

    .face:hover {
        /*height: 20px;*/
        /*width: 10px;*/
        align-content: center;
        background-color: lightgray;
    }

    #chat {

        width: 365px;
        height: 30px;
        border: 1px solid black;
        border-radius: 20px;
        outline: none;
    }

    #chatSpan {
        /*width : 380px;*/
        background-color: #00CC00;
        border-radius: 20px;

    }

    #a {
        /*width : 380px;*/
        /*text-align: right;*/

    }
</style>

<div class="body">
    <div class="chatBox" id="chatBox">

    </div>
    <div id="debug" style="border: 1px black solid;width: 100px;height: 100px"></div>


    <div class="chatArea">
        <input type="text" name="chat" id="chat" onkeypress="if (event.keyCode==13){ sendMessage(this.value);}">
        <!--            <input type="submit" value=">>" onclick="sendMessage($('#chat').val())">-->
        <button type="button" id="bt1" onclick="sendMessage($('#chat').val())"> >></button>
    </div>
</div>