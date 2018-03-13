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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>编辑数据</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Content/index');?>"  enctype="multipart/form-data"><div class="con_edit"><textarea name="content" id="myEditor"><?php echo ($list["content"]); ?></textarea><script type="text/javascript">                var editor = new UE.ui.Editor();
                editor.render("myEditor");
                //1.2.4以后可以使用一下代码实例化编辑器
                //UE.getEditor('myEditor')
            </script></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($list["id"]); ?>"><input type="submit" class="submit btn7" id="submit" value="保 存"></div></form></div></div></body></html>