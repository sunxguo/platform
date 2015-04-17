<div class="padding10 formList clearfix">
	<div class="partContent baseInfo">
		<div class="title">
			<?php echo lang('cms_content_baseinfo');?>
			<input type="hidden" id="nav" value="<?php echo $nav->id_nav;?>">
		</div>
		<div id="Div1">
			<div class="item" style="margin-top: 10px;">
				<span class="label"><?php echo lang('cms_content_nav');?>：</span>
				<?php echo $nav->name_nav;?>
				<br>
			</div>
			<div class="item">
				<span class="label"><?php echo lang('cms_content_title');?>：</span>
				<input type="text" id="title" class="inp-txt width400" maxlength="30" placeholder="<?php echo lang('cms_content_titlelength');?>">
				<span style="color: red;">*</span>
			</div>
			<div class="item" style="margin-bottom: 20px;">
				<span class="label"><?php echo lang('cms_content_summary');?>：</span>
				<input class="inp-txt width400" id="summary" maxlength="30"  placeholder="<?php echo lang('cms_content_summarylength');?>">
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
				<li id="addImgList" class="img-item">
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
		<textarea id="essay_content" name="description"></textarea>
	</div>
	<div class="btn-center">
		<a href="javascript:add_module_essay(0)" class="btnfa120"><?php echo lang('cms_content_publish');?></a>
		<a href="javascript:add_module_essay(1)" class="btn120"><?php echo lang('cms_content_savedraft');?></a>
	</div>
</div>
<link rel="stylesheet" href="/assets/kindEditor/themes/custom/custom.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
<script src="/assets/js/cms.js" type="text/javascript"></script>
<script src="/assets/js/module.js" type="text/javascript"></script>