<?php
include 'reportheader.php';

echo <<<END

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="reportlist.php">报表管理</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">	
<div id='canvasDiv'>
    <script type="text/javascript" src="javascript/ichart.1.2.1.min.js"></script>
    <script type="text/javascript" src="javascript/report.js"></script>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">确认</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">您确认删除这个用户吗?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" data-dismiss="modal">删除</button>
    </div>
</div>

END;

include 'bottom.php';
?>