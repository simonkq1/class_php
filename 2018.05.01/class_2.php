<?php
foreach ($_REQUEST as $key => $value) {  //REQUEST  get&post都收
    if (gettype($value) == 'array') {
        foreach ($value as $k => $v) {
            echo "{$k} : {$v} <br>";
        }
    } else {
        $value = nl2br($value);
        echo "{$key} : {$value}<br>";
    }
}

