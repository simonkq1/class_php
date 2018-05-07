<?php
include_once 'sql.php';
include_once 'Product.php';

$sql = 'select * from product';
$result = $mysqli->query($sql);

?>
<a href="addProduct.php">AddNew</a>
<hr/>
Product List:<br>
<table border="1" width="100%">

    <tr>
        <td>id</td>
        <td>pname</td>
        <td>price</td>
        <td>qty</td>
    </tr>

<?php
while ($product = $result->fetch_object('product')){
    echo '<tr>';

    echo "<td>{$product->id}</td>";
    echo "<td>{$product->pname}</td>";
    echo "<td>{$product->price}</td>";
    echo "<td>{$product->qty}</td>";

    echo '</tr>';
}
?>
</table>
