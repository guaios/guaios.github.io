<?php
require("../head.php");
?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="author" content="呱呱-改机型软件作者">
    <link href="../css/popup.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
    <title><?php echo $title; ?></title>
<script src="//lib.baomitu.com/jquery/3.5.0/jquery.min.js"></script>
<script src="//lib.baomitu.com/skel/3.0.1/skel.min.js"></script>
<script src="../js/util.js"></script>
<script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="../js/popup.min.js" type="text/javascript"></script>
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
<body>
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
                        
						<li><a href="./qq.php" class="button"> <font color="#FFD700">QQPro企业版下载</font></a></li>
						
						<li><a href="https://pan.gua.ee/600bda5ee985680044243196" class="button"><font color="#4aa3f8">QQPro定制版下载</a></li></font>
                        </ul>
                    </nav>

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