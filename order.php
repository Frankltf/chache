<?php
$arr=[1,2,3,4,5];
$arr2=[];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻中心</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
</head>
<body>
    <div class="container">
        <h3>新闻列表</h3>
        <ul class="list-group">
            <?php foreach ($arr as $key => $value) { ?>
    <li class="list-group-item"><a href="#"><?php echo $value;?></a></li>
<?php } ?>
</ul>
</div>
</body>
</html>