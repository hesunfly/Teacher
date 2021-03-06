<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>修改用户 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php if($_SESSION['u_name']== 'admin'): ?><input type="text" class="input-text" value="<?php echo ($info["name"]); ?>" placeholder="课程教师" id="name" name="name">
				<?php else: ?>
				<input type="text" class="input-text" value="<?php echo (session('u_name')); ?>" disabled/>
				<input type="hidden" name="name" value="<?php echo (session('u_name')); ?>"><?php endif; ?>		
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="gender" type="radio" id="sex-1" value="1" <?php if($info["gender"] == 1): ?>checked<?php endif; ?> >
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="gender" value="2" <?php if($info["gender"] == 2): ?>checked<?php endif; ?>>
					<label for="sex-2">女</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>出生日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["birthday"]); ?>" placeholder="" id="birthday" name="birthday">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["phone"]); ?>" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" value="<?php echo ($info["email"]); ?>" name="email" id="email">
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">照片：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>家庭住址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" value="<?php echo ($info["address"]); ?>" name="address" id="address">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">学历：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="study">
					<option value="" selected>请选择学历</option>
					<option value="1" <?php if($info["study"] == 1): ?>selected<?php endif; ?>>本科</option>
					<option value="2" <?php if($info["study"] == 2): ?>selected<?php endif; ?>>研究生</option>
					<option value="3" <?php if($info["study"] == 3): ?>selected<?php endif; ?>>博士</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">职称：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="deep">
					<option value="" selected>请选择职称</option>
					<option value="1" <?php if($info["deep"] == 1): ?>selected<?php endif; ?>>讲师</option>
					<option value="2" <?php if($info["deep"] == 2): ?>selected<?php endif; ?>>副教授</option>
					<option value="3" <?php if($info["deep"] == 3): ?>selected<?php endif; ?>>教授</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>参加工作时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" value="<?php echo ($info["jointime"]); ?>" name="jointime" id="jointime">
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="remark" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="$.Huitextarealength(this,100)"><?php echo ($info["remark"]); ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/laydate/laydate.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{

			gender:{
				required:true
			},
			phone:{
				required:true,
				isMobile:true
			},
			email:{
				required:true,
				email:true
			},
			birthday:{
			    required:true
			},
            address:{
                required:true,
				minlength:5
            },
			study:{
			    required:true
			},
			jointime:{
			    required:true
			}
		},
        messages: {
            gender: {
                required: "请选择性别"
            },
            mobile: {
                required: "请输入手机号码",
                isMobile: '请输入正确的电话号码'
            },
            email: {
                required: "请输入电子邮箱",
                email: '请输入正确的电子邮箱'
            },
            birthday: {
                required: "请选择出生日期"
            },
            address: {
                required: "请输入住址",
                minlength: '住址最少五个字符'
            },
            study: {
                required: "请选择学历",
            },
            jointime: {
                required: "请输入参加工作时间",
            }
        },
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
            var options = {
                success: function (res) {
                    if(res.status==0){
                        layer.alert(res.msg);
                    }else {
                        window.parent.location.reload();
                    }
                }
            };
            $(form).ajaxSubmit(options);
		}
	});

    laydate.render({
        elem: '#jointime'
    });
    laydate.render({
        elem: '#birthday'
    });

});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>