<?php
$password = '123456';

$newPassword = password_hash($password, PASSWORD_DEFAULT);

echo $password . '<br>';
echo $newPassword . '<br>';

if (password_verify($password, $newPassword)) {
    echo 'OK';
} else {
    echo 'XX';
}