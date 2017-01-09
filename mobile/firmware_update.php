<?php
include '../server/functions.php';

//检测连接
if ($link->connect_error) {
    die("连接失败：" . $link->connect_error);
}

$sql = "SELECT version, url FROM firmware WHERE enabled=1";

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_array($result))
{
    $arr = array('version' => $row['version'], 'url' => $row['url']);
    echo json_encode($arr);	
}

$link->close();
?>
