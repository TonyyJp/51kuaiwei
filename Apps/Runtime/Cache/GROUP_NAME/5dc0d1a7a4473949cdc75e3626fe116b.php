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

<div class="memberbox">   
        <div class="memberleft">
            <div class="left-nav fLeft">
    <ul id="leftNav">
        <li <?php if(($position) == "add"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/add');?>"><i class="icon fabu"></i>发布我的二维码</a></li>
        <li <?php if(($publish_type_status) == "44"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/manage',array('publish_type_id'=>44));?>"><i class="icon nofabu"></i>已发布的微信群</a>
        </li>
        <li <?php if(($publish_type_status) == "48"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/manage',array('publish_type_id'=>48));?>"><i class="icon nofabu"></i>已发布的个人微信</a>
        </li>
        <li <?php if(($publish_type_status) == "47"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/manage',array('publish_type_id'=>47));?>"><i class="icon nofabu"></i>已发布的公众号</a>
        </li>
        <li <?php if(($publish_type_status) == "1"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/manage',array('publish_type_id'=>1));?>"><i class="icon nofabu"></i>已发布的货源</a>
        </li>
        <li <?php if(($position) == "pay"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/pay');?>"><i class="icon nofabu"></i>在线充值</a>
        </li>
        <li <?php if(($position) == "paylist"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/paylist');?>"><i class="icon nofabu"></i>充值记录</a>
        </li>
        <li <?php if(($position) == "change"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/change');?>"><i class="icon nofabu"></i>积分兑换</a>
        </li>
        <li <?php if(($position) == "spendlist"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/spendlist');?>"><i class="icon nofabu"></i>消费记录</a>
        </li>
        <li <?php if(($position) == "addtj"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/addtj');?>"><i class="icon nofabu"></i>添加推荐</a>
        </li>
        <li <?php if(($position) == "tjlist"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/tjlist');?>"><i class="icon nofabu"></i>推荐记录</a>
        </li>
        <li <?php if(($position) == "promotionlist"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/promotionlist');?>"><i class="icon nofabu"></i>促销活动</a>
        </li>
        <li <?php if(($position) == "information"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/information');?>"><i class="icon xginfo"></i>修改个人信息</a>
        </li>
        <li <?php if(($position) == "avatar"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/avatar');?>"><i class="icon xginfo"></i>修改头像</a>
        <li <?php if(($position) == "password"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Member/password');?>"><i class="icon xgpassword"></i>修改密码</a>
        </li>
    </ul>
    <script>
        $('#leftNav li').click(function(){
                    $(this).addClass('active').siblings('li').removeClass('active');
                    });
    </script>
</div>
        </div>
        <div class="memberright">
            <div class="member_detail">支付确认</div>
            <div class="member_content">
                <div class="form">
                    <div>
                        <label>费用：</label>
                        <span><?php echo ($paymoney); ?></span><span>元</span>
                        
                    </div>
                    <div>
                        <label>合计：</label>
                        <span style="font-size: 22px;font-family: Georgia,Arial;font-weight: 700;color: #FF0000;}"><?php echo ($paymoney); ?></span><span>元</span>
                    </div>
                    
                    <div>
                        <label>支付方式：</label>
                        
                        <span><?php echo ($paytypename); ?></span>
                    
                    </div>
                    <div>
                        <?php echo ($html_text); ?>
                    </div>
                  </div>  
            </div>
        </div>
            
            
</div>


<script type="text/javascript">
    function starttime(){
        var starttime=$("#starttime").val();
        var endtime=$("#endtime").val();
        
        if(starttime==="" || endtime===""){
            return;
        }

        if(starttime>endtime){
           alert('结束日期不能小于开始日期');
           $("#intergral").val('');
        }else{
            //计算出相差天数
            var days=daysBetween(starttime,endtime)+1;
            var intergralnum=$('#recommendid option:selected').attr('name');
            $("#intergral").val(days*intergralnum);
        }
    }
        function endtime(){
            var starttime=$("#starttime").val();
            var endtime=$("#endtime").val();
            if(starttime==="" || endtime===""){
                return;
            }
       
            if(starttime>endtime){
               alert('结束日期不能小于开始日期');
               $("#intergral").val('');
            }else{
        
                //计算出相差天数
                var days=daysBetween(starttime,endtime)+1;
                var intergralnum=$('#recommendid option:selected').attr('name');
                $("#intergral").val(days*intergralnum);
            }
        };

function daysBetween(DateOne,DateTwo) 
{  

    var OneMonth = DateOne.substring(5,DateOne.lastIndexOf ('-')); 
    var OneDay = DateOne.substring(DateOne.length,DateOne.lastIndexOf ('-')+1); 
    var OneYear = DateOne.substring(0,DateOne.indexOf ('-'));

    var TwoMonth = DateTwo.substring(5,DateTwo.lastIndexOf ('-')); 
    var TwoDay = DateTwo.substring(DateTwo.length,DateTwo.lastIndexOf ('-')+1); 
    var TwoYear = DateTwo.substring(0,DateTwo.indexOf ('-'));

    var cha=((Date.parse(OneMonth+'/'+OneDay+'/'+OneYear)- Date.parse(TwoMonth+'/'+TwoDay+'/'+TwoYear))/86400000);   
    return Math.abs(cha); 
}

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