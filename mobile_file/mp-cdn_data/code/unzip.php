<?php
$password = "1" ;	// �������룬����ʱ��Ҫ�����룬һ��Ҫ�޸ĵ�����Ȼ�����޷����С�

//////  �����������򣬲����޸�  ////////////////////////////////////////////////////////
session_start();

if ( $password == "isphp" )
{
	HtmlHead("��Ҫ�������Ա����:") ;
	echo "<h3 align=center>��û���޸Ĺ������룬Ϊ���ⲻ��ȫ�����޸ĳ�������!</h3>";
	echo "<center>�޸ķ������£�<br>"
		. '�ü��±��� ���ļ�(unzip.php), ���ڶ��е� <font color=red>$password = "isphp" </font> �е� isphp �ĳ�����Ҫ������, ���ϴ���������</center>';
	hg_exit();
}

if ( !IsSet($_SESSION['administrator']) )
{
	if ( !IsSet($_POST['user_pass']) )
	{
		HtmlHead("�������Ա���룺");
		echo '<h3 align="center">Ϊ��ȫ��������²�����Ҫ������֤��</h3>';
		hg_exit('<br><form action=' . $_SERVER['PHP_SELF']
			. ' method="post">���������Ա���룺<input name="user_pass"> <input type="submit" value��"ȷ��"> </form>');
	}
	else
	{
		if ( $password != $_POST['user_pass'] )
		{
			HtmlHead("����Ĺ���Ա����!");
			MessageBox("����Ĺ���Ա����, �޷����������� ������������룬�����ڱ��ļ��ĵڶ��в鵽����!", true);
			hg_exit("", true);
		}
		$_SESSION['administrator'] = "seted";
		header("Location: {$_SERVER['PHP_SELF']}");
	}
	hg_exit();
}

HtmlHead("ѡ���ѹ�ļ�!");
if ( !IsSet($_POST['submit']) )
{
	TestWriteable() ;
	$gzip_info = "" ;
	echo "check zlib support... " ;
	if ( !function_exists("gzopen") )
	{
		$gzip_info = "<font color=\"red\">ע��! ���Ŀռ�û��zlib֧�֣������
		<a href=\"http://www.isphp.net/\" target=\"_blank\"><font color=\"blue\">phpZip</font></a> 
		ѹ���ļ�ʱ����Ҫѡ��ѹ����Gzip��ʽ���������޷���ȷ��ѹ!</font>" ;
	}
	else
	{
		$gzip_info = "<font color=\"blue\">��ϲ! ���Ŀռ�֧��zlibѹ����ǿ�ҽ����� 
		<a href=\"http://www.isphp.net/\"><font color=\"red\" target=\"_blank\">phpZip</font></a> 
		ѹ���ļ�ʱ��ѡ�С�ѹ����Gzip��ʽ��������������ļ���С!</font>" ;
	}
	echo " ----------------- OK!<br>\n" . $gzip_info ;
	
	echo "<br><br><br><br>
<form action=\"{$_SERVER["PHP_SELF"]}\" method=\"post\" enctype=\"multipart/form-data\">
<table align=\"center\" width=\"450\">
<tr><td height=\"20\" colspan=\"2\">����ѡ��ѹ���ļ���λ�ã�Ȼ������ȷ������ť�� <p></td></tr>
<tr>
<td><input type=\"radio\" name=\"file_type\" value=\"upload\" checked onclick=\"this.form.upload_file.disabled=false; this.form.server_filename.disabled=true\">�ļ��ӱ����ϴ��� </td> 
<td>
<input name=\"upload_file\" type=\"file\" style=\"color:#0000ff\">
</td>
</tr>

<tr><td colspan=2 height=10></td></tr>

<tr>
<td><input type=\"radio\" name=\"file_type\" value=\"server\" onclick=\"this.form.upload_file.disabled=true; this.form.server_filename.disabled=false\">ָ�����������ļ���</td>
<td><input name=\"server_filename\" value=\"data.dat.gz\" style=\"color:#0000ff\" disabled >(������\".\"��ʾ��ǰĿ¼)</td>
</tr>

<tr><td colspan=\"2\" ><br><input type=\"checkbox\" name=\"chmod777\" value=\"chmod777\">����ѹ���������ļ����ļ������Ըĳ�777(����)</td></tr>
<tr><td colspan=\"2\" align=\"center\"><br><input type=\"submit\" name=\"submit\" value=\"ȷ��\"></td></tr>
</table>
</form>
" ;
	HtmlFoot() ;
	exit ;
}

if ( $_POST['file_type'] == 'upload' )
{
	$tmpfile = $_FILES['upload_file']['tmp_name'] ;
}
else
{
	$tmpfile = $_POST['server_filename'] ;
}

if ( !$tmpfile )
{
	exit("��Ч���ļ����ļ�������,����ԭ�����ļ���С̫���ϴ�ʧ�ܻ�û��ָ�����������ļ���") ;	
}

$bgzExist = FALSE ;
if ( function_exists("gzopen") )
{
	$bgzExist = TRUE ;
}

$alldata = "" ;
$pos = 0 ;

$gzp = $bgzExist ? @gzopen($tmpfile, "rb") : @fopen($tmpfile, "rb") ;
$szReaded = "has" ;
while ( $szReaded )
{
	$szReaded = $bgzExist ? @gzread($gzp, 2*1024*1024) : @fread($gzp, 2*1024*1024) ;
	$alldata .= $szReaded ;
}
$bgzExist ? @gzclose($gzp) : @fclose($gzp) ;

$nFileCount = substr($alldata, $pos, 16) ;
$pos += 16 ;

$size = substr($alldata, $pos, 16) ;
$pos += 16 ;

$info = substr($alldata, $pos, $size-1) ;		// strip the last '\n'
$pos += $size ;

$info_array = explode("\n", $info) ;

$c_file = 0 ;
$c_dir = 0 ;

foreach ($info_array as $str_row)
{
	list($filename, $attr) = explode("|", $str_row);
	if ( substr($attr,0,6) == "[/dir]" )
	{
		echo "End of dir $filename<br>";
		continue;
	}
	
	if ( substr($attr,0,5)=="[dir]" )
	{
		if ( @mkdir($filename, 0777) )
		{
			echo "Make dir $filename<br>";
			if ( $_POST['chmod777'] == "chmod777" ) 
			{
				@chmod($filename, 0777);
			}
		}
		$c_dir++ ;
	}
	else
	{
		$fp = @fopen($filename, "wb") or exit("�����½��ļ� $filename ,��Ϊû��дȨ�ޣ����޸�Ȩ��");
		@fwrite($fp, substr($alldata, $pos, $attr) );
		$pos += $attr ;
		fclose($fp);
		echo "Create file $filename<br>";
		if ( $_POST['chmod777'] == "chmod777" ) 
		{
			@chmod($filename, 0777);
		}
		$c_file++ ;
	}
}

if ( $_POST['file_type'] == 'upload' )
{
	if ( @unlink($tmpfile) ) echo "ɾ����ʱ�ļ� $tmpfile...<br>" ;
}

echo "<h1>�������! ������ļ� $c_file ���� �ļ��� $c_dir ����ллʹ��!</h1><p>" ;
HtmlFoot() ;


function TestWriteable()
{
	$safemode = '
�½�һ�ļ�������Ϊ unzip2.php (����������)�� ���������£�

<?php
copy("unzip.php", "unzip_safe.php") ;
header("location:unzip_safe.php") ;
?>

������ļ��ϴ�������������unzip.phpͬһ��Ŀ¼�£�
���� unzip2.php �������

������ǲ��еĻ����Ǿ��ǿռ�ʵ�ڲ�֧�֣�û�а취���ܶԲ�ס�����˷�����ʱ��.
	' ;
	echo "check PHP version... " . phpversion() . " -------- OK!<br>\n" ;
	echo "testing Permission... " ;

	$fp = @fopen("phpzip.test", "wb") ;
	if ( FALSE !== $fp )
	{
		fclose($fp) ;
		@unlink("phpzip.test") ;
	}
	else
	{
		exit("��ǰĿ¼û��д��Ȩ�ޣ��뽫��ǰĿ¼�����޸�Ϊ:777\n") ;
	}

	$dir = "phpziptest" ;
	$file = "$dir/test.txt.php" ;
	@mkdir($dir, 0777) ;
	$fp = @fopen($file, "wb") ;
	if ( FALSE === $fp )
	{
		@rmdir($dir) ;
		exit ("û��Ȩ���ڳ��򴴽����ļ����´����ļ� ���ܿ�����PHP��ȫģʽ���£�����������£�<p><center><textarea cols=110 rows=15>$safemode</textarea></center>") ;
	}
	@fclose($fp) ;
	@unlink($file) ;
	@rmdir($dir) ;
	echo " ----------------- OK!<br>\n" ;
}

function HtmlHead($title="", $css_file="")
{
	echo "<html>\n"
		. "\n"
		. "<head>\n"
		. "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=gb2312\">\n"
		. "<title>$title</title>\n"
		. "<style type=\"text/css\">\n"
		. "body,pre,td {font-size:12px; background-color:#fcfcfc; font-family:Tahoma,verdana,Arial}\n"
		. "input,textarea{font-size:12px; background-color:#f0f0f0; font-family:Tahoma,verdana,Arial}\n"
		. "</style>\n"
		. "</head>\n"
		. "\n"
		. "<body>\n" ;
}

function HtmlFoot()
{
	echo "<br><hr color=\"#003388\">\n"
		. "<center>\n"
		. "<p style=\"font-family:verdana; font-size:12px\">Contact us: \n"
		. "<a href=\"http://www.isphp.net/\" target=\"_blank\">http://www.isphp.net/</a></p>\n"
		. "</center>\n"
		. "</body>\n"
		. "\n"
		. "</html>" ;
}

function MessageBox($str)
{
	echo "<script>alert('$str');</script>\n";
}

function hg_exit($str="", $goback=false)
{
	if ( !empty($str) )
	{
		echo ("<center>$str</center>");
	}
	if ( $goback )
	{
		echo ('<big><center><a href="JavaScript:history.go(-1);">��˷���ǰһҳ</a></center></big>');
	}
	HtmlFoot();
	exit;
}

?>