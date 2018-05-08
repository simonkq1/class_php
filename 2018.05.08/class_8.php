<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    function test1() {
        $("#id1").load('class_5.php', function (text, ststus, xhttp) {
            console.log(text + ':' + ststus);
            $("#id2").html(++text);
        });
    }


    $(document).ready(function () {
        $("#bt1").click(function () {
            $.get('class_5.php', function (data, status) {
                $("#id1").html(data + " : " + status);
            });
        });

        $("#bt2").click(function () {
            $.post('class_5-1.php',
                {max: 10},
                function (data, status) {
                    $("#id3").html(data + " : " + status);
                });
        });

    });


</script>


<input type="button" onclick="test1()" value="sayHello"/>
<div id="id1"></div>
<div id="id2"></div>
<div id="id3"></div>
<button id="bt1"> click me</button>
<button id="bt2"> click me2</button>

