<?php // Example 21-1: functions.php

if($_SERVER["SERVER_NAME"] == "zf.96.lt"){
    $dbhost  = 'mysql.hostinger.com.hk';
    $dbname  = 'u243319481_root';
    $dbuser  = 'u243319481_root';
    $dbpass  = 'rGZ9t4hMAF';
} else {
    $dbhost  = '127.0.0.1';
    $dbname  = 'bracelet';
    $dbuser  = 'root';
    $dbpass  = 'root';
}

$appname = "后台管理系统"; //
$firmwaremaxsize = 2000000;

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_connect_errno());

function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br />";
}

function queryMysql($query)
{
    global $link;
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    return $result;
}

function destroySession()
{
    $_SESSION=array();
    
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

function sanitizeString($var)
{
    global $link;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return mysqli_real_escape_string($link, $var);
}

function redirect($url)
{
	echo "<script type=text/javascript>window.location.href='$url';</script>";
}


?>
