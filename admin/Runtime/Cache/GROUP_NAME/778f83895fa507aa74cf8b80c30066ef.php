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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>充值入账</h2></div><div class="operate"><div class="fLeft"><input type="button" onclick="location.href='<?php echo U('Payment/index');?>'" class="submit btn5" value="充值记录"></div><div class="fLeft"><input type="button" onclick="location.href='<?php echo U('Payment/payspend');?>'" class="submit btn5" value="消费记录"></div><div class="fLeft"><input type="button" onclick="location.href='<?php echo U('Payment/pay');?>'" class="submit btn5" value="充值入账"></div><div class="fLeft"><input type="button" onclick="location.href='<?php echo U('Payment/paytype');?>'" class="submit btn5" value="支付方式"></div></div><div class="form_list" style="clear: both;margin-left: 10px;border-top: 1px solid #eee;"><form method='post' id="form1" name="form1" action="<?php echo U('Payment/payinsert');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt style="width: 120px;"> 充值类型：</dt><dd><input type="radio" name="type" value="1" checked=true>&nbsp;金钱&nbsp;&nbsp;<input type="radio" name="type" value="2">&nbsp;积分
                    </dd></dl><dl><dt style="width: 120px;"> 用户名：</dt><dd><input type="text" class="ipt3" name="membername" value="" /><span class="fontcolor">请输入用户名</span></dd></dl><dl><dt style="width: 120px;"> 交易额度：</dt><dd><input type="radio" name="optype" value="1" checked=true>&nbsp;增加&nbsp;&nbsp;<input type="radio" name="optype" value="2">&nbsp;减少&nbsp;&nbsp;<input type="text" class="ipt2" name="value" value="" />&nbsp;<span class="fontcolor">输入修改数量（资金或者点数）</span></dd></dl><dl><dt style="width: 120px;"> 交易备注：</dt><dd><textarea name="msg"></textarea><span class="fontcolor">请输入要修改的理由</span></dd></dl></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" ><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">    $(function(){
        $("#resetPwd").click(function(){
            var pass=$("input[name=resetPwd]").val();
            var id=$("input[name=id]").val();
            $.post("<?php echo U('Member/resetPwd');?>",{id:id,password:encodeURIComponent(pass)}, function(result){
                   alert(result['info']);
            },"JSON");
            
        });
    });
</script></body></html>