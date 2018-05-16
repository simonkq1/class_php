<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>


    $(document).ready(function () {
        $("#bt1").click(function () {
            $.get('test2.php', function (text, status) {
               var data= JSON.parse(text);
                for(i=0;i<data.length;i++){
                    $("#id1").append(""+i+" : "+data[i].name+"<br>")
                }
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

