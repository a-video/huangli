<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
$invcode = $_GET["invcode"];
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="app下载">
    <meta name="keyword" content="app下载">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimun-scale=1, user-scalable=no">
    <title>app下载</title>
    <style>html,body{margin:0;padding:0;height:100%}a{background-color:transparent;-webkit-tap-highlight-color:transparent}a:active,a:hover{outline:0}.page1{position:relative;height:100%;background:url("http://p3.qhimg.com/t0158121a34fffaa6f2.png") no-repeat;-webkit-background-size:100% 100%;background-size:100% 100%}.img-center{left:50%;-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-ms-transform:translateX(-50%);-o-transform:translateX(-50%);transform:translateX(-50%)}.page1 .logo{position:absolute;top:4%;height:3.828%}.page1 .text{position:absolute;top:12%;height:20%}.page1 .phone{position:absolute;top:28%;height:49%}.page1 .circle{position:absolute;top:48%;left:14%;height:7.422%}.download{position:absolute;bottom:8%;height:10.5%}.btn-lite{font-size:14px;color:#fff;text-decoration:underline;position:absolute;bottom:6%;left:50%;-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-ms-transform:translateX(-50%);-o-transform:translateX(-50%);transform:translateX(-50%)}.wx_open{position:fixed;z-index:999;top:0;left:0;background:url(http://p6.qhimg.com/t0170b775e9bf981d83.png) 86% 1% no-repeat rgba(0,0,0,0.9);background-size:55%;height:100%;width:100%}.div-horizonal{display:none;height:100%;overflow:scroll}.div-horizonal-container{position:relative}.div-horizonal .horizonal-bg{width:100%;display:block}.div-horizonal .horizonal-btn-normal{position:absolute;bottom:11.4%;width:60%;height:8%}.div-horizonal .horizonal-btn-lite{position:absolute;bottom:6.4%;width:30%;height:3%}</style>
</head>
<body>
<div class="page1">
    <!--<img id="img_logo" class="logo img-center" src="https://p2.ssl.qhimg.com/d/inn/73db53be/logo_android.png">-->
    <?php if($invcode <> ''){
        echo '<div style="text-align:center;padding-top:35px;color:#fff;">邀请码：<b>';
        echo $invcode;
        echo '</b></div>';
    }
     ?>
    <img class="text img-center" src="http://p1.qhimg.com/t01e1c8ca1ac8c51f51.png">
    <img class="phone img-center" src="https://i.loli.net/2019/01/11/5c3803c374d9c.png">
    <img class="circle" src="http://p2.qhimg.com/t0163ddfdbf1d62fe04.png">
    <a href="http://t.cn/EGzSEtT" target="_blank">
        <img class="download img-center" src="http://p1.qhimg.com/t013039c7080e74498e.png">
    </a>
</div>
<script type="text/javascript">
        function is_weixin() {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                return true;
                live_weixin.style.display='';
            } else {
                return false;
                live_weixin.style.display='none';
            }
        }
        var isWeixin = is_weixin();
        var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
        function loadHtml(){
            var div = document.createElement('div');
            div.id = 'weixin-tip';
            div.innerHTML = '<p><img src="https://i.loli.net/2019/01/03/5c2db90382eb5.gif" alt="微信打开"/></p>';
            document.body.appendChild(div);
        }
        function loadStyleText(cssText) {
            var style = document.createElement('style');
            style.rel = 'stylesheet';
            style.type = 'text/css';
            try {
                style.appendChild(document.createTextNode(cssText));
            } catch (e) {
                style.styleSheet.cssText = cssText; //ie9以下
            }
            var head=document.getElementsByTagName("head")[0]; //head标签之间加上style样式
            head.appendChild(style);
        }
        var cssText = "#weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 100;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
        if(isWeixin){
            loadHtml();
            loadStyleText(cssText);
        }
    </script>
</body>
</html>
