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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>添加内容</h2></div><div class="form_list"><div style="background: #FFFCED;border: 1px solid #FFBE7A; padding: 10px; width: 700px;margin-left: 10px;margin-top: 10px;">    注意事项：<strong>1. </strong>带红星(<span style="color:red">*</span>)的必填&nbsp;&nbsp;&nbsp;&nbsp;<strong>2. </strong>SEO优化项不会填，则可以不填
</div><form method='post' id="form1" name="form1" action="<?php echo U('Article/insert');?>"  enctype="multipart/form-data"><div class="listtop"><dl><dt> 栏目：</dt><dd><label class="label"><?php echo (getcategoryname($catid)); ?></label><input type="hidden" name="catid" value="<?php echo ($catid); ?>"></dd></dl><dl><dt> 标题：</dt><dd><input type="text" class="ipt8" name="title"><strong class="red">*</strong></dd></dl><dl><dt>title：</dt><dd><input type="text" class="ipt8" name="sitetitle"><span class="fontcolor">网页title标签的设置(SEO优化)，<br>不填则默认使用标题</span></dd></dl><dl><dt>keywords：</dt><dd><input type="text" class="ipt5" name="keywords"><span class="fontcolor">网页meta标签keywords网页关键词的设置(SEO优化)</span></dd></dl><dl><dt>description：</dt><dd><textarea name="description" class="fLeft"></textarea><span class="fontcolor" style="float: left; width: 200px;">网页meta标签description网页描述的设置(SEO优化)</span></dd></dl><dl><dt> 缩略图：</dt><dd><input name="thumb" class="thumb" type="file" /></dd></dl><dl><dt> 内容：</dt></dl></div><div class="listbottom"><textarea name="content" id="myEditor"></textarea><script type="text/javascript">                        var editor = new UE.ui.Editor();
                        editor.render("myEditor");
                        //1.2.4以后可以使用一下代码实例化编辑器
                        //UE.getEditor('myEditor')
                    </script></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div></body></html>