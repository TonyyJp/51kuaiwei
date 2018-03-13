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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>添加友情链接</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Link/insert');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 链接类型：</dt><dd><input type="radio" name="linktype" value="0" checked="true" />&nbsp;文字链接&nbsp;&nbsp;<input type="radio" name="linktype" value="1" />&nbsp;图片链接
                    </dd></dl><dl><dt> 网站名称：</dt><dd><input type="text" class="ipt6" name="name"><strong class="red">*</strong></dd></dl><dl><dt> 网站地址：</dt><dd><input type="text" class="ipt6" name="url" value="http://"></dd></dl><dl id="logo" style="display: none"><dt> 图片LOGO：</dt><dd><input name="logo"  class="thumb" type="file" /></dd></dl><dl><dt> 排序值：</dt><dd><input type="text" class="ipt2" name="listorder"></dd></dl><dl><dt> 所有分类：</dt><dd><input type="radio" name="type" value="0" checked="true" />&nbsp;首页链接&nbsp;&nbsp;<input type="radio" name="type" value="1" />&nbsp;内页链接
                    </dd></dl></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">    $(document).ready(function(){

        $("input[name='linktype']").click(function(){

            var linktype=$('input[name="linktype"]:checked').val();
            if(linktype==0){
                $('#logo').hide();

            }else if(linktype==1){
                $('#logo').show();
            }
        });
    });

</script></body></html>