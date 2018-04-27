<?php

foreach ($_SERVER as $k => $v) {
    echo "{$k} => {$v}<br>";
}

echo '<hr>';


foreach ($_ENV as $k => $v) {
    echo "{$k} => {$v}<br>";
}