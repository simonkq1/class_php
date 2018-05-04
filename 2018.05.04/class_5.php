<?php
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'iii');
mysqli_set_charset($mysqli, 'utf8');
//    $mysqli->set_charset('utf8');

//    $sql = 'insert into cust(cname,tel,birthday) values ("test1","0911111111","1999-01-01")';
//    $mysqli->query($sql);   //增

//$sql2 = 'delete from cust where id = 113';
//$mysqli->query($sql2);  //刪


//$sql3 = 'update cust set cname="abc",tel="123" where id=112';
//$mysqli->query($sql3);  //修


$sql4 = 'select * from cust';       //查
//$result = $mysqli->query($sql4);

if ($result= $mysqli->query($sql4)){
    //$result->mysqli_result class 物件實體
//    echo 'OK';
    while( $data = $result->fetch_assoc()){

//        $data = $result->fetch_assoc();
        foreach ($data as $k =>$v){
            echo "{$k} : {$v} <br>";
        }
        echo '<hr>';
    }




}else {
    echo 'XX';
}