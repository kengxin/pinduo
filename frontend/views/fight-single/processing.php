<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta name="format-detection" content="telephone=no">
    <script type='text/javascript'>window.BWEUM||(BWEUM={});BWEUM.info = {"stand":true,"agentType":"browser","agent":"browsercollector.oneapm.com/static/js/bw-send-415.6.31.js","beaconUrl":"browsercollector.oneapm.com/beacon","licenseKey":"rNyn6~RZVFeaBR6Y","applicationID":9935906};</script><script type="text/javascript">/*!OneAPM-v415.6.31 */!function(){window.BWEUM||(window.BWEUM={});var a;window.BWEUM.require=a,window.apmFirstbyte=window.apmUserFirstbyte||(new Date).getTime(),window.apmBICookieUser="AIPortal_Res_Account",window.apmBIUserFindLazy="AIPortal_Res_Account",window.apmBISessionTime=30,a=function b(c,d,e){function f(h,i){if(!d[h]){if(!c[h]){var j="function"==typeof a&&a;if(!i&&j)return j(h,!0);if(g)return g(h,!0);var k=new Error("Cannot find module '"+h+"'");throw k.code="MODULE_NOT_FOUND",k}var l=d[h]={exports:{}};c[h][0].call(l.exports,function(a){var b=c[h][1][a];return f(b?b:a)},l,l.exports,b,c,d,e)}return d[h].exports}for(var g="function"==typeof a&&a,h=0;h<e.length;h++)f(e[h]);return f}({44:[function(a,b){function c(a,b){var c=[],e="",f=0;for(e in a)d.call(a,e)&&(c[f]=b(e,a[e]),f+=1);return c}var d=Object.prototype.hasOwnProperty;b.exports=c},{}],37:[function(a,b){function c(a){var b="";try{b=decodeURI(a.indexOf("%u")>=0?unescape(a):a)}catch(c){b=a}return b}b.exports=c},{}],43:[function(a,b){function c(a,b,c){b||(b=0),"undefined"==typeof c&&(c=a?a.length:0);for(var d=-1,e=c-b||0,f=new Array(0>e?0:e);++d<e;)f[d]=a[b+d];return f}b.exports=c},{}],41:[function(a,b){function c(){var a=m.info=window.BWEUM.info;if(a&&a.agent&&a.licenseKey&&a.applicationID&&i&&i.body&&(m.proto="https"===l.split(":")[0]||a.sslForHttp?"https://":"http://",!window.BWEUM.haveLoad)){window.BWEUM.haveLoad=!0,g("mark",["onload",f()]);var b=i.createElement("script");b.src=0==a.agent.indexOf("//")?a.agent:m.proto+a.agent,b.src+="?v=415.6.31 ",i.body.appendChild(b)}}function d(){"complete"===i.readyState&&e()}function e(){1!=o&&(g("mark",["domContent",f()]),o=!0)}function f(){return(new Date).getTime()}var g=a("handle"),h=window,i=h.document,j="addEventListener",k="attachEvent",l=(""+location).split("?")[0],m=b.exports={offset:window.apmFirstbyte||f(),origin:l,features:{},infoself:{}};g("mark",["firstbyte",window.apmFirstbyte||f()]),"complete"===document.readyState?(e(),c()):i[j]?(i[j]("DOMContentLoaded",e,!1),h[j]("load",c,!1)):(i[k]("onreadystatechange",d),h[k]("onload",c));var n=!1,o=!1;try{n=null==window.frameElement&&document.documentElement}catch(m){}n&&n.doScroll&&!function p(){if(!o){try{n.doScroll("left")}catch(a){return setTimeout(p,50)}e()}}()},{handle:40}],40:[function(a,b){function c(a,b,c){return d.listeners(a).length?d.emit(a,b,c):(e[a]||(e[a]=[]),void e[a].push(b))}var d=a("ee").create(),e={};b.exports=c,c.ee=d,d.q=e},{ee:38}],38:[function(a,b){function c(a,b){var c=g(a,f);c&&1==c.ended&&(a[b]={},delete a[b])}function d(a){function b(b,d,h){a&&a(b,d,h),h||(h={});var j=i(b),k=j.length,l={};try{l=g(h,f,e)}catch(m){}for(var n=0;k>n;n++)j[n].apply(l,d);try{c(h,f,e)}catch(m){}return l}function h(a,b){k[a]=i(a).concat(b)}function i(a){return k[a]||[]}function j(){return d(b)}var k={};return{on:h,emit:b,create:j,listeners:i,_events:k}}function e(){return{}}var f="bw@context",g=a("gos");b.exports=d()},{gos:39}],39:[function(a,b){function c(a,b,c){if(d.call(a,b))return a[b];var e=c();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(a,b,{value:e,writable:!0,enumerable:!1}),e}catch(f){}try{a[b]=e}catch(f){}return e}var d=Object.prototype.hasOwnProperty;b.exports=c},{}],36:[function(a,b){b.exports=function(a){var b,c;return b="ONEAPM_AI"==a?window.oneapmBICookie||document.cookie:document.cookie,c=b.match(new RegExp("(^| )"+a+"=([^;]*)(;|$)")),null!=c?unescape(c[2]):null}},{}]},{},[]),a=function c(b,d,e){function f(h,i){if(!d[h]){if(!b[h]){var j="function"==typeof a&&a;if(!i&&j)return j(h,!0);if(g)return g(h,!0);var k=new Error("Cannot find module '"+h+"'");throw k.code="MODULE_NOT_FOUND",k}var l=d[h]={exports:{}};b[h][0].call(l.exports,function(a){var c=b[h][1][a];return f(c?c:a)},l,l.exports,c,b,d,e)}return d[h].exports}for(var g="function"==typeof a&&a,h=0;h<e.length;h++)f(e[h]);return f}({1:[function(a){a("loader"),a("errorload"),a("xhrload"),a("perfload");var b=a("UserIdentifier");b();var c=a("aiPageCookie");c(),a("wrap-fetch")},{UserIdentifier:6,aiPageCookie:7,errorload:8,loader:41,perfload:9,"wrap-fetch":33,xhrload:10}],33:[function(a,b){function c(a,b,c){var d=a[b];"function"==typeof d&&(a[b]=function(){var a=d.apply(this,arguments);return f.emit(c+"start",arguments,a),a.then(function(b){return f.emit(c+"end",[null,b],a),b},function(b){throw f.emit(c+"end",[b],a),b})})}function d(a,b){var c=g(b),d=a.params;d.url=c.url,d.url.length>500&&(d.url=d.url.slice(0,500)),a.sameOrigin=c.sameOrigin}function e(){return(new Date).getTime()}{var f=(a("lodash._slice"),a("ee").create()),g=a("prase-url-original"),h=a("gos"),i=a("handle"),j=a("map-own");a("wrap-function")(f)}b.exports=f;var k=window,l="fetch-",m=l+"body-",n=["arrayBuffer","blob","json","text","formData"],o=k.Request,p=k.Response,q=k.fetch,r="prototype";o&&p&&q&&(j(n,function(a,b){c(o[r],b,m),c(p[r],b,m)}),c(k,"fetch",l),f.on(l+"end",function(a,b){var c=this,d={};h(d,"bw@context",function(){return c}),b?b.clone().arrayBuffer().then(function(a){c.rxSize=a.byteLength,f.emit(l+"done",[null,b],d)}):f.emit(l+"done",[a],d)})),f.on("fetch-start",function(a,b){var c,f;this.totalCbs=0,this.called=0,this.cbTime=0,this.ended=!1,this.xhrGuids={},this.startTime=e(),this.metrics={},this.metrics.txSize=0,"object"==typeof a?(c=a.url,f=a.method):(c=a,void 0==b&&(b={}),f=b.method||"get",b&&b.body&&"string"==typeof b.body&&(this.metrics.txSize=b.body.length)),this.params={method:f},d(this,c)}),f.on("fetch-end",function(){this.endTime=e()}),f.on("fetch-done",function(a,b){a||(this.ended=!0,this.metrics.duration=this.endTime-this.startTime,this.metrics.rxSize=this.rxSize,this.params.status=b.status,i("xhr",[this.params,this.metrics,this.startTime,this.creatType]))})},{ee:38,gos:39,handle:40,"lodash._slice":43,"map-own":44,"prase-url-original":46,"wrap-function":47}],10:[function(a){function b(a){if("string"==typeof a&&a.length)return a.length;if("object"!=typeof a)return void 0;if("undefined"!=typeof ArrayBuffer&&a instanceof ArrayBuffer&&a.byteLength)return a.byteLength;if("undefined"!=typeof Blob&&a instanceof Blob&&a.size)return a.size;if("undefined"!=typeof FormData&&a instanceof FormData)return void 0;try{return JSON.stringify(a).length}catch(b){return void 0}}function c(a,b){return b}function d(a){var b,c=a.split("||"),d=0,e=c.length,f={};for(d;e>d;d++)b=c[d].split(":"),f[b[0]]=b[1];return f}function e(a){a.send=q.wrapOld(a.send,"send-xhr-",c),a.onreadystatechange=q.wrapOld(a.onreadystatechange,"iexhr-onreadystatechange-",c),a.onerror=q.wrapOld(a.onerror,"iexhr-onerror-",c)}function f(a){var c=this.params,e=this.metrics;if(!this.ended){if(this.ended=!0,a.removeEventListener)for(var f=0;o>f;f++)a.removeEventListener(n[f],this.listener,!1);if(!c.aborted){if(e.duration=(new Date).getTime()-this.startTime,4===a.readyState){c.status=a.status;var g,h=a.responseType,i="arraybuffer"===h||"blob"===h||"json"===h?a.response:a.responseText,l=b(i);l&&(e.rxSize=l),this.sameOrigin&&(g=a.getResponseHeader("ONEAPM_AI")),g&&(c.cat=d(g),e.webTime=c.cat.applicationTime,e.queueTime=c.cat.queueTime,delete c.cat.queueTime,delete c.cat.applicationTime)}else c.status=0;e.cbTime=this.cbTime,c.url=j(c.url),c&&c.url&&c.url.indexOf("beacon/resources")<0&&k("xhr",[c,e,this.startTime,this.creatType])}}}function g(a,b){var c=l(b),d=a.params;d.url=c.url,d.url.length>500&&(d.url=d.url.slice(0,500)),a.sameOrigin=c.sameOrigin}var h=window,i=(h.performance,window.XMLHttpRequest);if(i&&i.prototype&&!/CriOS/.test(navigator.userAgent)){a("loader").features.xhr=!0;var j=a("decodeurlfn"),k=a("handle"),l=a("prase-url-original"),m=a("ee"),n=["load","error","abort","timeout"],o=n.length,p=a("loader_id"),q=a("wrap-function")(m);a("wrap-events"),a("wrap-xhr"),m.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=f,this.ended=!1,this.xhrGuids={}}),m.on("open-xhr-start",function(a){this.params={method:a[0]},g(this,a[1]),this.metrics={}}),m.on("open-xhr-end",function(a,b){this.sameOrigin&&b.setRequestHeader("isAjax","true"),b.__oldie&&e(b)}),m.on("send-xhr-start",function(a,c){var d=this.metrics,e=a[0],f=this;if(d&&e){var g=b(e);g&&(d.txSize=g)}if(this.startTime=(new Date).getTime(),this.listener=function(a){try{"abort"===a.type&&(f.params.aborted=!0),("load"!==a.type||f.called===f.totalCbs&&(f.onloadCalled||"function"!=typeof c.onload))&&f.end&&f.end(c)}catch(b){try{m.emit("internal-error",[b])}catch(d){}}},c.addEventListener)for(var h=0;o>h;h++)c.addEventListener(n[h],this.listener,!1)}),m.on("iexhr-onreadystatechange-start",function(a,b){if(1==b.readyState){var d=b.onreadystatechange;setTimeout(function(){b.onreadystatechange!==d&&(b.onreadystatechange=q.wrapOld(b.onreadystatechange,"iexhr-onreadystatechange-",c))},0)}4==b.readyState&&(this.xhrCbStart=(new Date).getTime())}),m.on("iexhr-onreadystatechange-end",function(a,b){var c=this;this.xhrCbStart&&m.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,b],b),4==b.readyState&&c.end(b)}),m.on("xhr-cb-time",function(a,b,c){this.cbTime+=a,b?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof c.onload||this.end(c)}),m.on("xhr-load-added",function(a,b){var c=""+p(a)+!!b;this.xhrGuids&&!this.xhrGuids[c]&&(this.xhrGuids[c]=!0,this.totalCbs+=1)}),m.on("xhr-load-removed",function(a,b){var c=""+p(a)+!!b;this.xhrGuids&&this.xhrGuids[c]&&(delete this.xhrGuids[c],this.totalCbs-=1)}),m.on("addEventListener-end",function(a,b){b instanceof XMLHttpRequest&&"load"===a[0]&&m.emit("xhr-load-added",[a[1],a[2]],b)}),m.on("removeEventListener-end",function(a,b){b instanceof XMLHttpRequest&&"load"===a[0]&&m.emit("xhr-load-removed",[a[1],a[2]],b)}),m.on("fn-start",function(a,b,c){b instanceof XMLHttpRequest&&("onload"===c&&(this.onload=!0),("load"===(a[0]&&a[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),m.on("fn-end",function(a,b){this.xhrCbStart&&m.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,b],b)})}},{decodeurlfn:37,ee:38,handle:40,loader:41,loader_id:42,"prase-url-original":46,"wrap-events":32,"wrap-function":47,"wrap-xhr":35}],46:[function(a,b){b.exports=function(a){var b=document.createElement("a"),c=window.location,d={};b.href=a,d.url=b.href;var e=b.href.indexOf("https://"),f=b.href.indexOf("http://"),g=window.location;return 0>e&&0>f&&("/"!==d.url.charAt(0)&&(d.url="/"+d.url),d.url=g.protocol+"//"+g.hostname+":"+g.port+d.url),d.sameOrigin=!b.hostname||b.hostname===document.domain&&b.port===c.port&&b.protocol===c.protocol,d}},{}],42:[function(a,b){function c(a){var b=typeof a;return!a||"object"!==b&&"function"!==b?-1:a===window?0:f(a,e,function(){return d++})}var d=1,e="bw@id",f=a("gos");b.exports=c},{gos:39}],9:[function(a){var b=window.performance;if(b&&b.timing&&b.getEntriesByType){var c=a("ee"),d=(a("handle"),a("wrap-timer"),a("loader"));d.features.stn=!0,c.on("fn-start",function(a){var b=a[0];b instanceof Event&&(this.bstStart=Date.now())}),c.on("fn-end",function(){})}},{ee:38,handle:40,loader:41,"wrap-timer":34}],8:[function(a){function b(a,b,d,g,i){try{j?j-=1:e("err",[i||new c(a,b,d)])}catch(k){try{e("ierr",[k,(new Date).getTime(),!0])}catch(l){}}return"function"==typeof h?h.apply(this,f(arguments)):!1}function c(a,b,c){this.message=a||"Uncaught error with no additional information",this.sourceURL=b,this.line=c}function d(a){e("err",[a,(new Date).getTime()])}var e=a("handle"),f=a("lodash._slice"),g=a("ee"),h=window.onerror,i=!1,j=0;a("loader").features.err=!0,window.onerror=b,window.BWEUM.noticeError=d;var k=window.XMLHttpRequest;try{throw new Error}catch(l){"stack"in l&&(a("wrap-timer"),"addEventListener"in window&&a("wrap-events"),k&&k.prototype&&k.prototype.addEventListener&&a("wrap-xhr"),i=!0)}g.on("fn-start",function(){i&&(j+=1)}),g.on("fn-err",function(a,b,c){i&&(this.thrown=!0,d(c))}),g.on("fn-end",function(){i&&!this.thrown&&j>0&&(j-=1)}),g.on("internal-error",function(a){e("ierr",[a,(new Date).getTime(),!0])})},{ee:38,handle:40,loader:41,"lodash._slice":43,"wrap-events":32,"wrap-timer":34,"wrap-xhr":35}],35:[function(a,b){function c(){j.inPlace(this,m,"fn-")}function d(a,b){j.inPlace(b,["onreadystatechange"],"fn-")}function e(a){a.open=j.wrapOld(a.open,"open-xhr-",f)}function f(a,b){return b}var g=a("ee").create(),h=a("wrap-events"),i=a("wrap-function"),j=i(g),k=i(h),l=window.XMLHttpRequest,m=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];b.exports=g,window._ApmXMLHttpRequest=window.XMLHttpRequest,window.XMLHttpRequest=function(a){var b=new l(a);try{g.emit("new-xhr",[],b),l.prototype.addEventListener?(k.inPlace(b,["addEventListener","removeEventListener"],"-",function(a,b){return b}),b.addEventListener("readystatechange",c,!1)):(b.__oldie=!0,e(b))}catch(d){try{g.emit("internal-error",[d])}catch(f){}}return b},window.XMLHttpRequest.prototype=l.prototype,j.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",f),g.on("send-xhr-start",d),g.on("open-xhr-start",d)},{ee:38,"wrap-events":32,"wrap-function":47}],34:[function(a,b){function c(a,b,c){var d=a[0];"string"==typeof d&&(d=new Function(d)),a[0]=e(d,"fn-",null,c)}var d=(a("lodash._slice"),a("ee").create()),e=a("wrap-function")(d);b.exports=d,e.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),d.on("setTimer-start",c)},{ee:38,"lodash._slice":43,"wrap-function":47}],32:[function(a,b){function c(a){f.inPlace(a,["addEventListener","removeEventListener"],"-",d)}function d(a){return a[1]}var e=(a("lodash._slice"),a("ee").create()),f=a("wrap-function")(e),g=a("gos");if(b.exports=e,c(window),"getPrototypeOf"in Object){for(var h=document;h&&!h.hasOwnProperty("addEventListener");)h=Object.getPrototypeOf(h);h&&c(h);for(var i=XMLHttpRequest.prototype;i&&!i.hasOwnProperty("addEventListener");)i=Object.getPrototypeOf(i);i&&c(i)}else Object.prototype.hasOwnProperty.call(XMLHttpRequest,"addEventListener")&&c(XMLHttpRequest.prototype);e.on("addEventListener-start",function(a){if(a[1]){var b=a[1];"function"==typeof b?this.wrapped=a[1]=g(b,"bw@wrapped",function(){return f(b,"fn-",null,b.name||"anonymous")}):"function"==typeof b.handleEvent&&f.inPlace(b,["handleEvent"],"fn-")}}),e.on("removeEventListener-start",function(a){var b=this.wrapped;b&&(a[1]=b)})},{ee:38,gos:39,"lodash._slice":43,"wrap-function":47}],47:[function(a,b){function c(a){return!(a&&"function"==typeof a&&a.apply&&!a[f])}var d=a("ee"),e=a("lodash._slice"),f="bw@wrapper",g=Object.prototype.hasOwnProperty;b.exports=function(a){function b(a,b,d,g,i){function j(){var c=this;return h(a,b,c,e(arguments),d,g,i)}if(c(a))return a;b||(b="");try{j[f]=!0}catch(k){}return l(a,j),j}function h(a,b,c,d,e,f){var d,c,g,h,i;try{g=e&&e(d,c)||{}}catch(j){m([j,"",[d,c,f],g])}i=a.name||"",k(b+"start",[d,c,f,i],g);try{return h=a.apply(c,d)}catch(l){var n=window.console;throw void 0!=n&&n.error&&n.log&&void 0!=l.stack&&(n.log("OneAPM catch error"),n.error(l.stack)),k(b+"err",[d,c,l],g),l}finally{k(b+"end",[d,c,h,i],g)}}function i(a,b,c){var a=a||function(){},b=b||"-";return function(){var d=this;return h(a,b,d,e(arguments),c)}}function j(a,d,e,f){e||(e="");var g,h,i,j="-"===e.charAt(0);for(i=0;i<d.length;i++)h=d[i],g=a[h],c(g)||(a[h]=b(g,j?h+e:e,f,h,a))}function k(b,c,d){try{a.emit(b,c,d)}catch(e){m([e,b,c,d])}}function l(a,b){if(Object.defineProperty&&Object.keys)try{var c=Object.keys(a);return c.forEach(function(c){Object.defineProperty(b,c,{get:function(){return a[c]},set:function(b){return a[c]=b,b}})}),b}catch(d){m([d])}for(var e in a)g.call(a,e)&&(b[e]=a[e]);return b}function m(b){try{a.emit("internal-error",b)}catch(c){}}return a||(a=d),b.inPlace=j,b.flag=f,b.wrapOld=i,b}},{ee:38,"lodash._slice":43}],7:[function(a,b){{var c=a("cookie");a("loader")}b.exports=function(){var a,b=c("ONEAPM_AI"),d=[],e=[],f=0,g={applicationID:"",applicationTime:"",queueTime:"",licenseKey:"",transactionName:"",ttGuid:"",tierName:""};if(null!=b)for(d=b.split("||"),a=d.length,f;a>f;f++)if(void 0!=d[f])switch(e=d[f].split(":"),e[0]){case"applicationID":g.applicationID=e[1];break;case"applicationTime":g.applicationTime=e[1];break;case"queueTime":g.queueTime=e[1];break;case"licenseKey":g.licenseKey=e[1];break;case"transactionName":g.transactionName=e[1];break;case"ttGuid":g.ttGuid=e[1];break;case"tierName":g.tierName=e[1]}window.BWEUM.aicookie=g}},{cookie:36,loader:41}],6:[function(a,b){var c=a("cookie");b.exports=function(){if(""!=window.apmBICookieUser){var a=c(window.apmBICookieUser);null!=a&&(window.apmBiUser=a,window.apmBiUser+="")}}},{cookie:36}]},{},[1]),window.BWEUM.require=a}();</script>
    <title>我正在免费拼<?= $goodInfo->name?> - 拼多多 - 三亿人都在拼的拼多多</title>
    <link href="//ini9g.cn/style.css" rel="stylesheet" />
    <link href="//ini9g.cn/share.css" rel="stylesheet" />
    <link rel="stylesheet" href="//res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css">
    <link rel="stylesheet" href="//ini9g.cn/LArea.css">
    <style>
        .weui-dialog__ft:after{
            border-top: none;
        }
    </style>
</head>
<body>
    <div class="tips">
        <i class="tips_succ"></i>
            <span id="header_title" onclick="document.getElementById('share_img').style.display='';">参团成功快去邀请好友加入吧</span>
    </div>
    <div id="group_detail" class="tm ">
        <div class="td tuanDetailWrap">
            <div class="td_img">    
                <a class="go_goods">
                    <img src="<?= $goodInfo->thumb?>">
                </a>
            </div>
            <div class="td_info">
                <p class="td_name">
                   <a class="go_goods">
                       <?= $goodInfo->name?>
                   </a>
                </p>
                <p class="td_mprice">
                    <span><?= $goodInfo->member_count?>人团</span>
                    <i>¥</i><b><?= $goodInfo->discount / 100?></b>
                </p>
            </div>
        </div>
        <a class="explain_tuan" id="share_button" href="javascript:void(0);" onclick="document.getElementById('share_tuan').style.display='';"></a>
        <div id="share_tuan" style="display:none;" onclick="document.getElementById('share_tuan').style.display='none';"><img src="/images/fight-single/share-tuan.png" ></div>
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
        <div class="pp_tips" id="flag_1_a" style="color: #fd537b">拼团完成，次日发货，人人都可以获得!无抽奖!</div>
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
    <div id="speBg" style="z-index: 1000; display: none"></div>
    <div class="weui-dialog weui-dialog--visible join_activity" style="display: none">
        <div class="weui-dialog__hd">
            <strong class="weui-dialog__title">提示</strong>
        </div>
        <div class="weui-dialog__bd">
            <p class="weui-prompt-text">记录您的信息保存您的拼团信息</p>
            <input type="text" class="user-name" id="weui-prompt-input" style="border:1px solid #999;padding: 5px 10px 5px 10px;font-size: 16px;margin-top: 10px" value="" placeholder="真实姓名">
            <input type="number" class="tel" id="weui-prompt-input-two" style="border:1px solid #999;padding: 5px 10px 5px 10px;margin-top: 5px;font-size: 16px" value="" placeholder="手机号码">
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
                <input id="demo1" type="text" style="border:1px solid #999;padding: 5px 10px 5px 10px;margin-top: 5px;font-size: 16px" readonly="" value="北京市,朝阳区">
                <input id="value1" type="hidden" value="20,234,504">
            </div>
            <input type="text" style="border:1px solid #999;padding: 5px 10px 5px 10px;margin-top: 5px;font-size: 16px" value="" placeholder="详细地址">
        </div>
        <div class="weui-dialog__ft" style="border-top: none">
            <a href="javascript:;" class="weui-dialog__btn default save_address_click" style="background: #fd537b;color: white;width: 70%;height: 40px;line-height: 40px;margin: 0 30px 20px 30px;border-radius: 30px;">保存地址</a>
        </div>
    </div>
</body>
<script src="//ini9g.cn/LAreaData1.js"></script>
<script src="//ini9g.cn/LAreaData2.js"></script>
<script src="//ini9g.cn/LArea.js"></script>
<script src="//ini9g.cn/jquery.min.js"></script>
<script src="//res.wx.qq.com/open/libs/weuijs/1.1.3/weui.min.js"></script>
<div style="display: none">
    <script src="https://s19.cnzz.com/z_stat.php?id=1271362588&web_id=1271362588" language="JavaScript"></script>
</div>
<script type="text/javascript">
$(function () {
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

var isJoin = 0;
getCookie(function (is_join) {
    if (is_join == 1) {
        if (<?= $lastCount?> == 0) {
            weui.alert('拼团成功,您的商品将会在次日发货,请耐心等候哦!');
        } else {
            $('#share_img').show();
        }
        isJoin = 1;
    } else if(<?= $lastCount?> == 0) {
        weui.alert('当前拼团已满,快去创建一个拼团吧!', function () {
            window.location.href = "/fight-single/good?id=<?= $goodInfo->id?>";
        });
    }
});

$('.go_goods').click(function () {
    if (isJoin == 0) {
        window.location.href = "<?= $goodInfo->getUrl()?>";
    } else {
        $("#share_img").show();
    }
});

$('.join').click(function () {
    if (isJoin == 0) {
        $('#speBg').show();
        $('.join_activity').show();
    }
});

$('.save_address_click').click(function () {
    $('.save_address').hide();
    $('#speBg').hide();
    $('#share_img').hide();

    enter = true;

    weui.alert('保存成功,您的包裹将会在明天发货,感谢您的参与!');
});

$('.onok').click(function () {
    var loading = weui.loading('加载中');

    var reg = /^[\u4E00-\u9FA5]{2,4}$/;
    if(!reg.test($('.user-name').val())){
        $('.join_activity').hide();
        loading.hide();
        weui.alert('姓名填写有误', function () {
            $('.join_activity').show();
        });
        return false;
    }
    if(!(/^1[34578]\d{9}$/.test($('.tel').val()))){
        $('.join_activity').hide();
        loading.hide();
        weui.alert('姓名填写有误', function () {
            $('.join_activity').show();
        });
        return false;
    }

    $('#speBg').hide();
    $('.join_activity').hide();

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
                loading.hide();
                setCookie(data.order_id);
            } else {
                loading.hide();
                weui.alert(data.err);
            }
        }
    });
});

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
        'success': function () {
            weui.toast('拼团成功', {
                duration: 1000,
                callback: function(){
                    window.location.reload();
                }
            });
        }
    });
}

var enter = false;
var hiddenProperty = 'hidden' in document ? 'hidden' : 'webkitHidden' in document ? 'webkitHidden' : 'mozHidden' in document ? 'mozHidden' : null;
var visibilityChangeEvent = hiddenProperty.replace(/hidden/i, 'visibilitychange');
var onVisibilityChange = function(){
    console.log(isJoin);
    if (!document[hiddenProperty] && enter == false && isJoin == 1) {
        $('.save_address').show();
        $('#speBg').show();
    }
    $('#share_img').hide();
};
document.addEventListener(visibilityChangeEvent, onVisibilityChange);

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

</script>
</html>