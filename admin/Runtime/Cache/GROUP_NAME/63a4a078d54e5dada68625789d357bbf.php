<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel='stylesheet' type="text/css" href="../Public/css/style.css" /><script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><script type="text/javascript" src="../Public/js/jquery-yufu5.js"></script><script type="text/javascript">            $(function(){
                if($.browser.msie&&$.browser.version=="6.0"&&$("html")[0].scrollHeight>$("html").height())
                    $("html").css("overflowY","scroll");
            });
        </script><script language="JavaScript"><!--
        //指定当前组模块URL地址 
        var URL = '__URL__';
        var APP	 = '__APP__';
        var SELF='__SELF__';
        var PUBLIC='__PUBLIC__';
        var Public = '../Public/';
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>修改会员</h2></div><div class="resetPwdOperate"><span style="margin-right: 6px; font-size: 14px; font-weight: normal;">输入新密码：</span><input type="password" class="ipt4" name="resetPwd" /><input type="button" value="确定修改" id="resetPwd" class="submit btn7"></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Member/update');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 用户名：</dt><dd><input type="text" class="ipt4" name="account" readonly style="background: #F3F3F3;" value="<?php echo ($vo["account"]); ?>"></dd></dl><dl><dt> 昵称：</dt><dd><input type="text" class="ipt4" name="nickname" value="<?php echo ($vo["nickname"]); ?>" /></dd></dl><dl><dt> 邮箱：</dt><dd><input type="text" class="ipt6" name="email" value="<?php echo ($vo["email"]); ?>" /></dd></dl><dl><dt> 会员组：</dt><dd><select name="role_id"><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($i % 2 );++$i; if($l['id'] == $vo['role_id']): ?><option value="<?php echo ($l['id']); ?>" selected="selected"><?php else: ?><option value="<?php echo ($l['id']); ?>"><?php endif; echo ($l['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></dd></dl><dl><dt> 积分点数：</dt><dd><input type="text" class="ipt3" name="intergral" value='<?php echo ($vo["intergral"]); ?>' /></dd></dl><dl><dt> 状态：</dt><dd><select name="status"><option <?php if(($vo["status"]) == "1"): ?>selected<?php endif; ?> value="1">启用</option><option <?php if(($vo["status"]) == "0"): ?>selected<?php endif; ?> value="0">禁用</option></select></dd></dl><dl><dt>备  注：</dt><dd><textarea name="remark" style="width:400px; height:60px;"><?php echo ($vo["remark"]); ?></textarea></dd></dl></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" ><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">    $(function(){
        $("#resetPwd").click(function(){
            var pass=$("input[name=resetPwd]").val();
            var id=$("input[name=id]").val();
            $.post("<?php echo U('Member/resetPwd');?>",{id:id,password:encodeURIComponent(pass)}, function(result){
                   alert(result['info']);
            },"JSON");
            
        });
    });
</script></body></html>