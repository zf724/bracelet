<?php
include '../server/functions.php';

//检测连接
if ($link->connect_error) {
    die("连接失败：" . $link->connect_error);
}

$sql = "SELECT name FROM accounts WHERE name='" . $_GET["name"] . "'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "0";
}else {
    $sql = "INSERT INTO accounts (name, password, phone, birthday, weight, height) VALUES ('" . $_GET["name"] . "', '" . $_GET["password"] . "', " . $_GET["phone"] . ", " . $_GET["birthday"] . ", " . $_GET["weight"] . ", " . $_GET["height"] . ")";

    if ($link->query($sql) == TRUE) {
        echo "1";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "0";
    }
}
$link->close();
?>
