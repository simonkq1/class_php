
<html>
<head>

</head>
<body>
<form name="myform" action="http://192.168.2.2/cgi-bin/led.cgi" target="ledframe">
    <input type="hidden" name="pin" value="12">
   On <input type="radio" name="ison" value="1">
   Off <input type="radio" name="ison" value="0"><br>
    <input type="button" name="ledbn" value="LED OFF" onclick="led()"><br>
    <input type="submit">
</form>

<iframe name="ledframe" frameborder="0" width="0" height="0"></iframe>
<script>
    var isOn = false;
    function led() {
        var url = "";
        if (isOn){
            document.myform.ison.value = "0";
            document.myform.ledbn.value = "LED ON";
        }else {
            document.myform.ison.value = "1";
            document.myform.ledbn.value = "LED OFF";
        }
        isOn = !isOn;
        document.myform.submit()
    }
</script>
</body>
</html>
