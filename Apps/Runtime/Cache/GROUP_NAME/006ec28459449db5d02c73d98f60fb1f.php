<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?>-<?php echo ($sitename); ?></title>
    <link href="../Public/css/base.css" rel="stylesheet" type="text/css">
    <link href="../Public/css/center.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
    <script language="javascript" src="../Public/js/jquery.easing.min.js"></script>
    <script language="javascript" src="../Public/js/custom.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.form.js"></script>
    <script type="text/javascript" src="../Public/js/formValidator-4.0.1.min.js"></script>
    <script type="text/javascript" src="../Public/js/formValidatorRegex.js"></script>
    <script type="text/javascript" src="../Public/js/qqk.js"></script>
    <script type="text/javascript" language="JavaScript">
      var Public = '__ROOT__/admin/Tpl/Public/';
        function fleshVerify(){ 
            //重载验证码
            $('#verifyImg').attr('src',"<?php echo U('Member/verify',array('t'=>time()));?>");
        }
        //-->
    </script>
    <script type="text/javascript" src="__ROOT__/admin/Tpl/Public/ueditor/editor_config.js"></script>
    <script type="text/javascript" src="__ROOT__/admin/Tpl/Public/ueditor/editor_all.js"></script>
  </head>
  <body>
    <!-- 顶部导航 START -->
    <div class="top-center">
      <div class="wrap w1000">
        <div class="top-content">
          <div class="top-logo fLeft">
            <a href="/" title="回到首页">
              <img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('logo',1); echo $set;?>" width="165" height="40" title="微信群">
            </a>
          </div>
          <ul class="fLeft ml20">
            <li><a href="/">首 页</a>
            </li>
            <li><a href="<?php echo U('weixin/index',array('id'=>44));?>">微信群</a>
            </li>
            <li><a href="<?php echo U('Weixin/order');?>">微信群排行</a>
            </li>
            <li><a href="<?php echo U('weixin/huoyuan',array('id'=>1));?>">微商货源</a>
            </li>
            <li><a href="<?php echo U('weixin/hot',array('id'=>44));?>">品牌推荐</a>
            </li>
            <li><a class="active" href="<?php echo U('Member/add');?>" style="border:none;">微信群发布</a>
            </li>
          </ul>
          <div class="user-avatar fRight" id="avatar">  
            <span>
              <img src="<?php if(empty($_SESSION['YFIndex_']['avatar'])): ?>../Public/images/avatar.jpg<?php else: ?>__ROOT__/Uploads<?php echo (session('avatar')); endif; ?>" width="40" height="40" /><i class="mask"></i>
            </span>
            <span class="arrow"></span>

            <div class="tc" style="display:none;" id="set">
              <p><a href="<?php echo U('Member/information');?>">设置</a>
              </p>
              <p><a href="<?php echo U('Member/logout');?>" target='_top'>退出</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 顶部导航 END -->
<!-- 内容 START -->
<!-- login-bg start -->
<div class="login-bg clear">
  <div class="wrap w1000" style="position:relative;">
    <div id="reg">
            <ul class="processbar">
              <li class="step11"><span>注册</span></li>
                <li class="step21"><span class="selspan">登录</span></li>
                <li class="step03"><span>发布</span></li>
                <li class="step04"><span><a href="http://www.weixinqun.com/archives-1318.html" title="抢位规则">抢位</a></span></li>
                <li class="step05"><span>审核</span></li>
            </ul>
        </div>
      <div class="logo-area fLeft"></div>
        <div class="main-content fLeft">
          <div class="left fLeft">
              <p>登录</p>
                <form method='post' id="form1123" action="<?php echo U('Member/checkLogin');?>" >
                  <div class="d1"><span>用户名:</span><input name="account" class="i1" type="text"></div>
                    <div class="d1"><span>密  码:</span><input name="password" class="i2" type="password"></div>
                    <div class="d1"><span>验证码:</span><input type="text" id="verify" name="verify" class="i4" placeholder="验证码" class="yzm"/>
                        <img id="verifyImg" src="<?php echo U('Member/verify');?>" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer;width:80px;" align="absmiddle">
                    </div>
                    <div class="d1"><span>&nbsp;</span><input name="action" value="login" type="hidden">
                    <input class="b1" value="登 录" type="submit"></div>
                </form>
            </div>
            <div class="right fRight">
              <p>没有帐号？ <a href="<?php echo U('Member/register');?>">去注册！</a></p>
            </div>
        </div>
    </div>
</div><!-- login-bg end -->


<!-- tips start -->
<div class="tips mt20 clear">
  <div class="wrap w1000">
      <div class="tips-content fLeft">
          <ul>
              <li>
                  <div class="d1"><img src="../Public/images/qun_view.png" alt="微信群查看" height="102" width="102"></div>
                    <div class="d2">
                      <h3>微信群查看</h3>
                        <p>交友、娱乐、推广，你所喜欢的群在这里都有！</p>
                    </div>
                </li>
                <li>
                  <div class="d1"><img src="../Public/images/qun_release.png" alt="微信群发布" height="102" width="102"></div>
                    <div class="d2">
                      <h3>微信群发布</h3>
                        <p>自己为自己代言，你的群都可以通过这里展示。</p>
                    </div>
                </li>
                <li>
                  <div class="d1"><img src="../Public/images/qun_tj.png" alt="微信群推广" height="102" width="102"></div>
                    <div class="d2">
                      <h3>微信群推广</h3>
                        <p>品牌没有知名度，推广很难做，来这里试试吧~</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- tips end -->
<!-- 内容 END -->
   
<!-- 底部 START -->
    <div class="footer mt20">
      <div class="wrap w1000">
        <div class="f-content">
          <div class="f-code fLeft"> <span><img src="__ROOT__/Uploads<?php $set=$_result=M('Set')->getField('qrcode',1); echo $set;?>" width="115" height="115"></span>
 <span><p><strong>扫描二维码</strong></p><p>手机客户端更便捷<br>关注我们，快速了解商家信息，商家活动</p></span>

          </div>
          <div class="f-info fRight">
            <ul>
              <?php if(is_array($footer_info)): $i = 0; $__LIST__ = $footer_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <p><strong><?php echo ($vo["catname"]); ?></strong>
                </p>
                <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><p><a href="<?php echo U('Article/show',array('id'=>$vo1['id']));?>" title="<?php echo ($vo1["title"]); ?>"><?php echo (msubstr(strip_tags($vo1["title"]),0,10)); ?></a>
                </p><?php endforeach; endif; else: echo "" ;endif; ?>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div style="background:#5b5b5b;height:70px;text-align:center;color:#aaa;">
      <p style="padding-top:15px;"><?php $other=$_result=M('Other')->where('status=1 and settag="footer"')->find(); echo $other['setvalue'];?></p>
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
      <p class="">扫一扫立即体验</p>
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
    <!-- 底部 END -->
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

    <div class="popBox">
        <h4><span id="poptit"></span><span class="fRight mt5 closed" title="关闭"><img src="../Public/images/popBox_close.png" alt="关闭"></span></h4>

      <div class="popArea">
        <iframe marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="630" height="430" id="iframepage" name="iframepage"></iframe>
      </div>
    </div>
    <div id="light">
      <iframe marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="600" height="250" id="iframepage2" name="iframepage2"></iframe>
    </div>
    <div id="sl_box"></div>
    <script>
/*      var obj = $('#light');
      var objbg = $('#sl_box');
      var objiframe=$('#iframepage2');
      //objbg.click(function(){close()});
      function qwbox(id,tid)
      {
          obj.show();
          objbg.show();
          var Furl = "/member-showQw.html?id="+id+"&tid="+tid;
		  objiframe.attr('src',Furl);
      }
      function close()
      {
          obj.hide();
          objbg.hide();
          objiframe.attr('src','');
      }*/
          $("#imgfmsrc").click(function(){
              var url="<?php echo U('Member/wxupload','w=250&h=250&type=imgfm');?>";
              $("#poptit").html("上传封面");
              $(".popBox").show();
              $("#iframepage").attr('src',url);
          });
          $("#litpicsrc").click(function(){
              var url="/user-wxupload.html?w=250&h=317&type=litpic";
              $("#poptit").html("上传二维码");
              $(".popBox").show();
              $("#iframepage").attr('src',url);
          });
          $(".closed").click(function(){
              closed();
          });
          function closed()
          {
              $(".popBox").hide();
              $("#iframepage").attr('src','');
          }
      
          function validate_required(field,alerttxt)
          {
          with (field)
            {
            if (value==null||value==""||value==0)
              {alert(alerttxt);return false}
            else {return true}
            }
          }
          
          function validate_form(thisform)
          {
              
          with (thisform)
            {
      
                if (validate_required(wxqtype,"微信栏目没选择!")==false)
                  {wxqtype.focus();return false}
                  
                if (validate_required(rensu,"上限人数没选择!")==false)
                  {rensu.focus();return false}
                  
                if (validate_required(rensu2,"现有人数没填写!")==false)
                  {rensu2.focus();return false}
                  
                if (validate_required(weixinhao,"群主微信号没填写!")==false)
                  {weixinhao.focus();return false} 
                   
                    
                if (validate_required(title,"微信名称必须填写!")==false)
                  {title.focus();return false}
                  
                    
                if (validate_required(description,"微信简介必须填写!")==false)
                  {description.focus();return false}
                   
               if (validate_required(imgfm,"封面没有上传!")==false)
                  {imgfm.focus();return false} 
                              
                if (validate_required(litpic,"二维码没有上传!")==false)
                  {litpic.focus();return false}  
                              
            }
          }
    </script>


    <script type="text/javascript">
        $(function(){
            $("#province").change(function(){
                
                var ajaxurl="<?php echo U('Ajax/getArea');?>";
                var areaId=this.value;
                var areaType='city';
                $.post(ajaxurl,{'areaId':areaId},function(data){

                        if(areaType==='city'){
                           $('#'+areaType).html('<option value="-1">城市</option>');

                           $('#district').html('<option value="-1">镇/区</option>');
                        }else if(areaType==='district'){
                           $('#'+areaType).html('<option value="-1">镇/区</option>');
                        }
                        if(areaType!=='null'){
                            $.each(data,function(no,items){
                                $('#'+areaType).append('<option value="'+items.id+'">'+items.area_name+'</option>');
                            });
                        }
                });

            });
            
        });

    </script>

  </body>

</html>