<!--<table border="1" width="70%">-->
    <?php
    function primeNumbers($num){

        for ($i=1;$i<=$num;$i++){
            if($num%$i==0){
                echo $i.':'.'prime<br>';
            }else{
                echo $i.':'.'not prime<br>';
            }

        }
    }
    primeNumbers(100)
    ?>
<!--</table>-->



