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
        //--></script><script type="text/javascript" src="../Public/js/iColorPicker.js"></script><script type="text/javascript" src="../Public/ueditor/editor_config.js"></script><script type="text/javascript" src="../Public/ueditor/editor_all.js"></script></head><body><link rel="stylesheet" type="text/css" href="../Public/js/calendar/jscal2.css"/><link rel="stylesheet" type="text/css" href="../Public/js/calendar/border-radius.css"/><link rel="stylesheet" type="text/css" href="../Public/js/calendar/win2k.css"/><script type="text/javascript" src="../Public/js/calendar/calendar.js"></script><script type="text/javascript" src="../Public/js/calendar/lang/en.js"></script><div class="main"><div class="box_tit"><h2>添加广告</h2></div><div class="form_list"><form method='post' id="form1" name="form1" action="<?php echo U('Advert/insert');?>"  enctype="multipart/form-data"><div class="form_list_top"><dl><dt> 广告名称：</dt><dd><input type="text" class="ipt6" name="adname"><strong class="red">*</strong></dd></dl><dl><dt> 广告标签：</dt><dd><input type="text" class="ipt4" name="adtag"><span style="color:red;font-size: 12px;margin-left: 10px;">*这里设置的标签名对应前台模板中的标签名,如做修改，需要在前台模板同步修改</span></dd></dl><dl><dt> 时间限制：</dt><dd><input type="radio" name="timelimit" value="0" checked="checked" />&nbsp;永不过期&nbsp;&nbsp;<input type="radio" name="timelimit" value="1" />&nbsp;在设定时间内有效
            </dd></dl><dl><dt> 起始日期：</dt><dd><input type="text" class="ipt4" name="starttime" id="starttime" style="background: #EBEBE4;"><script type="text/javascript">                    Calendar.setup({
                        weekNumbers: true,
                        inputField : "starttime",
                        trigger    : "starttime",
                        dateFormat: "%Y-%m-%d %H:%M:%S",
                        showTime: true,
                        minuteStep: 1,
                        onSelect   : function() {this.hide();}
                    });
                </script></dd></dl><dl><dt> 截止日期：</dt><dd><input type="text" class="ipt4" name="endtime" id="endtime" style="background: #EBEBE4;"><script type="text/javascript">                    Calendar.setup({
                        weekNumbers: true,
                        inputField : "endtime",
                        trigger    : "endtime",
                        dateFormat: "%Y-%m-%d %H:%M:%S",
                        showTime: true,
                        minuteStep: 1,
                        onSelect   : function() {this.hide();}
                    });

                </script></dd></dl><dl><dt> 状态：</dt><dd><select name="status"><option value="1">显示</option><option value="0">不显示</option></select></dd></dl><dl><dt>广告内容：</dt><dd><textarea name="adcontent" style="width:500px; height:80px;"></textarea></dd></dl><dl><dt>过期广告显示内容：</dt><dd><textarea name="adpastcontent" style="width:500px; height:80px;"></textarea></dd></dl></div><div class="form_b"><input type="submit" class="submit btn7" id="submit" value="提 交"></div></form></div></div><script type="text/javascript">    $(function(){
        $('input[name=timelimit]').click(function(){
            if($(this).val()==="1"){
                $('#starttime').css('background','');
                $('#endtime').css('background','');
            }else{
                $('#starttime').css('background','#EBEBE4');
                $('#endtime').css('background','#EBEBE4');
            }
        });
    });
</script></body></html>