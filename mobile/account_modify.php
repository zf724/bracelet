<?php
include '../server/functions.php';

//检测连接
if ($link->connect_error) {
    die("连接失败：" . $link->connect_error);
}

$sql = "SELECT name,password FROM accounts WHERE name='" . $_GET["name"] . "' AND password='" . $_GET["password_old"] . "'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    $sql = "UPDATE accounts SET password='" . $_GET["password_new"] . "', phone=" . $_GET["phone"] . ", birthday=" . $_GET["birthday"] . ", weight=" . $_GET["weight"] . ", height=" . $_GET["height"] . " WHERE name='" . $_GET["name"]. "' AND password='" . $_GET["password_old"] . "'";
    $result = $link->query($sql);
    echo "1";
} else {
    echo "0";
}
$link->close();
?>
