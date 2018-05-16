
<?php

include_once 'sql.php';
include_once 'member.php';
session_start();
if (!isset($_SESSION['member'])) header('Location: login.php');

$member = $_SESSION['member'];
$toId = $_GET['toId'];
$myId = $_GET['myId'];

$_SESSION['toId'] = $toId;
$_SESSION['myId'] = $myId;
?>
    <!--<link rel="stylesheet" href="popover.css">-->
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="roomStyle.css">
    <script>


        setInterval(function () {

            $.post('p2pAJAX.php', {toId:<?php echo $toId ?>, myId:<?php echo $myId ?>}, function (text, status) {
                // document.getElementById('debug').innerHTML=status;
                if (status == 'success') {
                    var data = JSON.parse(text);
                    $("#chatBox").empty();
                    for (i = 0; i < data.length; i++) {
                        if (data[i].name == '<?php echo $member->name ?>') {
                            $("#chatBox").append("<p id='b'> <span id='myChat'>  &nbsp;" + data[i].text + "&nbsp;</span><small>&nbsp; << " + data[i].name + "</small><br><small><small>" + data[i].date + "</small></small></p>");
                        } else {
                            $("#chatBox").append("<p id='a'><small>" + data[i].name + " >> &nbsp;</small> <span id='chatSpan'> &nbsp;" + data[i].text + "&nbsp;</span><br><small><small>" + data[i].date + "</small></small></p>");

                        }
                    }
                }
            });
        }, 500);

        function sendMessage(text) {
            if (text != '') {
                $.get('p2p_insertmessage.php', {text: text}, function (data) {
                });
                document.getElementById('chat').value = '';
            }
            var div = document.getElementById('chatBox');
            div.scrollTop = div.scrollHeight;
        }


    </script>

    <div class="chatBox" id="chatBox">

    </div>
    <!--    <div id="debug" style="border: 1px black solid;width: 100px;height: 100px"></div>-->


    <div class="chatArea">
        <input type="text" name="chat" id="chat" onkeypress="if (event.keyCode==13){sendMessage(this.value);}">
        <!--            <input type="submit" value=">>" onclick="sendMessage($('#chat').val())">-->
        <button type="button" id="bt1" onclick="sendMessage($('#chat').val())"> >></button>
    </div>
<?php

if (!isset($_SESSION['member'])) header('Location: login.php');

