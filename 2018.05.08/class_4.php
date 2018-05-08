<script>
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var ret = xhttp.responseText;
            if(ret.substr(0,3)){
                document.getElementById('num').innerHTML = ret.substr(0,4)
            }else{

                document.getElementById('here').innerHTML = xhttp.responseText;
            }
        }



    };

    function test1() {
        var max = document.getElementById('max').value;
        xhttp.open('GET', 'class_5.php?max=' + max, true)
        xhttp.send();
    }

    function test2() {
        var max = document.getElementById('max').value;
        xhttp.open('POST', 'class_6.php', true)
        xhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');

        xhttp.send("max="+max);
    }
    // function test3(){
    //     setInterval(test1,1000);
    // }

    setInterval(function(){
        xhttp.open('GET', 'class_7.php', true)
        xhttp.send();

    },1000)


</script>
<input type="number" id="max"/>
<input type="button" onclick="test1()" value="test1">
<input type="button" onclick="test2()" value="test2"><br>
<input type="button" onclick="test3()" value="test3"><br>
<hr>
<div id="here"></div>

<hr>
<div id="num"></div>