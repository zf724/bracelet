<?php
include 'functions.php';

$name =$error= "";

if(isset($_GET['version']))
{
	$version = sanitizeString ( $_GET['version'] );

	if ($version == "") {
		$error = "版本号为空！";
	} else {
		$query = "DELETE from firmware WHERE version = '$version'";

		if (queryMysql($query) == true) {
            $error = "删除成功！";
		} else {
            $error = "删除失败！";
		}

		redirect('firmwarelist.php');
	}
}

?>