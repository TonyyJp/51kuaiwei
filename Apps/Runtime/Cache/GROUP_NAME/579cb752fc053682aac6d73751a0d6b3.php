<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0025)http://www.weixinqun.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="qc:admins" content="71602102676750206375" />
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php echo ($title); ?> - <?php echo ($sitename); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>"><meta name="description" content="<?php echo ($description); ?>">
<link href="__PUBLIC__/css/base.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/nav.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/columns.css" rel="stylesheet" type="text/css">
<script charset="utf-8" src="__PUBLIC__/js/v.js"></script><script src="__PUBLIC__/js/jquery.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript" src="../Public/js/jquery.form.js"></script>
<script type="text/javascript" src="../Public/js/formValidator-4.0.1.min.js"></script>
<script type="text/javascript" src="../Public/js/formValidatorRegex.js"></script>
<script type="text/javascript" src="../Public/js/qqk.js"></script>
<script src="../Public/js/jquery.plugin.min.js" type="text/javascript"></script>

<script type="text/javascript">var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");
var browser = navigator.userAgent.toLowerCase(); 
var isMobile = false; 
for (var i=0; i<mobileAgent.length; i++){ if (browser.indexOf(mobileAgent[i])!=-1){ isMobile = true; 
//alert(mobileAgent[i]); 
location.href = '/m/';
break; } } 
</script>

</head><body>
<?php $other=$_result=M('Other')->where('status=1 and settag="bdshare"')->find(); echo $other['setvalue'];?>
<!--定义变量-->
<?php $nopicpath = '../Public/theme/nopic.gif'; ?>
<!-- 头部 START -->
<div class="wx-nav">
  <div class="max-width" style="max-width:1000px; position: relative;"> <a href="/" hidefocus="true" class="logo" style="width: 165px; overflow: visible; margin-top:-5px;margin-right: 2px;background:url(__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('logo',1); echo $set;?>) 
    no-repeat;"></a> 
    <ul class="nav-pills" style="margin-left: 200px;">
      <li class="dropdown"><a class="active" id="nav_post" href="/">首页</a></li>
      <li class="split-line"></li>
      <li id="navmenu_personal" class="dropdown"> <a href="<?php echo U('weixin/index',array('id'=>44));?>" class="dropdown-toggle">微信大全 
        <span class="fs10">▼</span></a> 
        <ul class="dropdown-menu">
          <?php if(is_array($zcategorylist)): $k = 0; $__LIST__ = $zcategorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($k % 2 );++$k;?><li> <a href="<?php echo U('Weixin/index',array('id'=>$category['id']));?>" title="<?php echo ($category['catname']); ?>" hidefocus="true"><?php echo ($category['catname']); ?></a> 
          </li><?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>
      </li>
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/huoyuan',array('id'=>1));?>">微商货源</a></li>
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/order',array('id'=>89));?>">排行榜</a></li>
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('Article/index',array('id'=>142));?>">微信营销</a></li>
      <!--<li class="dropdown"><a id="nav_event" href="<?php echo U('Article/index',array('id'=>158));?>">招商加盟</a></li>-->
      <li class="split-line"></li>
      <li class="dropdown"><a id="nav_event" href="<?php echo U('weixin/index',array('id'=>277));?>">支付宝群</a></li>
    </ul>
    <!-- 导航右侧 begin -->
    <div class="right"> 
      <ul id="logout_title">
        <?php if(session('id') < 1 ){ ?> 
        <li style="margin-left: 20px;"><a href="<?php echo U('Member/register');?>" hidefocus="true">注册</a></li>
        <li><a href="<?php echo U('Member/login');?>" id="loginbox" target="_blank" hidefocus="true">登录</a></li>
        <?php }else{ ?> 
        <li style="margin-left: 20px;"><a href="<?php echo U('Member/logout');?>" hidefocus="true">退出</a></li>
        <li><a href="<?php echo U('Member/information');?>"  target="_blank" hidefocus="true">个人中心</a></li>
        <?php } ?> 
      </ul>
    </div>
    <!-- 导航右侧 end -->
  </div>
</div>
<div class="header-search">
	<div class="wrap w1000">
    	<div class="area">
        <form action="<?php echo U('Weixin/search',array('id'=>126));?>" name="topsearch" method="get" target="_blank">
        	<span class="input-icon"></span><input type="text" class="input" name="search" placeholder="请输入微信群关键字、名称">
            <input type="submit" value="" class="input-btn"> <a type="button" class="release-btn" href="<?php echo U('Member/add');?>"></a>
         </form>
        </div>
    </div>
</div>
<!-- 头部 END -->


<div class="popDoc" style="width:450px;height:350px;margin:-175px 0 0 -225px;">
  <div class="popDocTitle"><a href="javascript:void(0)" class="fRight" onclick="$(&#39;.popDoc&#39;).hide();"><img src="__PUBLIC__/images/dClose.png" width="16" height="16" alt="关闭"></a>登录微信群</div>
    <div class="loginPop">
      <div class="loginTable">
          <form id="loginform" name="login" method="post" action="<?php echo U('Member/checkLogin');?>" onsubmit="return validate_form(this)">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <th scope="row">用户名/邮箱:</th>
                    <td><input type="text" value="" class="newTxt w250" name="account" id="username"></td>
                    </tr>
                    <tr>
                    <th scope="row">&nbsp;</th>
                    <td><span>&nbsp;</span></td>
                    </tr>
                    <tr>
                    <th scope="row">密　码:</th>
                    <td><input type="password" value="" class="newTxt w250" name="password" id="password"></td>
                  </tr>
                    <tr>
                    <th scope="row">验证码:</th>
                    <td>
                        <input type="text" id="verify" name="verify" placeholder="验证码" class="yzm"/>
                        <img id="verifyImg" src="<?php echo U('Member/verify');?>" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer;width:95px;" align="absmiddle" />
                    </td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="vm pt20"><input name="Tourl" id="Tourl" type="hidden" value="">
                                <input name="action" type="hidden" value="login" />
                                <input value="登 录" type="submit" class="yellowBtn" />
                                &nbsp;&nbsp;&nbsp;
                                <span class="caaa">|</span> 
                                <a href="" target="_blank">忘记密码</a>
                            </div>
                        </td>
                    <!--<a href="<?php echo U('Member/login');?>" target="_blank">注册</a></div></td>-->
                    </tr>
                    <tr>
                        <td >没有账号？点击<a href="<?php echo U('Member/login');?>" target="_blank">注册</a></td>
                    </tr>
                </tbody></table>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" language="JavaScript">
    function fleshVerify(){ 
        //重载验证码
        $('#verifyImg').attr('src',"<?php echo U('Member/verify',array('t'=>time()));?>");
    }
    //-->
</script>
<!-- 头部 END -->
<div class="hy mt20 clear">
  <div class="w1000 wrap">
    <div class="c-content command">
      <div class="c-top">
        <p>我的位置：<a href="/">首页</a> &gt; 
          <?php if(is_array($position)): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><?php echo ($vo["catname"]); ?></a> &gt;<?php endforeach; endif; else: echo "" ;endif; ?>
        </p>
      </div>
      <div class="c-left fLeft">
        <div style="min-height:980px;border-bottom:none;" class="box1">
            <h4><?php echo ($data["title"]); ?></h4>
          <p class="article-info">作者：管理员&nbsp;&nbsp;&nbsp;&nbsp;浏览<?php echo ($data["hits"]); ?>次&nbsp;&nbsp;&nbsp;&nbsp;更新时间：<?php echo (todate($data["create_time"],'Y-m-d H:i')); ?></p>
          <div class="summary"> 
            <span class="bg-blue">摘要</span>
            <?php echo (msubstr(strip_tags($data["content"]),0,40)); ?>
          </div>
          <div style="margin-top:10px;" id="article_content">
            <?php echo ($data["content"]); ?>
          </div>
          <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <a class="bds_tsina"></a> <a class="bds_qzone"></a> <a class="bds_tqq"></a> <a class="bds_tieba"></a> <a class="bds_renren"></a> <a class="bds_sqq"></a></div>

          <div class="spec_topic">
            <span>
              <?php if(empty($prevdata)): ?>第一篇<?php else: ?><a href="<?php echo U('Article/show',array('id'=>$prevdata['id']));?>" target="_blank">上一篇：<?php echo (msubstr($prevdata['title'],0,20)); ?></a><?php endif; ?>
            </span>
            <span>
              <?php if(empty($nextdata)): ?>最后一篇<?php else: ?>下一篇：<a href="<?php echo U('Article/show',array('id'=>$nextdata['id']));?>" target="_blank"><?php echo (msubstr($nextdata['title'],0,20)); ?></a><?php endif; ?></span>
            </span>
          </div>
        <!--
          <div class="news">
            <div class="title">相关新闻</div>
            <div class="list">
              <ul>
                <li><a href="http://www.weixinqun.com/archives-13445.html" title="微商如何才能赚钱？">微商如何才能赚钱？</a><span class="time">2014-12-06</span>
                </li>
                <li><a href="http://www.weixinqun.com/archives-12621.html" title="朋友圈营销技巧分析">朋友圈营销技巧分析</a><span class="time">2014-12-04</span>
                </li>
                <li><a href="http://www.weixinqun.com/archives-11157.html" title="微信开店应用哪家更划算">微信开店应用哪家更划算</a><span class="time">2014-12-01</span>
                </li>
                <li><a href="http://www.weixinqun.com/archives-10393.html" title="传统企业如何利用线下线上活动做营销">传统企业如何利用线下线上活动做营销</a><span class="time">2014-11-29</span>
                </li>
                <li><a href="http://www.weixinqun.com/archives-10392.html" title="关于微信运营的几个关键问题">关于微信运营的几个关键问题</a><span class="time">2014-11-29</span>
                </li>
                <li><a href="http://www.weixinqun.com/archives-10389.html" title="微信营销的方式分为哪些">微信营销的方式分为哪些</a><span class="time">2014-11-29</span>
                </li>
              </ul>
            </div>
          </div>
        -->
        </div>
      </div>
      <div class="c-right fRight">
	<div class="box" style="overflow:hidden;">
		 <h4>微商联盟</h4>
		 		<ul>
			<?php $_result=M('Article')->where('status=1 and catid in (158)')->field('id,title')->order('create_time desc')->limit(5)->select();foreach($_result as $key=>$article):?><li class="bt"> <span class="fLeft" style="width:75%;"><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></span> 
				</li><?php endforeach;?>
		</ul>
		<p style="height:30px;padding:5px 0;margin-top:10px;border-bottom:1px dashed #ccc;"> <span class="fLeft ml10" style="width:120px;color:red;"><b>广告合作咨询</b></span><span class="fLeft ml10"><a href="<?php $other=$_result=M('Other')->where('status=1 and settag="wsjlhz"')->find(); echo $other['setvalue'];?>" rel="nofollow" target="_blank"><img src="../Public/images/button_11.gif" title="广告合作咨询" alt="广告合作咨询"></a></span>
		</p>
		<p style="height:30px;padding:5px 0;border-bottom:1px dashed #ccc;"> <span class="fLeft ml10" style="width:120px;color:red;"><b>售后服务专员</b></span><span class="fLeft ml10"><a href="<?php $other=$_result=M('Other')->where('status=1 and settag="aaawsjl"')->find(); echo $other['setvalue'];?>" rel="nofollow" target="_blank"><img src="../Public/images/button_11.gif" title="售后服务专员" alt="售后服务专员"></a></span>
		</p>
		<p style="height:30px;padding:5px 0;border-bottom:1px dashed #ccc;"> <span class="fLeft ml10" style="width:120px;color:red;"><b>官方交流群</b></span><span class="fLeft ml10"><a href="<?php $other=$_result=M('Other')->where('status=1 and settag="hyq"')->find(); echo $other['setvalue'];?>" rel="nofollow" target="_blank"><img src="../Public/images/addQQ.png" title="官方交流群" alt="官方交流群"></a></span>
		</p>
	</div>
	<div class="box">
		 <h4>本周给力排行

        <span class="fRight mr10">

          <a href="<?php echo U('Weixin/order',array('id'=>'89'));?>">更多&gt;</a>

        </span>

      </h4>
		<ul id="ph-list">
			<?php $_result=M('Weixin')->where('status=1 and catid in (53,162,160,161,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,44,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,48,230,229,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,266,265,264,263,262,267,268,269,270,271,47)')->field('id,logo,pubaccount,hits')->order('hits desc')->limit(8)->select();foreach($_result as $key=>$weixin):?><li>
					<div class="cover-img cover"> <a href="<?php echo U('Weixin/show',array('id'=>$weixin['id']));?>" class="cr" title="<?php echo ($weixin["pubaccount"]); ?>"><img src="<?php if(empty($weixin["logo"])): if(empty($weixin["weblogo"])): ?>../Public/images/nopic.gif<?php else: echo ($weixin["weblogo"]); endif; else: ?>__ROOT__/Uploads<?php echo ($weixin["logo"]); endif; ?>" alt="<?php echo ($weixin["pubaccount"]); ?>" title="<?php echo ($weixin["pubaccount"]); ?>" height="50" width="50"></a>
					</div>
					<div class="name"> <a href="<?php echo U('Weixin/show',array('id'=>$weixin['id']));?>" title="<?php echo ($weixin["pubaccount"]); ?>"><?php echo ($weixin["pubaccount"]); ?></a>
					</div>
				</li><?php endforeach;?>
		</ul>
	</div>
	<div class="box">
		 <h4>最新收录

        <span class="fRight mr10">

          <a href="<?php echo U('Weixin/news',array('id'=>'90'));?>">更多&gt;</a>

        </span>

      </h4>
		<ul id="ph-list">
			<?php $_result=M('Weixin')->where('status=1 and catid in (53,162,160,161,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,44,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,48,230,229,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,266,265,264,263,262,267,268,269,270,271,47)')->field('id,logo,pubaccount')->order('create_time desc')->limit(8)->select();foreach($_result as $key=>$weixin):?><li>
					<div class="cover-img cover"> <a href="<?php echo U('Weixin/show',array('id'=>$weixin['id']));?>" class="cr" title="<?php echo (msubstr($weixin["pubaccount"],0,6)); ?>"><img src="<?php if(empty($weixin["logo"])): if(empty($weixin["weblogo"])): ?>../Public/images/nopic.gif<?php else: echo ($weixin["weblogo"]); endif; else: ?>__ROOT__/Uploads<?php echo ($weixin["logo"]); endif; ?>" alt="<?php echo (msubstr($weixin["pubaccount"],0,6)); ?>" title="<?php echo (msubstr($weixin["pubaccount"],0,6)); ?>" height="50" width="50"></a>
					</div>
					<div class="name"> <a href="<?php echo U('Weixin/show',array('id'=>$weixin['id']));?>" title="<?php echo ($weixin["pubaccount"]); ?>"><?php echo (msubstr($weixin["pubaccount"],0,6)); ?></a>
					</div>
				</li><?php endforeach;?>
		</ul>
	</div>
	<div class="box">
		 <h4>微信文章

        <span class="fRight mr10">

          <a href="http://www.wx131.com/article-index-id-55.html">更多&gt;</a>

        </span>

      </h4>
		<ul>
			<?php $_result=M('Article')->where('status=1 and catid in (55)')->field('id,title')->order('create_time desc')->limit(10)->select();foreach($_result as $key=>$article):?><li class="bt"> <span class="fLeft" style="width:100%;"><a href="<?php echo U('Article/show',array('id'=>$article['id']));?>" title="<?php echo ($article['title']); ?>" target='_blank'><?php echo ($article['title']); ?></a></span> 
				</li><?php endforeach;?>
		</ul>
	</div>
</div>
    </div>
  </div>
</div>
<!-- 底部 START -->
<!-- 底部 START -->
    <div class="footer mt20">
      <div class="wrap w1000">
        <div class="f-content">
          <div class="f-code fLeft"> <span><img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('qrcode',1); echo $set;?>"width="115" height="115"></span>
 <span><p><strong>扫描二维码</strong></p><p>手机客户端更便捷<br>关注我们，快速了解商家信息，商家活动</p></span>

          </div>
		  <?php $other=$_result=M('Other')->where('status=1 and settag="link"')->find(); echo $other['setvalue'];?>
          <div class="f-info fRight">
            <ul>
              <?php if(is_array($footer_info)): $i = 0; $__LIST__ = $footer_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <p><strong><?php echo ($vo["catname"]); ?></strong>
                </p>
                <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><p><a href="<?php echo U('Article/show',array('id'=>$vo1['id']));?>" title="<?php echo ($vo1["title"]); ?>" target="_blank"><?php echo (msubstr(strip_tags($vo1["title"]),0,5)); ?></a>                </p><?php endforeach; endif; else: echo "" ;endif; ?>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
	 
    <div style="background:#5b5b5b;height:70px;text-align:center;color:#aaa;">
      <p style="padding-top:15px;"><?php $other=$_result=M('Other')->where('status=1 and settag="footer"')->find(); echo $other['setvalue'];?></p>
	  <?php $other=$_result=M('Other')->where('status=1 and settag="cnzzstatistics"')->find(); echo $other['setvalue'];?>
    </div>
    <div class="help_box" style="">
      <a href="javascript:;" class="float_qq" data-show="1"></a> 
      <a class="zixun" href="javascript:;" id="help_qq1">客服咨询</a>  
      <a class="join" href="javascript:;" id="help_qq2">广告合作</a>  
      <b class="tels">咨询热线<br>
          <?php $other=$_result=M('Other')->where('status=1 and settag="zxrx"')->find(); echo $other['setvalue'];?>
        </b>

      <div>
        <img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('qrcode',1); echo $set;?>">
      </div>
      <p class="tc">扫一扫立即体验</p>
      <div class="qq_list" id="qq_list1" style="display: none;" data-show="1">
        <a href="javascript:;" class="close_qq" id="close_qq1"></a>
         <h4>客服咨询</h4>

        <div class="area_qq">
		<?php $other=$_result=M('Other')->where('status=1 and settag="kfzx"')->find(); echo $other['setvalue'];?>
        </div>
      </div>
      <div class="qq_list join_bg" id="qq_list2" style="display: none;">
        <a href="javascript:;" class="close_qq" id="close_qq2"></a>
         <h4>广告咨询</h4>

        <div class="area_qq">
		<?php $other=$_result=M('Other')->where('status=1 and settag="ggzx"')->find(); echo $other['setvalue'];?>
        </div>
      </div>
    </div>
<script>
  $(function(){
    $(".float_qq").click(function(){
      if($(this).attr("data-show") == 1)
      {
        $(this).attr("data-show",0);
        $(this).addClass("active");
        $(".help_box").animate({"right":"-140px"});
      }else{
        $(this).attr("data-show",1);
        $(this).removeClass("active");
        $(".help_box").animate({"right":"0"});
      }
      
      });
    $("#help_qq1").click(function(){
      $("#qq_list2").hide();
      if($("#qq_list1").is(":hidden"))
      {
        $("#qq_list1").slideDown();
      }else{
        $("#qq_list1").slideUp();
      }
      });
    $("#close_qq1").click(function(){
      $("#qq_list1").slideUp();     
      }); 
    $("#help_qq2").click(function(){
      $("#qq_list1").hide();
      if($("#qq_list2").is(":hidden"))
      {
        $("#qq_list2").slideDown();
      }else{
        $("#qq_list2").slideUp();
      }
      });
    $("#close_qq2").click(function(){
      $("#qq_list2").slideUp();     
      }); 
    });
</script>



<!-- 弹出登陆 -->

<script>
    $("#loginbox").click(function(){
        $("#Tourl").val('');
        $(".popDoc").show();
        return false;
    });
    $("#loginbox2").click(function(){
        $(".popDoc").show();
        return false;
    });
    $(".loginbox").click(function(){
	<?php if(session('id') < 1 ){ ?>
        var tourl=$(this).attr('href');
        $("#Tourl").val(tourl);
        $(".popDoc").show();
        return false;
	<?php }else{ ?>
	location.href="/member-add.html";
	<?php } ?>    });
    $(".release-btn").click(function(){
	<?php if(session('id') < 1 ){ ?>
        var tourl=$(this).attr('href');
        $("#Tourl").val(tourl);
        $(".popDoc").show();
        return false;
	<?php }else{ ?>
	location.href="/member-add.html";
	<?php } ?>
    });
    function validate_form(thisform)
    {
        var urls="/user-login.html";
        var username=thisform.username.value;
        var userpass=thisform.userpass.value;
        var Tourl=thisform.Tourl.value;
        var tmpmsg='';
        if(username==''){tmpmsg+="请输入用户名!n"}
        if(userpass==''){tmpmsg+="请输入密码!n"}
        if(Tourl!=''){
           $.ajax({
            type: "post",
            dataType: "json",
            url: urls,
            data: "json=1&username="+username+"&userpass="+userpass+"&action=login",
            success: function(result){

                if(result.status){
                    location.href = Tourl;
                    //alert(result.msg);
                }else{
                    alert(result.msg);
                }
                
                }
            });
           
           
           return false;
        }
        if(tmpmsg!=''){
            alert(tmpmsg);
            return false;
        }
    }
</script><!-- 底部 END -->
<script type="text/javascript">
  $('#navmenu_company,#navmenu_personal').mouseover(function(event){
    $('#navmenu_company,#navmenu_personal').removeClass('active');
    $(this).toggleClass('active');
    event.stopPropagation();
    });
  $('#navmenu_company,#navmenu_personal').mouseout(function(event){
    $('#navmenu_company,#navmenu_personal').removeClass('active');
    event.stopPropagation();
    });
</script>

<script src="__PUBLIC__/js/keffect.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab span').bind('mouseover',function(){
    var index = $(this).index();
    var mores = $('#tab > div');
    var divs = $('#box > .boxone ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    mores.hide();
    divs.eq(index).show();
    mores.eq(index).show();
  })
})
</script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab1 span').bind('mouseover',function(){
    var index = $(this).index();
    var mores = $('#tab1 > div');
    var divs = $('#box2 > .boxtwo ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    mores.hide();
    divs.eq(index).show();
    mores.eq(index).show();
  })
})
</script>
<script type="text/javascript">
$(document).ready(function () {
  $('#tab2 span').bind('mouseover',function(){
    var index = $(this).index();
    var divs = $('#box3 > .boxtwo ');
    $(this).parent().children("span").attr("style", "border-bottom:1px solid #dbdee1;border-top:2px solid #fafafa;");
    $(this).attr("style", "color: #42d83b;");
    divs.hide();
    divs.eq(index).show();
  })
})
</script>



</body></html>