<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<style type="text/css">
<!--
* {
	padding:0 0;
	margin:0 auto;
	font-size:12px;
	font-family:'Microsoft Yahei';
}
body {
	background:url(../Public/images/bg_pattern_18.png)
}
a:link, a:visited {
	text-decoration:none;
	color:#D43428
}
a:hover, a:active {
	color:#ff6600;
	text-decoration: underline
}
.showMsg {
	background:url(../Public/images/errbg.png) no-repeat;
	zoom:1;
	width:403px;
	height:403px;
	position:absolute;
	top:34%;
	left:50%;
	margin:-87px 0 0 -225px;
	text-align:center;
}
.showMsg h2 {
	background:none
}
.showMsg .content {
	font-size:18px;
	height:64px;
	text-align:center;
	color:#D43428;
	padding-top:120px;
}
.showMsg .bottom {
	width:160px;
	line-height:26px;
*line-height:30px;
	height:26px;
	text-align:center
}

.web {
	width:180px;
	padding-top:40px;
	color:#999
}
-->
</style>
<title>提示信息</title>
</head>
<body>
<div class="showMsg" style="text-align:center">
  <h2 class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px;"><?php echo ($error); ?></h2>
  <div class="bottom">系统将在<span style="color:#424242;font-weight:bold"><?php echo ($waitSecond); ?></span>秒后自动跳转<br />
    如果不想等待，直接点击<a href="<?php echo ($jumpUrl); ?>">这里</a>
    <script language="javascript">
                setTimeout("location.href='<?php echo ($jumpUrl); ?>';",<?php echo ($waitSecond); ?>*1000);
        </script>
    <div class="web">©微信导航&nbsp;&nbsp;</div>
  </div>
</div>
</body>
</html>