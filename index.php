<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table class="table">
    <a href="index.php?r=goods/index" class="btn btn-default">搜索</a>
    <a href="index.php?r=goods/insert" class="btn btn-default">添加</a>
    <tr>
        <td>ID</td>
        <td>名字</td>
        <td>操作</td>
    </tr>
    <?php foreach ($data as $k => $v) { ?>
        <tr>
            <td><?php echo $k+1;?></td>
            <td><?php echo $v['name'];?></td>
            <td><a href="index.php?r=goods/delete&id=<?php echo $v['id'];?>" class="btn btn-success btn-xs">删除</a></td>
            <td><a href="index.php?r=goods/update&id=<?php echo $v['id'];?>" class="btn btn-success btn-xs">修改</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>