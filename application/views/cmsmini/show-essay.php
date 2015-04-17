<div class="padding10 formList clearfix">
	<div class="partContent baseInfo">
		<div class="title">
			<?php echo lang('cms_content_baseinfo');?>
		</div>
		<div id="Div1">
			<div class="item" style="margin-top: 10px;">
				<span class="label"><?php echo lang('cms_content_nav');?>：</span>
				<?php echo $nav->name_nav;?>
				<input id="nav" value="<?php echo $nav->id_nav;?>" type="hidden">
				<br>
			</div>
			<div class="item">
				<span class="label"><?php echo lang('cms_content_title');?>：</span>
				<input type="text" id="title" class="inp-txt width400" maxlength="30" placeholder="<?php echo lang('cms_content_titlelength');?>" value="<?php echo $essay->title_essay;?>">
				<span style="color: red;">*</span>
			</div>
			<div class="item" style="margin-bottom: 20px;">
				<span class="label"><?php echo lang('cms_content_summary');?>：</span>
				<input class="inp-txt width400" id="summary" maxlength="30"  placeholder="<?php echo lang('cms_content_summarylength');?>" value="<?php echo $essay->summary_essay;?>">
			</div>
		</div>
	</div>
	<div class="partContent listImgs" id="ListImgs" style="margin-bottom: 23px">
		<div class="title" style="position: relative">
			<span style="float: left;"><?php echo lang('cms_content_thumbnail');?></span>
		</div>
		<div class="lists" id="Div6">
			<span class="example">
				<a href="javascript:void(0)" style="color: Red;display:none"><?php echo lang('cms_content_example');?></a>
			</span>
			<ul id="imgListDivs">
				<?php $num=sizeof($essay->thumbnail_essay); foreach($essay->thumbnail_essay as $item):?>
				<li class="img-item imagelist" onmouseover="imgover(this)" onmouseout="imgout(this)">
					<img class="thumb-src" width="77" height="77" src="<?php echo $item->src;?>">
					<img onclick="delclick(this)" class="del-bt" title="<?php echo lang('cms_content_delthisthumbnail');?>" src="/assets/images/cms/delete.png">
				</li>
				<?php endforeach;?>
				<li id="addImgList" class="img-item" <?php if($num>=3) echo "style='display:none;'";?>>
					<div onclick="add_thumb()" style="cursor:pointer;">
						<img width="77" height="77" src="/assets/images/cms/appbg_ad.png">
					</div>
					<form id="uploadImgThumb" method="post" action="/cms/index/upload_img" enctype="multipart/form-data">
						<input onchange="return upload_thumb_img('#uploadImgThumb')" name="image" type="file" id="file" style="display:none;" accept="image/*">
					</form>
				</li>
			</ul>
		</div>
	</div>
	<div class="partContent clearboth content">
		<div class="title" onclick="shows(2)"><?php echo lang('cms_content_content');?></div>
		<textarea id="essay_content" name="description"><?php echo $essay->text_essay;?></textarea>
	</div>
	<div class="btn-center">
		<a href="javascript:save_module_essay(0,'<?php echo $_GET["essayid"];?>')" class="btnfa120"><?php echo lang('cms_content_saveandpublish');?></a>
		<a href="javascript:save_module_essay(1,'<?php echo $_GET["essayid"];?>')" class="btn120"><?php echo lang('cms_content_savedraft');?></a>
	</div>
</div>
<link rel="stylesheet" href="/assets/kindEditor/themes/custom/custom.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
<script src="/assets/js/cms.js" type="text/javascript"></script>
<script src="/assets/js/module.js" type="text/javascript"></script>