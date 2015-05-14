<div class="slider">
<h3 <?php echo $nav->id_nav==0?'class="current"':'';?>>
	<a href="/cmsmini/module/homeSlider" id="menu_manageApp">
		<span class="ico" style="background:none;"><img src="/assets/images/cms/image.png" style="width: 30px;height: 30px;top: -13px;position: relative;"></span>
		首頁輪播圖
	</a>
</h3>
<?php foreach($navs as $item):?>
<h3 <?php echo $nav->id_nav==$item->id_nav?'class="current"':'';?>>
	<a href="/cmsmini/module?nav=<?php echo $item->id_nav;?>" id="menu_manageApp">
		<span class="ico" style="background:none;"><img src="<?php echo $item->icon_nav;?>" style="width: 30px;height: 30px;top: -13px;position: relative;"></span>
		<?php echo $item->name_nav;?>
	</a>
</h3>
<?php endforeach;?>
</div>