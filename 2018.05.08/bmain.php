<?php
include_once 'sql.php';
include_once 'Product.php';
include_once 'myconfig.php';

if (isset($_REQUEST['delid'])){
    //delete data
    $delid = $_REQUEST['delid'];
    $sql="delete from product where id = {$delid}";
    $result = $mysqli->query($sql);
    header("Location: bmain.php");
}

//$sql = 'select count(*) as `sum` from product';
//$result = $mysqli->query($sql);
//$data=$result->fetch_assoc();
//$sum=$data['sum'];
//echo $sum.'<br>';

$sql = 'select id from product';
$result = $mysqli->query($sql);
$sum = $result->num_rows;
echo $sum.'<br>';

$totalPage= ceil($sum/RPP);

$page = 1;

if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
}
$start = ($page-1)*RPP;


//$sql = 'select * from product';
$sql = "select * from product order by id limit {$start},". RPP;
//$sql = 'select * from product order by qty,pname desc';
$result = $mysqli->query($sql);

?>
<a href="addProduct.php">AddNew</a>
<hr/>
Product List:<br>
<table border="2" width="100%">

    <tr>
        <td>id</td>
        <td>pname</td>
        <td>price</td>
        <td>qty</td>
        <td>Delete</td>
        <td>Edit</td>
    </tr>
    <script>
        function confirmDelet(pname){
            return confirm('Delete '+pname+'?')
        }
    </script>

<?php
while ($product = $result->fetch_object('product')){
    echo '<tr>';

    echo "<td>{$product->id}</td>";
    echo "<td>{$product->pname}</td>";
    echo "<td>{$product->price}</td>";
    echo "<td >{$product->qty}</td>";
//    echo "<td><a href='mytest.php' onclick='return confirmDelet(\"{$product->pname}\");'>Delete</a></td>";
    echo "<td><a href='?delid={$product->id}' onclick='return confirmDelet(\"{$product->pname}\")'>Delete</a></td>";
    echo "<td><a href='editProduct.php?editid={$product->id}'>Edit</a></td>";

    echo '</tr>';

}
?>
</table>
<a href='?page=<?php echo 1?>'>First</a>
 <a href='?page=<?php echo $page>1?$page-1:$page ?>'>Prev</a>
 <?php echo $page;?>
 <a href='?page=<?php echo $page<$totalPage?$page+1:$page ?>'>Next</a>
<a href='?page=<?php echo $totalPage?>'>Last</a>
