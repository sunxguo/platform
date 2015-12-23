<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <title><?php echo $title;?></title>
	<link rel="stylesheet" href="/assets/css/base.css" type="text/css"/>
	<link rel="stylesheet" href="/assets/css/mobile.css" type="text/css"/>
    <script src="/assets/js/jquery.js" type="text/javascript"></script>
    <script src="/assets/js/mobile.js" type="text/javascript"></script>
    <script src="/assets/js/pingpp_pay.js" type="text/javascript"></script>
	<script src="/assets/js/unslider.min.js" type="text/javascript"></script>
	<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
	<script src="/assets/js/jquery.event.swipe.js" type="text/javascript"></script>
</head>
<body scroll="no">
<div id="all">
	<input type="hidden" id="appid" value="<?php echo $_GET["appid"];?>">
	<input type="hidden" id="website" value="<?php echo WEBSITE_URL;?>">
	<?php if($app->template_app==1):?>
	<div class="sider" id="sider">
		<div class="search">
			<input type="text" placeholder="搜索">
		</div>
		<ul class="nav clearfix">
			<?php foreach($navs as $key=>$item):?>
			<li>
				<a href="javascript:getinfo('<?php echo $item->id_nav;?>','<?php echo $item->name_nav;?>');">
					<img src="<?php echo $item->icon_nav;?>">
					<span><?php echo $item->name_nav;?></span>
				</a>
			</li>
			<?php endforeach;?>
		</ul>
		<div class="ad" id="ad_banner">
			<img id="ad_img" width="196" src="/assets/images/mobile/mobile-ad.png">
		</div>
	</div>
	<?php endif;?>
	<div class="main" id="main">
	<!--
		<div class="header skin<?php echo $app->skin_app;?>" id="header" bkcolor="<?php echo $app->skin_app=="5"?$app->skincolor_app:'';?>" bkimg="<?php echo $app->skin_app=="6"?$app->skinbgimg_app:'';?>">
			<?php if($app->template_app==1):?>
			<div id="show_sider_bt" class="bt-div" onclick="show_sider()">
				<a href="javascript:void()">
					<img src="/assets/images/mobile/14.png"/>
				</a>
			</div>
			<?php endif;?>
			<!--
			<div id="goBackSub_bt" class="bt-div" onclick="goBackSub()" style="display:none;">
				<a href="javascript:void()">
					<img src="/assets/images/cms/scroll_left.png"/>
				</a>
			</div>
			<div id="goBackCat_bt" class="bt-div" onclick="goBackCat()" style="display:none;">
				<a href="javascript:void()">
					<img src="/assets/images/cms/scroll_left.png"/>
				</a>
			</div>
			<div id="goBackUC_bt" class="bt-div" onclick="goBackUC()" style="display:none;">
				<a href="javascript:void()">
					<img src="/assets/images/cms/scroll_left.png"/>
				</a>
			</div>
			<div id="goBackUCOrders_bt" class="bt-div" onclick="goBackUCOrders()" style="display:none;">
				<a href="javascript:void()">
					<img src="/assets/images/cms/scroll_left.png"/>
				</a>
			</div>
			<div class="tit-div" id="tit_div">
				<span class="title mobiletitle<?php echo $app->template_app;?>" id="tit_con"><?php echo $app->name_app;?></span>
			</div>
			<!--
			<div id="malMore_bt" class="malMore-bt-div" onclick="showMallMore()">
				<a href="javascript:void()">
					<img id="mmbt" src="/assets/images/cms/mallmore.png"/>
				</a>
			</div>
		</div>
	-->
		<div class="mall-more clearfix" id="mall_more">
			<a href="javascript:usercenter()" class="new-tbl-cell">
				<span class="icon icon4">个人中心</span>
				<p>个人中心</p>
			</a>
			<a href="javascript:show_cart()" id="html5_cart" class="new-tbl-cell">
				<span class="icon icon3">购物车</span>
				<p>购物车</p>
			</a>
			<a href="javascript:goHome()" class="new-tbl-cell">
				<span class="icon icon1">首页</span>
				<p>首页</p>
			</a>
		</div>
		<div class="main-body" id="main_body" style="overflow:scroll;">
			<div class="slider" id="slider">
				<ul>
					<?php foreach($sliders as $img):?>
					<li><a href="javascript:void();"><img class="slider_img" src="<?php echo $img->src_homeslider;?>"/></a></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
		<?php if($app->template_app==2):?>
		<ul class="bar" id="bar">
			<?php $bt_num=sizeof($navs);if($bt_num<=4):?>
				<?php foreach($navs as $key=>$item):?>
				<li>
					<a href="javascript:getinfo('<?php echo $item->id_nav;?>','<?php echo $item->name_nav;?>');">
						<img src="<?php echo $item->icon_nav;?>">
						<span><?php echo $item->name_nav;?></span>
					</a>
				</li>
				<?php endforeach;?>
			<?php else:?>
				<?php for($i=0;$i<3;$i++):?>
				<li>
					<a href="javascript:getinfo('<?php echo $navs[$i]->id_nav;?>','<?php echo $navs[$i]->name_nav;?>');">
						<img src="<?php echo $navs[$i]->icon_nav;?>">
						<span><?php echo $navs[$i]->name_nav;?></span>
					</a>
				</li>
				<?php endfor;?>
				<li>
					<a href="javascript:showmore();">
						<img src="/assets/images/mobile/14.png">
						<span>More</span>
					</a>
				</li>
			<?php endif;?>
		</ul>
		<ul class="backbar" id="back_bar">
			<li id="goBackHome_bt" style="display:none;">
				<a href="javascript:bargoback();">
					<img src="/assets/images/mobile/btn_footer_back.png">
					<span>返回</span>
				</a>
			</li>
			<li id="goBackSub_bt" style="display:none;">
				<a href="javascript:goBackSub();">
					<img src="/assets/images/mobile/btn_footer_back.png">
					<span>返回</span>
				</a>
			</li>
			<li id="goBackCat_bt" style="display:none;">
				<a href="javascript:goBackCat();">
					<img src="/assets/images/mobile/btn_footer_back.png">
					<span>返回</span>
				</a>
			</li>
			<li id="goBackUC_bt" style="display:none;">
				<a href="javascript:goBackUC();">
					<img src="/assets/images/mobile/btn_footer_back.png">
					<span>返回</span>
				</a>
			</li>
			<li id="goBackUCOrders_bt" style="display:none;">
				<a href="javascript:goBackUCOrders();">
					<img src="/assets/images/mobile/btn_footer_back.png">
					<span>返回</span>
				</a>
			</li>
			<li>
				<a href="javascript:location.reload();">
					<img src="/assets/images/mobile/btn_footer_home.png">
					<span>主頁</span>
				</a>
			</li>
			<li>
				<a href="javascript:showmore();">
					<img src="/assets/images/mobile/btn_footer_more.png">
					<span>More</span>
				</a>
			</li>
		</ul>
		<?php endif;?>
		<div class="hide-layer" id="hideLayer">
		</div>
	</div>
	<?php if($app->template_app==2 && $bt_num>4):?>
	<ul class="morelist" id="morelist" style="position:fixed;right: 0px;top: 0px;">
		<?php for($i=0;$i<$bt_num;$i++):?>
		<li>
			
			<a href="javascript:getinfo('<?php echo $navs[$i]->id_nav;?>','<?php echo $navs[$i]->name_nav;?>');">
				<img src="<?php echo $navs[$i]->icon_nav;?>">
				<span><?php echo $navs[$i]->name_nav;?></span>
			</a>
		</li>
		<?php endfor;?>
		<!-- <li>
			<a href="javascript:getinfo('<?php echo $ymxz->id_nav;?>','<?php echo $ymxz->name_nav;?>');">
				<img src="<?php echo $ymxz->icon_nav;?>">
				<span><?php echo $ymxz->name_nav;?></span>
			</a>
		</li> -->
		<li>
			<a href="javascript:getinfo('<?php echo $zdqb->id_nav;?>','<?php echo $zdqb->name_nav;?>');" target="_blank">
				<img src="<?php echo $zdqb->icon_nav;?>">
				<span><?php echo $zdqb->name_nav;?></span>
			</a>
		</li>
	</ul>
	<?php endif;?>
</div>
</body>
</html>