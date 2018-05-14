<!DOCTYPE HTML>

<html>
<head>

    <script type="text/javascript">
        var ws = new WebSocket("ws://localhost:8080");
        function WebSocketTest() {

            if ("WebSocket" in window) {
                // alert("WebSocket is supported by your Browser!");

                // Let us open a web socket
                var wsa = ws.readyState;

                ws.onopen = function () {

                    // Web Socket is connected, send data using send()
                    ws.send("Message to send");
                    alert("Message is sent...");
                };

                ws.onmessage = function (evt) {
                    var received_msg = evt.data;
                    alert("Message is received..."+ received_msg);
                };

                ws.onclose = function() {

                    // websocket is closed.
                    alert("Connection is closed...");
                };
            } else {

                // The browser doesn't support WebSocket
                alert("WebSocket NOT supported by your Browser!");
            }
        }

        var i = 0;

        function test1(input) {
            var input = document.getElementById('input').value;
            ws.send(input);
            input.empty();
        }


    </script>

</head>

<body>
<div id="sse">
    <a href="javascript:WebSocketTest()">Run WebSocket</a>
</div>

<form>
    <input type="text" id="input">
    <button type="button" onclick="test1()"> >>></button>
</form>

</body>
</html>