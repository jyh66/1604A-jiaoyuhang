<?php use yii\widgets\LinkPager;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
<!--        //添加-->
        <a href="index.php?r=goods/insert" class="btn btn-default">添加</a>
<!--        //搜索-->
        <form action="index.php?r=goods/index" method="post">
            <input type="hidden" name="_csrf" v-bind:value="<?=Yii::$app->request->csrfToken?>">
            <div class="form-group">
                <input type="text">
                <input type="button" value="搜索">
            </div>
        </form>
        <tr>
            <td>ID</td>
            <td>名字</td>
            <td>性别</td>
            <td>身份证号</td>
            <td>班级</td>
            <td>操作</td>
        </tr>
<!--        //循环遍历数据库-->
        <?php foreach ($data as $k => $v) { ?>
            <tr>
                <td><?php echo $k+1;?></td>
                <td><?php echo $v['name'];?></td>
                <td><?php echo $v['sex'];?></td>
                <td><?php echo $v['idcar'];?></td>
                <td><?php echo $v['class'];?></td>
                <td><a href="index.php?r=goods/delete&id=<?php echo $v['id']?>" class="btn btn-default btn-xs">删除</a></td>
            </tr>
        <?php } ?>
    </table>
<!--    //分页-->
    <?php   echo LinkPager::widget(['pagination' => $pages,]); ?>
</body>
</html>