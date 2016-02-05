<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
  Copyright 2016 yimis.com 
  Author: yimis <i@yimis.com>
  CreateTime: 2016/2/5 6:31
-->
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap core CSS -->
	<link href="/example/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>ThinkPHP 快速搭建留言板</title>
	<style>
		.message-item {
			padding: 5px;
		}
	</style>
</head>
<body>

<div class="container" role="main">
	<div class="page-header">
		<h1>ThinkPHP 快速搭建留言板</h1>
	</div>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">留言列表</h3>
		</div>
		<div class="panel-body">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="message-item">
					<span class="label label-success">ID：<?php echo ($vo["id"]); ?></span>
					<span class="label label-success">时间：<?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></span>
					<span class="label label-success">IP：<?php echo ($vo["ip"]); ?></span>
					<div class="alert alert-info" role="alert">
						<strong>内容：</strong><?php echo ($vo["content"]); ?>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<form action="<?php echo u('Index/add');?>" method="post" role="form">
		<div class="form-group">
			<label for="InputContent">留言：</label>
			<textarea class="form-control" id="InputContent" name="content" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-default">提交</button>
	</form>
</div>
</body>
</html>