<?php
require("./head.php");
?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="呱呱-改机型软件作者">
<meta name="apple-mobile-web-app-title" content="苹果QQiOSQQ-iPhone免越狱修改QQ机型在线修改QQ改机型多开iPhone XSPromax在线ios免越狱软件欢颜呱呱修改机型六月ios｜iPhoneQQ改机型软件平凡网络改机型在线max在线改机型软件后台登录">
<meta name="keywords" content="苹果QQiOSQQ-iPhone免越狱修改QQ机型在线修改QQ改机型多开iPhone XSPromax在线ios免越狱软件欢颜呱呱修改机型六月ios｜iPhoneQQ改机型软件平凡网络改机型在线max在线改机型软件后台登录">
<meta name="description" content="苹果QQiOSQQ-iPhone免越狱修改QQ机型在线修改QQ改机型多开iPhone XSPromax在线ios免越狱软件欢颜呱呱修改机型六月ios｜iPhoneQQ改机型软件平凡网络改机型在线max在线改机型软件后台登录">
    <link href="./css/popup.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="./css/style.css" type="text/css">
    <title><?php echo $title; ?></title>
<script src="//lib.baomitu.com/jquery/3.5.0/jquery.min.js"></script>
<script src="//lib.baomitu.com/skel/3.0.1/skel.min.js"></script>
<script src="./js/util.js"></script>
<script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="./js/popup.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="//apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="//apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
setTimeout( function(){$("#hitokoto").fadeOut(1000);}, 5000 );
  function goo(){
  fetch('https://v1.hitokoto.cn')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerHTML = data.hitokoto;
	  $("#hitokoto").fadeIn(1000);
    })
    .catch(function (err) {
      console.error(err);
    })
	setTimeout( function(){$("#hitokoto").fadeOut(1000);}, 5000 );
  }
  setInterval("goo()",5800);
</script>
</head>
<body onload="notice('<?php  $string=file_get_contents("http://127.0.0.1:88/gwad/alert.txt"); echo mb_convert_encoding($string, 'UTF-8', 'GB2312' ); ?>','提示','好');">
    <div id="wrapper">
        <article id="home" class="panel special" style="display: flex;">
            <div class="content">
                <div class="inner">
                    <header>
                      
  <div class="content">
		<div class="inner">
                        <h1><font color="#FF5200"><?php echo $zz; ?>IOS免越狱多开</font></h1>
			
                        <p><strong><?php echo $zz; ?>·独家技术支持</strong></p>
<p>企鹅🐧:<?php echo $qq; ?> </p>
<p>&nbsp;</p>
<div id="hitokoto">好好努力 带上微笑 没时间纠结 没时间计较</div>
          </div></div></header>
                    <nav id="nav">
                        <ul class="actions vertical special spinY">
                        
						<li><a href="#usage" class="button"> <font color="#FFD700">使用方法(新手必看)</font></a></li>
						
						<li><a href="#gongneng" class="button"><font color="#FFD700">软件功能</a></li></font>
						
						<li><a href="https://bssji.com/udid/" class="button"><font color="#4aa3f8">独立证书定制</a></li></font>
                        
                        <li><a href="https://buy.dk.gua.ee" class="button"><font color="#4aa3f8">购买地址</font></a></li>
                        
                        <li><a href="./download/" class="button"><font color="#00FF00">下载地址</a></li></font>
                        
                        <li><a href="https://ht.dk.gua.ee/q/chaxun/"class="button"><font color="#00FF00">卡密查询</font></a></li>
                        
						<li><a href="https://jq.qq.com/?_wv=1027&k=J38vDnvi" class="button">售后Q群</a>
						
                        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq; ?>&site=qq&menu=yes" class="button">联系作者</a></li>
                        
                        <li><a href="https://ht.dk.gua.ee/" class="button">通用管理后台</a></li>
                        
                        </ul>
                    </nav>

      </div>
            </div>
       
</article>
<article id="usage" class="panel secondary inactive" style="display: none;">
<div class="content">
<ul class="actions spinX">
<li><a href="#home" class="button small back">返回</a>
</li>
</ul>
<div class="inner">
<header>
<h2>使用方法</h2>
<blockquote>1.先打开下载地址，选择一个地址进行下载(若无法下载更换即可)。软件下载可能会遇到进度条不显示加载的情况，耐心等待一下即可，下载速度取决于网速哦～<br><br>2.下载完毕后直接打开会有未信任开发者的提示，请到设置-通用-描述文件与设备管理-打开QQ的描述文件-点信任就可以了。<br><br>3.打开下载的QQ软件，点头像-左下角设置-右上角个性打开多功能菜单即可使用改机型、抢红包等全新功能。</blockquote>
</header>
</div>
</div>
</article>
<article id="gongneng" class="panel secondary inactive" style="display: none;">
<div class="content">
<ul class="actions spinX">
<li><a href="#home" class="button small back">返回</a>
</li>
</ul>
<div class="inner">
<header>
<h2>软件功能</h2><br>
<blockquote>
 <h3>闪照自动保存(new)</h3>
<p>点开闪照即可自动保存到本地相册</p><br><br>
<h3>新机型(new)</h3>
 <p>现支持：MacBookPro、iMac、不在线、你爹在线、Linux等众多有趣机型</p><br><br>
<h3>虚拟机型</h3>
<p>修改任意机型在线型号、说说小尾巴，支持iPhone系列全机型以及安卓机型</p><br><br>
<h3>虚拟定位</h3>
<p>修改全球任意位置都没问题</p><br><br>
<h3>信息防撤回</h3>
<p>再也不用担心错过任何信息</p><br><br>
<h3>全球最快秒抢红包</h3>
<p>挂后台都能秒抢！！！</p>
</blockquote>
</header>
</div>
</div>
</article>
<footer id="footer" class="">
 <p class="copyright">&copy;<?php echo $copy; ?></p>
 <p class="copyright"><?php echo $beian; ?></p>
<center>本站已安全运行:
<span id="momk"></span>
<script language="javascript">
function show_date_time(){
window.setTimeout("show_date_time()", 1000);
BirthDay=new Date("<?php echo $stime; ?>");
today=new Date();
timeold=(today.getTime()-BirthDay.getTime());
sectimeold=timeold/1000
secondsold=Math.floor(sectimeold);
msPerDay=24*60*60*1000
e_daysold=timeold/msPerDay
daysold=Math.floor(e_daysold);
e_hrsold=(daysold-e_daysold)*-24;
hrsold=Math.floor(e_hrsold);
e_minsold=(hrsold-e_hrsold)*-60;
minsold=Math.floor((hrsold-e_hrsold)*-60);
seconds=Math.floor((minsold-e_minsold)*-60);
momk.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒" ;
}
show_date_time();
</script>
<style>
#momk{animation:change 10s infinite;font-weight:800; }
@keyframes change{0%{color:#5cb85c;}25%{color:#556bd8;}50%{color:#e40707;}75%{color:#66e616;}100% {color:#67bd31;}}
</style>
</center>
</footer>
</div>
<script>
        (function($) {
            skel.breakpoints({
                xlarge: '(max-width: 1680px)',
                large: '(max-width: 1280px)',
                medium: '(max-width: 980px)',
                small: '(max-width: 736px)',
                xsmall: '(max-width: 480px)',
                xxsmall: '(max-width: 360px)'
            });
            $(function() {
                var $window = $(window),
                    $document = $(document),
                    $body = $('body'),
                    $wrapper = $('#wrapper'),
                    $footer = $('#footer');
                $window.on('load', function() {
                    window.setTimeout(function() {
                        $body.removeClass('is-loading-0');
                        window.setTimeout(function() {
                            $body.removeClass('is-loading-1');
                        }, 1500);
                    }, 100);
                });
                $('form').placeholder();
                var $wrapper = $('#wrapper'),
                    $panels = $wrapper.children('.panel'),
                    locked = true;
                $panels.not($panels.first()).addClass('inactive').hide();
                $panels.each(function() {
                    var $this = $(this),
                        $image = $this.children('.image'),
                        $img = $image.find('img'),
                        position = $img.data('position');
                    $image.css('background-image', 'url(' + $img.attr('src') + ')');
                    if (position) $image.css('background-position', position);
                    $img.hide();
                });
                window.setTimeout(function() {
                    locked = false;
                }, 1250);
                $('a[href^="#"]').on('click', function(event) {
                    var $this = $(this),
                        id = $this.attr('href'),
                        $panel = $(id),
                        $ul = $this.parents('ul'),
                        delay = 0;
                    event.preventDefault();
                    event.stopPropagation();
                    if (locked) return;
                    locked = true;
                    $this.addClass('active');
                    if ($ul.hasClass('spinX') || $ul.hasClass('spinY')) delay = 250;
                    window.setTimeout(function() {
                        $panels.addClass('inactive');
                        $footer.addClass('inactive');
                        window.setTimeout(function() {
                            $panels.hide();
                            $panel.show();
                            $document.scrollTop(0);
                            window.setTimeout(function() {
                                $panel.removeClass('inactive');
                                $this.removeClass('active');
                                locked = false;
                                $window.triggerHandler('--refresh');
                                window.setTimeout(function() {
                                    $footer.removeClass('inactive');
                                }, 250);
                            }, 100);
                        }, 350);
                    }, delay);
                });
                if (skel.vars.IEVersion < 12) {
                    $window.on('--refresh', function() {
                        $wrapper.css('height', 'auto');
                        window.setTimeout(function() {
                            var h = $wrapper.height(),
                                wh = $window.height();
                            if (h < wh) $wrapper.css('height', '100vh');
                        }, 0);
                        if (skel.vars.IEVersion < 10) {
                            var $panel = $('.panel').not('.inactive'),
                                $image = $panel.find('.image'),
                                $content = $panel.find('.content'),
                                ih = $image.height(),
                                ch = $content.height(),
                                x = Math.max(ih, ch);
                            $image.css('min-height', x + 'px');
                            $content.css('min-height', x + 'px');
                        }
                    });
                    $window.on('load', function() {
                        $window.triggerHandler('--refresh');
                    });
                    $('.spinX').removeClass('spinX');
                    $('.spinY').removeClass('spinY');
                }
            });
        })(jQuery);
    </script>