<?php
include 'deviceheader.php';

echo <<<END

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="devicelist.php">设备列表</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">

<div class="btn-toolbar">
    <button class="btn">导 出</button>
</div>
END;

echo <<<END
		
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>用户名</th>
          <th>密码</th>
          <th>电话</th>
		  <th>生日</th>
          <th>体重</th>
          <th>身高</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
END;



$result = queryMysql(" select name, password, phone, birthday, weight, height from accounts ORDER BY id asc ");
$num    = mysqli_num_rows($result);

for ($j = 0 ; $j < $num ; ++$j)
{
    $row = mysqli_fetch_row($result);

    echo <<<END
       <tr>
          <td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td>$row[5]</td>
          <td>
              <a href="deviceedit.php?name=$row[0]"><i class="icon-pencil"></i></a>
              <a href="javascript:void(0)" onclick="ConfirmDel('$row[0]')"><i class="icon-remove"></i></a>
          </td>
        </tr>
END;
    
}


echo <<<END

      </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">确认</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">您确认删除这个设备吗?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
        <button class="btn btn-danger" data-dismiss="modal" onclick="deleteItem()">删除</button>
    </div>
</div>
<script>
    function ConfirmDel(item){
		$('#myModal').val(item);
		$('#myModal').modal('show');
	}
	function deleteItem(){
	    location.href = "devicedelete.php?name=" + $('#myModal').val();
	}
</script>

END;

include 'bottom.php';
?>