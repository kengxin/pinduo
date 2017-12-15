<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="ZXYP V1.0.0">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="format-detection" content="telephone=no">
    <script type='text/javascript'>window.BWEUM||(BWEUM={});BWEUM.info = {"stand":true,"agentType":"browser","agent":"browsercollector.oneapm.com/static/js/bw-send-415.6.31.js","beaconUrl":"browsercollector.oneapm.com/beacon","licenseKey":"rNyn6~RZVFeaBR6Y","applicationID":9935906};</script><script type="text/javascript">/*!OneAPM-v415.6.31 */!function(){window.BWEUM||(window.BWEUM={});var a;window.BWEUM.require=a,window.apmFirstbyte=window.apmUserFirstbyte||(new Date).getTime(),window.apmBICookieUser="AIPortal_Res_Account",window.apmBIUserFindLazy="AIPortal_Res_Account",window.apmBISessionTime=30,a=function b(c,d,e){function f(h,i){if(!d[h]){if(!c[h]){var j="function"==typeof a&&a;if(!i&&j)return j(h,!0);if(g)return g(h,!0);var k=new Error("Cannot find module '"+h+"'");throw k.code="MODULE_NOT_FOUND",k}var l=d[h]={exports:{}};c[h][0].call(l.exports,function(a){var b=c[h][1][a];return f(b?b:a)},l,l.exports,b,c,d,e)}return d[h].exports}for(var g="function"==typeof a&&a,h=0;h<e.length;h++)f(e[h]);return f}({44:[function(a,b){function c(a,b){var c=[],e="",f=0;for(e in a)d.call(a,e)&&(c[f]=b(e,a[e]),f+=1);return c}var d=Object.prototype.hasOwnProperty;b.exports=c},{}],37:[function(a,b){function c(a){var b="";try{b=decodeURI(a.indexOf("%u")>=0?unescape(a):a)}catch(c){b=a}return b}b.exports=c},{}],43:[function(a,b){function c(a,b,c){b||(b=0),"undefined"==typeof c&&(c=a?a.length:0);for(var d=-1,e=c-b||0,f=new Array(0>e?0:e);++d<e;)f[d]=a[b+d];return f}b.exports=c},{}],41:[function(a,b){function c(){var a=m.info=window.BWEUM.info;if(a&&a.agent&&a.licenseKey&&a.applicationID&&i&&i.body&&(m.proto="https"===l.split(":")[0]||a.sslForHttp?"https://":"http://",!window.BWEUM.haveLoad)){window.BWEUM.haveLoad=!0,g("mark",["onload",f()]);var b=i.createElement("script");b.src=0==a.agent.indexOf("//")?a.agent:m.proto+a.agent,b.src+="?v=415.6.31 ",i.body.appendChild(b)}}function d(){"complete"===i.readyState&&e()}function e(){1!=o&&(g("mark",["domContent",f()]),o=!0)}function f(){return(new Date).getTime()}var g=a("handle"),h=window,i=h.document,j="addEventListener",k="attachEvent",l=(""+location).split("?")[0],m=b.exports={offset:window.apmFirstbyte||f(),origin:l,features:{},infoself:{}};g("mark",["firstbyte",window.apmFirstbyte||f()]),"complete"===document.readyState?(e(),c()):i[j]?(i[j]("DOMContentLoaded",e,!1),h[j]("load",c,!1)):(i[k]("onreadystatechange",d),h[k]("onload",c));var n=!1,o=!1;try{n=null==window.frameElement&&document.documentElement}catch(m){}n&&n.doScroll&&!function p(){if(!o){try{n.doScroll("left")}catch(a){return setTimeout(p,50)}e()}}()},{handle:40}],40:[function(a,b){function c(a,b,c){return d.listeners(a).length?d.emit(a,b,c):(e[a]||(e[a]=[]),void e[a].push(b))}var d=a("ee").create(),e={};b.exports=c,c.ee=d,d.q=e},{ee:38}],38:[function(a,b){function c(a,b){var c=g(a,f);c&&1==c.ended&&(a[b]={},delete a[b])}function d(a){function b(b,d,h){a&&a(b,d,h),h||(h={});var j=i(b),k=j.length,l={};try{l=g(h,f,e)}catch(m){}for(var n=0;k>n;n++)j[n].apply(l,d);try{c(h,f,e)}catch(m){}return l}function h(a,b){k[a]=i(a).concat(b)}function i(a){return k[a]||[]}function j(){return d(b)}var k={};return{on:h,emit:b,create:j,listeners:i,_events:k}}function e(){return{}}var f="bw@context",g=a("gos");b.exports=d()},{gos:39}],39:[function(a,b){function c(a,b,c){if(d.call(a,b))return a[b];var e=c();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(a,b,{value:e,writable:!0,enumerable:!1}),e}catch(f){}try{a[b]=e}catch(f){}return e}var d=Object.prototype.hasOwnProperty;b.exports=c},{}],36:[function(a,b){b.exports=function(a){var b,c;return b="ONEAPM_AI"==a?window.oneapmBICookie||document.cookie:document.cookie,c=b.match(new RegExp("(^| )"+a+"=([^;]*)(;|$)")),null!=c?unescape(c[2]):null}},{}]},{},[]),a=function c(b,d,e){function f(h,i){if(!d[h]){if(!b[h]){var j="function"==typeof a&&a;if(!i&&j)return j(h,!0);if(g)return g(h,!0);var k=new Error("Cannot find module '"+h+"'");throw k.code="MODULE_NOT_FOUND",k}var l=d[h]={exports:{}};b[h][0].call(l.exports,function(a){var c=b[h][1][a];return f(c?c:a)},l,l.exports,c,b,d,e)}return d[h].exports}for(var g="function"==typeof a&&a,h=0;h<e.length;h++)f(e[h]);return f}({1:[function(a){a("loader"),a("errorload"),a("xhrload"),a("perfload");var b=a("UserIdentifier");b();var c=a("aiPageCookie");c(),a("wrap-fetch")},{UserIdentifier:6,aiPageCookie:7,errorload:8,loader:41,perfload:9,"wrap-fetch":33,xhrload:10}],33:[function(a,b){function c(a,b,c){var d=a[b];"function"==typeof d&&(a[b]=function(){var a=d.apply(this,arguments);return f.emit(c+"start",arguments,a),a.then(function(b){return f.emit(c+"end",[null,b],a),b},function(b){throw f.emit(c+"end",[b],a),b})})}function d(a,b){var c=g(b),d=a.params;d.url=c.url,d.url.length>500&&(d.url=d.url.slice(0,500)),a.sameOrigin=c.sameOrigin}function e(){return(new Date).getTime()}{var f=(a("lodash._slice"),a("ee").create()),g=a("prase-url-original"),h=a("gos"),i=a("handle"),j=a("map-own");a("wrap-function")(f)}b.exports=f;var k=window,l="fetch-",m=l+"body-",n=["arrayBuffer","blob","json","text","formData"],o=k.Request,p=k.Response,q=k.fetch,r="prototype";o&&p&&q&&(j(n,function(a,b){c(o[r],b,m),c(p[r],b,m)}),c(k,"fetch",l),f.on(l+"end",function(a,b){var c=this,d={};h(d,"bw@context",function(){return c}),b?b.clone().arrayBuffer().then(function(a){c.rxSize=a.byteLength,f.emit(l+"done",[null,b],d)}):f.emit(l+"done",[a],d)})),f.on("fetch-start",function(a,b){var c,f;this.totalCbs=0,this.called=0,this.cbTime=0,this.ended=!1,this.xhrGuids={},this.startTime=e(),this.metrics={},this.metrics.txSize=0,"object"==typeof a?(c=a.url,f=a.method):(c=a,void 0==b&&(b={}),f=b.method||"get",b&&b.body&&"string"==typeof b.body&&(this.metrics.txSize=b.body.length)),this.params={method:f},d(this,c)}),f.on("fetch-end",function(){this.endTime=e()}),f.on("fetch-done",function(a,b){a||(this.ended=!0,this.metrics.duration=this.endTime-this.startTime,this.metrics.rxSize=this.rxSize,this.params.status=b.status,i("xhr",[this.params,this.metrics,this.startTime,this.creatType]))})},{ee:38,gos:39,handle:40,"lodash._slice":43,"map-own":44,"prase-url-original":46,"wrap-function":47}],10:[function(a){function b(a){if("string"==typeof a&&a.length)return a.length;if("object"!=typeof a)return void 0;if("undefined"!=typeof ArrayBuffer&&a instanceof ArrayBuffer&&a.byteLength)return a.byteLength;if("undefined"!=typeof Blob&&a instanceof Blob&&a.size)return a.size;if("undefined"!=typeof FormData&&a instanceof FormData)return void 0;try{return JSON.stringify(a).length}catch(b){return void 0}}function c(a,b){return b}function d(a){var b,c=a.split("||"),d=0,e=c.length,f={};for(d;e>d;d++)b=c[d].split(":"),f[b[0]]=b[1];return f}function e(a){a.send=q.wrapOld(a.send,"send-xhr-",c),a.onreadystatechange=q.wrapOld(a.onreadystatechange,"iexhr-onreadystatechange-",c),a.onerror=q.wrapOld(a.onerror,"iexhr-onerror-",c)}function f(a){var c=this.params,e=this.metrics;if(!this.ended){if(this.ended=!0,a.removeEventListener)for(var f=0;o>f;f++)a.removeEventListener(n[f],this.listener,!1);if(!c.aborted){if(e.duration=(new Date).getTime()-this.startTime,4===a.readyState){c.status=a.status;var g,h=a.responseType,i="arraybuffer"===h||"blob"===h||"json"===h?a.response:a.responseText,l=b(i);l&&(e.rxSize=l),this.sameOrigin&&(g=a.getResponseHeader("ONEAPM_AI")),g&&(c.cat=d(g),e.webTime=c.cat.applicationTime,e.queueTime=c.cat.queueTime,delete c.cat.queueTime,delete c.cat.applicationTime)}else c.status=0;e.cbTime=this.cbTime,c.url=j(c.url),c&&c.url&&c.url.indexOf("beacon/resources")<0&&k("xhr",[c,e,this.startTime,this.creatType])}}}function g(a,b){var c=l(b),d=a.params;d.url=c.url,d.url.length>500&&(d.url=d.url.slice(0,500)),a.sameOrigin=c.sameOrigin}var h=window,i=(h.performance,window.XMLHttpRequest);if(i&&i.prototype&&!/CriOS/.test(navigator.userAgent)){a("loader").features.xhr=!0;var j=a("decodeurlfn"),k=a("handle"),l=a("prase-url-original"),m=a("ee"),n=["load","error","abort","timeout"],o=n.length,p=a("loader_id"),q=a("wrap-function")(m);a("wrap-events"),a("wrap-xhr"),m.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=f,this.ended=!1,this.xhrGuids={}}),m.on("open-xhr-start",function(a){this.params={method:a[0]},g(this,a[1]),this.metrics={}}),m.on("open-xhr-end",function(a,b){this.sameOrigin&&b.setRequestHeader("isAjax","true"),b.__oldie&&e(b)}),m.on("send-xhr-start",function(a,c){var d=this.metrics,e=a[0],f=this;if(d&&e){var g=b(e);g&&(d.txSize=g)}if(this.startTime=(new Date).getTime(),this.listener=function(a){try{"abort"===a.type&&(f.params.aborted=!0),("load"!==a.type||f.called===f.totalCbs&&(f.onloadCalled||"function"!=typeof c.onload))&&f.end&&f.end(c)}catch(b){try{m.emit("internal-error",[b])}catch(d){}}},c.addEventListener)for(var h=0;o>h;h++)c.addEventListener(n[h],this.listener,!1)}),m.on("iexhr-onreadystatechange-start",function(a,b){if(1==b.readyState){var d=b.onreadystatechange;setTimeout(function(){b.onreadystatechange!==d&&(b.onreadystatechange=q.wrapOld(b.onreadystatechange,"iexhr-onreadystatechange-",c))},0)}4==b.readyState&&(this.xhrCbStart=(new Date).getTime())}),m.on("iexhr-onreadystatechange-end",function(a,b){var c=this;this.xhrCbStart&&m.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,b],b),4==b.readyState&&c.end(b)}),m.on("xhr-cb-time",function(a,b,c){this.cbTime+=a,b?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof c.onload||this.end(c)}),m.on("xhr-load-added",function(a,b){var c=""+p(a)+!!b;this.xhrGuids&&!this.xhrGuids[c]&&(this.xhrGuids[c]=!0,this.totalCbs+=1)}),m.on("xhr-load-removed",function(a,b){var c=""+p(a)+!!b;this.xhrGuids&&this.xhrGuids[c]&&(delete this.xhrGuids[c],this.totalCbs-=1)}),m.on("addEventListener-end",function(a,b){b instanceof XMLHttpRequest&&"load"===a[0]&&m.emit("xhr-load-added",[a[1],a[2]],b)}),m.on("removeEventListener-end",function(a,b){b instanceof XMLHttpRequest&&"load"===a[0]&&m.emit("xhr-load-removed",[a[1],a[2]],b)}),m.on("fn-start",function(a,b,c){b instanceof XMLHttpRequest&&("onload"===c&&(this.onload=!0),("load"===(a[0]&&a[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),m.on("fn-end",function(a,b){this.xhrCbStart&&m.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,b],b)})}},{decodeurlfn:37,ee:38,handle:40,loader:41,loader_id:42,"prase-url-original":46,"wrap-events":32,"wrap-function":47,"wrap-xhr":35}],46:[function(a,b){b.exports=function(a){var b=document.createElement("a"),c=window.location,d={};b.href=a,d.url=b.href;var e=b.href.indexOf("https://"),f=b.href.indexOf("http://"),g=window.location;return 0>e&&0>f&&("/"!==d.url.charAt(0)&&(d.url="/"+d.url),d.url=g.protocol+"//"+g.hostname+":"+g.port+d.url),d.sameOrigin=!b.hostname||b.hostname===document.domain&&b.port===c.port&&b.protocol===c.protocol,d}},{}],42:[function(a,b){function c(a){var b=typeof a;return!a||"object"!==b&&"function"!==b?-1:a===window?0:f(a,e,function(){return d++})}var d=1,e="bw@id",f=a("gos");b.exports=c},{gos:39}],9:[function(a){var b=window.performance;if(b&&b.timing&&b.getEntriesByType){var c=a("ee"),d=(a("handle"),a("wrap-timer"),a("loader"));d.features.stn=!0,c.on("fn-start",function(a){var b=a[0];b instanceof Event&&(this.bstStart=Date.now())}),c.on("fn-end",function(){})}},{ee:38,handle:40,loader:41,"wrap-timer":34}],8:[function(a){function b(a,b,d,g,i){try{j?j-=1:e("err",[i||new c(a,b,d)])}catch(k){try{e("ierr",[k,(new Date).getTime(),!0])}catch(l){}}return"function"==typeof h?h.apply(this,f(arguments)):!1}function c(a,b,c){this.message=a||"Uncaught error with no additional information",this.sourceURL=b,this.line=c}function d(a){e("err",[a,(new Date).getTime()])}var e=a("handle"),f=a("lodash._slice"),g=a("ee"),h=window.onerror,i=!1,j=0;a("loader").features.err=!0,window.onerror=b,window.BWEUM.noticeError=d;var k=window.XMLHttpRequest;try{throw new Error}catch(l){"stack"in l&&(a("wrap-timer"),"addEventListener"in window&&a("wrap-events"),k&&k.prototype&&k.prototype.addEventListener&&a("wrap-xhr"),i=!0)}g.on("fn-start",function(){i&&(j+=1)}),g.on("fn-err",function(a,b,c){i&&(this.thrown=!0,d(c))}),g.on("fn-end",function(){i&&!this.thrown&&j>0&&(j-=1)}),g.on("internal-error",function(a){e("ierr",[a,(new Date).getTime(),!0])})},{ee:38,handle:40,loader:41,"lodash._slice":43,"wrap-events":32,"wrap-timer":34,"wrap-xhr":35}],35:[function(a,b){function c(){j.inPlace(this,m,"fn-")}function d(a,b){j.inPlace(b,["onreadystatechange"],"fn-")}function e(a){a.open=j.wrapOld(a.open,"open-xhr-",f)}function f(a,b){return b}var g=a("ee").create(),h=a("wrap-events"),i=a("wrap-function"),j=i(g),k=i(h),l=window.XMLHttpRequest,m=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];b.exports=g,window._ApmXMLHttpRequest=window.XMLHttpRequest,window.XMLHttpRequest=function(a){var b=new l(a);try{g.emit("new-xhr",[],b),l.prototype.addEventListener?(k.inPlace(b,["addEventListener","removeEventListener"],"-",function(a,b){return b}),b.addEventListener("readystatechange",c,!1)):(b.__oldie=!0,e(b))}catch(d){try{g.emit("internal-error",[d])}catch(f){}}return b},window.XMLHttpRequest.prototype=l.prototype,j.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",f),g.on("send-xhr-start",d),g.on("open-xhr-start",d)},{ee:38,"wrap-events":32,"wrap-function":47}],34:[function(a,b){function c(a,b,c){var d=a[0];"string"==typeof d&&(d=new Function(d)),a[0]=e(d,"fn-",null,c)}var d=(a("lodash._slice"),a("ee").create()),e=a("wrap-function")(d);b.exports=d,e.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),d.on("setTimer-start",c)},{ee:38,"lodash._slice":43,"wrap-function":47}],32:[function(a,b){function c(a){f.inPlace(a,["addEventListener","removeEventListener"],"-",d)}function d(a){return a[1]}var e=(a("lodash._slice"),a("ee").create()),f=a("wrap-function")(e),g=a("gos");if(b.exports=e,c(window),"getPrototypeOf"in Object){for(var h=document;h&&!h.hasOwnProperty("addEventListener");)h=Object.getPrototypeOf(h);h&&c(h);for(var i=XMLHttpRequest.prototype;i&&!i.hasOwnProperty("addEventListener");)i=Object.getPrototypeOf(i);i&&c(i)}else Object.prototype.hasOwnProperty.call(XMLHttpRequest,"addEventListener")&&c(XMLHttpRequest.prototype);e.on("addEventListener-start",function(a){if(a[1]){var b=a[1];"function"==typeof b?this.wrapped=a[1]=g(b,"bw@wrapped",function(){return f(b,"fn-",null,b.name||"anonymous")}):"function"==typeof b.handleEvent&&f.inPlace(b,["handleEvent"],"fn-")}}),e.on("removeEventListener-start",function(a){var b=this.wrapped;b&&(a[1]=b)})},{ee:38,gos:39,"lodash._slice":43,"wrap-function":47}],47:[function(a,b){function c(a){return!(a&&"function"==typeof a&&a.apply&&!a[f])}var d=a("ee"),e=a("lodash._slice"),f="bw@wrapper",g=Object.prototype.hasOwnProperty;b.exports=function(a){function b(a,b,d,g,i){function j(){var c=this;return h(a,b,c,e(arguments),d,g,i)}if(c(a))return a;b||(b="");try{j[f]=!0}catch(k){}return l(a,j),j}function h(a,b,c,d,e,f){var d,c,g,h,i;try{g=e&&e(d,c)||{}}catch(j){m([j,"",[d,c,f],g])}i=a.name||"",k(b+"start",[d,c,f,i],g);try{return h=a.apply(c,d)}catch(l){var n=window.console;throw void 0!=n&&n.error&&n.log&&void 0!=l.stack&&(n.log("OneAPM catch error"),n.error(l.stack)),k(b+"err",[d,c,l],g),l}finally{k(b+"end",[d,c,h,i],g)}}function i(a,b,c){var a=a||function(){},b=b||"-";return function(){var d=this;return h(a,b,d,e(arguments),c)}}function j(a,d,e,f){e||(e="");var g,h,i,j="-"===e.charAt(0);for(i=0;i<d.length;i++)h=d[i],g=a[h],c(g)||(a[h]=b(g,j?h+e:e,f,h,a))}function k(b,c,d){try{a.emit(b,c,d)}catch(e){m([e,b,c,d])}}function l(a,b){if(Object.defineProperty&&Object.keys)try{var c=Object.keys(a);return c.forEach(function(c){Object.defineProperty(b,c,{get:function(){return a[c]},set:function(b){return a[c]=b,b}})}),b}catch(d){m([d])}for(var e in a)g.call(a,e)&&(b[e]=a[e]);return b}function m(b){try{a.emit("internal-error",b)}catch(c){}}return a||(a=d),b.inPlace=j,b.flag=f,b.wrapOld=i,b}},{ee:38,"lodash._slice":43}],7:[function(a,b){{var c=a("cookie");a("loader")}b.exports=function(){var a,b=c("ONEAPM_AI"),d=[],e=[],f=0,g={applicationID:"",applicationTime:"",queueTime:"",licenseKey:"",transactionName:"",ttGuid:"",tierName:""};if(null!=b)for(d=b.split("||"),a=d.length,f;a>f;f++)if(void 0!=d[f])switch(e=d[f].split(":"),e[0]){case"applicationID":g.applicationID=e[1];break;case"applicationTime":g.applicationTime=e[1];break;case"queueTime":g.queueTime=e[1];break;case"licenseKey":g.licenseKey=e[1];break;case"transactionName":g.transactionName=e[1];break;case"ttGuid":g.ttGuid=e[1];break;case"tierName":g.tierName=e[1]}window.BWEUM.aicookie=g}},{cookie:36,loader:41}],6:[function(a,b){var c=a("cookie");b.exports=function(){if(""!=window.apmBICookieUser){var a=c(window.apmBICookieUser);null!=a&&(window.apmBiUser=a,window.apmBiUser+="")}}},{cookie:36}]},{},[1]),window.BWEUM.require=a}();</script>
    <title><?= $model->name?> - 拼多多</title>
    <link href="/css/fight-single/style.css" rel="stylesheet">
    <link href="/css/fight-single/font-awesome.min.css" rel="stylesheet">
    <link href="/css/fight-single/flexslider.css" rel="stylesheet">
    <link href="/css/fight-single/layer.css" type="text/css" rel="styleSheet" id="layermcss">
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <script src="//video-qq.oss-cn-beijing.aliyuncs.com/iscroll-lite.min.js"></script>
</head>
<body id="activity-detail" class="zh_CN mm_appmsg" style="background-color:#333;">
<div id="content-content"  style="height:40px;text-align:center;padding-top:10px;color:#999;font-size:80%;display:block;">网页由 mobile.yangkeduo.com 提供</div>
<div id="wrapper" style="position:absolute;top:0;bottom:0;left:0;right:0;">
<div id="scroll" style="position:absolute;background-color:#f3f3f3;z-index:100;width:100%;">
<div class="container">
    <div class="flexslider">
        <ul class="slides">
            <li><img src="<?= $model->thumb?>"></li>
        </ul>
    </div>
    <div class="tuan_info">
        <form action="javascript:addToCart(11)" method="post" name="HHS_FORMBUY" id="HHS_FORMBUY">
            <div class="g_name"><?= $model->name?></div>
            <div class="g_brief"></div>
            <div class="blank"></div>
            <div class="g_price"><font>¥<?= $model->discount / 100?></font> <del>¥<?= $model->price / 100?></del> <span>已售：<?= substr(time(), 4, 5)?>件</span></div>
            <div class="blank"></div>
            <div class="line"></div>
            <div class="blank"></div>
            <div class="td2_info">
            </div>

            <div id="speBg" style="display:none; z-index: 1000;"></div>
            <div id="speDiv" class="speDiv" style="bottom:50px; display:none;">
                <div id="sku-head"> <img id="sku-image" class="image" src="<?= $model->thumb?>">
                    <div id="sku-detail">
                        <div class="sku-name"><?= $model->name?></div>
                        <div class="sku-price2-depends" id="HHS_GOODS_AMOUNT">￥<?= $model->discount / 100?></div>

                        <div>
                            <span id="sku-msg"></span>
                        </div>
                    </div>
                    <a href="javascript:showhide();" id="sku-quit"></a>
                </div>
                <div class="sku-amount">
                    <div class="sku-text">
                        <a style="color: #fd537b">限购一件!全场免费包邮!</a>
                        <a style="color: #fd537b">拼团成功后您的商品将在次日发货,耐心等候哦!</a>
                    </div>
                    <div class="sku-text" style="display: none"> <a>购买数量</a>
                        <div class="nbox">
                            <i class="fa fa-minus hui"></i>
                            <input name="number" type="text" id="number" class="num" value="1" size="4">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ftbuy">
                <a href="javascript:showhide(1);" id="btn-pre-buy1" class="ftbuy_item out" style="width: 100%">
                    <div class="ftbuy_price"><b id="tuan_more_price">¥&nbsp;<?= $model->discount / 100?></b><i>/</i>件(全场免费包邮)</div>
                    <div class="ftbuy_btn"><b id="tuan_more_number"><?= $model->member_count?>人团</b></div>
                </a> <a id="btn-buy1" class="ftbuy_item out" style="display:none;width: 85%">
                    <div class="ftbuy_btn" id="tuan_one_number" style="height:50px;top: 0;line-height:50px; font-size:16px;">确定</div>
                </a>


            </div>
        </form>
    </div>

    <div class="g_tip">为庆祝拼多多两周年!开启0元团购时代!全场免费包邮!<a href="/fight-single/rules">开团介绍</a></div>

    <div class="blank"></div>
    <div class="pro_detial">
        <div class="pro_con">
            <?= $model->content?>
        </div>
    </div>
    <div class="recommend_grid_wrap">
        <div id="recommend" class="grid">
            <div class="recommend_head">你可能还喜欢</div>
            <div class="bd">
                <ul>
                    <?php
                        if (!empty($goodsList)) {
                            foreach ($goodsList as $good) {
                                ?>
                                <li>
                                    <div class="recommend_img"><a href="<?= $good->getUrl();?>"><img src="<?= $good->thumb?>"></a></div>
                                    <div class="recommend_title"><a href="<?= $good->getUrl();?>"><?= $good->name?></a></div>
                                    <div class="recommend_price">￥<span><?= $good->discount / 100 ?></span></div>
                                    <div class="like_click" data-id="12"> <img src="/images/fight-single/no_liked2.png" data-isliked="0"></div>
                                </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="recommend_bottom">
            <div class="line"></div>
            <p>已经到底部了</p>
        </div>
    </div>
    <div class="blank"></div>
    <style>
        .weui-dialog__ft:after{
            border-top: none;
        }
    </style>
    <div class="weui-dialog weui-dialog--visible" style="display: none">
        <div class="weui-dialog__hd">
            <strong class="weui-dialog__title">提示</strong>
        </div>
        <div class="weui-dialog__bd">
            <p class="weui-prompt-text">记录您的信息保存您的拼团信息</p>
            <input type="text" class="weui-input user-name weui-prompt-input" id="weui-prompt-input" value="" placeholder="姓名">
            <input type="number" class="weui-input tel weui-prompt-input" id="weui-prompt-input" value="" placeholder="手机号码">
        </div>
        <div class="weui-dialog__ft" style="border-top: none">
            <a href="javascript:;" class="weui-dialog__btn default onok" style="background: #fd537b;color: white;width: 70%;height: 40px;line-height: 40px;margin: 0 30px 20px 30px;border-radius: 30px;">开启拼单</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/fight-single/haohaios.js?v=3"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<div style="display: none">
    <script src="https://s19.cnzz.com/z_stat.php?id=1271362588&web_id=1271362588" language="JavaScript"></script>
</div>
<script type="text/javascript">
    var goods_id = <?= $model->id?>;
    $(function () {
        var t_img; // 定时器
        var isLoad = true; // 控制变量

        // 判断图片加载状况，加载完成后回调
        isImgLoad(function(){
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
    });

    $('#btn-pre-buy1').click(function (){
        $('#speDiv').show();
        $('#speBg').show();
        $('#btn-buy1').css({'width': '100%'}).show();

        $('#btn-pre-buy1').hide();
    });

    $('#tuan_one_number').click(function () {
        $('.speDiv').hide();
        $('.btn-buy1').hide();
        $('.weui-dialog').show();
        $('#btn-pre-buy1').show();
    });

    $('.onok').click(function () {
        var reg = /^[\u4E00-\u9FA5]{2,4}$/;
        if ($('.user-name').val() == '姓名') {
            $.alert('请填写您的姓名');
        }
        if(!reg.test($('.user-name').val())){
            $.alert('姓名填写有误');
        }
        console.log($('.tel').val());
        if(!(/^1[34578]\d{9}$/.test($('.tel').val()))){
            $.alert("手机号码有误,请重填");
            return false;
        }

        $.ajax({
            'type': 'post',
            'url': '/fight-single/save-order',
            'data': {
                'good_id': goods_id,
                'username': $('.user-name').val(),
                'tel': $('.tel').val(),
                '_csrf': '<?= Yii::$app->request->csrfToken?>'
            },
            'dataType': 'json',
            'success': function (data) {
                if (data.code == 0) {
                    setCookie(data.order_id);
                } else  {
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
</script>
</div>
</div></body></html>