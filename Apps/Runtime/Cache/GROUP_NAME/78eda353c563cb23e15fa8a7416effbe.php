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
<link href="__PUBLIC__/css/goods.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css">

<!-- 头部 END -->
<!-- 导航 -->
<div class="loat">
	<div class="alert-list yahei"><a href="<?php echo U('Member/add',array('publish_type_id'=>4));?>">发布微商货源</a></div>
</div>
<div class="wrap">
  <div class="in-sort" style="width:980px;height:62px"> <span class="big-label yahei">微商货源</span>  
  <div class="vocation-mark yahei">
  <a class="mark cbg1 active" href="<?php echo U('Weixin/huoyuan',array('id'=>1));?>"> <span></span>所有</a> 
  <?php if(is_array($type_list)): $k = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><a class="mark cbg<?php echo ($k-1)%8+2; ?>" href="<?php echo U('Weixin/huoyuan',array('catid'=>$vo['id']));?>"><?php echo ($vo["catname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  </div>
  <div class="index-module yahei">
    <div class="w990">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="post big-post">
			<div class="cover"> <a href="<?php echo U('Weixin/huoyuanshow',array('id'=>$vo['id']));?>"><img src="/Uploads<?php echo ($vo["logo"]); ?>" width="250" height="250" alt="微商商城"></a>
          <div class="w-cover">
            <div class="picture"><img src="/Uploads<?php echo ($vo["qrcode"]); ?>" width="150" height="150" alt="微商商城"></div>
            <div class="txt">
              <p><?php echo ($vo["keywords"]); ?> </p>
              <p class="pt5"><a href="<?php echo U('Weixin/huoyuanshow',array('id'=>$vo['id']));?>" style="color:#318000;"><b>【进入查看详情】</b></a></p>
            </div>
          </div>
        </div>
        <li>
        <label class="pr5">货源名称：</label>
          <a class="nickname" href="<?php echo U('Weixin/huoyuanshow',array('id'=>$vo['id']));?>"><b><?php echo ($vo["title"]); ?></b></a>
         </li>
        <li> 
        <label class="pr5">发布人微信：</label>
          <span><?php echo ($vo["wxaccount"]); ?></span>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>   
        </div>
        <div class="green-black"><?php echo ($page); ?></div>
                 <!--<a class="selected">1</a><a href="http://www.weixinqun.com/hy-19-2-or-3-vi-1.html" title="页 2">2</a>-->
		  </div>
</div>
<!-- 品牌直招 -->
<!--
<div class="wrap">
  <div class="in-sort" style="width:980px;"> <span class="big-label yahei">认证微商</span><span class="fRight mt10 yahei"><a href="http://www.weixinqun.com/hy-19.html#">我要认证&gt;</a></span></div>
  <div class="gundong">
      <div class="index-module msp-mod yahei">
          <div class="w990 mainlist piclist" style="width: 660px;">
            <ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6068.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/2f886945c170f9868d3963e7eaafff1b-153-153.jpg" width="153" height="153" alt="奢饰品男鞋"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6068.html"><b>朱颖霞</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>oo00258</span>
            </li>
            </ul>
			<ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6454.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/a612f5e98d11d7a84ae6a445b774219b-153-153.jpg" width="153" height="153" alt="黄金首饰"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6454.html"><b>金秘书</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>www_hjjg_com</span>
            </li>
            </ul><ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6077.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/b61473a5b643cd75e5d401b802871894-153-153.jpg" width="153" height="153" alt="微商男士护肤第一品牌—MICHAEL JACKSON"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6077.html"><b>王蒙蒙</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>202872237</span>
            </li>
            </ul><ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6062.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/7630fede164699d404be044c392f6128-153-153.jpg" width="153" height="153" alt="广州妆后公司-艾薇格丝美痘人精华"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6062.html"><b>亲爱的</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>931341756</span>
            </li>
            </ul>
          </div>
          <div class="piclist swaplist" style="width: 660px;">
            <ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6068.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/2f886945c170f9868d3963e7eaafff1b-153-153.jpg" width="153" height="153" alt="奢饰品男鞋"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6068.html"><b>朱颖霞</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>oo00258</span>
            </li>
            </ul><ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6454.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/a612f5e98d11d7a84ae6a445b774219b-153-153.jpg" width="153" height="153" alt="黄金首饰"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6454.html"><b>金秘书</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>www_hjjg_com</span>
            </li>
            </ul><ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6077.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/b61473a5b643cd75e5d401b802871894-153-153.jpg" width="153" height="153" alt="微商男士护肤第一品牌—MICHAEL JACKSON"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6077.html"><b>王蒙蒙</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>202872237</span>
            </li>
            </ul><ul class="post small-post">      
              <div class="cover">
              <a href="http://www.weixinqun.com/archives-6062.html"><img src="./微商货源_微商代理,货源,微商,微店,微店货源,微信货源,网店货源,开网店怎么找货源,一手货源_files/7630fede164699d404be044c392f6128-153-153.jpg" width="153" height="153" alt="广州妆后公司-艾薇格丝美痘人精华"></a>
              </div>
            <li>
            <label class="pr5">用户名：</label>
              <a class="nickname" href="http://www.weixinqun.com/archives-6062.html"><b>亲爱的</b></a><i class="attest"></i>
            </li>  
            <li> 
            <label class="pr5">微信号：</label>
              <span>931341756</span>
            </li>
            </ul>
          </div>
     </div>
  	 <div class="og_prev"></div>
     <div class="og_next"></div>
    </div>
</div> --><!-- 代理招商 -->
<script type="text/javascript">
	$(".cover").each(function() {
		//alert($(this));
        $(this).hover(
			function(){
				$(this).children(".w-cover").slideToggle(200);
		});
    });
</script>
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