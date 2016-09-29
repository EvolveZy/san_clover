<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="5">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="ecstore.b2c"><title>三叶草桌游水吧_1小时新鲜送达！</title>
<link href="/assets/css/typical.css" rel="stylesheet" media="screen, projection">
<link href="/assets/css/basic.min.css" rel="stylesheet" media="screen, projection">
<link rel="stylesheet" href="/assets/css/stylecake.css">
<link rel="stylesheet" href="/assets/css/reset.css">
<link rel="stylesheet" href="/assets/css/index.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
</head>
<body style="background: none;">
<div class="head-area">
  <div class="head-inner">
    <div class="nav-area fl-l clearfix">
        <a href="../" class="global-logo fl-l"><img src="/assets/images/logo.jpg" style="width:200px;"></a>
        </div>
        <ul class="head-nav fl-l clearfix">
            <li class="nav-item active">
                <a href="../">首页</a>
            </li>
        	<?
               foreach ($categories->result() as $category){
			?>
            <li class="nav-item ">
                <a href="/index/category/<?=$category->id; ?>"><?=$category->name; ?></a>
            </li>
            <? }?>
            </ul>
    </div>
  </div>
<div id="slider" class="inpic-tab">
        <div class="main-slide" id='wrap'>
            <ul class="slide-list switchable-content" id="pic">
                <?
                $i=0;
                foreach ($homepage->result() as $img){
                    $i++;
                ?>
                <li class="slide-item">
                        <img src="/assets/images/<?=$img->image_src; ?>">
                </li>
                <? } ?>
             </ul>
            <ol id="list">
                <?php for($i;$i>0;$i--) {
                    if ($i == 1)
                        echo "<li class='on'>1</li>";
                    else
                        echo "<li>".$i."</li>";
                 }
                ?>
            </ol>
    </div>
    </div>
    </div>
    <script type="text/javascript">
 window.onload=function() {
     var wrap = document.getElementById('wrap'),
         pic = document.getElementById('pic').getElementsByTagName("li"),
         list = document.getElementById('list').getElementsByTagName('li'),
         index = 0,
         timer = null;
     timer = setInterval(autoPlay, 2000);
     wrap.onmouseover = function () {
         clearInterval(timer);
     }
     wrap.onmouseout = function () {
         timer = setInterval(autoPlay, 2000);
     }
     for (var i = 0; i < list.length; i++) {
         list[i].onmouseover = function () {
             clearInterval(timer);
             index = this.innerText - 1;
             changePic(index);
         };
     }
     ;
     function autoPlay() {
         if (++index >= pic.length) index = 0;
         changePic(index);
     }

     function changePic(curIndex) {
         for (var i = 0; i < pic.length; ++i) {
             pic[i].style.display = "none";
             list[i].className = "";
         }
         pic[curIndex].style.display = "block";
         list[curIndex].className = "on";
     }
 };
 </script> 
<div class="footer-area">
  <div class="footer-inner">
	  <div class="fl-l foo-mes">
	    <p>订购专线：<b>：028-87222044</b>（服务时间 10:00–22:00）&nbsp;|&nbsp;
	      <a target="_blank" class="weixin"><img src="/assets/images/weixinlog.png">
		  <span class="third-enter-dia">
            <span class="third-enter-dia-inner">
              <img src="/assets/images/weixin.png">
              <span>扫描三叶草方形<br>微信二维码</span>
            </span>
          </span>
		  </a>
      <span>
      </span>
      <b>当日奶茶配送截止下单时 20:00</b>
	    </p>
	   <p class="copyright">
        Copyright© 三叶草桌游水吧 2016, 版权所有 地址: 成都东软学院后街罗鸡肉对面  电话: 028-87222044
         </p>      
	  </div>
</body>
</html>