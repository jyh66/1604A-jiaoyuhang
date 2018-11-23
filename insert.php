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
<!--//跳转详情-->
<form action="index.php?r=goods/insert_do" method="post">
    <input type="hidden" name="_csrf" v-bind:value="<?=Yii::$app->request->csrfToken?>">
<!--    //添加数据-->
    <div class="form-group">
        <label for="name">名字</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="name">性别</label>
        <input type="text" class="form-control" name="sex">
    </div>
    <div class="form-group">
        <label for="name">身份证号</label>
        <input type="text" class="form-control" name="idcar">
    </div>
    <div class="form-group">
        <label for="name">班级</label>
        <input type="text" class="form-control" name="class">
    </div>
    <input type="submit" class="btn btn-default" v-bind:value="添加">
</form>
</body>
</html>