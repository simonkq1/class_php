<h1>Main Page</h1>
<?php

include_once 'sql.php';
include_once 'member.php';
include_once 'Cart.php';
include_once 'Product.php';
include_once 'myconfig.php';

session_start();
if (!isset($_SESSION['member'])) header('Location: login.php');


$sql = 'select * from product';
$result = $mysqli->query($sql);

?>
<hr>
<div width="70%" align="center">

    Product List:<br>
    <table border="2" width="70%">
        <tr>
            <th>PName</th>
            <th>Price</th>
            <th>Num.</th>
            <th>Update Cart</th>
        </tr>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script>
            function addCart(pid) {
                var num = $("#num_"+pid).val();
                alert(pid + ':' + num);

            }
        </script>

        <?php
        while ($product = $result->fetch_object('product')) {
            echo '<tr>';


            echo "<td>{$product->pname}</td>";
            echo "<td>{$product->price}</td>";
            echo "<td><input type='number' id='num_{$product->id}' ></td>";
            echo "<td><input type='button' value='update' onclick='addCart({$product->id})' ></td>";


            echo '</tr>';

        }
        ?>


    </table>

</div>

<hr>

<a href="logout.php">Logout</a>
