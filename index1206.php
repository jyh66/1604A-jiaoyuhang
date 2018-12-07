<?php
use yii\widgets\LinkPager;
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/public.css">
    <!--    <link type="text/css" rel="stylesheet" href="http://cdn.staticfile.org/twitter-bootstrap/3.1.1/css/bootstrap.min.css"/>-->
    <script src="../js/jquery-1.8.0.min.js"></script>
    <script src="../js/jqPaginator.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="window">
    <div class="class_1">
        <form action="index.php?r=user/index" method="post">
            <input type="hidden" name="_csrf" value="<?=YII::$app->request->csrfToken?>">
            <input type="text" name="name">
            <span><button>搜索</button></span>
        </form>
        <div class="class_1_1">
            <a href="#" style="color: red">清仓风暴</a>
            <a href="#">小米电视</a>
            <a href="#">酷爽冰饮</a>
            <a href="#">惊天满减</a>
            <a href="#">手机99起</a>
            <a href="#">暑期阅读</a>
            <a href="#">苹果免息</a>
            <a href="#">机票20元</a>
        </div>
    </div>
    <div class="class_3">
        <?php foreach ($data as $k => $v) {  ?>
            <ul>
                <li>
                    <img src="<?php echo $v['img'] ?>">
                    <p><?php echo $v['name'] ?></p>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
</body>
</html>
<center>
<?php
echo LinkPager::widget(['pagination' => $pages]);
?>
</center>
