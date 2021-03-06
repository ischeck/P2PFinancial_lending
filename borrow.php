<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>borrow</title>
     <!-- bootstrap.css -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/borrow.min.css">

     <!-- jquery.js -->
    <script src="./lib/jqueryTemplate/jquery.js"></script>
    <!--获取登录用户是否登录-->
    <script src="./dist/js/loginState.min.js"></script>
</head>
<body>
    <!-- header -->
     <?php 
     require_once("./header.php");
     require_once("./menuNav.php");
     ?>
<div class="container">
    <div class="row" id="loan">
        <!-- 信用贷 -->
        <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading" id="creaditLoan">信用贷</div>
            <div class="panel-body">
                <p>可借金额 ¥ 2,000.00</p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <p><img src="./images/sequare.png">填写基本资料</p>
                <p><img src="./images/sequare.png">身份认证</p>
                <p><img src="./images/sequare.png">视频认证</p>
                <p> <button type="button" class="btn btn-info"><a href="borrow_apply.php?type=t1" >立即申请</a></button></p>
                </div>
            </div>
        </div>
        <!-- 车易贷 -->
        <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading " id="carLoan">车易贷</div>
            <div class="panel-body">
                <p>可借金额 ¥ 2,000.00</p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <p><img src="./images/sequare.png">填写基本资料</p>
                <p><img src="./images/sequare.png">身份认证</p>
                <p><img src="./images/sequare.png">视频认证</p>
                <p> <button type="button" class="btn btn-info"><a href="borrow_apply.php?type=t2" >立即申请</a></button></p>
                </div>
            </div>
        </div>
        <!-- 房易贷 -->
        <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading"id="houseLoan">房易贷</div>
            <div class="panel-body">
                <p>可借金额 ¥ 12,000.00</p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <p><img src="./images/sequare.png">填写基本资料</p>
                <p><img src="./images/sequare.png">身份认证</p>
                <p><img src="./images/sequare.png">视频认证</p>
                <p> <button type="button" class="btn btn-info"><a href="borrow_apply.php?type=t3" >立即申请</a></button></p>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- footer -->
    <?php 
     include_once("./footer.php")
     ?>

<!-- bootstrap.js -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>
</body>
</html>