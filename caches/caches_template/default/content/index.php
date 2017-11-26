<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>soulsjie</title>
	<link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo CSS_PATH;?>boke.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <!--导航栏开始-->
    <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="#"><span class="heads"><span class="glyphicon glyphicon-leaf"></span> 恺 翾 – </span><span class="heads2">SOULSJIE</span></a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class=" label label-default">首页</span></a></li>
				<li><a href="<?php echo $CATEGORYS['9']['url'];?>" class="more"><span class=" label label-primary"><?php echo $CATEGORYS['9']['catname'];?></span></a></li>
				<li><a href="<?php echo $CATEGORYS['10']['url'];?>" class="more"><span class=" label label-success"><?php echo $CATEGORYS['10']['catname'];?></span></a></li>
				<li><a href="<?php echo $CATEGORYS['11']['url'];?>" class="more"><span class=" label label-warning"><?php echo $CATEGORYS['11']['catname'];?></span></a></li>
				<li><a href="<?php echo $CATEGORYS['12']['url'];?>" class="more"><span class=" label label-danger"><?php echo $CATEGORYS['12']['catname'];?></span></a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav> 
	<!--导航栏结束-->
	<!--内容开始-->
	<div class="container">
	<div class="row">	  
		  <!--栏目1-->
		  <div class="col-md-3 ">
			  <div class="list-group">
				  <a href="#" class="list-group-item active">
					<?php echo $CATEGORYS['9']['catname'];?>
				  </a>
				  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e442b12ab249928be35300386b1730ab&action=lists&catid=9&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'8',));}?>
					   <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>  		   
						  <a href="<?php echo $v['url'];?>" class="list-group-item" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a>
						<?php $n++;}unset($n); ?>   
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			  </div>
		  </div>
		  <!--栏目2-->
		  <div class="col-md-3 ">
			<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-success active">
					<?php echo $CATEGORYS['10']['catname'];?>
				  </a>
				  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c4f1cdf38145c840cb1d1ad0088af1a&action=lists&catid=10&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','limit'=>'8',));}?>
					   <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>  		   
						  <a href="<?php echo $v['url'];?>" class="list-group-item" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a>
						<?php $n++;}unset($n); ?>   
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			 </div>
		  </div>
		  <!--栏目3-->
		  <div class="col-md-3 ">
			<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-warning active">
					<?php echo $CATEGORYS['11']['catname'];?>
				  </a>
				  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9cce924b920ac570dcdbc3fa52592f8&action=lists&catid=11&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','limit'=>'8',));}?>
					   <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>  		   
						  <a href="<?php echo $v['url'];?>" class="list-group-item" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a>
						<?php $n++;}unset($n); ?>   
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			 </div>
		  </div>
		  <!--栏目4-->
		  <div class="col-md-3 ">
			<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-danger active">
					<?php echo $CATEGORYS['12']['catname'];?>
				  </a>
				  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=02dd38554d306c99dd109792be1b7004&action=lists&catid=12&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'id DESC','limit'=>'8',));}?>
					   <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>  		   
						  <a href="<?php echo $v['url'];?>" class="list-group-item" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a>
						<?php $n++;}unset($n); ?>   
				  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			 </div>
		  </div>
		</div>
		
	<div class="row">
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail hui">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3ad91ea47bd1a917553db40d16bfe7a&action=lists&catid=9&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'1',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?> 
		  <img src="<?php echo thumb($v['thumb']);?>" alt="..." class="img-circle">
		  <div class="caption">
			<p><a href="<?php echo $v['url'];?>"title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a></p>
		  </div>
			<?php $n++;}unset($n); ?>   
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	  </div>
	  
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail hui">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3ad91ea47bd1a917553db40d16bfe7a&action=lists&catid=9&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'1',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?> 
		  <img src="<?php echo thumb($v['thumb']);?>" alt="..." class="img-circle">
		  <div class="caption">
			<p><a href="<?php echo $v['url'];?>"title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a></p>
		  </div>
			<?php $n++;}unset($n); ?>   
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	  </div>
	  
	  <div class="col-sm-4 col-md-4">
		<div class="thumbnail hui">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3ad91ea47bd1a917553db40d16bfe7a&action=lists&catid=9&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'1',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?> 
		  <img src="<?php echo thumb($v['thumb']);?>" alt="..." class="img-circle">
		  <div class="caption">
			<p><a href="<?php echo $v['url'];?>"title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 40);?></a></p>
		  </div>
			<?php $n++;}unset($n); ?>   
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	  </div>
	</div>
		
	</div>

	<!--footer-->
	<footer class="bs-docs-footer dibu">
	  <div class="container">
		<ul class="bs-docs-footer-links">
		  <li><a href="https://github.com/twbs/bootstrap">GitHub 仓库</a></li>
		  <li><a href="../getting-started/#examples">实例</a></li>
		  <li><a href="http://www.youzhan.org">优站精选</a></li>
		  <li><a href="../about/">关于</a></li>
		</ul>

		<p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>

		<p>本项目源码受 <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>开源协议保护，文档受 <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a> 开源协议保护。</p>

	  </div>
	</footer>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>
  </body>
</html>