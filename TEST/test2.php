
<script>


    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var ret = xhttp.responseText;
                document.getElementById('chatBox').innerHTML = ret
        };



    };
    window.onload = function(){
    setInterval(function(){
        xhttp.open('POST', 'test3.php', true)
        xhttp.send();

    },1000)

    }
</script>

<div id="chatBox">

</div>
<div id="chatBox1">

</div>