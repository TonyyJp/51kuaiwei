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
<div class="center-content mt20">
    <div class="wrap w1000">
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
        <div class="right-content fRight">
            <h2>推荐记录</h2>
            <div class="mainbody mt10">
                <div class="operate">
                    <div class="fLeft">
                        <input type="button" onclick="add()" class="submit btn5" value="我要推荐">
                    </div>
                    <div class="fLeft">
                        <form method="post" action="<?php echo U('Member/tjlist',array('catid'=>$catid));?>">
                            <input type="text" name="name" title="公众账号" class="ipt5">
                            <select name="zt">
                                <option value="-2" <?php if(($zt) == "-2"): ?>selected="selected"<?php endif; ?>>全部</option>
                                <option value="0" <?php if(($zt) == "0"): ?>selected="selected"<?php endif; ?>>禁用</option>
                                <option value="1" <?php if(($zt) == "1"): ?>selected="selected"<?php endif; ?>>启用</option>
                            </select>
                            <input type="submit" class="submit btn5" value="查  询">
                        </form>
                    </div>
                </div>
                <div class="list">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="nbg">
                            <th>编号</th>
                            <th>公众账号</th>
                            <th>推荐位置</th>
                            <th>开始日期</th>
                            <th>结束日期</th>
                            <th>消费积分</th>
                            <th>状态</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                                <td><?php echo ($vo["id"]); ?></td>
                                <td><a href="<?php echo U('Weixin/show',array('id'=>$vo['wxid']));?>" target='_blank'><?php echo (getweixinname($vo["wxid"])); ?></a></td>
                                <td><?php echo (getrecommendname($vo["recommendid"])); ?></td>
                                <td><?php echo (todate($vo["starttime"],'Y-m-d')); ?></td>
                                <td><?php echo (todate($vo["endtime"],'Y-m-d')); ?></td>
                                <td><?php echo ($vo["intergral"]); ?></td>
                                <td>
                                    <?php if($vo["status"] == 1): ?>启用
                                    <?php else: ?>
                                        禁用<?php endif; ?>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                    </table>
                    <div class="th" style="clear: both;"><?php echo ($page); ?></div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function add(){
     location.href="<?php echo U('Member/addtj');?>";
    }
    function foreverdel(url){
        if(confirm("确定要删除该条记录吗？删除后将不可恢复！")){
            location.href=url;
        } 
    }
    $(function(){
        //选中列表行变色
        $(".list tr").mouseover(function(){
            $(this).addClass("currow");
        }).mouseout(function(){
            $(this).removeClass("currow");
        });
    });
    
</script>
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