<!DOCTYPE HTML>

<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php

    include_once 'sql.php';
    include_once 'member.php';
    session_start();
    if (!isset($_SESSION['member'])) header('Location: login.php');
    $member = $_SESSION['member'];
    ?>
    <script type="text/javascript">
        var ws = new WebSocket("ws://localhost:8100");
        $(document).ready(WebSocketTest())


        function WebSocketTest() {

            if ("WebSocket" in window) {
                // alert("WebSocket is supported by your Browser!");

                // Let us open a web socket
                var wsa = ws.readyState;

                ws.onopen = function () {

                    var myName = document.getElementById('name_list').value;
                    // debugger;
                    // Web Socket is connected, send data using send()
                    ws.send(myName + " is online");
                    // alert("Message is sent...");
                };

                ws.onmessage = function (evt) {
                    var received_msg = evt.data;
                    var now = new Date()
                    $("#chatBox").append("<p id='a'><span id='chatSpan'> &nbsp; " + received_msg + " &nbsp; </span></p>")
                    // alert("Message is received..."+ received_msg);
                };

                ws.onclose = function () {

                    // websocket is closed.
                    alert("Connection is closed...");
                };
            } else {

                // The browser doesn't support WebSocket
                alert("WebSocket NOT supported by your Browser!");
            }
        }

        $("#chat").keypress(function (code) {
            if (code.keyCode == 13) {
                test1()
            }
        });


        var i = 0;

        function test1(input) {
            var input = document.getElementById('chat').value;
            var myName = document.getElementById('name_list').value;
            ws.send(myName + ":" + input);
            $("#chatBox").append("<p id='b'><span id='myChat'> &nbsp; " + input + " &nbsp; </span></p>");
            $("#chat").value = '';
        }

        $("#income_note").not($(":button")).keypress(function (ic_event) {
            if (ic_event.keyCode == 13) {
                if ($(this).attr("type") !== 'submit') {
                    var input = document.getElementById('chat').value;
                    ws.send(input);
                    $("#chat").value = '';
                }
            }
        })

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var ret = xhttp.responseText;
                var chatBox = document.getElementById('memberList')
                chatBox.innerHTML = ret
            }
            ;


        };

        setInterval(function () {
                xhttp.open('POST', 'test1.php', true)
                xhttp.send();
                // var div = document.getElementById('chatBox');
                // div.scrollTop = div.scrollHeight;

            }
            ,2000)
        //
        // function test1() {
        //     var val= $(this).attr("value");
        //     $("#debug").value = val;
        // }

        function p2p(toId) {
            // document.getElementById('debug').value=myid;

            var myName=document.getElementById('myname').value;
            // var yourName=document.getElementById(this).value;

            window.open("p2p.php?myName="+ myName+"&toId="+toId,1,config="location=no,toolbar=no")
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
            vertical-align: bottom;
            margin-top: 20px;

        }

        .chatArea {
            margin: auto;
            text-align: center;
            margin-top: 10px;

        }

        .list {
            position: absolute;
            border: 1px solid black;
            width: 200px;
            height: 530px;
            margin-top: 20px;
            margin-left: 100px;
            /*align-content: left;*/
            text-align: center;
            align-content: center;

        }

        .mlist {
            /*border:1px solid black;*/
            width: 100px;

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

        #myChat {
            /*width : 380px;*/
            background-color: #00CC00;
            border-radius: 20px;
            /*border-right: 10px solid transparent;*/
            /*transform: rotate(35deg);*/
        }

        #name_list,#myname {
            border: none;
            font-size: 1em;
            width: 195px;
            height: 30px;
            transition: background-color 0.1s;
            text-indent: 2em;
            padding: 0 1px 0 4px;
        }
        #name_list:hover,#myname:hover{
            background-color: lightgray;
        }

        #b {
            /*width : 380px;*/
            text-align: right;

        }

        #a {
            /*width : 380px;*/
            /*text-align: right;*/

        }
    </style>
</head>

<body>
<!--<div id="sse">-->
<!--    <a href="javascript:WebSocketTest()">Run WebSocket</a>-->
<!--</div>-->
<!---->
<!--<form>-->
<!--    <input type="text" id="input">-->
<!--    <button type="button" onclick="test1()"> >>></button>-->
<!--</form>-->
<?php
echo "<div class='list' id='onlineList'>";
echo "<h1 style='font-size: 20px;font-weight: bold' >online list</h1>";
echo "<div class='mlist' id='list_{$member->id}' ><input id='myname' name='{$member->name}' value='{$member->name}' readonly >"
    . " <div class='mlist' id='memberList'></div></div>";
//echo "<div class='mlist' id='onlineList'></div>";

echo "</div>"
?>


<div class="chatBox" id="chatBox">

</div>
<div class="chatArea">
    <!--    <form>-->
    <input type="text" name="chat" id="chat">
    <!--            <input type="submit" value=">>">-->
    <button type="button" id="bt1" onclick="test1()"> >></button>
    <!--    </form>-->
</div>

<div>
    <input id="debug">

</div>
</body>
</html>