<!DOCTYPE HTML>

<html>
<head>
<!---->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!---->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="roomStyle.css">
    <?php

    include_once 'sql.php';
    include_once 'member.php';
    include_once 'setInterval.php';
    session_start();
    if (!isset($_SESSION['member'])) header('Location: login.php');
    $member = $_SESSION['member'];

    ?>
    <script type="text/javascript">
        var ws = new WebSocket("ws://localhost:8080");
        $(document).ready(WebSocketTest(),setOnline())


        function WebSocketTest() {

            if ("WebSocket" in window) {
                // alert("WebSocket is supported by your Browser!");

                // Let us open a web socket
                var wsa = ws.readyState;

                ws.onopen = function () {

                    var myName = document.getElementById('<?php echo $member->id ?>').value;
                    // debugger;
                    // Web Socket is connected, send data using send()
                    ws.send(myName + " is online");
                    // alert("Message is sent...");
                };

                ws.onmessage = function (evt) {
                    var received_msg = evt.data;
                    // var now = new Date();
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



        function test1(input) {
            var input = document.getElementById('chat').value;
            var myName = document.getElementById('<?php echo $member->id ?>').value;
            if(input != ''){
                ws.send(myName + ":" + input);
                $("#chatBox").append("<p id='b'><span id='myChat'> &nbsp; " + input + " &nbsp; </span></p>");
                document.getElementById('chat').value= '';
            }
            var div = document.getElementById('chatBox');
            div.scrollTop = div.scrollHeight;
        }


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
                xhttp.open('POST', 'onlineList.php', true)
                xhttp.send();
            },2000);


function setOnline(){
    setInterval(function(){
        $.get('setOnline.php', function (data) {
        })
    },60000)

}


        $(document).ready(function () {
            var numRequest = new XMLHttpRequest();
            numRequest.onreadystatechange = function () {
                if (numRequest.readyState == 4 && numRequest.status == 200) {
                    var ret = numRequest.responseText;
                    var num = document.getElementById('numOfOnline');
                    num.innerHTML = ret
                }
            };



        setInterval(function () {
                numRequest.open('POST', 'nowOnline.php', true);
                numRequest.send();
                // var div = document.getElementById('chatBox');
                // div.scrollTop = div.scrollHeight;

            }
            , 1000);
        //
        });
        //


        //
        // function test1() {
        //     var val= $(this).attr("value");
        //     $("#debug").value = val;
        // }


        function p2p(toId) {
            // document.getElementById('debug').value=myid;

            var myName=document.getElementById('<?php echo $member->id ?>').value;
            // var yourName=document.getElementById(this).value;

            window.open("p2p.php?myId="+ <?php echo $member->id ?> +"&toId="+toId,1,config="location=no,toolbar=no")
        }

    </script>
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
<div class='list' id='onlineList'>
<h1 style='font-size: 20px;font-weight: bold' >online list</h1>
<small><span>Online People : </span><span id='numOfOnline' style='color: red'></span></small>
<div class='mlist' id='list_<?php echo $member->id ?>' ><input class='myname' id='<?php echo $member->id ?>' name='<?php echo $member->name ?>' value='<?php echo $member->name ?>' readonly >
<div class='mlist' id='memberList'></div></div>
<div class='mlist' id='onlineList'></div>

</div>
<a href="logout.php"> Logout </a>


<div class="chatBox" id="chatBox">

</div>
<div class="chatArea">
    <!--    <form>-->
    <input type="text" name="chat" id="chat" onkeypress="if (event.keyCode==13){ test1(this.value);}">
    <!--            <input type="submit" value=">>">-->
    <button type="button" id="bt1" onclick="test1()"> >></button>
    <!--    </form>-->
</div>

<!--<div>-->
<!--    <input id="debug">-->
<!---->
<!--</div>-->
</body>
</html>