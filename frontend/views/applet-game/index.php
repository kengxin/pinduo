<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>领取奖励</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <link href="/css/index.css" rel="stylesheet">
    <style type="text/css">
        .elegant-aero {
            margin-left:auto;
            margin-right:auto;
            max-width: 500px;
            background: #FFFAE7;
            padding: 20px 20px 20px 20px;
            font: 12px Arial, Helvetica, sans-serif;
            color: rgb(254,230,180);
        }
        .elegant-aero h1 {
            font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding: 10px 10px 10px 20px;
            display: block;
            background:rgb(203,84,65);
            border-bottom: 1px solid #B8DDFF;
            margin: -20px -20px 15px;
        }
        .elegant-aero h1>span {
            display: block;
            font-size: 11px;
        }
        .elegant-aero label>span {
            float: left;
            margin-top: 10px;
            color: #5E5E5E;
        }
        .elegant-aero label {
            display: block;
            margin: 0px 0px 5px;
        }
        .elegant-aero label>span {
            float: left;
            width: 20%;
            text-align: right;
            padding-right: 15px;
            margin-top: 10px;
            font-weight: bold;
        }
        .elegant-aero input[type="text"], .elegant-aero input[type="email"], .elegant-aero textarea, .elegant-aero select {
            color: #888;
            width: 50%;
            padding: 0px 0px 0px 5px;
            border: 1px solid #C5E2FF;
            background: #FBFBFB;
            outline: 0;
            -webkit-box-shadow:inset 0px 1px 6px #ECF3F5;
            box-shadow: inset 0px 1px 6px #ECF3F5;
            font: 200 12px/25px Arial, Helvetica, sans-serif;
            height: 30px;
            line-height:15px;
            margin: 2px 6px 16px 0px;
        }
        .elegant-aero textarea{
            height:100px;
            padding: 5px 0px 0px 5px;
            width: 70%;
        }
        .elegant-aero select {
            background: #fbfbfb url('down-arrow.png') no-repeat right;
            background: #fbfbfb url('down-arrow.png') no-repeat right;
            appearance:none;
            -webkit-appearance:none;
            -moz-appearance: none;
            text-indent: 0.01px;
            text-overflow: '';
            width: 50%;
        }
        .elegant-aero .button{
            padding: 10px 30px 10px 30px;
            background: #66C1E4;
            border: none;
            color: #FFF;
            box-shadow: 1px 1px 1px #4C6E91;
            -webkit-box-shadow: 1px 1px 1px #4C6E91;
            -moz-box-shadow: 1px 1px 1px #4C6E91;
            text-shadow: 1px 1px 1px #5079A3;
        }
        .elegant-aero .button:hover{
            background: #3EB1DD;
        }
    </style>
</head>
<body>
<div class="challenge active clicks">挑战领奖</div>
<div class="record clicks">领奖记录</div>
<div class="users" id='userA'>
<!--    <div class="user">-->
<!--        <div class="hp"><img src="./static/img/1.png" style="width:100%"> </div>-->
<!--        <div class="username">获得了一个娃娃</div>-->
<!--        <button class="receive lingqu">领取</button>-->
<!--    </div>-->
    <div style="text-align: center;line-height: 200px;">
        您已申请领取或还未挑战成功
    </div>
</div>
<div class="users" id='userB' style="display: none">
<!--    <div class="user">-->
<!--        <div class="hp"><img src="./static/img/2.png" style="width:100%"></div>-->
<!--        <div class="username">领取了一个娃娃</div>-->
<!--        <button class="receive chakan">查看</button>-->
<!--    </div>-->

    <div style="text-align: center;line-height: 200px;">
        您还没有领奖记录
    </div>
</div>
<div class="bomb">
    <div class="address">
        <div class="close" title="关闭">x</div>

        <form action="" method="post" class="elegant-aero">
            <h1>添加新地址
                <span>请填写真实数据方便您接受奖品</span>
            </h1>
            <label>
                <span>收货姓名 :</span>
                <input id="name" type="text" name="name" placeholder="" />
            </label>
            <label>
                <span>手机号 :</span>
                <input id="iphone" type="text" name="iphone" placeholder="" />
            </label>
            <label>
                <span>地址 :</span>
                <div data-toggle="distpicker" style="">
                    <select></select>
                    <select style="margin-left: 25%;"></select>
                    <select style="margin-left: 25%;"></select>
                </div>
                <input id="address" type="text" name="address" placeholder="详细地址"  style="margin-left: 25%;"/>
            </label>
            <label class="feineishi">
                <span>&nbsp;</span>
                <input type="button" class="button" value="提交" />
            </label>
        </form>
    </div>
</div>
<div class="bombb" style="display: none">
    <div class="address">
        <div class="close" title="关闭">x</div>

        <form action="" method="post" class="elegant-aero">

            <h1>查看信息
                <span></span>
            </h1>
            <label>
                <span>收货姓名:</span>
                <input id="name" type="text" name="name" value="ABC" />
            </label><br/>
            <label>
                <span>手机号 : </span>
                <input id="iphone" type="text" name="iphone" placeholder="13312341234" />
            </label><br/>
            <label>
                <span>地址 : </span>
                <input id="address" type="text" name="address" placeholder="北京市朝阳区天安门广场108号" />
            </label><br/>
            <label>
                <span>订单号 : </span>
                <input id="address" type="text" name="address" placeholder="1321546786363541351" />
            </label>
        </form>
    </div>
</div>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/rem.js"></script>
<script src="/js/location.js"></script>
<script src="/js/distpicker.data.js"></script>
<script src="/js/distpicker.js"></script>
<script src="/js/main.js"></script>
<script>
    $('.users .user .lingqu').click(function () {

        $('.bomb').show();
    });
    $('.users .user .chakan').click(function () {

        $('.bombb').show();
    });
    $('.bomb .address .close').click(function () {
        $('.bomb').hide();
    });
    $('.bombb .address .close').click(function () {
        $('.bombb').hide();
    });
    $('.bomb .address .feineishi').click(function () {
        $('.bomb').hide();
    });
    $('.clicks').click(function(){
        if($(this).index() == 0){
            $('#userB').hide();
            $('#userA').show();
            $(this).addClass('active');
            $(this).removeClass('activetextRemove');
            $(this).siblings().removeClass('active');
            $(this).siblings().removeClass('activetext');
        }else{
            $('#userA').hide();
            $('#userB').show();
            $(this).addClass('active');
            $(this).addClass('activetext');
            $(this).siblings().removeClass('active');
            $(this).siblings(".clicks").addClass('activetextRemove');
        }
    });
</script>
</html>