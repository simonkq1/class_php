<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include_once 'sql.php';

if(isset($_REQUEST['pname'])){
    $pname=$_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $qty = $_REQUEST['qty'];

    $sql="insert into `product` (`pname`,`price`,`qty`) values ('{$pname}',{$price},{$qty})";
    $mysqli->query($sql);

    $newId=$mysqli->insert_id;   //insert  的id
//    echo $newId;
//    處理影像資料
    if(isset($_FILES['pimg'])){
        $pimg=$_FILES['pimg'];
//        $pimg['tmp_name']['error']
        foreach ($pimg['error'] as $i => $errno){
            if($errno==0){
                copy($pimg['tmp_name'][$i],"../2018.05.01/test3/p_{$newId}_{$x}.jpg");
                $x++;
            }
        }
    }




    header('Location: bmain.php');
}

?>

<form method="post" enctype="multipart/form-data">
    Pname:<input name="pname"> <br>
    Price:<input type="number" name="price"> <br>
    Qty.:<input type="number" name="qty"> <br>

    <input type="file" name="pimg[]" /><br>
    <input type="file" name="pimg[]" /><br>
    <input type="file" name="pimg[]" /><br>
    <input type="file" name="pimg[]" /><br>

    <input type="submit" value="add">

</form>
