<?php
include 'userheader.php';

echo <<<END

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">用户管理</li>
              <li class="active"><a href="usercreate.php">新建用户</a></li>
              <li><a href="userlist.php">用户列表</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">

END;

echo <<<END

		<div class="well">
		<h3>欢迎使用Bracelet后台管理系统！</h3>
		</div>

END;

include 'bottom.php';
?>