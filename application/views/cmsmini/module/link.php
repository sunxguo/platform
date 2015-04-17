<div class="padding10 formList clearfix">
	<div class="partContent baseInfo">
		<div class="title">
			<?php echo lang('cms_content_baseinfo');?>
		</div>
		<div id="Div1">
			<div class="item" style="margin-top:20px;">
				<span class="label">Link：</span>
				<input type="text" id="url" class="inp-txt width400" maxlength="30" value="<?php echo $url->url_link;?>">
				<span style="color: red;">*</span>
			</div>
			<div class="btn-center">
				<a href="javascript:save_module_link('<?php echo $url->id_link;?>')" class="btnfa120"><?php echo lang('cms_content_save');?></a>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="/assets/kindEditor/themes/custom/custom.css" />
<script charset="utf-8" src="/assets/kindEditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/kindEditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/assets/js/jquery.form.js"></script>
<script src="/assets/js/cms.js" type="text/javascript"></script>
<script src="/assets/js/module.js" type="text/javascript"></script>