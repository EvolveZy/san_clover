<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="5">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="ecstore.b2c">
    <title>三叶草桌游水吧_1小时新鲜送达！</title>
    <link href="/assets/css/basic.min.css" rel="stylesheet" media="screen, projection">
    <link rel="stylesheet" href="/assets/css/stylecake.css">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <script type="text/javascript" src="/assets/js/jquery-1.8.2.min.js"></script>
</head>
<body>
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
<div id="container" class="page-container clearfix">
    <div class="inner-wrap">
        <div class="bread-crumbs">
                  <span>
                <a href="../" alt="" title="">首页</a>
            </span>
            <span>&nbsp;&gt;&nbsp;</span>
            <span class="now"><?php echo $category->name; ?></span>
        </div>
        <div id="main" class="clearfix">
            <!-- 商品列表开始 -->
            <div class="page-maincontent">
                <div id="gallery_show" class="gallery-show">
                    <div class="gallery-list">
                        <ul>
                            <?php
                            foreach ($products->result_array() as $row){
                                ?>
                                <li class="goods-item clearfix">
                                    <div class="goods-pic">
                                        <img class="action-goods-img" title="<?php echo $row["name"]; ?>" alt="<?php echo $row["name"]; ?>" src="/assets/products/<?php echo $row["img_src"]; ?>">
                                    </div>
                                    <div class="goods-action">
                                        <div class="goods-buy">
                                            <div>
                                                <a class="btn btn-major action-view" id="IDgalleryview5757"><span><span><?php if(!$row["status"]) echo "<font color=red>已售空</font>" ?></span></span></a>
                                            </div>
                                            <?php if($row["status"]) {?>
                                                <a class="btn btn-major action-addtocart" id="" data-goods-id="277" onclick="add_shopping(<?php echo $row["id"]; ?>)"><span><span>添加</span></span></a>
                                            <?php }else {?>
                                                <a class="btn btn-major action-addtocart"><span><span><s>添加</s></span></span></a>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="goods-price">
                                        <ul>
                                            <li class="listgoodprice-21cake">
                                                <label for=""></label>
                                                <?php if($row["manualoverride"]&&$row["manualoverride"]<$row["price"]) { ?>
                                                    <s><span class="smallrmb color4919">¥</span><b class="price"><?php echo $row["price"]; ?></b></s>
                                                    <span class="smallrmb color4919" style="color: red;">¥</span><b class="price" style="color: red;"><?php echo $row["manualoverride"]; ?></b>
                                                <?php } elseif($row["manualoverride"]){ ?>
                                                    <span class="smallrmb color4919">¥</span><b class="price"><?php echo $row["manualoverride"]; ?></b>
                                                <?php } else{ ?>
                                                    <span class="smallrmb color4919">¥</span><b class="price"><?php echo $row["price"]; ?></b>
                                                <?php }?>
                                                <b>/<?php echo $row["unit"]; ?></b>
                                            </li>
                                            <!--  <a href="http://www.21cake.com/gallery-index---0---1.html#" data-time="time_query_dialog_5757" onclick="return false;" id="timeTooltip5757" class="timeTooltip" title="查看配送时间">查看配送时间</a>-->
                                            <div id="time_query_dialog" name="time_query_dialog_5757" class="popup-container time_query_dialog" style="display:none">
                                                <div class="popup-body">
                                                    <div class="popup-header clearfix">
                                                        <h2 class="title"><?php echo $row["name"]; ?></h2>
                                                    </div>
                                                    <div class="popup-content clearfix">
                                                        <div class="product-time-explain">
                                                            <p class="early-time">现在订购立即派送&nbsp;<em>&nbsp预计35分钟</em>&nbsp;送达</p>
                                                            <p class="last-time">每日最晚配送时间20:30</p>
                                                        </div>
                                                        <span class="icoimg"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="goods-info">
                                        <h3 class="goods-name">
                                            <a><?php echo $row["name"]; ?></a>
                                        </h3>
                                        <div class="goods-desc"><?php echo $row["description"]; ?></div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
