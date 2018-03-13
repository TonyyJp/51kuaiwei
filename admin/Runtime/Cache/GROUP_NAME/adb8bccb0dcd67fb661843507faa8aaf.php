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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><div class="main"><div class="box_tit"><h2>修改内容</h2></div><div class="form_list"><div style="background: #FFFCED;border: 1px solid #FFBE7A; padding: 10px; width: 700px;margin-left: 10px;margin-top: 10px;">    注意事项：<strong>1. </strong>带红星(<span style="color:red">*</span>)的必填&nbsp;&nbsp;&nbsp;&nbsp;<strong>2. </strong>SEO优化项不会填，则可以不填
</div><form method='post' id="form1" name="form1" action="<?php echo U('Article/update');?>"  enctype="multipart/form-data"><div class="listtop"><dl><dt> 栏目：</dt><dd><select name="catid" id="catid"><?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$catvo): $mod = ($i % 2 );++$i; if($categorylist[$key]['level'] >= $categorylist[$key+1]['level']): ?><option value="<?php echo ($catvo['id']); ?>" <?php if(($vo["catid"]) == $catvo['id']): ?>selected="selected"<?php endif; ?>><?php else: ?><option value="<?php echo ($catvo['id']); ?>" disabled="disabled"><?php endif; $__FOR_START_1024173957__=1;$__FOR_END_1024173957__=$catvo['level'];for($i=$__FOR_START_1024173957__;$i < $__FOR_END_1024173957__;$i+=1){ ?>&nbsp;&nbsp;<?php } if($catvo['level'] > 1): ?>├&nbsp;<?php endif; echo ($catvo['catname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></dd></dl><dl><dt> 标题：</dt><dd><input type="text" class="ipt8" name="title" value="<?php echo ($vo["title"]); ?>"><strong class="red">*</strong></dd></dl><dl><dt>title：</dt><dd><input type="text" class="ipt8" name="sitetitle" value="<?php echo ($vo["sitetitle"]); ?>"><span class="fontcolor">网页title标签的设置(SEO优化)，<br>不填则默认使用标题</span></dd></dl><dl><dt>keywords：</dt><dd><input type="text" class="ipt5" name="keywords" value="<?php echo ($vo["keywords"]); ?>"><span class="fontcolor">网页meta标签keywords网页关键词的设置(SEO优化)</span></dd></dl><dl><dt>description：</dt><dd><textarea name="description" class="fLeft"><?php echo ($vo["description"]); ?></textarea><span class="fontcolor" style="float: left; width: 200px;">网页meta标签description网页描述的设置(SEO优化)</span></dd></dl><dl><dt> 缩略图：</dt><dd><?php if(!empty($vo["thumb"])): ?><img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" name="thumb" width="60" height="60" /><a href="javascript:return false;" onclick="foreverdelthumb(this);" title="你确定要删除缩略图吗？">删除缩略图</a><?php else: ?><input type="file" class="thumb" name="thumb" /><?php endif; ?></dd></dl><dl><dt> 内容：</dt></dl></div><div class="listbottom"><textarea name="content" id="myEditor"><?php echo ($vo["content"]); ?></textarea><script type="text/javascript">                    var editor = new UE.ui.Editor();
                    editor.render("myEditor");
                    //1.2.4以后可以使用一下代码实例化编辑器
                    //UE.getEditor('myEditor')
                </script></div><div class="form_b"><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">   function foreverdelthumb(cur){
        var nodename=$(cur).prev().attr('name');
        var url="<?php echo U('Article/delfile',array('id'=>$vo['id'],'file'=>'"+nodename+"'));?>";
        //删除文件
        $.get(url,function(){
            //创建新节点
            var html='<dd>\r\n<input type="file" class="thumb" name="'+nodename+'" />\r\n</dd>';
            $(cur).parent().after(html);

            //移除当前节点
            $(cur).parent().remove();
        });
    }
</script></body></html>