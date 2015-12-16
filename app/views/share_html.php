<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="email=no">
	<meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="css/common.css">
	<title>求ps大神</title>
</head>
<body>
    <h2 class="header">你的头像做好啦!~~~</h2>
    <section class="info">  
        <a href='https://mp.weixin.qq.com/s?__biz=MjM5ODc3MTc4MA==&mid=205925505&idx=1&sn=48ed7843d8db06d61520591003d6d5d4&scene=1&key=c468684b929d2be2ef8f7b34bcc285bf1a7f61188c461957fe1fd178c697c694f8d8fc902b943d921464da594d3f79d2&ascene=0&uin=MTE3NTMzMzUwMA%3D%3D&devicetype=iMac+MacBookPro11%2C1+OSX+OSX+10.9.5+build(13F1066)&version=11020012&pass_ticket=%2FObuAjem0tru2iT8qgtn8FwKLXRaJzOeEUAr%2BWeW3N7r2wKFwp02GKNgborKYDNp'>
            <?php echo date("Y-m-d", $create_time);?>
            <span>求ps大神（不是菩萨哦</span>
        </a> 
    </section>
    <section class="tips">
        <p>长按图片可保存作为头像哦~~~</p>
    </section>
    <section class="container">
        <img src="<?php echo $url?>"/>
    </section>
    <p>&nbsp;&nbsp;如果喜欢要转发哦~！</p>
    <section class="container">
        <img src="/public/img/bar.png"/>
    </section>
</body>
<style>
body {
    margin: 0;
    padding: 0;
}
h2.header {
    padding-left: 10px;  
    margin-bottom: 12px;
    margin-top: 10px;
    line-height: 1;
    font-weight: 400;
    font-size: 24px;
}
section {
    padding: 0 10px;
}
section.info a{
    text-decoration: none;
    color: #8c8c8c;
}
section.info span{
    text-decoration: none;
    color: #607fa6;
}
section.tips {

}
section.container {
    text-align:center;
}
section.container img{
    width: 100%;
}
</style>
</html>
