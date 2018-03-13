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
<script language="javascript" src="../Public/js/swfobject.js"></script>
<script language="javascript" src="../Public/js/fullAvatarEditor.js"></script>
<script type="text/javascript" src="../Public/js/area.js"></script>
<script>var ajaxurl="<?php echo U('Ajax/getArea');?>"; var city="<?php echo ($vo["city"]); ?>"</script>
<script type="text/javascript" src="../Public/js/select-option-disabled-emulation.js"></script>
	<script type="text/javascript">
		function change_publish_type(){
			var publish_type_id = $("#publish_type_id").val();
			//var url = "<?php echo U('Member/add',array('publish_type_id'=>'\"+publish_type_id+\"'));?>";
			var url = "./index.php?m=Member&a=add&publish_type_id="+publish_type_id;

			//var nodename='111111';
       		//var url="<?php echo U('Weixin/delfile',array('id'=>$vo['id'],'file'=>'"+nodename+"'));?>";
	        window.location.href = url;	   
	    }
	</script>
	<!-- 内容 START -->
	<div class="center-content mt20">
		<div class="wrap w1000">
			<div id="reg">
	            <ul class="processbar">
	            	<li class="step11"><span>注册</span></li>
	                <li class="step21"><span>登录</span></li>
	                <li class="step31"><span class="selspan">发布</span></li>
	                <li class="step04"><span>抢位</span></li>
	                <li class="step05"><span>审核</span></li>
	            </ul>
	        </div>
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
				<h2>发布二维码</h2>

				<div class="mainbody mt10">
					<form method='post' id="form1" name="form1" action="<?php echo U('Member/add');?>"  enctype="multipart/form-data">
						<div class="">
							<label>发布类别:</label>
							<select class="s0 c42d" name="publish_type_id" id="publish_type_id" onchange="change_publish_type()">
								<?php if(is_array($publish_type)): $k = 0; $__LIST__ = $publish_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ptvo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($ptvo['id']); ?>" <?php if(($publish_type_id) == $ptvo["id"]): ?>selected="selected"<?php endif; ?>>
		                                <?php echo ($ptvo['catname']); ?>
		                            </option><?php endforeach; endif; else: echo "" ;endif; ?> 
							</select> <span style="color:red;font-size:12px;">提示：请选择正确的分类</span>

						</div>
						<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td width="90" class="td1">栏目：</td>
									<td width="" class="td2">
										<input type="hidden" id="hidden_wxqtype" name="wxqtype" value="0"> 
										<span id="span_wxqtype">
											<select id="catid" name="catid">
									            <option value="" >请选择</option>
									            <?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($catvo['id']); ?>">
									                    <?php echo ($catvo['catname']); ?>       
									              	</option><?php endforeach; endif; else: echo "" ;endif; ?>
									        </select>  
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td width="90" class="td1">地区：</td>
									<td width="" class="td2">
										<input type="hidden" id="hidden_nativeplace" name="nativeplace" value="0"> 
										<span id="span_nativeplace">
											<select name="province" id="province">
									            <option value="-1" selected>省份</option>
									            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$one): $mod = ($i % 2 );++$i;?><option value="<?php echo ($one["id"]); ?>"><?php echo ($one["area_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									        </select>
									        <select name="city" id="city">
									            <option value="-1">城市</option>
									        </select>
					                        <span class="tip">全不选则默认中国，没有可以不选!</span>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<?php if($publish_type_id == 44): ?><table cellspacing="0" cellpadding="0" border="0" width="100%" class="table">
								<tbody>
									<tr>
										<td width="90" class="td1">QQ：</td>
										<td width="" class="td2">
											<input type="text" name="qq" id="qq" class="ipt4">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td width="90" class="td1">群上限人数：</td>
										<td width="" class="td2">
											<select name="qun_shang_xian" id="qun_shang_xian">
					                            <?php if(is_array($qun_shang_xian)): $k = 0; $__LIST__ = $qun_shang_xian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qsxvo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($k); ?>" <?php if(($vo["qun_shang_xian"]) == $k): ?>selected="selected"<?php endif; ?>>
					                                    <?php echo ($qsxvo); ?>
					                                </option><?php endforeach; endif; else: echo "" ;endif; ?> 
					                        </select>
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td width="90" class="td1">群现有人数：</td>
										<td width="" class="td2">
											<input type="text" name="renshu" id="renshu" style="width:200" value="<?php echo ($vo["renshu"]); ?>">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td width="90" class="td1">群主微信号：</td>
										<td width="" class="td2">
											<input type="text" name="wxaccount" id="wxaccount" style="width:200" value="<?php echo ($vo["wxaccount"]); ?>">
										</td>
									</tr>
								</tbody>
							</table>
							<div class="d1">
								<label for="title">微信群名称:</label>
								<input type="text" name="pubaccount" id="pubaccount" value="<?php echo ($vo["pubaccount"]); ?>" class="i1" onkeyup="value=value.substr(0,40);document.getElementById(&quot;strcount1&quot;).innerHTML=40-value.length;">
								<label>还可输入<span id="strcount1">40</span>个字符</label>
							</div>
							<div class="d1">
								<label for="content">微信群简介:</label>
								<textarea name="content" id="content" style="margin-left:5px;width:400px;height:120px;" onkeyup="value=value.substr(0,255);document.getElementById(&quot;strcount&quot;).innerHTML=255-value.length;"></textarea>
								<p style="text-align:right;color:#aaa;width:520px;">还可以输入<span id="strcount">255</span>个字</p>
							</div>
							<div class="d1" id="fm1">
								<label for="filedata2">封面：</label>
								<div>
									<input type="hidden" value="" name="logo"  width="100" id="logo">
									<img id="logosrc"  width="100" src="/404/fengmian.jpg">								</div>
							</div>
							<div class="d1" id="fm2">
								<label for="filedata">二维码：</label>
									<input type="hidden" value="" name="qrcode"  width="100" id="qrcode">
									<img id="qrcodesrc"  width="100" src="/404/erweima.jpg">
							</div>
						<?php elseif($publish_type_id == 48): ?>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">微信号：</td>
										<td class="td2" width="">
											<input type="text" name="wxaccount" id="wxaccount" style="width:200" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">手机号：</td>
										<td class="td2" width="">
											<input style="width:200" id="phone" name="phone" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">QQ：</td>
										<td class="td2" width="">
											<input style="width:200" id="qq" name="qq" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<div class="d1">
								<label for="title">微信名称:</label>
								<input name="pubaccount" id="pubaccount" class="i1" onkeyup='value=value.substr(0,40);document.getElementById("strcount1").innerHTML=40-value.length;' type="text">
								<label>还可输入<span id="strcount1">40</span>个字符</label>
							</div>
							<div class="d1">
								<label for="content">简介:</label>
								<textarea name="content" id="content" style="margin-left:5px;width:400px;height:120px;" onkeyup='value=value.substr(0,255);document.getElementById("strcount").innerHTML=255-value.length;'></textarea>
								<p style="text-align:right;color:#aaa;width:520px;">还可以输入<span id="strcount">255</span>个字</p>
							</div>
							<div class="d1" id="fm1">
								<label for="filedata2">封面：</label>
								<div>
									<input type="hidden" value="" name="logo"  width="100" id="logo">
									<img id="logosrc"  width="100" src="/404/fengmian.jpg">								</div>
							</div>
							<div class="d1" id="fm2">
								<label for="filedata">二维码：</label>
									<input type="hidden" value="" name="qrcode"  width="100" id="qrcode">
									<img id="qrcodesrc"  width="100" src="/404/erweima.jpg">
							</div>
						<?php elseif($publish_type_id == 47): ?>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">QQ：</td>
										<td class="td2" width="">
											<input style="width:200" id="qq" name="qq" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">现有粉丝：</td>
										<td class="td2" width="">
											<input name="rensu" id="rensu" style="width:200" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<!--<div class="d1">
								<label>类型:</label>&nbsp;
								<input name="typeid" value="1" type="radio">企业号 &nbsp;
								<input name="typeid" value="2" type="radio">订阅号
							</div>
							<div class="d1">
								<label>认证:</label>&nbsp;
								<input name="renzhen" value="1" type="radio">已认证 &nbsp;
								<input name="renzhen" value="2" type="radio">未认证
							</div>-->
							<div class="d1">
								<label for="title">微信名称:</label>
								<input name="pubaccount" id="pubaccount" class="i1" onkeyup='value=value.substr(0,40);document.getElementById("strcount1").innerHTML=40-value.length;' type="text">
								<label>还可输入<span id="strcount1">40</span>个字符</label>
							</div>
							<div class="d1">
								<label for="title">公众号:</label>
								<input name="wxaccount" id="wxaccount" class="i1" type="text">
							</div>
							<div class="d1">
								<label for="content">公众号简介:</label>
								<textarea name="content" id="content" style="margin-left:5px;width:400px;height:120px;" onkeyup='value=value.substr(0,255);document.getElementById("strcount").innerHTML=255-value.length;'></textarea>
								<p style="text-align:right;color:#aaa;width:520px;">还可以输入<span id="strcount">255</span>个字</p>
							</div>
							<div class="d1" id="fm1">
								<label for="filedata2">封面：</label>
								<div>
									<input type="hidden" value="" name="logo"  width="100" id="logo">
									<img id="logosrc"  width="100" src="/404/fengmian.jpg">	
								</div>
							</div>
							<div class="d1" id="fm2">
								<label for="filedata">二维码：</label>
									<input type="hidden" value="" name="qrcode"  width="100" id="qrcode">
									<img id="qrcodesrc"  width="100" src="/404/erweima.jpg">
							</div>
						<?php else: ?>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">QQ：</td>
										<td class="td2" width="">
											<input style="width:200" id="qq" name="qq" type="text">
										</td>
									</tr>
								</tbody>
							</table>
							<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tbody>
									<tr>
										<td class="td1" width="90">微信：</td>
										<td class="td2" width="">
											<p>
											  <input name="wxaccount" id="wxaccount" style="width:200" type="text">
										  </p>
										<p>&nbsp;											          </p></td>
									</tr>
									<tr>
										<td class="td1" width="90">微信名称：</td>
										<td width="" height="20" class="td2">
											<input name="pubaccount" id="pubaccount" style="width:200" type="text">									  </td>
									</tr>
								</tbody>
							</table>
							<div class="d1">
								<label>货源图片：</label>&nbsp;<span style="color:#e00;">最多只能上传5张图片</span>
								<div class="add_box">
									<input type="hidden" value="" name="img1"  width="100" id="img1">
									<img id="image1src"  width="100" src="/404/fengmian.jpg">	
									<input type="hidden" value="" name="img2"  width="100" id="img2">
									<img id="image2src"  width="100" src="/404/fengmian.jpg">	
									<input type="hidden" value="" name="img3"  width="100" id="img3">
									<img id="image3src"  width="100" src="/404/fengmian.jpg">	
									<input type="hidden" value="" name="img4"  width="100" id="img4">
									<img id="image4src"  width="100" src="/404/fengmian.jpg">	
									<input type="hidden" value="" name="img5"  width="100" id="img5">
									<img id="image5src"  width="100" src="/404/fengmian.jpg">	
								</div>
							</div>
							<div class="d1">
								<label for="title">货源名称:</label>
								<input name="title" id="title" class="i1" onkeyup='value=value.substr(0,40);document.getElementById("strcount1").innerHTML=40-value.length;' type="text">
								<label>还可输入<span id="strcount1">40</span>个字符</label>
							</div>
							<div class="d1">
								<label for="maidian">货源卖点:</label>
								<textarea name="maidian" id="maidian" style="margin-left:5px;width:400px;height:120px;" onkeyup='value=value.substr(0,255);document.getElementById("strcount").innerHTML=255-value.length;'></textarea>
								<p style="text-align:right;color:#aaa;width:520px;">还可以输入<span id="strcount">255</span>个字</p>
							</div>
							<div class="d1">
								<label class="ueditor-text">货源描述：</label>
								<div class="ueditor-div">
									<textarea name="content" id="myEditor1"></textarea>
				                    <script type="text/javascript">
				                    	var url = '__ROOT__/admin/Tpl/Public/ueditor/';
				                        var editor = new UE.ui.Editor({initialFrameHeight:100,initialFrameWidth:400 });
				                        //editor.setOpt('initialFrameWidth', '200');
				                        editor.render("myEditor1");
				                        //1.2.4以后可以使用一下代码实例化编辑器
				                        //UE.getEditor('myEditor')
				                    </script>
			                   	</div>
							</div>
							<div class="d1" id="fm1">
								<label for="filedata2">封面：</label>
								<div>
									<input type="hidden" value="" name="logo"  width="100" id="logo">
									<img id="logo1src"  width="100" src="/404/fengmian.jpg">
								</div>
							</div>
							<div class="d1" id="fm2">
								<label for="filedata">二维码：</label>
								<div>
									<input type="hidden" value="" name="qrcode"  width="100" id="qrcode">
									<img id="qrcodesrc"  width="100" src="/404/erweima.jpg">
								</div>
							</div><?php endif; ?>
					<?php if($publish_type_id == 4): else: ?>
						<div class="d1">
							<label for="filedata">抢位：</label>
							<span class="qw-no"><a href="javascript:qwbox(<?php echo ($publish_type_id); ?>)">点击抢位</a></span>
							<span id="qwinfo" style="color:#F00"></span>
							<br class="clear"><br class="clear">
							<input type="hidden" name="qiangwei_sort" id="qiangwei_sort" value="" />
							<input type="hidden" name="id" value="">
							<input type="submit" class="b1" value="提交">
						</div><?php endif; ?>
					</form>
					<br class="clear">
				</div>
			</div>
		</div>
	</div>
<style>
.popBox1 { background:#e5e5e5;width:700px;height:500px;border:1px solid #bdbdbd;margin:0 auto;position:fixed;top: 25%;left: 30%;z-index:100000;display:none; }
.popBox1 h4 { width:680px;height:40px;line-height:40px;background:url(/404/popBox1_t_bg.jpg) repeat-x;font-size:14px;padding:0 10px; }
.popArea { width:690px;height:455px;margin:0 5px 5px 5px;background:#fff;border:1px solid #d2d2d2; }
.popBox1 .closed,#imgfmsrc,#litpicsrc{cursor: pointer;}
</style>
  <div id="light">
      <iframe marginheight="0" marginwidth="0" scrolling="no" id="iframepage2" name="iframepage" frameborder="0" height="250" width="600"></iframe>
    </div>
    <div id="sl_box"></div>
    <script>
      var obj = $('#light');
      var objbg = $('#sl_box');
      var objiframe=$('#iframepage2');
      objbg.click(function(){close()});
      function qwbox(tid)
      {
          obj.show();
          objbg.show();
		  var Furl = "/index.php?m=member&a=showQwInfo&tid="+tid;
          objiframe.attr('src',Furl);
      }
      function close()
      {
          obj.hide();
          objbg.hide();
          objiframe.attr('src','');
      }
    </script>
  <!-- 内容 END -->
  <div class="popBox1" style="display: none;">
	<h4><span id="poptit">上传头像</span><span class="fRight mt5 closed1" title="关闭"><img src="/404/popBox1_close.png" alt="关闭"></span></h4>
    <div class="popArea">
    <iframe marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="630" height="430" id="iframepage" name="iframepage" src=""></iframe>
    </div>
</div>
 <script>
    $("#logosrc").click(function(){
        var url="/404/user-wxuploadf.htm";
        $("#poptit").html("上传封面");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
	$("#logo1src").click(function(){
        var url="/404/user-wxuploadf1.htm";
        $("#poptit").html("上传封面");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#image1src").click(function(){
        var url="/404/user-wxuploadi1.htm";
        $("#poptit").html("上传图片");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#image2src").click(function(){
        var url="/404/user-wxuploadi2.htm";
        $("#poptit").html("上传图片");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#image3src").click(function(){
        var url="/404/user-wxuploadi3.htm";
        $("#poptit").html("上传图片");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#image4src").click(function(){
        var url="/404/user-wxuploadi4.htm";
        $("#poptit").html("上传图片");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#image5src").click(function(){
        var url="/404/user-wxuploadi5.htm";
        $("#poptit").html("上传图片");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $("#qrcodesrc").click(function(){
        var url="/404/user-wxuploade.htm";
        $("#poptit").html("上传二维码");
        $(".popBox1").show();
        $("#iframepage").attr('src',url);
    });
    $(".closed1").click(function(){
        closed1();
    });
    function closed1()
    {
        $(".popBox1").hide();
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
         if (validate_required(logo,"头像没有上传!")==false)
            {logo.focus();return false}  
      }
    }
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