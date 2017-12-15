<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta name="format-detection" content="telephone=no">
    <title>我正在0元拼<?= $goodInfo->name?> - 拼多多 - 三亿人都在拼的拼多多</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="/css/fight-single/style.css" rel="stylesheet" />
    <link href="/css/fight-single/share.css" rel="stylesheet" />
    <link href="/css/fight-single/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <link rel="stylesheet" href="/css/fight-single/LArea.css">
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/iscroll-lite.min.js"></script>
</head>
<body id="activity-detail" class="zh_CN mm_appmsg" style="background-color:#333;">
    <div id="content-content"  style="height:40px;text-align:center;padding-top:10px;color:#999;font-size:80%;display:block;">网页由 mobile.yangkeduo.com 提供</div>
    <div id="wrapper" style="position:absolute;top:0;bottom:0;left:0;right:0;">
    <div id="scroll" style="position:absolute;background-color:#f3f3f3;z-index:100;width:100%;">
    <div class="tips">
        <i class="tips_succ"></i>
            <span id="header_title" onclick="document.getElementById('share_img').style.display='';">参团成功快去邀请好友加入吧</span>
    </div>
    <div id="group_detail" class="tm ">
        <div class="td tuanDetailWrap">
            <div class="td_img">    
                <a href="<?= $goodInfo->getUrl()?>"><img src="<?= $goodInfo->thumb?>"></a>
            </div>
            <div class="td_info">
                <p class="td_name">
                   <a href="<?= $goodInfo->getUrl()?>"><?= $goodInfo->name?></a>
                </p>
                <p class="td_mprice"><span><?= $goodInfo->member_count?>人团</span><i>¥</i><b><?= $goodInfo->discount / 100?></b></p>
            </div>
        </div>
        <a class="explain_tuan" id="share_button" href="javascript:void(0);" onclick="document.getElementById('share_tuan').style.display='';"></a>
        <div id="share_tuan" style="display:none;" onclick="document.getElementById('share_tuan').style.display='none';"><img src="/images/fight-single/share-tuan.png" ></div>
    </div>
    <div class="spec">
        <form action="javascript:addToCart(14,0,0,5,327,0);" method="post" name="HHS_FORMBUY" id="HHS_FORMBUY"></form>
    </div>
    <div class="pp">
        <div class="pp_users" id="pp_users">
            <?php
                for($i=0;$i<$goodInfo->member_count;$i++) {
                    if (isset($childrenInfo[$i])) {
                        ?>
                        <p class="pp_users_item pp_users_normal"><img src="<?= $childrenInfo[$i]->getAvatar()?>"></p>
                        <?php
                    } else {
                        ?>
                        <p class="pp_users_item pp_users_blank"><img src="/images/fight-single/avatar_4_64.png"></p>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="pp_box">
        <div class="pp_tips" id="flag_1_a" >优质商品，大家一起玩吧</div>
        <?php
        if ($lastCount == 0) {
            ?>
            <div class="pp_tips" id="flag_0_a"><b>当前拼团已满,快去创建一个拼团吧!</b></div>
            <?php
        } else {
            ?>
            <div class="pp_tips" id="flag_0_a" >还差<b><?= $lastCount?></b>人，盼你如南方人盼暖气~</div>
            <?php
        }
        ?>
        <div class="pp_state" id="flag_0_b" >
            <div class="pp_time"> 剩余<font id="time"></font>结束 </div>
        </div>
    </div>
    <div class="pp_list">
        <div id="showYaoheList">
            <?php
                foreach ($childrenInfo as $v) {
                    ?>
                    <div class="pp_list_item"> <img class="pp_list_avatar" alt="" src="<?= $v->getAvatar()?>">
                        <div class="pp_list_info" id="pp_list_info"> <span class="pp_list_name"><?= $v['is_chief'] == 1 ? '团长' : ''?><b><?= $v['username']?></b></span> <span class="pp_list_time"><?= date('Y-m-d H:i:s', $v['created_at'])?><?= $v['is_chief'] == 1 ? '开团' : '参团'?> </span> </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div id="chamemeber" class="pp_list_blank" >
            <?php
                if ($lastCount == 0) {
                    ?>
                    当前拼团已满,快去创建一个拼团吧!
            <?php
                } else {
                    ?>
                    还差<span><?= $lastCount?></span>人，让小伙伴们都来组团吧！
            <?php
                }
            ?>
        </div>
    </div>
    <div class="step">
        <div class="step_hd"> 拼团玩法<a class="step_more" href="/fight-single/rules">查看详情</a> </div>
        <div id="footItem" class="step_list">
            <div class="step_item">
                <div class="step_num">1</div>
                <div class="step_detail">
                    <p class="step_tit">选择 <br>
                        心仪商品</p>
                </div>
            </div>
            <div class="step_item  step_item_on">
                <div class="step_num">2</div>
                <div class="step_detail">
                    <p class="step_tit">开团或参团 <br>
                        到达人数</p>
                </div>
            </div>
            <div class="step_item " >
                <div class="step_num">3</div>
                <div class="step_detail">
                    <p class="step_tit">即可 <br>
                        团购成功</p>
                </div>
            </div>
        </div>
    </div>
    <div class="recommend_grid_wrap" style="padding-bottom:60px;">
        <div id="recommend" class="grid">
            <div class="recommend_head">你可能还喜欢</div>
            <div class="bd">
                <ul>
                    <?php
                        if (!empty($goodsList)) {
                            foreach ($goodsList as $good) {
                                ?>
                                <li>
                                    <div class="recommend_img"><a href="<?= $good->getUrl()?>"><img src="<?= $good->thumb?>"></a></div>
                                    <div class="recommend_title"><a href="<?= $good->getUrl()?>"><?= $good->name?></a></div>
                                    <div class="recommend_price">￥<span><?= $good->discount / 100?></span></div>
                                    <div class="like_click"> <a href="javascript:collect(21)" class="recommend_like"></a> </div>
                                </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fixopt">  
        <div class="fixopt_item">
            <?php
            if ($lastCount == 0) {
                ?>
                <a class="fixopt_btn" id="share_button" href="javascript:void(0);" onclick="document.getElementById('share_img').style.display='';">当前拼团已满,快去创建一个拼团吧!</a>
                <?php
            } else {
                ?>
                <a class="fixopt_btn join" id="share_button" href="javascript:void(0);" onclick="document.getElementById('share_img').style.display='';">还差<?= $lastCount?>人组团成功</a>
                <?php
            }
            ?>
        </div>
    </div>

    <div id="share_img" class="share_img" style="display: none" onclick="document.getElementById('share_img').style.display='none';">
        <p><img class="arrow" src="/images/fight-single/share.png" ></p>
        <p style="margin-top:20px; margin-right:50px;">点击右上角，</p>
        <p style="margin-right:50px;">将它分享给好友</p>
        <p style=" text-align:center; font-size:30px; line-height:80px;">参团人数+1</p>
        <p align="center">还差<?= $lastCount?>人就能组团成功</p>
        <p align="center">快邀请小伙伴参团吧</p>
    </div>
    </div>
    </div>

    <style>
        .weui-dialog__ft:after{
            border-top: none;
        }
    </style>
    <div id="speBg" style="z-index: 1000; display: none"></div>
    <div class="weui-dialog weui-dialog--visible join_activity" style="display: none">
        <div class="weui-dialog__hd">
            <strong class="weui-dialog__title">提示</strong>
        </div>
        <div class="weui-dialog__bd">
            <p class="weui-prompt-text">记录您的信息保存您的拼团信息</p>
            <input type="text" class="weui-input user-name weui-prompt-input" id="weui-prompt-input" value="" placeholder="姓名">
            <input type="number" class="weui-input tel weui-prompt-input" id="weui-prompt-input" value="" placeholder="手机号码">
        </div>
        <div class="weui-dialog__ft" style="border-top: none">
            <a href="javascript:;" class="weui-dialog__btn default onok" style="background: #fd537b;color: white;width: 70%;height: 40px;line-height: 40px;margin: 0 30px 20px 30px;border-radius: 30px;">加入拼单</a>
        </div>
    </div>

    <div class="weui-dialog weui-dialog--visible save_address" style="display: none">
        <div class="weui-dialog__hd">
            <strong class="weui-dialog__title">请输入您的收货地址</strong>
        </div>
        <div class="weui-dialog__bd">
            <div class="content-block">
                <input id="demo1" type="text" class="weui-input tel weui-prompt-input" readonly="" value="北京市,朝阳区">
                <input id="value1" type="hidden" value="20,234,504">
            </div>
            <input type="text" class="weui-input tel weui-prompt-input" id="weui-prompt-input" value="" placeholder="详细地址">
        </div>
        <div class="weui-dialog__ft" style="border-top: none">
            <a href="javascript:;" class="weui-dialog__btn default save_address_click" style="background: #fd537b;color: white;width: 70%;height: 40px;line-height: 40px;margin: 0 30px 20px 30px;border-radius: 30px;">保存地址</a>
        </div>
    </div>
</body>
<script src="/js/fight-single/LAreaData1.js"></script>
<script src="/js/fight-single/LAreaData2.js"></script>
<script src="/js/fight-single/LArea.js"></script>
<script type="text/javascript" src="/js/fight-single/haohaios.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<script type="text/javascript">
var isJoin = 0;
getCookie(function (is_join) {
    if (is_join == 1) {
        if (<?= $lastCount?> == 0) {
            $.alert('拼团成功,您的商品将会在次日发货,请耐心等候哦!');
        } else {
            isJoin = 1;
            $('#share_img').show();
        }
    } else if(<?= $lastCount?> == 0) {
        $.alert('当前拼团已满,快去创建一个拼团吧!', function () {
            window.location.href = "/fight-single/good?id=<?= $goodInfo->id?>";
        });
    }
});

$(function () {
    var t_img; // 定时器
    var isLoad = true; // 控制变量

    // 判断图片加载状况，加载完成后回调
    isImgLoad(function(){
        console.log(1);
        var h = $('#scroll').height();
        $('#scroll').css('height', h > window.screen.height ? h : window.screen.height + 1);
        new IScroll('#wrapper', {useTransform: false, click: true});
    });

    // 判断图片加载的函数
    function isImgLoad(callback){
        // 注意我的图片类名都是cover，因为我只需要处理cover。其它图片可以不管。
        // 查找所有封面图，迭代处理
        $('img').each(function(){
            // 找到为0就将isLoad设为false，并退出each
            if(this.height === 0){
                isLoad = false;
                return false;
            }
        });
        // 为true，没有发现为0的。加载完毕
        if(isLoad){
            clearTimeout(t_img); // 清除定时器
            // 回调函数
            callback();
            // 为false，因为找到了没有加载完成的图，将调用定时器递归
        }else{
            isLoad = true;
            t_img = setTimeout(function(){
                isImgLoad(callback); // 递归扫描
            },500); // 我这里设置的是500毫秒就扫描一次，可以自己调整
        }
    }

    var area1 = new LArea();
    area1.init({
        'trigger': '#demo1', //触发选择控件的文本框，同时选择完毕后name属性输出到该位置
        'valueTo': '#value1', //选择完毕后id属性输出到该位置
        'keys': {
            id: 'id',
            name: 'name'
        }, //绑定数据源相关字段 id对应valueTo的value属性输出 name对应trigger的value属性输出
        'type': 1, //数据源类型
        'data': LAreaData //数据源
    });
    area1.value=[1,13,3];//控制初始位置，注意：该方法并不会影响到input的value
    var area2 = new LArea();
    area2.init({
        'trigger': '#demo2',
        'valueTo': '#value2',
        'keys': {
            id: 'value',
            name: 'text'
        },
        'type': 2,
        'data': [provs_data, citys_data, dists_data]
    });
});

var daysms = 24 * 60 * 60 * 1000;
var hoursms = 60 * 60 * 1000;
var Secondms = 60 * 1000;
var microsecond = 1000;
var DifferHour = 0;
var DifferMinute = 0;
var DifferSecond = 0;
var systime=1513320465;
var team_start=1513320465*1000;
var team_end=1513320465*1000+7*24*3600*1000;
setInterval("systime_clock()",1000);
function systime_clock(){
	systime++;
}
function clock()
{	
  var time = new Date();
  time.setTime(systime*1000);
  var Diffms = team_end - time.getTime();
  var Diffms1=Diffms;
  var a='';
  var b='';
  var c='';
  var d='';
  DifferHour = Math.floor(Diffms / daysms);
  Diffms -= DifferHour * daysms;
  DifferMinute = Math.floor(Diffms / hoursms);
  Diffms -= DifferMinute * hoursms;
  DifferSecond = Math.floor(Diffms / Secondms);
  Diffms -= DifferSecond * Secondms;
  var dShhs = Math.floor(Diffms / microsecond);
  if(Diffms1>=0){
	   a="还剩<strong class='tcd-h'>"+DifferHour+"</strong>天";
	   b="<span >"+DifferMinute+"</span>时";
	   c="<span >"+DifferSecond+"</span>分";
	   d="<span>"+dShhs+"</span>秒";
	  document.getElementById('time').innerHTML =a+b+c+d;
  }else{
	  window.location.reload();
  }
}
window.setInterval("clock()", 1000); 

function getCookie(callback) {
    $.ajax({
        'type': 'get',
        'url': 'http://mobile.yangkeduo.com.gc7u.cn/fight-single/get-cookie?order_id=' + <?= $order_id?>,
        'xhrFields': {
            'withCredentials': true
        },
        'dataType': 'json',
        'success': function (data) {
            if (data.code == 0) {
                callback(data.is_join);
                if (data.is_join == 0) {
                    $('#header_title').html('快来入团吧就差你了!');
                    $('.fixopt_btn').html('我也要参团');
                    $('.fixopt_btn').attr('onclick', null);
                }
            }
        }
    });
}

$('.join').click(function () {
    if (isJoin == 0) {
        $('#speBg').show();
        $('.join_activity').show();
    }
});

$('.onok').click(function () {
    var reg = /^[\u4E00-\u9FA5]{2,4}$/;
    if(!reg.test($('.user-name').val())){
        $.alert('姓名填写有误');
    }
    if(!(/^1[34578]\d{9}$/.test($('.tel').val()))){
        $.alert("手机号码有误,请重填");
        return false;
    }

    $.ajax({
        'type': 'post',
        'url': '/fight-single/save-order',
        'data': {
            'good_id': <?= $goodInfo->id?>,
            'username': $('.user-name').val(),
            'tel': $('.tel').val(),
            'pid': <?= $order_id?>,
            '_csrf': '<?= Yii::$app->request->csrfToken?>'
        },
        'dataType': 'json',
        'success': function (data) {
            if (data.code == 0) {
                setCookie(data.order_id);
            } else {
                $.alert(data.err);
            }
        }
    });
});

function setCookie(order_id) {
    $.ajax({
        'url': 'http://mobile.yangkeduo.com.gc7u.cn/fight-single/set-cookie',
        'type': 'post',
        'data': {
            'order_id': order_id
        },
        'xhrFields': {
            'withCredentials': true
        },
        'dataType': 'json',
        'success': function (data) {
            window.location.href = "/fight-single/processing?order_id=" + order_id;
        }
    });
}

var enter = false;
var hiddenProperty = 'hidden' in document ? 'hidden' : 'webkitHidden' in document ? 'webkitHidden' : 'mozHidden' in document ? 'mozHidden' : null;
var visibilityChangeEvent = hiddenProperty.replace(/hidden/i, 'visibilitychange');
var onVisibilityChange = function(){
    if (!document[hiddenProperty] && enter == false && isJoin == 1) {
        $('.save_address').show();
        $('#speBg').show()
    }
};
document.addEventListener(visibilityChangeEvent, onVisibilityChange);

$('.save_address_click').click(function () {
    $('.save_address').hide();
    $('#speBg').hide();
    $('#share_img').hide();

    enter = true;
})

</script>
</html>