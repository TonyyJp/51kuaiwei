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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>微信接口设置</h2></div><div class="form_list zw"><form method='post' id="form1" name="form1" action="<?php echo U('Wxapi/save');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt>微信二维码：</dt><dd class="img"><?php if(!empty($set["qrcode"])): ?><img src="__ROOT__/Uploads/<?php echo ($set["qrcode"]); ?>" name="qrcode" width="60" height="60" /><a href="javascript:return false;" onclick="foreverdelthumb(this);" title="你确定要删除二维码吗？">删除二维码</a><?php else: ?><input type="file" class="thumb" name="qrcode" /><?php endif; ?></dd></dl><dl><dt> URL：</dt><dd><input type="text" class="ipt8" style='background: #F2F2F2;' name="WX_URL" value="<?php echo ($WX_URL); ?>"><span><a href="https://mp.weixin.qq.com" target="_blank">微信公众平台</a></span><br><span class="fontcolor">复制以上地址到微信公众平台接口配置信息URL中，需要你拥有自己的服务器资源，非开发人员，建议不要修改</span></dd></dl><dl><dt> Token：</dt><dd><input type="text" class="ipt6" name="WX_TOKEN" id="wxtoken" value="<?php echo ($user_config["WX_TOKEN"]); ?>"><span><input type="button" id="token" class="btn7" value='重新生成'></span><br><span class="fontcolor">第一次使用必须修改，包含英文或数字，长度3-32字符。然后,复制以上Token到微信公众平台接口配置信息Token中</span></dd></dl><dl><dt> 欢迎信息：</dt><dd><textarea name="welcomeinfo" style="width:400px; height:80px; padding-left: 3px; float: left;"><?php echo ($set["welcomeinfo"]); ?></textarea><span class="fontcolor" style="float: left; width: 260px;">在用户添加您的“微信公众帐号”的时候，系统默认为其发送的信息，可设置一些欢迎信息、品牌介绍、操作说明等。</span></dd></dl><dl><dt> 默认回复：</dt><dd><textarea name="defaultreply" style="width:400px; height:80px; padding-left: 3px; float: left;"><?php echo ($set["defaultreply"]); ?></textarea><span class="fontcolor" style="float: left; width: 260px;">在用户给“微信公众帐号”发送信息时，系统无法在设置的规则中找到相应的结果，默认为其回复的内容，可设置一些操作说明、关键字列表等。</span></dd></dl></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($set["id"]); ?>"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">    $(function(){
        $('#token').click(function(){
            $.get("<?php echo U('Wxapi/uniqid');?>",function(data){
                $('#wxtoken').attr('value',data);
            });
        });
       
    });
    function foreverdelthumb(cur){
       var nodename=$(cur).prev().attr('name');
       var id="<?php echo ($set['id']); ?>";
       
       var url="<?php echo U('Set/delfile');?>";
        //创建删除节点
        $.get(url,{id:id,file:nodename},function(){
            //插入新节点
            var html='<dd>\r\n<input type="file" class="thumb" name="'+nodename+'" />\r\n</dd>';
            $(cur).parent().after(html);

            //移除当前节点
            $(cur).parent().remove();
        });
    }
</script></body></html>