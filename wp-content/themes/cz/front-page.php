<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head();?>
	<style>
		body{font-family: Georgia,"Times New Roman", Times, serif;}
		#main{width:100%;max-width:600px;min-height:80vh;background:#F5F5F5;margin:5vh auto;padding:15px;line-height:40px;font-size:20px;}
		.head{border-bottom:1px solid #DDD;padding-top:15px;padding-bottom:15px;margin-bottom:15px;}
		section{font-size:16px;color:#474747;line-height:30px;}
	</style>
</head>
<body>
	<div id="main">
		<div class="head">This website is for study and testing usage only.</div>
		<section>
			<?php do_action('tester_plugin_hook');?>
		</section>
	</div>
	<?php wp_footer();?>
</body>
</html>
