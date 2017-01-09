<?php
include '../server/functions.php';

//检测连接
if ($link->connect_error) {
    die("连接失败：" . $link->connect_error);
}

$sql = "SELECT name,password FROM accounts WHERE name='" . $_GET["name"] . "' AND password='" . $_GET["password"] . "'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "1";
} else {
    echo "0";
}
$link->close();
?>
