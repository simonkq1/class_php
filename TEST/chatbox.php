<?php

?>

<style>
    .chatBox{
        position:relative;
        border:1px solid black ;
        width : 400px;
        height : 500px;
        margin: auto;
        overflow-y: scroll;
    }
    .chatArea{
        margin: auto;
        text-align: center;
        margin-top:10px;

    }
    #chat{

        width: 365px;
        height:30px;
        border:1px solid black;
        border-radius: 20px;
        outline: none;
    }
</style>
<div class="chatBox">

</div>
<div class="chatArea">
<form>
    <input type="text" name="chat" id="chat" >
    <button type="button"> >> </button>
</form>
</div>
